<?php

namespace App\Http\Controllers;

use App\Http\Resources\User as UserResource;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateUserRegistration;
use App\Http\Requests\ValidateUserLogin;
use App\Models\User as UsersModel;
use App\User;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\JWT;

class AuthController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function getAuthenticatedUser()
    {
        try {

            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());
        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());
        }

        return response()->json(compact('user'));
    }

    public function register(ValidateUserRegistration $request)
    {
        $user = UsersModel::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);
        return new UserResource($user);
    }

    public function login(ValidateUserLogin $request)
    {
        $input  = $request->only("username", "password"); //Specify Request
        try {
            if (!$token = JWTAuth::attempt($input)) {
                return response()->json(["status" => false, 'message' => 'Wrong username or password'], 200);
            }
        } catch (JWTException $e) {
            return response()->json(["status" => false, 'message' => 'could_not_create_token'], 500);
        }

        $user = UsersModel::where('username', $input['username'])->first();
        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => "Username does not exist."
            ], 200);
        }


        // |--------------------------------------------------------------------------
        // | Verify the password and generate the token.
        // |--------------------------------------------------------------------------


        if (Hash::check($input['password'], $user->password)) {
            $dataToken = response()->json(compact('token'));
            $token = $dataToken->original["token"];
            return response()->json([
                'status' => true,
                'message' => "Login success.",
                'data'  => [
                    "username" => $user->username,
                    "role" => $user->role,
                    "id_user" => $user->id_user,
                    "name" => $user->name,
                ],
                'token' => $token
            ], 200);
        }

        /*
        |--------------------------------------------------------------------------
        | Bad Request response.
        |--------------------------------------------------------------------------
        */

        return response()->json([
            'status' => false,
            'message' => "Email or password is wrong."
        ], 200);
    }

    public function user()
    {
        return new UserResource(auth()->user());
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationIncomingMails;
use App\Http\Requests\ValidationIncomingMailsUpdate;
use App\Models\IncomingMail;
use Illuminate\Http\Request;

class IncomingMailController extends Controller
{

    public function index()
    {
        $incomingMail = IncomingMail::get();

        if ($incomingMail->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => "Incoming mail data not found"
            ], 200);
        }

        return response()->json([
            'success' => true,
            'message' => "Data found.",
            'data' => $incomingMail
        ], 200);
    }

    public function store(ValidationIncomingMails $request)
    {
        /*
        |--------------------------------------------------------------------------
        | Get pdf uploaded file from user.
        |--------------------------------------------------------------------------
        */

        $file_name = "";
        if ($request->hasFile('file')) {
            $file_ext = $request->file('file')->extension(); // Get an extension of file.

            $destination_path = './files/'; // Define path.
            $file = 'incoming_mail-' . time() . '.' . $file_ext; // Make random new name of file.


            /*
            |--------------------------------------------------------------------------
            | Move the file to folder on server.
            |--------------------------------------------------------------------------
            */

            if (!$request->file('file')->move($destination_path, $file)) {
                return response()->json([
                    'success' => false,
                    'message' => "Cannot upload file."
                ], 200);
            }

            $file_name = $file; // set file name
        }

        /*
            |--------------------------------------------------------------------------
            | Save file to database.
            |--------------------------------------------------------------------------
        */
        $mail = IncomingMail::create([
            'title' => $request->title,
            'subject' => $request->subject,
            'from' => $request->from,
            'to' => $request->to,
            'phone' => $request->phone,
            'content' => $request->content,
            'file' => $file_name,
        ]);

        $status = true;
        $message = "Data successfully created.";
        if (!$mail) {
            $status = false;
            $message = "Data failed created.";
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $mail
        ], 200);
    }


    public function show($id)
    {
        $incomingMail = IncomingMail::where("id", $id)->first();

        if (!$incomingMail) {
            return response()->json([
                'success' => false,
                'message' => "Data not found."
            ], 200);
        }

        return response()->json([
            'success' => true,
            'message' => "Data found.",
            'data' => $incomingMail
        ], 200);
    }

    public function update(ValidationIncomingMailsUpdate $request, $id)
    {
        $destination_path = './files/'; // Define path.
        $incomingMail = IncomingMail::where("id", $id)->first();

        /*
        |--------------------------------------------------------------------------
        | Check if the mail was there.
        |--------------------------------------------------------------------------
        */

        if (!$incomingMail) {
            return response()->json([
                'success' => false,
                'message' => "Wrong id, please check your id."
            ], 200);
        }

        /*
        |--------------------------------------------------------------------------
        | Check if users upload file or not. Then get pdf uploaded file.
        |--------------------------------------------------------------------------
        */

        $file_name = $request->old_file; // if user not upload this will fill by old file name

        if ($request->hasFile('file')) {
            $file_ext = $request->file('file')->extension(); // Get an extension of file.

            $file = 'incoming_mail-' . time() . '.' . $file_ext; // Make random new name of file.


            /*
            |--------------------------------------------------------------------------
            | Move the file to folder on server.
            |--------------------------------------------------------------------------
            */

            if (!$request->file('file')->move($destination_path, $file)) {
                return response()->json([
                    'success' => false,
                    'message' => "Cannot upload file."
                ], 200);
            }


            /*
            |--------------------------------------------------------------------------
            | Delete the older file, cause it's not necessary anymore.
            |--------------------------------------------------------------------------
            */

            if (file_exists($destination_path . $file_name)) {
                unlink($destination_path . $file_name); // remove file
            }

            $file_name = $file; // set new file name
        }

        /*
        |--------------------------------------------------------------------------
        | Save new data to database.
        |--------------------------------------------------------------------------
        */

        $mail = IncomingMail::where("id", $id)->update([
            'title' => $request->title,
            'subject' => $request->subject,
            'from' => $request->from,
            'to' => $request->to,
            'phone' => $request->phone,
            'content' => $request->content,
            "file" => $file_name
        ]);

        $status = true;
        $message = "Data successfully edited.";
        if (!$mail) {
            $status = false;
            $message = "Data failed edited.";
        }

        $mail = IncomingMail::where("id", $id)->first();

        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $mail
        ], 200);
    }

    public function destroy($id)
    {
        $destination_path = './files/'; // Define path.
        $incomingMail = IncomingMail::where("id", $id)->first();

        /*
            |--------------------------------------------------------------------------
            | Check if the mail was there.
            |--------------------------------------------------------------------------
        */
        
        if (!$incomingMail) {
            return response()->json([
                'success' => false,
                'message' => "Wrong id, please check your id."
            ], 200);
        }

        /*
            |--------------------------------------------------------------------------
            | Delete file, cause it's not necessary anymore.
            |--------------------------------------------------------------------------
        */

        if (file_exists($destination_path . $incomingMail->file)) {
            unlink($destination_path . $incomingMail->file); // remove file
        }

        $delete = IncomingMail::where('id', $id)->delete();

        $status = true;
        $message = "Data successfully deleted.";
        if (!$delete) {
            $status = false;
            $message = "Data failed deleted.";
        }

        return response()->json([
            'status' => $status,
            'message' => $message
        ], 200);
    }
}

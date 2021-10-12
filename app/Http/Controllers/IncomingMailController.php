<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationIncomingMails;
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
        $mail = IncomingMail::create([
            'title' => $request->title,
            'subject' => $request->subject,
            'from' => $request->from,
            'to' => $request->to,
            'phone' => $request->phone,
            'content' => $request->content,
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

    public function update(ValidationIncomingMails $request, $id)
    {
        $incomingMail = IncomingMail::where("id", $id)->first();

        if (!$incomingMail) {
            return response()->json([
                'success' => false,
                'message' => "Wrong id, please check your id."
            ], 200);
        }

        $mail = IncomingMail::where("id", $id)->update([
            'title' => $request->title,
            'subject' => $request->subject,
            'from' => $request->from,
            'to' => $request->to,
            'phone' => $request->phone,
            'content' => $request->content,
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
        $incomingMail = IncomingMail::where("id", $id)->first();

        if (!$incomingMail) {
            return response()->json([
                'success' => false,
                'message' => "Wrong id, please check your id."
            ], 200);
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

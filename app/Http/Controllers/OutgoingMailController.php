<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationIncomingMails;
use App\Models\OutgoingMail;
use Illuminate\Http\Request;

class OutgoingMailController extends Controller
{

    public function index()
    {
        $outgoingMails = OutgoingMail::get();

        if ($outgoingMails->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => "Data not found."
            ], 200);
        }

        return response()->json([
            'success' => true,
            'message' => "Data found.",
            'data' => $outgoingMails
        ], 200);
    }


    public function store(ValidationIncomingMails $request)
    {
        $mail = OutgoingMail::create([
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
        $outgoingMail = OutgoingMail::where("id", $id)->first();

        if (!$outgoingMail) {
            return response()->json([
                'success' => false,
                'message' => "Data not found."
            ], 200);
        }

        return response()->json([
            'success' => true,
            'message' => "Data found.",
            'data' => $outgoingMail
        ], 200);
    }


    public function update(ValidationIncomingMails $request, $id)
    {
        $outgoingMail = OutgoingMail::where("id", $id)->first();

        if (!$outgoingMail) {
            return response()->json([
                'success' => false,
                'message' => "Wrong id, please check your id."
            ], 200);
        }

        $mail = OutgoingMail::where("id", $id)->update([
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

        $mail = OutgoingMail::where("id", $id)->first();

        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $mail
        ], 200);
    }

    public function destroy($id)
    {
        $outgoingMail = OutgoingMail::where("id", $id)->first();

        if (!$outgoingMail) {
            return response()->json([
                'success' => false,
                'message' => "Wrong id, please check your id."
            ], 200);
        }

        $delete = OutgoingMail::where('id', $id)->delete();

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

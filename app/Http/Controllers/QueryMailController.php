<?php

namespace App\Http\Controllers;

use App\Events\ContactFormEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QueryMailController extends Controller
{
    public function send(Request $request)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'unique_data' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $notificationData = [
            'name' => $request->name,
            'email' => $request->unique_data,
            'message' => $request->message,
        ];

        // Notify via email
        ContactFormEvent::dispatch($notificationData);

        return response()->json(['message' => 'Email sent successfully']);
    }
}

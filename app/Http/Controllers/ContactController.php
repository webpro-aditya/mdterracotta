<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    /**
     * Handle the AJAX form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function handleSubmission(Request $request)
    {
        // 1. Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // 2. Send the email using the Mailable class
            // Mail::to('youremail@example.com')->send(new ContactMail($validatedData));
            // You can also use a dynamic recipient like this:
            Mail::to(config('mail.from.address'))->send(new ContactMail($validatedData));

            // 3. Return a success JSON response
            return response()->json([
                'success' => true,
                'message' => 'Your message has been sent successfully!'
            ]);

        } catch (\Exception $e) {
            // 4. Return an error JSON response if something goes wrong
            return response()->json([
                'success' => false,
                'message' => 'There was an error sending your message. Please try again later.'
            ], 500);
        }
    }
}

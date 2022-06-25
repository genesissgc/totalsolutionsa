<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::send(
            'email.contact_us',
            [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'comment' => $request->get('message')
            ],
            function ($message) {
                $message->from('genesis_lista@sayeghwater.com');
                $message->to('genesis_lista@sayeghwater.com', 'Total Solution')
                    ->subject('Total Solution Contact Form');
            }
        );

        return back()->with('success_email', 'Thanks for contacting Total Solution, we will get back to you soon!');
    }
}

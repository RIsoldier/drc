<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

class AboutController extends Controller
{
    public function create()
    {
        return view('about');
    }

    public function store(ContactFormRequest $request)
	{		
		\Mail::send('emails.contact',
	        array(
	            'name' => $request->get('name'),
	            'email' => $request->get('email'),
	            'number' => $request->get('number'),
	            'appointment' => $request->get('appointment'),
	            'user_message' => $request->get('message')
	        ), function($message)
	    {
	        $message->from('adam.c.mashburn@gmail.com');
	        $message->to('adam.c.mashburn@gmail.com', 'Admin')->subject('Dr C Contact Feedback');
	    });

		return \Redirect::route('about')->with('message', 'Thanks for contacting us!');
	 }
}

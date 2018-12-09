<?php

namespace mido\mypackage\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use mido\mypackage\models\Contact;
use Illuminate\Support\Facades\Mail;
use mido\mypackage\Mail\ContactMailable;

class ContactController extends Controller
{
    public function index()
    {
        return view('mypackage::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
        Contact::create($request->all());
    }
}

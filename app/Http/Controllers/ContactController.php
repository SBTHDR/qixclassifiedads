<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function listingInquiry(Request $request, $id)
    {
        $request->validate([
           'name' => ['required', 'max:255'],
           'email' => ['required', 'email'],
           'message' => ['required', 'max:255'],
        ]);

        $contact = new Contact();
        $contact->listing_id = $request->id;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        Mail::send(new ContactMail($contact));

        return redirect(route('all-listings.show', $id))->with('message', 'Message Send Successfully!');
    }
}

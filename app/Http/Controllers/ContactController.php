<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Flasher\Prime\FlasherInterface;

class ContactController extends Controller
{
    public function listingInquiry(Request $request, $id, FlasherInterface $flasher)
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

        $flasher->addInfo('Mail send Successfully!');
        return redirect(route('all-listings.show', $id));
    }
}

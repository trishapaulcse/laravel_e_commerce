<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(15);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contacts.show', compact('contact'));
    }

    public function reply(Request $request, $id)
    {
        $request->validate(['reply_message' => 'required']);

        $contact = Contact::findOrFail($id);
        
        // Send email reply
        Mail::raw($request->reply_message, function($message) use ($contact) {
            $message->to($contact->email)
                    ->subject('Re: ' . $contact->subject);
        });

        $contact->update([
            'status' => 'replied',
            'replied_at' => now()
        ]);

        return redirect()->route('admin.contacts.index')->with('success', 'Reply sent successfully');
    }
}

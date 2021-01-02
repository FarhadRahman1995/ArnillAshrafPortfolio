<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{

    public function index()
    {
        $contacts= Contact::orderBy('created_at', 'desc')->get();
        return view('contact.list', compact('contacts'));
    }

    public function store()
    {
        $contact_form_data = request()->all();
        Mail::to('farhadrahman1995@gmail.com')->send(new ContactFormMail($contact_form_data));

        return redirect()->route('home','/#contact')->with('success','Your message has been submitted successfully');
    }

    // Create Contact Form
    public function createForm(Request $request) {
        return view('contact.mail');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
        ]);

        //  Store data in database
        $contacts= new Contact;
        $contacts->name = $request->name;
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->subject = $request->subject;
        $contacts->message = $request->message;

        $contacts->save();
        /*Contact::create($request->all());*/

        //  Send mail to admin
        Mail::send('contact.mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('farhadrahman1995@gmail.com')->subject($request->get('subject'));
        });

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete($id);

        return redirect()->route('admin.contact')->with('success','contact Deleted Successfully')->orderBy('created_at', 'desc');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormSectionController extends Controller
{
    public function viewContactFormSection() {
        $pageTitle = "Contact Form Section | View";
        $contactForm = ContactForm::all();
        return view("admin.contact_form.view", compact('contactForm','pageTitle'));
    }

    public function storeContactFormSection(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:100'],
            'phone' => ['required', 'string', 'max:100'],
            'message' => ['required', 'string', 'max:200'],
        ]);
    
        ContactForm::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ]);
    
        return redirect()->route('welcome');
    }

    public function deleteContactFormSection($id) {
        $contactFormData = ContactForm::findOrFail($id);

        $contactFormData->delete();

        return redirect()->route('admin.view.contact.form');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class ContactSectionController extends Controller
{
    public function viewContactSection() {
        $pageTitle = "Contact Section | View";
        $contact = Contact::all();
        return view("admin.contact.view", compact('contact','pageTitle'));
    }

    public function addContactSection() {
        $pageTitle = "Contact Section | Add";
        
        return view("admin.contact.add", compact('pageTitle'));
    }

    public function storeContactSection(Request $request) {
        $request->validate([
            'phone' => ['required', 'string', 'max:100'],
            'mobile' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:100'],
            'facebook_url' => ['required', 'string', 'max:200'],
            'twitter_url' => ['required', 'string', 'max:200'],
            'instagram_url' => ['required', 'string', 'max:200'],
            'dribbble_url' => ['required', 'string', 'max:200'],
        ]);
    
        Contact::create([
            'phone' => $request->input('phone'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
            'facebook_url' => $request->input('facebook_url'),
            'twitter_url' => $request->input('twitter_url'),
            'instagram_url' => $request->input('instagram_url'),
            'dribbble_url' => $request->input('dribbble_url'),
        ]);
    
        return redirect()->route('admin.view.contact');
    }

    public function editContactSection($id) {
        $pageTitle = "Contact Section | Edit";
        $contactData = Contact::findOrFail($id);

        return view('admin.contact.edit', compact('contactData','pageTitle'));

    }

    public function updateContactSection(Request $request, $id) {

        $contactData = Contact::findOrFail($id);
        
        $validated = $request->validate([
            'phone' => ['required', 'string', 'max:100'],
            'mobile' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'max:100'],
            'facebook_url' => ['required', 'string', 'max:200'],
            'twitter_url' => ['required', 'string', 'max:200'],
            'instagram_url' => ['required', 'string', 'max:200'],
            'dribbble_url' => ['required', 'string', 'max:200'],
        ]);

        $contactData->update([
            'phone' => $request->input('phone'),
            'mobile' => $request->input('mobile'),
            'email' => $request->input('email'),
            'facebook_url' => $request->input('facebook_url'),
            'twitter_url' => $request->input('twitter_url'),
            'instagram_url' => $request->input('instagram_url'),
            'dribbble_url' => $request->input('dribbble_url'),
        ]);

        return redirect()->route('admin.view.contact');
    }

    public function deleteContactSection($id) {
        $contactData = Contact::findOrFail($id);

        $contactData->delete();

        return redirect()->route('admin.view.contact');
    }
}

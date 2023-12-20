<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\Validator;

class HomeSectionController extends Controller
{
    public function viewHomeSection() {
        $pageTitle = "Home Section | View";
        $home = Home::all();
        return view("admin.home.view", compact('home','pageTitle'));
    }

    public function addHomeSection() {
        $pageTitle = "Home Section | Add";
        
        return view("admin.home.add", compact('pageTitle'));
    }

    public function storeHomeSection(Request $request) {
        
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'profession' => ['required', 'string', 'max:100'],
        ]);
    
        Home::create([
            'name' => $request->input('name'),
            'profession' => $request->input('profession'),
        ]);
    
        return redirect()->route('admin.view.home');
    }

    public function editHomeSection($id) {
        $pageTitle = "Home Section | Edit";
        $homeData = Home::findOrFail($id);

        return view('admin.home.edit', compact('homeData','pageTitle'));

    }

    public function updateHomeSection(Request $request, $id) {

        $homeData = Home::findOrFail($id);
        
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'profession' => ['required', 'string', 'max:100'],
        ]);

        $homeData->update([
            'name' => $validated['name'],
            'profession' => $validated['profession'],
        ]);

        return redirect()->route('admin.view.home');
    }

    public function deleteHomeSection($id) {
        $homeData = Home::findOrFail($id);

        $homeData->delete();

        return redirect()->route('admin.view.home');
    }
        
}

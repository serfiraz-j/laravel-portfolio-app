<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\File;

class AboutSectionController extends Controller
{
    
    public function viewAboutSection() {
        $pageTitle = "About Section | View";
        $about = About::all();
        return view("admin.about.view", compact('about','pageTitle'));
    }

    public function addAboutSection() {
        $pageTitle = "About Section | Add";
        
        return view("admin.about.add", compact('pageTitle'));
    }

    public function storeAboutSection(Request $request) {
        
        $request->validate([
            'about_details' => ['required', 'string', 'max:200'],
            'about_image' => ['image', 'max:2048'],
        ]);

        $path = '';

        if ($request->hasFile('about_image')) {
            $image = $request->about_image;
            $imageName = time() .'.'. $image->getClientOriginalName();
            $image->move(public_path('uploads/about_images'), $imageName);

            $path = '/uploads/about_images/'.$imageName;
        }
    
        About::create([
            'about_details' => $request->input('about_details'),
            'about_image' => $path,
        ]);
    
        return redirect()->route('admin.view.about');
    }

    public function editAboutSection($id) {
        $pageTitle = "About Section | Edit";
        $aboutData = About::findOrFail($id);

        return view('admin.about.edit', compact('aboutData','pageTitle'));

    }

    public function updateAboutSection(Request $request, $id) {

        $aboutData = About::findOrFail($id);
        
        $request->validate([
            'about_details' => ['required', 'string', 'max:200'],
            'about_image' => ['image', 'max:2048'],
        ]);

        $path = '';

        if ($request->hasFile('about_image')) {

            if (File::exists(public_path($aboutData->about_image))) {
                File::delete(public_path($aboutData->about_image));
            }

            $image = $request->about_image;
            $imageName = time() .'.'. $image->getClientOriginalName();
            $image->move(public_path('uploads/about_images'), $imageName);

            $path = '/uploads/about_images/'.$imageName;
        }
    
        $aboutData->update([
            'about_details' => $request->input('about_details'),
            'about_image' => $path,
        ]);

        return redirect()->route('admin.view.about');
    }

    public function deleteAboutSection($id) {

        $aboutData = About::findOrFail($id);
        
        if (File::exists(public_path($aboutData->about_image))) {
            File::delete(public_path($aboutData->about_image));
        }

        $aboutData->delete();

        return redirect()->route('admin.view.about');
    }


}

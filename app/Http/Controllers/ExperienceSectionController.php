<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceSectionController extends Controller
{
    public function viewExperienceSection() {
        $pageTitle = "Experience Section | View";
        $experience = Experience::all();
        return view("admin.experience.view", compact('experience','pageTitle'));
    }

    public function addExperienceSection() {
        $pageTitle = "Experience Section | Add";
        
        return view("admin.experience.add", compact('pageTitle'));
    }

    public function storeExperienceSection(Request $request) {
        
        $request->validate([
            'timeline' => ['required', 'string', 'max:100'],
            'title' => ['required', 'string', 'max:100'],
            'sub_title' => ['required', 'string', 'max:100'],
            'second_title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:500'],
        ]);
    
        Experience::create([
            'timeline' => $request->input('timeline'),
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
            'second_title' => $request->input('second_title'),
            'description' => $request->input('description'),
        ]);
    
        return redirect()->route('admin.view.experience');
    }

    public function editExperienceSection($id) {
        $pageTitle = "Experience Section | Edit";
        $experienceData = Experience::findOrFail($id);

        return view('admin.experience.edit', compact('experienceData','pageTitle'));

    }

    public function updateExperienceSection(Request $request, $id) {

        $experienceData = Experience::findOrFail($id);
        
        $request->validate([
            'timeline' => ['required', 'string', 'max:100'],
            'title' => ['required', 'string', 'max:100'],
            'sub_title' => ['required', 'string', 'max:100'],
            'second_title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:500'],
        ]);

        $experienceData->update([
            'timeline' => $request->input('timeline'),
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),
            'second_title' => $request->input('second_title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('admin.view.experience');
    }

    public function deleteExperienceSection($id) {
        $experienceData = Experience::findOrFail($id);

        $experienceData->delete();

        return redirect()->route('admin.view.experience');
    }
}

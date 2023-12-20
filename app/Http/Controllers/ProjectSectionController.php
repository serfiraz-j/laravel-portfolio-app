<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectSectionController extends Controller
{
    public function viewProjectSection() {
        $pageTitle = "Project Section | View";
        $project = Project::all();
        return view("admin.project.view", compact('project','pageTitle'));
    }

    public function addProjectSection() {
        $pageTitle = "Project Section | Add";
        
        return view("admin.project.add", compact('pageTitle'));
    }

    
    public function storeProjectSection(Request $request) {
        
        $request->validate([
            'class' => ['required', 'string', 'max:100'],
            'image' => ['image', 'max:2048'],
            'title' => ['required', 'string', 'max:100'],
            'sub_title' => ['required', 'string', 'max:100'],           
        ]);

        $path = '';

        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageName = time() .'.'. $image->getClientOriginalName();
            $image->move(public_path('uploads/project_images'), $imageName);

            $path = '/uploads/project_images/'.$imageName;
        }
    
        Project::create([
            'class' => $request->input('class'),
            'image' => $path,
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),

        ]);
    
        return redirect()->route('admin.view.project');
    }

    public function editProjectSection($id) {
        $pageTitle = "Home Section | Edit";
        $projectData = Project::findOrFail($id);

        return view('admin.project.edit', compact('projectData','pageTitle'));

    }

    public function updateProjectSection(Request $request, $id) {

        $projectData = Project::findOrFail($id);
        
        $request->validate([
            'class' => ['required', 'string', 'max:100'],
            'image' => ['image', 'max:2048'],
            'title' => ['required', 'string', 'max:100'],
            'sub_title' => ['required', 'string', 'max:100'], 
        ]);

        $path = '';

        if ($request->hasFile('image')) {

            if (File::exists(public_path($projectData->image))) {
                File::delete(public_path($projectData->image));
            }

            $image = $request->image;
            $imageName = time() .'.'. $image->getClientOriginalName();
            $image->move(public_path('uploads/project_images'), $imageName);

            $path = '/uploads/project_images/'.$imageName;
        }
    
        $projectData->update([
            'class' => $request->input('class'),
            'image' => $path,
            'title' => $request->input('title'),
            'sub_title' => $request->input('sub_title'),

        ]);

        return redirect()->route('admin.view.project');
    }
    public function deleteProjectSection($id) {

        $projectData = Project::findOrFail($id);
        
        if (File::exists(public_path($projectData->image))) {
            File::delete(public_path($projectData->image));
        }

        $projectData->delete();

        return redirect()->route('admin.view.project');
    }
}

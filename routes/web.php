<?php

use App\Models\Experience;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeSectionController;
use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\ExperienceSectionController;
use App\Http\Controllers\ProjectSectionController;
use App\Http\Controllers\ContactSectionController;
use App\Http\Controllers\ContactFormSectionController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//Home
Route::get('/admin', [AdminController::class,'adminDashboard'])->name('admin.dashboard');
Route::get('/admin/view/home', [HomeSectionController::class,'viewHomeSection'])->name('admin.view.home');
Route::get('/admin/add/home', [HomeSectionController::class,'addHomeSection'])->name('admin.add.home');
Route::post('/admin/store/home', [HomeSectionController::class,'storeHomeSection'])->name('admin.store.home');
Route::get('/admin/edit/home/{id}', [HomeSectionController::class,'editHomeSection'])->name('admin.edit.home');
Route::put('/admin/update/home/{id}', [HomeSectionController::class,'updateHomeSection'])->name('admin.update.home');
Route::delete('/admin/delete/home/{id}', [HomeSectionController::class,'deleteHomeSection'])->name('admin.delete.home');

//About
Route::get('/admin/view/about', [AboutSectionController::class,'viewAboutSection'])->name('admin.view.about');
Route::get('/admin/add/about', [AboutSectionController::class,'addAboutSection'])->name('admin.add.about');
Route::post('/admin/store/about', [AboutSectionController::class,'storeAboutSection'])->name('admin.store.about');
Route::get('/admin/edit/about/{id}', [AboutSectionController::class,'editAboutSection'])->name('admin.edit.about');
Route::put('/admin/update/about/{id}', [AboutSectionController::class,'updateAboutSection'])->name('admin.update.about');
Route::delete('/admin/delete/about/{id}', [AboutSectionController::class,'deleteAboutSection'])->name('admin.delete.about');

//Experience
Route::get('/admin/view/experience', [ExperienceSectionController::class,'viewExperienceSection'])->name('admin.view.experience');
Route::get('/admin/add/experience', [ExperienceSectionController::class,'addExperienceSection'])->name('admin.add.experience');
Route::post('/admin/store/experience', [ExperienceSectionController::class,'storeExperienceSection'])->name('admin.store.experience');
Route::get('/admin/edit/experience/{id}', [ExperienceSectionController::class,'editExperienceSection'])->name('admin.edit.experience');
Route::put('/admin/update/experience/{id}', [ExperienceSectionController::class,'updateExperienceSection'])->name('admin.update.experience');
Route::delete('/admin/delete/experience/{id}', [ExperienceSectionController::class,'deleteExperienceSection'])->name('admin.delete.experience');

//Project
Route::get('/admin/view/project', [ProjectSectionController::class,'viewProjectSection'])->name('admin.view.project');
Route::get('/admin/add/prject', [ProjectSectionController::class,'addProjectSection'])->name('admin.add.project');
Route::post('/admin/store/project', [ProjectSectionController::class,'storeProjectSection'])->name('admin.store.project');
Route::get('/admin/edit/project/{id}', [ProjectSectionController::class,'editProjectSection'])->name('admin.edit.project');
Route::put('/admin/update/project/{id}', [ProjectSectionController::class,'updateProjectSection'])->name('admin.update.project');
Route::delete('/admin/delete/project/{id}', [ProjectSectionController::class,'deleteProjectSection'])->name('admin.delete.project');

//Contact
Route::get('/admin/view/contact', [ContactSectionController::class,'viewContactSection'])->name('admin.view.contact');
Route::get('/admin/add/contact', [ContactSectionController::class,'addContactSection'])->name('admin.add.contact');
Route::post('/admin/store/contact', [ContactSectionController::class, 'storeContactSection'])->name('admin.store.contact');
Route::get('/admin/edit/contact/{id}', [ContactSectionController::class,'editContactSection'])->name('admin.edit.contact');
Route::put('/admin/update/contact/{id}', [ContactSectionController::class,'updateContactSection'])->name('admin.update.contact');
Route::delete('/admin/delete/contact/{id}', [ContactSectionController::class,'deleteContactSection'])->name('admin.delete.contact');

//Contact Form
Route::get('/admin/view/contact/form', [ContactFormSectionController::class,'viewContactFormSection'])->name('admin.view.contact.form');
Route::post('/admin/store/contact/form', [ContactFormSectionController::class, 'storeContactFormSection'])->name('admin.store.contact.form');
Route::delete('/admin/delete/contact/form/{id}', [ContactFormSectionController::class,'deleteContactFormSection'])->name('admin.delete.contact.form');



























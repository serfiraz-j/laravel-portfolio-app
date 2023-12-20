<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard() {

        $pageTitle = "Portfolio | Dashboard";
        return view("admin.dashboard")->with('pageTitle', $pageTitle);
    }
}

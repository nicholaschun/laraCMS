<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function adminLogin() {
        return view('admin');
    }

    public function getDashboard() {
        return view('admin.dashboard');
    }
}

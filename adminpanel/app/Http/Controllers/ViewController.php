<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function ShowDashboard() {
        return view('dashboard');
    }

    public function ShowTable() {
        return view('table');
    }
    
    public function ShowForm() {
        return view('form');
    }
}

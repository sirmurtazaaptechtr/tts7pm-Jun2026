<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function Index () {
        return view('dashboard');
    }

    public function ShowTable () {
        $students = ["Hamza", "Mohib", "Shahwaiz", "Mustafa", "Yasir", "Muqaddar", "Abdul Hadi", "Mujtaba", "Abdul Latif"];

        // return view('table',['students' => $students]);
        return view('table', compact('students'));
    }

    public function ShowForm () {
        return view('form');
    }
}

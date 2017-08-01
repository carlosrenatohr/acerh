<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    //
    public function form() {
        return view('candidates.form');
    }

    public function submit() {}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function assessmentView(){
        return view('assessment');
    }
}

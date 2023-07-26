<?php

namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ElementController extends Controller
{
    public function elementView(){
        return view('elements');
    }

    public function addReview(Request $req){
        $element = new Element;
        $element->author=$req->author;
        $element->email=$req->email;
        $element->comment=$req->comment;
        $element->save();
        return redirect()->back()->with('status', 'Your Feedback has been sent successfully!');
    }
}

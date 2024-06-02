<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog extends Controller
{
    public function blog(){
        $h1="blog";
        $title="blog";
        return view('blog',compact('title','h1'));
       }
}

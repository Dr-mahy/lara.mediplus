<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function contact(){
        $h1="contact us";
        $title="contact us";
        return view('contact',compact('title','h1'));
       }
}

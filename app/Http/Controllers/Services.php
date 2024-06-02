<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Services extends Controller
{
    public function services(){
        $h1="services";
        $title="services";
        return view('services',compact('title','h1'));
       }
}

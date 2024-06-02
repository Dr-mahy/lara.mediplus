<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function pages(){
        $h1="pages";
        $title="pages";
        return view('pages',compact('title','h1'));
       }
}

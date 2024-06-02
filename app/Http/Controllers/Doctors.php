<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Doctors extends Controller
{
    public function doctors(){
        $h1="doctors";
        $title="doctors";
        return view('doctors',compact('title','h1'));
       }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    //
     public function index()
    {

       
       // return "welcome to Laravel";
        
       return view('About.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(){
        return view('layout.index',['name'=>"5TWIN3"]);
    }

    function contact(){
        return view('layout.contact');
    }
}

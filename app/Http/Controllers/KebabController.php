<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KebabController extends Controller
{
    public function store(){
        error_log(request('name'));
    }
    public function index(){
       return view('welcome');
    }
    //you can make your actions here

}

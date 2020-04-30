<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PageController extends Controller
{
    public function home (){
        return view('index');
    }

    public function features (){
        return view('features', ['nama' => 'nita']);
    }
}

//otomatis
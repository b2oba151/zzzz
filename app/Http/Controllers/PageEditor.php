<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageEditor extends Controller
{
    public function index(){
        return view('app.pages.index');
    }

    public function index2(){
        return view('app.pages.index2');
    }

    public function index3(){
        return view('app.pages.test');
    }
}

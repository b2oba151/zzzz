<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageEditor extends Controller
{
    public function index(){
        return view('app.pages.index');
    }
}

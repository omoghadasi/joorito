<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function showPage(){
        return view('categoriesPage');
    }
}

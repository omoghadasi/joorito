<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class statisticsController extends Controller
{
    public function showPage(){
        return view('statisticsPage');
    }
}

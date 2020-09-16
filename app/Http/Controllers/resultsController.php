<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resultsController extends Controller
{
    public function showPage(){
        return view('resultsPage',[
            'keyword'=>request('keyword')
        ]);
    }
}

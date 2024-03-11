<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolfeeController extends Controller
{
    public function payment(){
        
        return view('dashboard.payment');
    }
}

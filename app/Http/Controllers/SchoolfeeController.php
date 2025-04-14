<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolfeeController extends Controller
{
    public function payment(){
        $view_payments  = Schoolfee::all();
        
        
        return view('dashboard.payment', compact('view_payments'));
    }
}

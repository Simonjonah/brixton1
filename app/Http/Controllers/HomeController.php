<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
Use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        // $countyourresults = Result::where('user_id', auth::guard('web')->id())->count();
        return redirect('web/home');
        //return view('dashboard/home');
    }
}

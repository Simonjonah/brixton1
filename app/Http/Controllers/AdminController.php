<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Event;
use App\Models\Query;
use App\Models\User;
use App\Models\Subject;
use App\Models\Testimony;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function create(Request $request){
        //create method
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'studycenter' => ['required', 'string', 'max:255'],
            'agree' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string', 'max:255'],
            
            'phone' => ['required', 'string', 'max:255', 'unique:admins'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8'],           
        ]);
        $registration = new Admin();
        $registration->name = $request->name;
       $registration->role = 0;
       $registration->agree = $request->agree;
        $registration->phone = $request->phone;
        $registration->designation = $request->designation;
        $registration->studycenter = $request->studycenter;
        $registration->email = $request->email;
        $registration->password = \Hash::make($request->password);
        $registration->save();
 
        if ($registration) {
            return redirect()->route('admin.home')->with('success', 'you have successfully registered');
                
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }

    

    public function check(Request $request){
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'exists:admins'],
            'password' => ['required', 'string', 'min:8']
        ], [
            'email.exist'=>'This email does not exist in the admins table'
        ]);
        $creds = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($creds)) {
            return redirect()->route('admin.home')->with('success', 'You have successfully login');
        }else{
            return redirect()->route('admin.login')->with('error', 'Failed to login');
        }
    }

    public function home(){
        $countstudent = User::where('role', null)->count();
        $countsubjects = Subject::count();
        $countsubjecthigh = Subject::where('section', 'High School')->count();
        $countsubjectprim = Subject::where('section', 'Primary')->count();
        $countteacher = User::where('status', 'teacher')->count();
        $countteacheruyo = User::where('centername', 'Uyo')
        ->where('status', 'teacher')->count();
        $countteacherabuja = User::where('centername', 'Abuja')
        ->where('status', 'teacher')->count();
        $countstudenttsuspend = User::where('status', 'suspend')->count();
        $countstudentapprove = User::where('status', 'suspend')->count();
        $countstudentreject = User::where('status', 'reject')->count();
        $countsqueries = Query::count();
        $countsrepliedqueries = Query::where('status', 'reply')->count();
        $countsevents = Event::where('status', 'reply')->count();
        $countstestimony = Testimony::where('status', 'reply')->count();
        
        
        return view('dashboard.admin.home', compact('countstudent', 'countstestimony', 'countsevents', 'countsrepliedqueries','countsqueries', 'countstudentreject', 'countstudentapprove', 'countstudenttsuspend', 'countteacherabuja', 'countteacheruyo', 'countteacher', 'countsubjectprim', 'countsubjecthigh', 'countsubjects'));
    }

    public function profile() {

        return view('dashboard.admin.profile');
    }

    public function settingsupdate(Request $request, $id){
        $edit_profiles = Admin::find($id);
        $edit_profiles = Admin::where('id', $id)->first();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'designation' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],

            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'studycenter' => ['required', 'string'],
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
       // dd($request->all());
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }
        $edit_profiles['images'] = $path;
        $edit_profiles->name = $request->name;
        $edit_profiles->email = $request->email;
        $edit_profiles->address = $request->address;
        $edit_profiles->phone = $request->phone;
        $edit_profiles->studycenter = $request->studycenter;
        $edit_profiles->designation = $request->designation;


        $edit_profiles->update();

        return redirect()->back()->with('success', 'you have update successfully');

    }



    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
    
    
}

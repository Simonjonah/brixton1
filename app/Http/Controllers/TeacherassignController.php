<?php

namespace App\Http\Controllers;

use App\Models\Teacherassign;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class TeacherassignController extends Controller
{
   

    public function assignsubjectstoteacher (Request $request, $id){
        $add_assignteacher = User::where('id', $id)->first();
        $request->validate([
            'user_id' => ['required', 'string', 'max:255'],
            'subject_id' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],
            'classname' => ['required', 'string', 'max:255'],

        ]);
        $add_assignteacher = new Teacherassign();
        $add_assignteacher->user_id = $request->user_id;
        $add_assignteacher->subject_id = $request->subject_id;
        $add_assignteacher->section = $request->section;
        $add_assignteacher->classname = $request->classname;
    
        $add_assignteacher->save();
        if ($add_assignteacher) {
            return redirect()->back()->with('success', 'You have assign Teacher to subject');
           // return Redirect::to('https://brixtonnschools.com.ng/admin/viewsubject')->with('success', 'you have added successfully');
        }
     
    }

    public function teachertosubjects(){
        $view_teachersubjects = Teacherassign::all();
        return view('dashboard.admin.teachertosubjects', compact('view_teachersubjects'));
    }

    public function viewteachersubjects($user_id){
        $find_teachersubjects = Teacherassign::find($user_id);
        $find_teachersubjects = $display_teachersubjects = Teacherassign::where('user_id', $user_id)->get();

        return view('dashboard.admin.viewteachersubjects', ['display_teachersubjects' => $display_teachersubjects, 'find_teachersubjects' => $find_teachersubjects]);
    }

    public function mysubjects(){
        $my_subjects = Teacherassign::where('user_id', auth::guard('web')->id()
        )->get();

        return view('dashboard.mysubjects', compact('my_subjects'));
    }

    public function mysubjectsguestion(){
        $my_subjects = Teacherassign::where('user_id', auth::guard('web')->id()
        )->get();

        return view('dashboard.mysubjectsguestion', compact('my_subjects'));
    }

    
}

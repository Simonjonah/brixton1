<?php

namespace App\Http\Controllers;

use App\Models\Classname;
use App\Models\Club;
use App\Models\Club1;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
class ClubController extends Controller
{
    //
    public function addclubs(){
        $view_classes = Classname::all();
        $view_clubs = Club1::all();
        return view('dashboard.admin.addclubs', compact('view_clubs', 'view_classes'));
    }

    public function addstudentoclub(){
        $view_classes = Classname::all();
        $view_clubs = Club1::all();
        return view('dashboard.addstudentoclub', compact('view_clubs', 'view_classes'));
    }

    
    public function viewsclubstudent($id){
        $view_club = Club::find($id);
        $view_classes = Classname::all();
        $view_clubs = Club1::all();
        return view('dashboard.admin.viewsclubstudent', compact('view_club', 'view_clubs', 'view_classes'));
    }

    public function editstudentclub($id){
        $edit_club = Club::find($id);
        $view_classes = Classname::all();
        $view_clubs = Club1::all();
        return view('dashboard.admin.editstudentclub', compact('edit_club', 'view_clubs', 'view_classes'));
    }

    public function editstudentclubteacher($id){
        $edit_club = Club::find($id);
        $view_classes = Classname::all();
        $view_clubs = Club1::all();
        return view('dashboard.editstudentclubteacher', compact('edit_club', 'view_clubs', 'view_classes'));
    }
    

    public function createtclub(Request $request){
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],
            'centername' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'clubname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'classname' => ['required', 'string', 'max:255'],
            

        ]);
       
        $addclub = new Club();
      
        $addclub->fname = $request->fname;
        $addclub->middlename = $request->middlename;
        $addclub->surname = $request->surname;
        $addclub->section = $request->section;
        $addclub->centername = $request->centername;
        $addclub->gender = $request->gender;
        $addclub->clubname = $request->clubname;
        $addclub->age = $request->age;
        $addclub->classname = $request->classname;
        
        $addclub->save();
        if ($addclub) {
            return redirect()->back()->with('success', 'You have successfully registering one person');
        }
        return redirect()->back()->with('error', 'You have not successfully registering one person');

    }

    public function createtclubteacher(Request $request){
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],
            'centername' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'clubname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'classname' => ['required', 'string', 'max:255'],
            'user_id' => ['required', 'string', 'max:255'],
            'tname' => ['required', 'string', 'max:255'],
            'tlastname' => ['required', 'string', 'max:255'],
            

        ]);
       
        $addclub = new Club();
        $addclub->tname = $request->tname;
        $addclub->tlastname = $request->tlastname;
        $addclub->fname = $request->fname;
        $addclub->middlename = $request->middlename;
        $addclub->surname = $request->surname;
        $addclub->section = $request->section;
        $addclub->centername = $request->centername;
        $addclub->gender = $request->gender;
        $addclub->clubname = $request->clubname;
        $addclub->age = $request->age;
        $addclub->classname = $request->classname;
        $addclub->user_id = $request->user_id;
        
        $addclub->save();
        if ($addclub) {
            return redirect()->back()->with('success', 'You have successfully registering one person');
        }
        return redirect()->back()->with('error', 'You have not successfully registering one person');

    }
    

    public function updatesclubform(Request $request, $id){
        $edit_club = Club::find($id);
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],
            'centername' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'clubname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'classname' => ['required', 'string', 'max:255'],
            'tname' => ['nullable', 'string', 'max:255'],
            'tlastname' => ['nullable', 'string', 'max:255'],
            // 'user_id' => ['nullable', 'string', 'max:255'],
            

        ]);
       
      
        $edit_club->fname = $request->fname;
        $edit_club->middlename = $request->middlename;
        $edit_club->surname = $request->surname;
        $edit_club->section = $request->section;
        $edit_club->centername = $request->centername;
        $edit_club->gender = $request->gender;
        $edit_club->clubname = $request->clubname;
        $edit_club->age = $request->age;
        $edit_club->classname = $request->classname;
        $edit_club->tname = $request->tname;
        $edit_club->tlastname = $request->tlastname;
        
        $edit_club->update();
        if ($edit_club) {
            return redirect()->back()->with('success', 'You have successfully updated one person');
        }
        return redirect()->back()->with('error', 'You have not successfully updated one person');

    }
    public function updateclubteacher(Request $request, $id){
        $edit_club = Club::find($id);
        $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],
            'centername' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'clubname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'classname' => ['required', 'string', 'max:255'],
            'tname' => ['nullable', 'string', 'max:255'],
            'tlastname' => ['nullable', 'string', 'max:255'],
            
        ]);
       
      
        $edit_club->fname = $request->fname;
        $edit_club->middlename = $request->middlename;
        $edit_club->surname = $request->surname;
        $edit_club->section = $request->section;
        $edit_club->centername = $request->centername;
        $edit_club->gender = $request->gender;
        $edit_club->clubname = $request->clubname;
        $edit_club->age = $request->age;
        $edit_club->classname = $request->classname;
        $edit_club->tname = $request->tname;
        $edit_club->tlastname = $request->tlastname;
        
        $edit_club->update();
        if ($edit_club) {
            return redirect()->back()->with('success', 'You have successfully updated one person');
        }
        return redirect()->back()->with('error', 'You have not successfully updated one person');

    }
    
    public function studentclubs($clubname){
        $viewclass_clubs = Club1::where('clubname', $clubname)->first();
        $viewclass_clubs = Club::where('clubname', $clubname)->get();
        return view('dashboard.admin.studentclubs', compact('viewclass_clubs'));
    }

    public function viewclubteacher($clubname){
        $viewclass_clubs = Club1::where('clubname', $clubname)->first();
        $viewclass_clubs = Club::where('clubname', $clubname)->get();
        return view('dashboard.viewclubteacher', compact('viewclass_clubs'));
    }
    

    public function deletestudentclub($id){
        $edit_club = Club::where('id', $id)->delete();
        return redirect()->back()->with('success', 'you have deleted succsessfully');
    }

    public function deletestudentclubteacher($id){
        $edit_club = Club::where('id', $id)->delete();
        return redirect()->back()->with('success', 'you have deleted succsessfully');
    }
    

    public function uyoclubstudents(){
        $view_uyoclubs = Club::where('centername', 'Uyo')->latest()->get();
        return view('dashboard.admin.uyoclubstudents', compact('view_uyoclubs'));
    }
    public function viewstudentsclubytacher(){
        $view_yourclubs = Club::where('user_id', Auth::guard('web')->id())->latest()->get();
        return view('dashboard.viewstudentsclubytacher', compact('view_yourclubs'));
    }
    

    public function abujaclubstudents(){
        $view_abujaclubs = Club::where('centername', 'Abuja')->latest()->get();
        return view('dashboard.admin.abujaclubstudents', compact('view_abujaclubs'));
    }

    public function viewscentertudentsclubytacher(){
        $view_abujaclubs = Club::where('user_id', Auth::guard('web')->id())->latest()->get();
        return view('dashboard.viewscentertudentsclubytacher', compact('view_abujaclubs'));
    }
    
}

<?php

namespace App\Http\Controllers;

use App\Models\Classname;
use App\Models\Result;
use App\Models\Studycenter;
use App\Models\user;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Auth;

use App\Models\Academicsession;

class ClassnameController extends Controller
{
    public function addclass (){

        return view('dashboard.admin.addclass');
    }

    public function createclasses (Request $request){
        $request->validate([
            'classname' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],
            
        ]);
        $addclasses = new Classname();
        $addclasses->classname = $request->classname;
        $addclasses->section = $request->section;
       
        $addclasses->save();

        return redirect()->back()->with('success', 'you have added successfully');
    }

    public function viewclassestables(){
        $view_clesses = Classname::orderBy('created_at', 'ASC')->get();
        return view('dashboard.admin.viewclassestables', compact('view_clesses'));
    }

    public function editclasses($id){
        $edit_clesses = Classname::find($id);
        return view('dashboard.admin.editclasses', compact('edit_clesses'));
    }
    
    public function updateclass (Request $request, $id){
        $edit_clesses = Classname::find($id);
        $request->validate([
            'classname' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],
            
        ]);

        $edit_clesses->classname = $request->classname;
        $edit_clesses->section = $request->section;
        $edit_clesses->update();

        return redirect()->back()->with('success', 'you have added successfully');
    }

    public function classesdelete($id){
        $classdelted = Classname::where('id', $id)->delete();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function classrooms($classname){
        $view_classstudents = Classname::where('classname', $classname)->first();
        $view_classstudents = user::where('classname', $classname)
        ->where('status', 'admitted')
        ->where('assign1', 'student')
        ->where('centername', 'Uyo')->get();

        $view_student_abujas = Classname::where('classname', $classname)->first();
        $view_student_abujas = user::where('classname', $classname)
        ->where('status', 'admitted')
        ->where('assign1', 'student')

        ->where('centername', 'Abuja')->get();

        $view_classes = Classname::all();
       

        return view('dashboard.admin.classrooms', compact('view_classes', 'view_student_abujas', 'view_classstudents'));
    }

    


    public function printregclass($classname){
        $print_studentclasses = Classname::where('classname', $classname)->first();
        $print_studentclasses = user::where('classname', $classname)
        ->where('status', 'admitted')
        ->where('centername', 'Uyo')->get();

        return view('dashboard.admin.classrooms', compact('print_studentclasses'));
    }


    public function classes($classname){
        $view_classes = Classname::where('classname', $classname)->first();
        $view_classes = user::where('classname', $classname)
        ->where('status', 'admitted')->get();
        $view_studycenters = Studycenter::all();
        return view('dashboard.classes', compact('view_studycenters', 'view_classes'));
    }


    
    public function classview($classname){
        $view_terms = Classname::where('classname', $classname)->first();
        $view_terms = user::where('classname', $classname)
        ->where('status', 'admitted')->latest()->get();
        $view_studycenters = Studycenter::all();
        return view('dashboard.classview', compact('view_studycenters', 'view_terms'));
    }
    public function parentbyheads($section){
        $view_pat = Classname::where('classname', $section)->first();
        $view_parents = user::where('section', $section)
        ->where('fname', null)->latest()->get();
        return view('dashboard.parentbyheads', compact('view_parents', 'view_pat'));
    }

    public function paymentbyheads($section){
        $view_pat = Classname::where('classname', $section)->first();
        $getyour_payments = Transaction::where('section', $section)
        ->where('fname', null)->latest()->get();
        return view('dashboard.paymentbyheads', compact('getyour_payments', 'view_pat'));
    }
    

    

    
    public function classresultsabuja($classname){
        $view_myresult = Classname::where('classname', $classname)->first();
        $view_myresults = Result::where('classname', $classname)
        ->where('centername', 'Abuja')
        ->where('type', null)
        ->latest()->get();
        $sessions = Academicsession::all();
        $view_classes = Classname::all();
        $view_centers = Studycenter::all();

        return view('dashboard.admin.classresultsabuja', compact('view_centers', 'view_classes', 'sessions', 'view_myresult', 'view_myresults'));
    }

    public function classresultsmidterm($classname){
        $view_myresult = Classname::where('classname', $classname)->first();
        $view_myresults = Result::where('classname', $classname)
        ->where('centername', 'Uyo')
        ->where('type', 'Midterm')
        ->latest()->get();
        $sessions = Academicsession::all();
        $view_classes = Classname::all();
        $view_studycenters = Studycenter::all();

        return view('dashboard.admin.classresultsmidterm', compact('view_studycenters', 'view_classes', 'sessions', 'view_myresult', 'view_myresults'));
    }

    
    public function classresults($classname){
        $view_myresult = Classname::where('classname', $classname)->first();
        $view_myresults = Result::where('classname', $classname)
        ->where('centername', 'Uyo')
        ->where('type', null)
        ->latest()->get();
        $sessions = Academicsession::all();
        $view_classes = Classname::all();
        $view_studycenters = Studycenter::all();
        return view('dashboard.admin.classresults', compact('view_studycenters', 'view_classes', 'sessions', 'view_myresult', 'view_myresults'));
    }

    public function classresultsheads($classname){
        $view_myresults = Classname::where('classname', $classname)->first();
        $view_myresults = Result::where('classname', $classname)
        ->latest()->get();
        return view('dashboard.classresultsheads', compact('view_myresults'));
    }


    public function viewalluyo($classname){
        $viewalluyo_student = Classname::where('classname', $classname)->first();
        $viewalluyo_students = User::where('centername', 'Uyo')
        ->where('assign1', 'student')
        ->where('classname', $classname)
        // ->whereNotin('section', 'High School')
        ->latest()->get();
        return view('dashboard.admin.viewalluyo', compact('viewalluyo_student', 'viewalluyo_students'));
    }
    
    public function viewallabuja1($classname){
        $viewallabj_student = Classname::where('classname', $classname)->first();
        $display_abujas = User::where('centername', 'Abuja')
        ->where('assign1', 'student')
        ->where('classname', $classname)
        ->latest()->get();
        return view('dashboard.admin.viewallabuja', compact('viewallabj_student', 'display_abujas'));
    }


    public function midtermresultsunapprove($classname){
        $view_class = Classname::where('classname', $classname)->first();
        $view_midtermmyresults = Result::where('classname', $classname)
        ->where('status', null)
        ->where('type', 'Midterm')
        ->get();
        $view_classes = Classname::all();
        $view_sessions = Academicsession::all();

    return view('dashboard.midtermresultsunapprove', compact('view_class', 'view_sessions', 'view_classes', 'view_midtermmyresults'));
}


public function midtermresultsapproveheads($classname){
    $view_class = Classname::where('classname', $classname)->first();
    $view_midtermmyresults = Result::where('classname', $classname)
    ->where('status', 'approved')
    ->where('type', 'Midterm')
    ->get();
    $view_classes = Classname::all();
    $view_sessions = Academicsession::all();

return view('dashboard.midtermresultsapproveheads', compact('view_class', 'view_sessions', 'view_classes', 'view_midtermmyresults'));
}

    
}

<?php

namespace App\Http\Controllers;

use App\Models\Academicsession;
use App\Models\Classname;
use App\Models\Moto;
use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Pin;
use App\Models\User;
use App\Models\Psycomotor;
use App\Models\Result2ndTerm;
use App\Models\Result3rdTerm;
use PDF;
use Illuminate\Support\Facades\Auth;
class ResultController extends Controller
{
    public function createresults(Request $request){
            $data = [];
            $subjectnames = $request->input('subjectname');
            $test_1s = $request->input('test_1');
            $test_2s = $request->input('test_2');
            $test_3s = $request->input('test_3');
            $examss = $request->input('exams');
            $user_ids = $request->input('user_id');
            $sections = $request->input('section');
          
            $teacher_ids = $request->input('teacher_id');
            $academic_sessions = $request->input('academic_session');
            $regnumbers = $request->input('regnumber');
            $entrylevels = $request->input('entrylevel');
            $images_s = $request->input('images');
            $classnames = $request->input('classname');
            $centernames = $request->input('centername');
            $categories = $request->input('category');
            $fnames = $request->input('fname');
            $middlenames = $request->input('middlename');
            $surnames = $request->input('surname');
            $genders = $request->input('gender');
            
            for ($i = 0; $i < count($subjectnames); $i++) {
                $data[] = [
    
                    'subjectname' => $subjectnames[$i],
                    'test_1' => $test_1s[$i],
                    'test_2' => $test_2s[$i],
                    'test_3' => $test_3s[$i],
                    'exams' => $examss[$i],
                    'user_id' => $user_ids[$i],
                    'section' => $sections[$i],
                    'academic_session' =>$academic_sessions[$i],
                    'images' =>$images_s[$i],
                    'regnumber' =>$regnumbers[$i],
                    'teacher_id' =>$teacher_ids[$i],
                    'entrylevel' => $entrylevels[$i],
                    'classname' => $classnames[$i],
                    'centername' => $centernames[$i],
                    'category' => $categories[$i],
                    'fname' => $fnames[$i],
                    'surname' => $surnames[$i],
                    'middlename' => $middlenames[$i],
                    'gender' => $genders[$i],
    
                ];
            }
   
            Result::insert($data);
 
       return redirect()->back()->with('success', 'you have added successfully');
    }

    public function pioneertermresults(){
        $view_myresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('entrylevel', 'Pioneer Term')->where('status', null)
        ->get();
        $view_classes = Classname::all();
        return view('dashboard.pioneertermresults', compact('view_classes', 'view_myresults'));
    }

    public function pioneertermresultsapproved(){
        $view_myresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('entrylevel', 'Pioneer Term')->where('status', 'approved')
        ->get();
        $view_classes = Classname::all();
        return view('dashboard.pioneertermresultsapproved', compact('view_classes', 'view_myresults'));
    }
    
    public function teacherviewresults($user_id){
        $view_myresult_results = Result::where('user_id', $user_id)
        ->where('entrylevel', 'Pioneer Term')
        ->get();

        $view_results = Result::where('user_id', $user_id)->first();
           
        return view('dashboard.teacherviewresults', compact('view_results', 'view_myresult_results'));
    }

    public function teacherviewresults2nd($user_id){
        $view_myresult_results = Result::where('user_id', $user_id)
        ->where('entrylevel', 'Penultimate Term')
        ->get();

        $view_results = Result::where('user_id', $user_id)->first();
           
        return view('dashboard.teacherviewresults', compact('view_results', 'view_myresult_results'));
    }
    public function pensulatermresults(){
        $view_myresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('entrylevel', 'Penultimate Term')
         ->where('status', null)
        ->get();
        $view_classes = Classname::all();
        return view('dashboard.pensulatermresults', compact('view_classes', 'view_myresults'));
    }

    public function penultimatetermresultsapproved(){
        $view_terms = Result::where('teacher_id', auth::guard('web')->id())
         ->where('entrylevel', 'Penultimate Term')
         ->where('status', 'approved')
        ->get();
        $view_classes = Classname::all();
        return view('dashboard.penultimatetermresultsapproved', compact('view_classes', 'view_terms'));
    }
    

    public function teacherviewresults3rd($user_id){
        $view_myresult_results = Result::where('user_id', $user_id)
        ->where('entrylevel', 'Premium Term')
        ->get();
        $view_results = Result::where('user_id', $user_id)->first();
           
        return view('dashboard.teacherviewresults3rd', compact('view_results', 'view_myresult_results'));
    }

    public function addpsychomotor($id){
        $add_psychomotor = Result::find($id);
        return view('dashboard.addpsychomotor', compact('add_psychomotor'));
    }
    public function premiumtermresults(){
        $view_myresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('entrylevel', 'Premium Term')
         ->where('status', null)
        ->get();
        return view('dashboard.premiumtermresults', compact('view_myresults'));
    }

    public function tpremiumprimarytermresults(){
        $view_myresults = Result::where('teacher_id', auth::guard('web')->id())
         ->where('entrylevel', 'Premium Term')
         ->where('status', 'approved')

        ->get();
        return view('dashboard.tpremiumprimarytermresults', compact('view_myresults'));
    }
    


    
    
   
    public function checkresult(){
       $the_results = Academicsession::all();
       $check_results = User::where('user_id', auth::guard('web')->id())
        ->get();

        $view_classes = Classname::all();
     
        return view('dashboard.checkresult', compact('view_classes', 'check_results', 'the_results'));
    }
    

    public function yourresult(Request $request){
        $request->validate([
            'pins' => ['required', 'string'],
            'regnumber' => ['required', 'string'],
            'academic_session' => ['required', 'string'],
            'entrylevel' => ['required', 'string'],

        ], [
            'pins.exist'=>'This email does not exist in the admins table'
        ]);
        if($getyour_results = Result::where('regnumber', $request->regnumber)->where('entrylevel', $request->entrylevel)
        ->where('pins', $request->pins)
        ->exists()) {
        $getyour_results = Result::where('user_id', auth::guard('web')->id()
        )->where('academic_session', $request->academic_session)->get();
        }else{
            return redirect()->back()->with('fail', 'There is no results for you!');
        }
       // $view_results = Result::where('user_id', $user_id)->first();
       $getyours = Result::where('user_id', auth::guard('web')->id()
       )->where('entrylevel', $request->entrylevel)->get();
       
        // $pdf = PDF::loadView('dashboard.pdf', compact('getyours','getyour_results'));

        // return $pdf->download('school_report.pdf');
    return view('dashboard.yourresult', compact('getyours','getyour_results'));
      
    }

    public function printresult(Request $request, $user_id){
        $print_results = Result::where('user_id', $user_id)
        ->where('entrylevel', 'Pioneer Term')->get();
        return view('dashboard.printresult', compact('print_results'));
    }


    public function generatllePDF(Request $request)
    {

        $request->validate([
           'pins' => ['required', 'string'],
            'regnumber' => ['required', 'string',],
            'academic_session' => ['required', 'string',],
            'entrylevel' => ['required', 'string'],
            'section' => ['required', 'string'],
            'classname' => ['required', 'string'],

        ], [
            'pins.exist'=>'This email does not exist in the admins table'
        ]);

    //    dd($request->all());

        if($getyour_results = Result::where('regnumber', $request->regnumber)
        ->where('academic_session', $request->academic_session)
       ->where('entrylevel', $request->entrylevel)
        ->where('section', $request->section)
        // ->where('classname', $request->clasname)

        ->exists()) {
        $getyour_results = Result::where('regnumber', $request->regnumber)
        // ->where('regnumber', $request->regnumber)
       ->where('classname', $request->classname)
       ->where('entrylevel', $request->entrylevel)
        ->where('section', $request->section)
        ->where('academic_session', $request->academic_session)->orderBy('category')->get();
        }else{
            return redirect()->back()->with('fail', 'There is no results for you!');
        }
        $getyours = Result::where('user_id', auth::guard('web')->id()
        )->where('entrylevel', $request->entrylevel)->get();
        
        // $total_subject = Result::where('user_id', auth::guard('web')->id()
        // )->where('classname', $request->classname)
        // ->where('term', $request->term)->where('type', null)->count();

        $view_results = Moto::where('academic_session', $request->academic_session)
        ->where('regnumber', $request->regnumber)
        ->where('classname', $request->classname)
        ->where('section', $request->section)
        ->where('pins', $request->pins)
        ->where('entrylevel', $request->entrylevel)->first();

        $firstterm_results = Result::where('academic_session', $request->academic_session)
        ->where('regnumber', $request->regnumber)
        ->where('classname', $request->classname)
        ->where('section', $request->section)
        
        ->where('entrylevel', 'Pioneer Term')->orderBy('category')->get();


        $secondterm_results = Result::where('academic_session', $request->academic_session)
        ->where('regnumber', $request->regnumber)
        ->where('classname', $request->classname)
        ->where('section', $request->section)
        
        ->where('entrylevel', 'Penultimate Term')->orderBy('category')->get();

        $totalstudentInClass = User::where('academic_session', $request->academic_session)
        ->where('regnumber', $request->regnumber)
        ->where('classname', $request->classname)
        ->where('section', $request->section)
        ->where('entrylevel', $request->entrylevel)
        ->where('assign1', 'student')->count();

        // $total_student = Result::where('user_id', auth::guard('web')->id()
        // )->where('classname', $request->classname)
        // ->where('term', $request->term)->count();

        if ($request->section == 'High School') {
            return view('dashboard.highschoolfirstermpdf', compact('view_results', 'getyour_results'));
            //$pdf = PDF::loadView('dashboard.pdf', compact('view_results', 'getyour_results'));
        }elseif($request->section == 'Primary' && $request->entrylevel == 'Pioneer Term')
        
            return view('dashboard.ftermprimaryresultspdf', compact('view_results', 'getyour_results'));
            // $pdf = PDF::loadView('dashboard.ftermprimaryresultspdf', compact('view_results', 'getyour_results'));

            elseif($request->section == 'Primary' && $request->entrylevel == 'Penultimate Term')
        
            return view('dashboard.stermprimaryresultspdf', compact('firstterm_results', 'view_results', 'getyour_results'));
            // $pdf = PDF::loadView('dashboard.ftermprimaryresultspdf', compact('view_results', 'getyour_results'));

            elseif($request->section == 'Primary' && $request->entrylevel == 'Premium Term')
        
            return view('dashboard.ttermprimaryresultspdf', compact('totalstudentInClass', 'secondterm_results','firstterm_results', 'view_results', 'getyour_results'));
        
        elseif($getyour_results->section == 'Pre-School'){
            $pdf = PDF::loadView('dashboard.pdf', compact('firstterm_results', 'view_results', 'getyour_results'));

        }
    
        return redirect()->back()->with('error', 'No page found!');
    }
    

    public function checkresultbyheads(Request $request){
        $request->validate([
            'regnumber' => ['required', 'string'],
            'academic_session' => ['required', 'string'],
            'entrylevel' => ['required', 'string'],
            'classname' => ['required', 'string'],
            'section' => ['required', 'string'],

        ], [
            'regnumber.exist'=>'This email does not exist in the admins table'
        ]);
        if($view_myresult_results = Result::where('regnumber', $request->regnumber)->where('entrylevel', $request->entrylevel)
        ->where('academic_session', $request->academic_session)
        ->where('classname', $request->classname)
        ->exists()) {
        $view_myresult_results = Result::where('regnumber', $request->regnumber)
        ->where('academic_session', $request->academic_session)
        ->where('classname', $request->classname)
        ->where('entrylevel', $request->entrylevel)->orderBy('category')->get();
        }else{
            return redirect()->back()->with('fail', 'There is no results for you!');
        }
       $getyours = Result::where('regnumber', $request->regnumber)->where('entrylevel', $request->entrylevel)
       ->where('academic_session', $request->academic_session)->get();
      
    //    $view_mylit_results = Result::where('regnumber', $request->regnumber)
    //    ->where('academic_session', $request->academic_session)
    //    ->where('classname', $request->classname)
    //    ->where('entrylevel', $request->entrylevel)
    //    ->where('category', '$request->entrylevel')
    //    ->get();
    // return view('dashboard.teacherviewresultsheads', compact('getyours','view_myresult_results'));
      


        
    if ($request->section == 'High School') {
        return view('dashboard.highschoolsresults', compact('getyours','view_myresult_results'));
       // $pdf = PDF::loadView('dashboard.', compact('view_results', 'total_student', 'total_subject', 'getyour_results'));

    } elseif($request->section == 'Primary') {
        //$pdf = PDF::loadView('dashboard.', compact('view_results', 'total_student', 'total_subject', 'getyour_results'));
        return view('dashboard.primaryresults', compact('getyours','view_myresult_results'));

    // }elseif($request->section == null) {
    //     $pdf = PDF::loadView('dashboard.pdf', compact('view_results', 'total_student', 'total_subject', 'getyour_results'));
    
    }else{
        return view('dashboard.preschoolresult', compact('getyours','view_myresult_results'));

    //$pdf = PDF::loadView('dashboard.preschool', compact('view_results', 'total_student', 'total_subject', 'getyour_results'));

    }
}
    

    

    public function editresult($id){
        $edit_result = Result::find($id);
    
        return view('dashboard.editresult', compact('edit_result'));

    }

    public function updateresults(Request $request, $id){
        $add_comment = Result::find($id);

        $request->validate([
            'test_1' => ['required', 'string'],
            'test_2' => ['required', 'string'],
            'test_3' => ['required', 'string'],
            'exams' => ['required', 'string'],
        ]);
        $add_comment->test_1 = $request->test_1;
        $add_comment->test_2 = $request->test_2;
        $add_comment->test_3 = $request->test_3;
        $add_comment->exams = $request->exams;
        $add_comment->update();
        return redirect()->back()->with('success', 'You have added comment to this Result');

    }


    public function addcomment($id){
        $add_comment = Result::find($id);
    
        return view('dashboard.addcomment', compact('add_comment'));

    }

    public function addcomments(Request $request, $id){
        $add_comment = Result::find($id);

        $request->validate([
            'teacher_comment' => ['required', 'string'],
        ]);
        $add_comment->teacher_comment = $request->teacher_comment;
        $add_comment->update();
        return redirect()->back()->with('success', 'You have added comment to this Result');

    }
    
    public function approvedresulthead($id){
        $approve_result = Result::find($id);
        $approve_result->status = 'approved';
        $approve_result->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    
    }

    public function approvedresultsad($id){
        $approve_result = Result::find($id);
        $approve_result->status = 'approved';
        $approve_result->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    
    }

    
    
   
}
    



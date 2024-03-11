<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Subject;
use App\Models\Teacherassign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class QuestionController extends Controller
{
    //
    public function setquestion ($id){
        $view_subject = Teacherassign::find($id);
        return view('dashboard.setquestion', compact('view_subject'));
    }

    public function createquestion(Request $request){
        $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'user_id' => ['required', 'string', 'max:255'],
            'subjectname' => ['required', 'string', 'max:255'],
            'option1' => ['required', 'string', 'max:255'],
            'option2' => ['required', 'string', 'max:255'],
            'option3' => ['required', 'string', 'max:255'],
            'classname' => ['required', 'string', 'max:255'],
            'is_correct' => ['required', 'string', 'max:255'],
            'centername' => ['required', 'string', 'max:255'],
            'term' => ['required', 'string', 'max:255'],
            
        ]);
        $add_question = new Question();
        $add_question->question = $request->question;
        $add_question->user_id = $request->user_id;
        $add_question->subjectname = $request->subjectname;
        $add_question->option1 = $request->option1;
        $add_question->option2 = $request->option2;
        $add_question->option3 = $request->option3;
        $add_question->classname = $request->classname;
        $add_question->is_correct = $request->is_correct;
        $add_question->centername = $request->centername;
        $add_question->term = $request->term;
        
        $add_question->save();

        return redirect()->back()->with('success', 'you have added successfully');
    }
    public function mysquestions (){
        $view_questions = Question::where('user_id', auth::guard('web')->id())->latest()
        ->where('opionitems', null)
        ->get();
        return view('dashboard.mysquestions', compact('view_questions'));
    }
    public function viewquestion ($id){
        $view_singlequestion = Question::find($id);
        return view('dashboard.viewquestion', compact('view_singlequestion'));
    }

    public function editquestion ($id){
        $edit_singlequestion = Question::find($id);
        return view('dashboard.editquestion', compact('edit_singlequestion'));
    }

    public function updatequestion(Request $request, $id){
        $edit_singlequestion = Question::find($id);

        $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'user_id' => ['required', 'string', 'max:255'],
            'subjectname' => ['required', 'string', 'max:255'],
            'option1' => ['required', 'string', 'max:255'],
            'option2' => ['required', 'string', 'max:255'],
            'option3' => ['required', 'string', 'max:255'],
            'classname' => ['required', 'string', 'max:255'],
            'is_correct' => ['required', 'string', 'max:255'],
            'centername' => ['required', 'string', 'max:255'],
            'term' => ['required', 'string', 'max:255'],
            
        ]);
        $edit_singlequestion->question = $request->question;
        $edit_singlequestion->user_id = $request->user_id;
        $edit_singlequestion->subjectname = $request->subjectname;
        $edit_singlequestion->option1 = $request->option1;
        $edit_singlequestion->option2 = $request->option2;
        $edit_singlequestion->option3 = $request->option3;
        $edit_singlequestion->classname = $request->classname;
        $edit_singlequestion->is_correct = $request->is_correct;
        $edit_singlequestion->centername = $request->centername;
        $edit_singlequestion->term = $request->term;
        
        $edit_singlequestion->update();

        return redirect()->back()->with('success', 'you have edited successfully');
    }
       
  
    public function addbyadminquestion(Request $request){
        $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'user_id' => ['required', 'string', 'max:255'],
            'subjectname' => ['required', 'string', 'max:255'],
            'option1' => ['required', 'string', 'max:255'],
            'option2' => ['required', 'string', 'max:255'],
            'option3' => ['required', 'string', 'max:255'],
            'classname' => ['required', 'string', 'max:255'],
            'is_correct' => ['required', 'string', 'max:255'],
            // 'duration' => ['required', 'string', 'max:255'],
            'term' => ['required', 'string', 'max:255'],
            
        ]);
        // dd($request->all());
        $add_question = new Question();
        $add_question->question = $request->question;
        $add_question->user_id = $request->user_id;
        // $add_question->user_id = $request->user_id;
        $add_question->opionitems = 'admin';
        $add_question->subjectname = $request->subjectname;
        $add_question->option1 = $request->option1;
        $add_question->option2 = $request->option2;
        $add_question->option3 = $request->option3;
        $add_question->classname = $request->classname;
        $add_question->is_correct = $request->is_correct;
        // $add_question->duration = $request->duration;
        $add_question->term = $request->term;
        
        $add_question->save();

        return redirect()->back()->with('success', 'you have added successfully');
    }
    public function questionbyadmin(){
    $view_questionsbyadmins = Question::where('user_id', auth::guard('web')->id())->latest()
    ->where('opionitems', 'admin')
    ->get();

    return view('dashboard.admin.questionbyadmin', compact('view_questionsbyadmins'));
    }

    public function viewsinglequestionz ($id){
        $view_singquestions = Question::find($id);
        return view('dashboard.admin.viewsinglequestionz', compact('view_singquestions'));
    }

    public function editquestionzadmin($id){
        $edit_singlequestionadmin = Question::find($id);
        return view('dashboard.admin.editquestionzadmin', compact('edit_singlequestionadmin'));
    }

    public function updateadminquestion(Request $request, $id){
        $edit_singlequestionadmin = Question::find($id);
        $request->validate([
            'question' => ['required', 'string', 'max:255'],
            'user_id' => ['required', 'string', 'max:255'],
            'subjectname' => ['required', 'string', 'max:255'],
            'option1' => ['required', 'string', 'max:255'],
            'option2' => ['required', 'string', 'max:255'],
            'option3' => ['required', 'string', 'max:255'],
            'classname' => ['required', 'string', 'max:255'],
            'is_correct' => ['required', 'string', 'max:255'],
            // 'duration' => ['required', 'string', 'max:255'],
            'term' => ['required', 'string', 'max:255'],
            
        ]);
        $edit_singlequestionadmin->question = $request->question;
        $edit_singlequestionadmin->user_id = $request->user_id;
        $edit_singlequestionadmin->subjectname = $request->subjectname;
        $edit_singlequestionadmin->option1 = $request->option1;
        $edit_singlequestionadmin->option2 = $request->option2;
        $edit_singlequestionadmin->option3 = $request->option3;
        $edit_singlequestionadmin->classname = $request->classname;
        $edit_singlequestionadmin->is_correct = $request->is_correct;
        // $edit_singlequestionadmin->duration = $request->duration;
        $edit_singlequestionadmin->term = $request->term;
        
        $edit_singlequestionadmin->update();

        return redirect()->back()->with('success', 'you have edited successfully');

    }

    public function questionzapprove ($id){
        $questions = Question::find($id);
        $questions->status = 'approved';
        $questions->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function questionzsunapprove($id){
        $questions = Question::find($id);
        $questions->status = 'unapproved';
        $questions->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function questiondelete($id){
        $deletequestios =Question::where('id', $id)->delete();
        return redirect()->back()->with('success', 'you have deleted successfully');
        
    }
    
    public function uyoquestions(){
        $view_uyoquestions = Question::where('centername', 'Uyo')->latest()
        ->where('opionitems', null)
        ->get();
    
        return view('dashboard.admin.uyoquestions', compact('view_uyoquestions'));
    }

    
    public function teachersquestion($user_id){
        $view_teachersquestions = Question::where('user_id', $user_id)
        ->where('opionitems', null)
        ->latest()->get();
        return view('dashboard.admin.teachersquestion', compact('view_teachersquestions'));
    }
    public function abujaquestions(){
        $view_abujaquestions = Question::where('centername', 'Abuja')
        ->where('opionitems', null)
        ->latest()->get();
        return view('dashboard.admin.abujaquestions', compact('view_abujaquestions'));
    }
    
}    


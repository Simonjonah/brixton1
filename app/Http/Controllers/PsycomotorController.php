<?php

namespace App\Http\Controllers;
use App\Models\Psycomotor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PsycomotorController extends Controller
{
    //
    public function createpsychomotoro(Request $request, $ref_no){
        $add_assignteacher = User::where('ref_no', $ref_no)->first();
        $request->validate([
            'user_id' => ['required', 'string', 'max:255'],
            // 'punt1' => ['nullable', 'string', 'max:255'],
            // 'punt2' => ['nullable', 'string', 'max:255'],
            // 'punt3' => ['nullable', 'string', 'max:255'],
            // 'punt4' => ['nullable', 'string', 'max:255'],
            // 'punt5' => ['nullable', 'string', 'max:255'],
            // 'section' => ['required', 'string', 'max:255'],
            // 'classname' => ['required', 'string', 'max:255'],
        ]);

        $add_assignteacher = new Psycomotor();
        $add_assignteacher->user_id = $request->user_id;
        $add_assignteacher->entrylevel = $request->entrylevel;
        $add_assignteacher->schoolopen = $request->schoolopen;
        $add_assignteacher->timespresent = $request->timespresent;
        $add_assignteacher->timeabsent = $request->timeabsent;
        
        
        $add_assignteacher->teacher_id = Auth::guard('web')->user()->id;
        $add_assignteacher->punt1 = $request->punt1;
        $add_assignteacher->punt2 = $request->punt2;
        $add_assignteacher->punt3 = $request->punt3;
        $add_assignteacher->punt4 = $request->punt4;
        $add_assignteacher->punt5 = $request->punt5;

        
        $add_assignteacher->mentalalert1 = $request->mentalalert1;
        $add_assignteacher->mentalalert2 = $request->mentalalert2;
        $add_assignteacher->mentalalert3 = $request->mentalalert3;
        $add_assignteacher->mentalalert4 = $request->mentalalert4;
        $add_assignteacher->mentalalert5 = $request->mentalalert5;

        $add_assignteacher->respect1 = $request->respect1;
        $add_assignteacher->respect2 = $request->respect2;
        $add_assignteacher->respect3 = $request->respect3;
        $add_assignteacher->respect4 = $request->respect4;
        $add_assignteacher->respect5 = $request->respect5;

        $add_assignteacher->neat1 = $request->neat1;
        $add_assignteacher->neat2 = $request->neat2;
        $add_assignteacher->neat3 = $request->neat3;
        $add_assignteacher->neat4 = $request->neat4;
        $add_assignteacher->neat5 = $request->neat5;

        $add_assignteacher->polite1 = $request->polite1;
        $add_assignteacher->polite2 = $request->polite2;
        $add_assignteacher->polite3 = $request->polite3;
        $add_assignteacher->polite4 = $request->polite4;
        $add_assignteacher->polite5 = $request->polite5;

        $add_assignteacher->honesty1 = $request->honesty1;
        $add_assignteacher->honesty2 = $request->honesty2;
        $add_assignteacher->honesty3 = $request->honesty3;
        $add_assignteacher->honesty4 = $request->honesty4;
        $add_assignteacher->honesty5 = $request->honesty5;

        $add_assignteacher->relationship1 = $request->relationship1;
        $add_assignteacher->relationship2 = $request->relationship2;
        $add_assignteacher->relationship3 = $request->relationship3;
        $add_assignteacher->relationship4 = $request->relationship4;
        $add_assignteacher->relationship5 = $request->relationship5;
    
        $add_assignteacher->williness1 = $request->williness1;
        $add_assignteacher->williness2 = $request->williness2;
        $add_assignteacher->williness3 = $request->williness3;
        $add_assignteacher->williness4 = $request->williness4;
        $add_assignteacher->williness5 = $request->williness5;

        $add_assignteacher->teamspirit1 = $request->teamspirit1;
        $add_assignteacher->teamspirit2 = $request->teamspirit2;
        $add_assignteacher->teamspirit3 = $request->teamspirit3;
        $add_assignteacher->teamspirit4 = $request->teamspirit4;
        $add_assignteacher->teamspirit5 = $request->teamspirit5;

        $add_assignteacher->verbal1 = $request->verbal1;
        $add_assignteacher->verbal2 = $request->verbal2;
        $add_assignteacher->verbal3 = $request->verbal3;
        $add_assignteacher->verbal4 = $request->verbal4;
        $add_assignteacher->verbal5 = $request->verbal5;
        $add_assignteacher->teacher_comment = $request->teacher_comment;

        $add_assignteacher->sports1 = $request->sports1;
        $add_assignteacher->sports2 = $request->sports2;
        $add_assignteacher->sports3 = $request->sports3;
        $add_assignteacher->sports4 = $request->sports4;
        $add_assignteacher->sports5 = $request->sports5;

        $add_assignteacher->arts1 = $request->arts1;
        $add_assignteacher->arts2 = $request->arts2;
        $add_assignteacher->arts3 = $request->arts3;
        $add_assignteacher->arts4 = $request->arts4;
        $add_assignteacher->arts5 = $request->arts5;

        $add_assignteacher->creativity1 = $request->creativity1;
        $add_assignteacher->creativity2 = $request->creativity2;
        $add_assignteacher->creativity3 = $request->creativity3;
        $add_assignteacher->creativity4 = $request->creativity4;
        $add_assignteacher->creativity5 = $request->creativity5;
        
        $add_assignteacher->music1 = $request->music1;
        $add_assignteacher->music2 = $request->music2;
        $add_assignteacher->music3 = $request->music3;
        $add_assignteacher->music4 = $request->music4;
        $add_assignteacher->music5 = $request->music5;

        $add_assignteacher->dance1 = $request->dance1;
        $add_assignteacher->dance2 = $request->dance2;
        $add_assignteacher->dance3 = $request->dance3;
        $add_assignteacher->dance4 = $request->dance4;
        $add_assignteacher->dance5 = $request->dance5;

        $add_assignteacher->save();

        return redirect()->back()->with('success', 'you have added successfully');
    }

    public function viewpschomotor(){
        // $view_teachersubjects = Psycomotor::all();
        $view_psychomotors = Psycomotor::where('teacher_id', auth::guard('web')->id())->get();
        return view('dashboard.admin.viewpschomotor', compact('view_psychomotors'));
    }
}

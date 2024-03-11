<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studycenter;
use App\Models\Classname;
use App\Models\Academicsession;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;
class StudycenterController extends Controller
{
    //

    public function studycenter1(){

        return view('dashboard.admin.studycenter1');
    }

   

    public function createstudycenter(Request $request){
        //create method
        $request->validate([
            'centername' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'section' => ['required', 'string', 'max:255'],


        ]);
        $reg_studycenter = new Studycenter();
        $reg_studycenter->centername = $request->centername;
        $reg_studycenter->address = $request->address;
        $reg_studycenter->section = $request->section;
        $reg_studycenter->slug = SlugService::createSlug(Studycenter::class, 'slug', $request->centername);
        $reg_studycenter->save();
 
        if ($reg_studycenter) {
            return redirect()->back()->with('success', 'you have successfully registered');
                
            }else{
                return redirect()->back()->with('error', 'you have fail to registered');
        }
    }

    public function studycentertables(){
        $study_centertables = Studycenter::all();
        return view('dashboard.admin.studycentertables', compact('study_centertables'));
    }

    public function studycentapproved($id){
        $approve_syudycenters = Studycenter::where('id', $id)->first();
        $approve_syudycenters->status = 'approved';
        $approve_syudycenters->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function studycentsuspend($id){
        $approve_syudycenters = Studycenter::where('id', $id)->first();
        $approve_syudycenters->status = 'suspend';
        $approve_syudycenters->save();
        return redirect()->back()->with('success', 'you have suspended successfully');
    }

    public function studycentdelete($id){
        $approve_syudycenters = Studycenter::where('id', $id)->delete();
      
        return redirect()->back()->with('success', 'you have deleted successfully');
    }

    public function admissionform($slug){
        $centerviews = Studycenter::where('slug', $slug)->first();
        $add_class = Classname::all();

        $view_sessions = Academicsession::orderBy('created_at', 'DESC')
        ->take(1)->get();
        return view('pages.admissionform', compact('view_sessions', 'add_class', 'centerviews'));
        
    }

    public function viewparents($centername){
        $centerviews = Studycenter::where('centername', $centername)->first();
       
        $view_parents = User::where('centername', $centername)->where('assign', 'parent')->get();
        return view('dashboard.admin.viewparents', compact('view_parents', 'centerviews'));
        
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Query;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class QueryController extends Controller
{
    //
    public function addquerytoteacher (Request $request, $ref_no){
        $add_query = User::where('ref_no', $ref_no)->first();
        $request->validate([
            'user_id' => ['required', 'string', 'max:255'],
           
            'querytitle' => ['required', 'string', 'max:255'],
            'messages' => ['required', 'string'],
            
        ]);
        $add_query = new Query();
        $add_query->user_id = $request->user_id;
       
        $add_query->images = $request->images;
        $add_query->querytitle = $request->querytitle;
        $add_query->messages = $request->messages;
        $add_query->save();
        if ($add_query) {
            return redirect()->back()->with('success', 'you have added successfully');
            
        }else{
            return redirect()->back()->with('fail', 'you have not added successfully');
        }

    }

    public function queriedteachers(){
        $queried_teachers = Query::where('status', null)->get();
        return view('dashboard.admin.queriedteachers', compact('queried_teachers'));
    }

    public function printquery($id){
        $print_query = Query::find($id);
        return view('dashboard.admin.printquery', compact('print_query'));
    }

    public function viewteacherquery($id){
        $view_query = Query::find($id);
        return view('dashboard.admin.viewteacherquery', compact('view_query'));
    }

    public function checkyourquery(){
        $view_queries = Query::where('user_id', auth::guard('web')->id())->get();
        return view('dashboard.checkyourqyuery', compact('view_queries'));
    }
    public function viewquery($id){
        $view_singlequeries = Query::find($id);
        $countquery = Query::where('user_id', auth::guard('web')->id())
        
        ->where('status', null)->count();

        $countqueryreply = Query::where('user_id', auth::guard('web')->id())
        ->where('status', 'reply')
        ->count();
        return view('dashboard.viewquery', compact('countqueryreply','countquery', 'view_singlequeries'));
    }
    public function queryrepliedview(){
       
        $view_replies = Query::where('user_id', auth::guard('web')->id())
        ->where('status', 'reply')->get();
        return view('dashboard.queryrepliedview', compact('view_replies'));
    }
    
    public function viewqueryreply($id){
        $reply_singlequeries = Query::find($id);
        $countqueryreply = Query::where('user_id', auth::guard('web')->id())
        ->where('status', 'reply')
        ->count();
        $querys = Query::where('user_id', auth::guard('web')->id())
        ->where('status', null)
        ->count();
        return view('dashboard.viewqueryreply', compact('countqueryreply', 'querys', 'reply_singlequeries'));
    }

    // public function queriedteachers(){
    //     $queried_teachers = Query::all();
    //     return view('dashboard.admin.queriedteachers', compact('queried_teachers'));
    // }

    public function replyquery(Request $request, $id){
        $reply_singlequeries = Query::find($id);
        $request->validate([
            // 'user_id' => ['required', 'string', 'max:255'],
           
            'querytitle' => ['required', 'string', 'max:255'],
            'messages' => ['required', 'string'],
            
        ]);
        $reply_singlequeries = new Query();
        $reply_singlequeries->user_id = Auth::guard('web')->user()->id;
       
        $reply_singlequeries->images = Auth::guard('web')->user()->images;
        $reply_singlequeries->querytitle = $request->querytitle;
        $reply_singlequeries->messages = $request->messages;
        $reply_singlequeries->status = 'reply';
        $reply_singlequeries->save();
        if ($reply_singlequeries) {
            return redirect()->back()->with('success', 'you have added successfully');
            
        }else{
            return redirect()->back()->with('fail', 'you have not added successfully');
        }

    }

 
   public function printquery1($id){
        $prints_queries = Query::find($id);
        return view('dashboard.printquery1', compact('prints_queries'));
    }
    
    public function queriedteachersreply(){
        $queried_replied = Query::where('status', 'reply')->get();
        return view('dashboard.admin.queriedteachersreply', compact('queried_replied'));
    }
    
    
}

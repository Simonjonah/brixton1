<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club1;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
class Club1Controller extends Controller
{
    //
    //
    public function addclubs1(){
        return view('dashboard.admin.addclubs1');
    }

    public function viewclubs(){
        $view_clubs = Club1::latest()->get();
        return view('dashboard.admin.viewclubs', compact('view_clubs'));
    }

    public function clubedelete($ref_no){
        $edit_club = Club1::where('ref_no', $ref_no)->delete();
        return redirect()->back()->with('success', 'you have deleted succsessfully');
    }
    
    public function clubedit($ref_no){
        $edit_club = Club1::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.clubedit', compact('edit_club'));
    }

    

    
    public function createtclub1(Request $request){
        $request->validate([
            
            'clubname' => ['required', 'string', 'max:255'],
           
            'messages' => ['required', 'string', 'max:255'],
            'images' => 'nullable|mimes:jpg,png,jpeg'

        ]);
        // dd($request->all());
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }
        $addclub = new Club1();
        $addclub['images'] = $path;
        $addclub->slug = SlugService::createSlug(Club1::class, 'slug', $request->clubname);
        $addclub->ref_no = substr(rand(0,time()),0, 9);
        $addclub->clubname = $request->clubname;
        $addclub->messages = $request->messages;
        $addclub->save();
        if ($addclub) {
            return redirect()->back()->with('success', 'You have successfully registering');
        }
        return redirect()->back()->with('error', 'You have not successfully registering');

    }

    public function updateclub(Request $request, $ref_no){
        $edit_club = Club1::where('ref_no', $ref_no)->first();

        $request->validate([
            
            'clubname' => ['required', 'string', 'max:255'],
           
            'messages' => ['required', 'string', 'max:255'],
            'images' => 'nullable|mimes:jpg,png,jpeg'

        ]);
        // dd($request->all());
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }
        $edit_club['images'] = $path;
        $edit_club->clubname = $request->clubname;
        $edit_club->messages = $request->messages;
        $edit_club->update();
        if ($edit_club) {
            return redirect()->back()->with('success', 'You have successfully updated');
        }
        return redirect()->back()->with('error', 'You have not successfully updated');

    }

    public function clubeapproved($ref_no){
        $approve_club = Club1::where('ref_no', $ref_no)->first();
        $approve_club->status = 'approved';
        $approve_club->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function clubesuspend($ref_no){
        $approve_club = Club1::where('ref_no', $ref_no)->first();
        $approve_club->status = 'suspend';
        $approve_club->save();
        return redirect()->back()->with('success', 'you have suspend successfully');
    }
    
    

    
}

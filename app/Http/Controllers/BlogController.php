<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;
use PDF;

class BlogController extends Controller
{
    //
    public function addblog(){

        return view('dashboard.admin.addblog');
    }

    public function createblog (Request $request){
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'messages' => ['required', 'string'],
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
        $add_blog = new Blog;
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }
        $add_blog['images'] = $path;
        $add_blog->slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        $add_blog->title = $request->title;
        $add_blog->messages = $request->messages;
        $add_blog->ref_no = substr(rand(0,time()),0, 9);
        $add_blog->save();

        return redirect()->back()->with('success', 'you have added successfully');

    }

    public function viewblog(){
        $view_blogs = Blog::latest()->paginate(10);
        return view('dashboard.admin.viewblog', compact('view_blogs'));
    }

    public function blogview($ref_no){
        $viewsingle_blogs = Blog::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.blogview', compact('viewsingle_blogs'));
    }

    public function blogedit($ref_no){
        $edit_blogs = Blog::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.blogedit', compact('edit_blogs'));
    }
    public function updateblog(Request $request, $ref_no){
        $edit_blogs = Blog::where('ref_no', $ref_no)->first();

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'messages' => ['required', 'string'],
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
      
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }
        $edit_blogs['images'] = $path;
        $edit_blogs->title = $request->title;
        $edit_blogs->messages = $request->messages;
        $edit_blogs->slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        $edit_blogs->update();

        return redirect()->back()->with('success', 'you have added successfully');

    }

    public function blogeapproved($ref_no){
        $approve_blog = Blog::where('ref_no', $ref_no)->first();
        $approve_blog->status = 'approved';
        $approve_blog->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function blogesuspend($ref_no){
        $approve_blog = Blog::where('ref_no', $ref_no)->first();
        $approve_blog->status = 'suspend';
        $approve_blog->save();
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function blogedelete($ref_no){
        $delete_blog = Blog::where('ref_no', $ref_no)->delete();
       
        return redirect()->back()->with('success', 'you have approved successfully');
    }

    public function singleblog($slug){
        $sigle_blogs = Blog::where('slug', $slug)->first();
        $all_blogs = Blog::latest()->where('status', 'approved')->get();

        return view('pages.singleblog', compact('sigle_blogs', 'all_blogs'));
    }
    

public function search(Request $request){
    $searchQuery = $request->input('title');

    $posts = Blog::where('title', 'like', '%' . $searchQuery . '%')
                 ->orWhere('messages', 'like', '%' . $searchQuery . '%')
                 ->get();
                 
              
    return view('pages.results', ['posts' => $posts]);
}

    
}

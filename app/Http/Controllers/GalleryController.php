<?php
namespace App\Http\Controllers;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
  
    public function addgallery(){

        return view('dashboard.admin.addgallery');
    }

    public function createtgallery(Request $request){
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
        $add_event = new Gallery;
        if ($request->hasFile('images')){
            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }
        $add_event['images'] = $path;
        $add_event->title = $request->title;
        // $add_event->messages = $request->messages;
        $add_event->save();

        return redirect()->back()->with('success', 'you have added successfully');

    }
    public function viewgallery(){
        $view_galleries = Gallery::latest()->get();
        return view('dashboard.admin.viewgallery', compact('view_galleries'));
    }

    public function galleryedit($id){
        $edit_gallery = Gallery::where('id', $id)->first();
        return view('dashboard.admin.galleryedit', compact('edit_gallery'));
    }


    public function updategallery(Request $request, $id){
        $edit_gallery = Gallery::where('id', $id)->first();

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
      
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);
            $edit_gallery->images = $path;

        }
        $edit_gallery->title = $request->title;
        
        $edit_gallery->update();

        return redirect()->back()->with('success', 'you have added successfully');

    }
    public function gallerydelete($id){
        $facility_delete = Gallery::find($id)->delete();
        return redirect()->back()->with('success', 'you have deleted successfully');
    }

    
}

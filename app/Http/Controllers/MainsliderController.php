<?php

namespace App\Http\Controllers;

use App\Models\Mainslider;
use Illuminate\Http\Request;

class MainsliderController extends Controller
{
    //

    public function addmainslider(){

        return view('dashboard.admin.addmainslider');
    }
    public function createteslider (Request $request){
        $request->validate([
            'facts' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'centername' => ['required', 'string', 'max:255'],
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
        $add_slider = new Mainslider();
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }
        $add_slider['images'] = $path;
        $add_slider->facts = $request->facts;
        $add_slider->name = $request->name;
        $add_slider->centername = $request->centername;
        $add_slider->save();

        return redirect()->back()->with('success', 'you have added successfully');

    }

    public function viewmainslider(){
        $view_sliders = Mainslider::orderby('created_at', 'DESC')->get();
        return view('dashboard.admin.viewmainslider', compact('view_sliders'));
    }

    public function slideredit($id){
        $edit_sliders = Mainslider::find($id);
        return view('dashboard.admin.slideredit', compact('edit_sliders'));
    }

    public function updateslider(Request $request, $id){
        $edit_sliders = Mainslider::find($id);
        $request->validate([
            'facts' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'centername' => ['required', 'string', 'max:255'],
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
       
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }
        $edit_sliders['images'] = $path;
        $edit_sliders->facts = $request->facts;
        $edit_sliders->name = $request->name;
        $edit_sliders->centername = $request->centername;
        $edit_sliders->update();

        return redirect()->back()->with('success', 'you have added successfully');

    }
    public function slideredelete($id){
        $delete_slider = Mainslider::where('id', $id)->delete();
       
        return redirect()->back()->with('success', 'you have deleted successfully');
    }
   
    
}

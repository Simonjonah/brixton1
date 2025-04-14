<?php

namespace App\Http\Controllers;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    //
    public function addfacility(){

        return view('dashboard.admin.addfacility');
    }
    public function createfacility(Request $request){
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'messages' => ['required', 'string', 'max:255'],
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
        $add_facility = new Facility;
        if ($request->hasFile('images')){
            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);

        }
        $add_facility['images'] = $path;
        $add_facility->title = $request->title;
        $add_facility->messages = $request->messages;
        $add_facility->save();

        return redirect()->back()->with('success', 'you have added successfully');

    }

    public function viewfacility(){
        $view_facilities = Facility::latest()->get();
        return view('dashboard.admin.viewfacility', compact('view_facilities'));
    }

    
    public function facilityedit($id){
        $edit_facility = Facility::find($id);
        return view('dashboard.admin.facilityedit', compact('edit_facility'));
    }
    public function updatefacility(Request $request, $id){
        $edit_facility = Facility::where('id', $id)->first();

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'messages' => ['required', 'string', 'max:255'],
            'images' => 'nullable|mimes:jpg,png,jpeg'
        ]);
      
        if ($request->hasFile('images')){

            $file = $request['images'];
            $filename = 'SimonJonah-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $request->file('images')->storeAs('resourceimages', $filename);
            $edit_facility->images = $path;

        }
        // $edit_facility['images'] = $path;
        $edit_facility->title = $request->title;
        $edit_facility->messages = $request->messages;
        $edit_facility->update();

        return redirect()->back()->with('success', 'you have added successfully');

    }

    
    public function facilitydelete($id){
        $facility_delete = Facility::where('id', $id)->delete();
        return redirect()->back()->with('success', 'you have deleted successfully');
    }
    
}

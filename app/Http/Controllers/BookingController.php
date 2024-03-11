<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //
    public function createbooking (Request $request){
        $request->validate([
            'email' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
        ]);
        $add_slider = new Booking();
        
        $add_slider->email = $request->email;
        $add_slider->name = $request->name;
        $add_slider->phone = $request->phone;
        $add_slider->save();

        return redirect()->back()->with('success', 'you have added successfully');

    }

    public function viewbookings(){
        $view_bookings = Booking::all();
        return view('dashboard.admin.viewbookings', compact('view_bookings'));
    }
    public function bookingdelete($id){
        $view_bookings = Booking::where('id', $id)->delete();
        return redirect()->back()->with('success', 'you have added successfully');
    }
    
}

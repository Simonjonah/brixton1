<?php

namespace App\Http\Controllers;

use App\Models\Classname;
use App\Models\Payment;
use App\Models\Studycenter;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function addpayment(){
        $view_centers = Studycenter::all();
        $view_classnames = Classname::all();

        return view('dashboard.admin.addpayment', compact('view_classnames', 'view_centers'));
    }

    public function createpayment(Request $request){
        $request->validate([
            'amount' => ['required', 'string', 'max:255'],
            'centername' => ['nullable', 'string', 'max:255'],
            'entrylevel' => ['required', 'string', 'max:255'],
            'classname' => ['required', 'string', 'max:255'],
        ]);


        $add_payments = new Payment();
        $add_payments->amount = $request->amount;
        $add_payments->centername = $request->centername;
        $add_payments->classname = $request->classname;
        $add_payments->entrylevel = $request->entrylevel;
        $add_payments->save();
        return redirect()->back()->with('success', 'You have added school fees successfully');

        //return view('dashboard.admin.addpayment', compact('view_classnames', 'view_centers'));
    }

    public function viewallpayments(){
        $viewall_payments = Payment::latest()->get();
        return view('dashboard.admin.viewallpayments', compact('viewall_payments'));
    }

    public function printpdfs (){
        
        return view('dashboard.admin.printpdfs');
    }
}

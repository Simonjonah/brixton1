<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Auth;
class TransactionController extends Controller
{
    //
    public function paymenthistory(){
        $getyour_payments = Transaction::where('user_id', auth::guard('web')->id())
         ->get();
        return view('dashboard.paymenthistory', compact('getyour_payments'));
    }


    public function viewpayment1($id){
        $view_payment = Transaction::find($id);
        return view('dashboard.viewpayment1', compact('view_payment'));
    }

    public function viewpayment1s($student_id){
        $getyour_payments = Transaction::where('student_id', $student_id)
         ->get();
        return view('dashboard.viewpayment1s', compact('getyour_payments'));
    }
    public function paymentspdf($id){
        $print_payments = Transaction::find($id);
        return view('dashboard.paymentspdf', compact('print_payments'));
    }

    public function viewuyopayment(){
        $viewuyo_payments = Transaction::where('centername', 'Uyo')->latest()->get();
        return view('dashboard.admin.viewuyopayment', compact('viewuyo_payments'));
    }
    public function abujapayment(){
        $viewabj_payments = Transaction::where('centername', 'Abuja')->latest()->get();
        return view('dashboard.admin.abujapayment', compact('viewabj_payments'));
    }
    

    public function viewsfees($ref_no){
        $singleviewuyo_payment = Transaction::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.viewsfees', compact('singleviewuyo_payment'));
    }

    public function print1stinglepaymentspdf($ref_no){
        $prinfirsrtsingle_payments = Transaction::where('ref_no', $ref_no)->first();
        return view('dashboard.admin.print1stinglepaymentspdf', compact('prinfirsrtsingle_payments'));
    }

    public function print1stinglepaymentspdfgf(){
        $printalluyo_payments = Transaction::where('centername', 'Uyo')->get();
        return view('dashboard.admin.print1stinglepaymentspdfgf', compact('printalluyo_payments'));
    }
    

    public function print1stinglepaymentspdfgabj(){
        $printalluyo_payments = Transaction::where('centername', 'Abuja')->get();
        return view('dashboard.admin.print1stinglepaymentspdfgabj', compact('printalluyo_payments'));
    }


    
    public function viewallbyheadspayment(){
        $getyour_payments = Transaction::latest()->get();
        return view('dashboard.viewallbyheadspayment', compact('getyour_payments'));
    }
    
    

    
    
    

    
}

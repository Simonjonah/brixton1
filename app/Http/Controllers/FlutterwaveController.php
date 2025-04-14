<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use KingFlamez\Rave\Facades\Rave as Flutterwave;
use Illuminate\Support\Facades\Auth;
class FlutterwaveController extends Controller
{
    /**
     * Initialize Rave payment process
     * @return void
     */
    public function initialize()
    {
        //This generates a payment reference
        $reference = Flutterwave::generateReference();

        // Enter the details of the payment
        $data = [
            'payment_options' => 'card,banktransfer',
            'amount' => request()->amount,
            'email' => request()->email,
            'tx_ref' => $reference,
            'currency' => "NGN",
            'redirect_url' => route('callback'),

            'customer' => [
                'email' => request()->email,
                "phone_number" => request()->phone,
                "name" => request()->name,
                "classname" => request()->classname,
                // "entrylevel" => request()->entrylevel,
                "user_id" => request()->user_id,
                "student_id" => request()->student_id,

                "payment_id" => request()->payment_id,
                
            ],

            "meta" => [
                'student_id' => request()->student_id,
                'user_id' => request()->user_id,
                'email' => request()->email,
                'amount' => request()->amount,
              
                "phone" => request()->phone,
                "fname" => request()->fname,
                "surname" => request()->surname,
                "middlename" => request()->middlename,
                "centername" => request()->centername,
                // 'entrylevel' => request()->entrylevel,
                'classname' => request()->classname,
               
                "payment_id" => request()->payment_id,

            ],

            "customizations" => [
                "title" => 'School Levies',
                "description" => "Payments"
            ]
        ];

        $payment = Flutterwave::initializePayment($data);


        if ($payment['status'] !== 'success') {
            // notify something went wrong
            return;
        }

        return redirect($payment['data']['link']);
    }

    /**
     * Obtain Rave callback information
     * @return void
     */
    public function callback()
    {
        
        $status = request()->status;

        //if payment is successful
        if ($status ==  'successful') {
        
        $transactionID = Flutterwave::getTransactionIDFromCallback();
        $data = Flutterwave::verifyTransaction($transactionID);

        // dd($data);
        
            $schoolfeespayment = new Transaction();
            $schoolfeespayment->student_id = $data['data']['meta']['student_id'];
            $schoolfeespayment->payment_id = $data['data']['meta']['payment_id'];
            $schoolfeespayment->user_id = Auth::guard('web')->user()->id;
            $schoolfeespayment->amount = $data['data']['meta']['amount'];
            
           
            $schoolfeespayment->phone = $data['data']['meta']['phone'];
            $schoolfeespayment->email = $data['data']['meta']['email'];
            $schoolfeespayment->classname = $data['data']['meta']['classname'];

            $schoolfeespayment->fname = $data['data']['meta']['fname'];
            $schoolfeespayment->surname = $data['data']['meta']['surname'];
            $schoolfeespayment->middlename = $data['data']['meta']['middlename'];
            $schoolfeespayment->centername = $data['data']['meta']['centername'];
            
            $schoolfeespayment->first_6digits = $data['data']['card']['first_6digits'];
            $schoolfeespayment->last_4digits = $data['data']['card']['last_4digits'];
            $schoolfeespayment->issuer = $data['data']['card']['issuer'];
            $schoolfeespayment->country = $data['data']['card']['country'];
            $schoolfeespayment->type = $data['data']['card']['type'];
            $schoolfeespayment->token = $data['data']['card']['token'];
            $schoolfeespayment->expiry = $data['data']['card']['expiry'];

            $schoolfeespayment->tx_ref = $data['data']['tx_ref'];
            $schoolfeespayment->flw_ref = $data['data']['flw_ref'];
            $schoolfeespayment->device_fingerprint = $data['data']['device_fingerprint'];
            $schoolfeespayment->currency = $data['data']['currency'];
            $schoolfeespayment->charged_amount = $data['data']['charged_amount'];
            $schoolfeespayment->app_fee = $data['data']['app_fee'];
            $schoolfeespayment->merchant_fee = $data['data']['merchant_fee'];
            $schoolfeespayment->processor_response = $data['data']['processor_response'];
            $schoolfeespayment->auth_model = $data['data']['auth_model'];
            $schoolfeespayment->ip = $data['data']['ip'];
            $schoolfeespayment->narration = $data['data']['narration'];
            $schoolfeespayment->status = $data['data']['status'];
            $schoolfeespayment->payment_type = $data['data']['payment_type'];
            $schoolfeespayment->account_id = $data['data']['account_id'];
            
            
            $schoolfeespayment->ref_no = substr(rand(0,time()),0, 9);
            $schoolfeespayment->save();

            return view('dashboard.thankyou');
    }
        elseif ($status ==  'cancelled'){
            //Put desired action/code after transaction has been cancelled here
            return redirect()->back();
        }
        else{
            //Put desired action/code after transaction has failed here
        }
       

    }
}
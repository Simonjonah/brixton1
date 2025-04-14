<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use Illuminate\Http\Request;
use Auth;

class MotoController extends Controller
{
    //

    public function createpsychomotoro1(Request $request){
        //dd($request->all());
          
          $request->validate([
              'punt1' => ['nullable', 'string', 'max:255'],
              
          ]);


          if (Auth::guard('web')->user()->section == 'High School') {
            $add_assignteacher = new Moto();
            $add_assignteacher->user_id = $request->user_id;
            $add_assignteacher->teacher_id = $request->teacher_id;
            $add_assignteacher->regnumber = $request->regnumber;
            $add_assignteacher->academic_session = $request->academic_session;
            $add_assignteacher->entrylevel = $request->entrylevel;
            $add_assignteacher->classname = $request->classname;
            $add_assignteacher->section = $request->section;
            $add_assignteacher->schoolopen = $request->schoolopen;
            $add_assignteacher->timespresent = $request->timespresent;
            $add_assignteacher->timeabsent = $request->timeabsent;
            
            $add_assignteacher->headteacher_comment = $request->headteacher_comment;
            $add_assignteacher->nextterm = $request->nextterm;
   
           $add_assignteacher->punt1 = $request->punt1;
           $add_assignteacher->punt2 = $request->punt2;
           
             $add_assignteacher->mentalalert1 = $request->mentalalert1;
             $add_assignteacher->mentalalert2 = $request->mentalalert2;
             
             $add_assignteacher->work1 = $request->work1;
             $add_assignteacher->work2 = $request->work2;
             
     
             $add_assignteacher->neat1 = $request->neat1;
             $add_assignteacher->neat2 = $request->neat2;

             $add_assignteacher->self1 = $request->self1;
             $add_assignteacher->self2 = $request->self2;
             
     
             $add_assignteacher->honesty1 = $request->honesty1;
             $add_assignteacher->honesty2 = $request->honesty2;
            
     
             $add_assignteacher->rely1 = $request->rely1;
             $add_assignteacher->rely2 = $request->rely2;
             
         
             $add_assignteacher->init1 = $request->init1;
             $add_assignteacher->init2 = $request->init2;
             
     
             $add_assignteacher->per1 = $request->per1;
             $add_assignteacher->per2 = $request->per2;
             
     
             $add_assignteacher->verbal1 = $request->verbal1;
             $add_assignteacher->verbal2 = $request->verbal2;

             $add_assignteacher->social1 = $request->social1;
             $add_assignteacher->social2 = $request->social2;
             
             $add_assignteacher->sports1 = $request->sports1;
             $add_assignteacher->sports2 = $request->sports2;
             
     
             $add_assignteacher->atten1 = $request->atten1;
             $add_assignteacher->atten2 = $request->atten2;
             
     
             $add_assignteacher->attentiveness1 = $request->attentiveness1;
             $add_assignteacher->attentiveness2 = $request->attentiveness2;
            
             
             $add_assignteacher->hand1 = $request->hand1;
             $add_assignteacher->hand2 = $request->hand2;
             
     
             $add_assignteacher->tool1 = $request->tool1;
             $add_assignteacher->tool2 = $request->tool2;

             $add_assignteacher->dex1 = $request->dex1;
             $add_assignteacher->dex2 = $request->dex2;

             $add_assignteacher->court1 = $request->court1;
             $add_assignteacher->court2 = $request->court2;

             $add_assignteacher->dex1 = $request->dex1;
             $add_assignteacher->dex2 = $request->dex2;

             $add_assignteacher->consi1 = $request->consi1;
             $add_assignteacher->consi2 = $request->consi2;

             $add_assignteacher->property1 = $request->property1;
             $add_assignteacher->property2 = $request->property2;

             
             $add_assignteacher->pins = substr(rand(0,time()),0, 9);
             $add_assignteacher->save();
          }else

         $add_assignteacher = new Moto();

         $add_assignteacher->user_id = $request->user_id;
         $add_assignteacher->teacher_id = $request->teacher_id;
         $add_assignteacher->regnumber = $request->regnumber;
         $add_assignteacher->academic_session = $request->academic_session;
         $add_assignteacher->entrylevel = $request->entrylevel;
         $add_assignteacher->classname = $request->classname;
         $add_assignteacher->section = $request->section;
         $add_assignteacher->schoolopen = $request->schoolopen;
         $add_assignteacher->timespresent = $request->timespresent;
         $add_assignteacher->timeabsent = $request->timeabsent;
         
         $add_assignteacher->headteacher_comment = $request->headteacher_comment;
         $add_assignteacher->nextterm = $request->nextterm;

        $add_assignteacher->punt1 = $request->punt1;
        $add_assignteacher->punt2 = $request->punt2;
        $add_assignteacher->punt3 = $request->punt3;
        $add_assignteacher->punt4 = $request->punt4;
        $add_assignteacher->punt5 = $request->punt5;
  
          
          $add_assignteacher->mentalalert1 = $request->mentalalert1;
          $add_assignteacher->mentalalert2 = $request->mentalalert2;
          $add_assignteacher->mentalalert3 = $request->mentalalert3;
          $add_assignteacher->mentalalert4 = $request->mentalalert4;
          $add_assignteacher->mentalalert5 = $request->mentalalert5;
  
          $add_assignteacher->respect1 = $request->respect1;
          $add_assignteacher->respect2 = $request->respect2;
          $add_assignteacher->respect3 = $request->respect3;
          $add_assignteacher->respect4 = $request->respect4;
          $add_assignteacher->respect5 = $request->respect5;
  
          $add_assignteacher->neat1 = $request->neat1;
          $add_assignteacher->neat2 = $request->neat2;
          $add_assignteacher->neat3 = $request->neat3;
          $add_assignteacher->neat4 = $request->neat4;
          $add_assignteacher->neat5 = $request->neat5;
  
          $add_assignteacher->polite1 = $request->polite1;
          $add_assignteacher->polite2 = $request->polite2;
          $add_assignteacher->polite3 = $request->polite3;
          $add_assignteacher->polite4 = $request->polite4;
          $add_assignteacher->polite5 = $request->polite5;
  
          $add_assignteacher->honesty1 = $request->honesty1;
          $add_assignteacher->honesty2 = $request->honesty2;
          $add_assignteacher->honesty3 = $request->honesty3;
          $add_assignteacher->honesty4 = $request->honesty4;
          $add_assignteacher->honesty5 = $request->honesty5;
  
          $add_assignteacher->relationship1 = $request->relationship1;
          $add_assignteacher->relationship2 = $request->relationship2;
          $add_assignteacher->relationship3 = $request->relationship3;
          $add_assignteacher->relationship4 = $request->relationship4;
          $add_assignteacher->relationship5 = $request->relationship5;
      
          $add_assignteacher->williness1 = $request->williness1;
          $add_assignteacher->williness2 = $request->williness2;
          $add_assignteacher->williness3 = $request->williness3;
          $add_assignteacher->williness4 = $request->williness4;
          $add_assignteacher->williness5 = $request->williness5;
  
          $add_assignteacher->teamspirit1 = $request->teamspirit1;
          $add_assignteacher->teamspirit2 = $request->teamspirit2;
          $add_assignteacher->teamspirit3 = $request->teamspirit3;
          $add_assignteacher->teamspirit4 = $request->teamspirit4;
          $add_assignteacher->teamspirit5 = $request->teamspirit5;
  
          $add_assignteacher->verbal1 = $request->verbal1;
          $add_assignteacher->verbal2 = $request->verbal2;
          $add_assignteacher->verbal3 = $request->verbal3;
          $add_assignteacher->verbal4 = $request->verbal4;
          $add_assignteacher->verbal5 = $request->verbal5;
          // $add_assignteacher->teacher_comment = $request->teacher_comment;
  
          $add_assignteacher->sports1 = $request->sports1;
          $add_assignteacher->sports2 = $request->sports2;
          $add_assignteacher->sports3 = $request->sports3;
          $add_assignteacher->sports4 = $request->sports4;
          $add_assignteacher->sports5 = $request->sports5;
  
          $add_assignteacher->arts1 = $request->arts1;
          $add_assignteacher->arts2 = $request->arts2;
          $add_assignteacher->arts3 = $request->arts3;
          $add_assignteacher->arts4 = $request->arts4;
          $add_assignteacher->arts5 = $request->arts5;
  
          $add_assignteacher->creativity1 = $request->creativity1;
          $add_assignteacher->creativity2 = $request->creativity2;
          $add_assignteacher->creativity3 = $request->creativity3;
          $add_assignteacher->creativity4 = $request->creativity4;
          $add_assignteacher->creativity5 = $request->creativity5;
          
          $add_assignteacher->music1 = $request->music1;
          $add_assignteacher->music2 = $request->music2;
          $add_assignteacher->music3 = $request->music3;
          $add_assignteacher->music4 = $request->music4;
          $add_assignteacher->music5 = $request->music5;
          
          $add_assignteacher->paint1 = $request->paint1;
          $add_assignteacher->paint2 = $request->paint2;
          $add_assignteacher->paint3 = $request->paint3;
          $add_assignteacher->paint4 = $request->paint4;
          $add_assignteacher->paint5 = $request->paint5;
          $add_assignteacher->pins = substr(rand(0,time()),0, 9);
          $add_assignteacher->save();
  
        return redirect()->back()->with('success', 'you have added successfully');
    }




    public function createmidtermpsycho(Request $request){
      // dd($request->all());
      
        if (Auth::guard('web')->user()->section == 'High School') {
          $add_assignteacher = new Moto();
          $add_assignteacher->user_id = $request->user_id;
          $add_assignteacher->type = $request->type;
          $add_assignteacher->teacher_id = $request->teacher_id;
          $add_assignteacher->regnumber = $request->regnumber;
          $add_assignteacher->academic_session = $request->academic_session;
          $add_assignteacher->entrylevel = $request->entrylevel;
          $add_assignteacher->classname = $request->classname;
          $add_assignteacher->section = $request->section;
          $add_assignteacher->schoolopen = $request->schoolopen;
          $add_assignteacher->timespresent = $request->timespresent;
          $add_assignteacher->timeabsent = $request->timeabsent;
          
          $add_assignteacher->headteacher_comment = $request->headteacher_comment;
          $add_assignteacher->nextterm = $request->nextterm;

           $add_assignteacher->pins = substr(rand(0,time()),0, 9);
           $add_assignteacher->save();
        }else

       $add_assignteacher = new Moto();

       $add_assignteacher->user_id = $request->user_id;
       $add_assignteacher->type = $request->type;
       $add_assignteacher->teacher_id = $request->teacher_id;
       $add_assignteacher->regnumber = $request->regnumber;
       $add_assignteacher->academic_session = $request->academic_session;
       $add_assignteacher->entrylevel = $request->entrylevel;
       $add_assignteacher->classname = $request->classname;
       $add_assignteacher->section = $request->section;
       $add_assignteacher->schoolopen = $request->schoolopen;
       $add_assignteacher->timespresent = $request->timespresent;
       $add_assignteacher->timeabsent = $request->timeabsent;
       
       $add_assignteacher->headteacher_comment = $request->headteacher_comment;
       $add_assignteacher->nextterm = $request->nextterm;

      $add_assignteacher->punt1 = $request->punt1;
      $add_assignteacher->punt2 = $request->punt2;
      $add_assignteacher->punt3 = $request->punt3;
      $add_assignteacher->punt4 = $request->punt4;
      $add_assignteacher->punt5 = $request->punt5;

        
        $add_assignteacher->mentalalert1 = $request->mentalalert1;
        $add_assignteacher->mentalalert2 = $request->mentalalert2;
        $add_assignteacher->mentalalert3 = $request->mentalalert3;
        $add_assignteacher->mentalalert4 = $request->mentalalert4;
        $add_assignteacher->mentalalert5 = $request->mentalalert5;

        $add_assignteacher->respect1 = $request->respect1;
        $add_assignteacher->respect2 = $request->respect2;
        $add_assignteacher->respect3 = $request->respect3;
        $add_assignteacher->respect4 = $request->respect4;
        $add_assignteacher->respect5 = $request->respect5;

        $add_assignteacher->neat1 = $request->neat1;
        $add_assignteacher->neat2 = $request->neat2;
        $add_assignteacher->neat3 = $request->neat3;
        $add_assignteacher->neat4 = $request->neat4;
        $add_assignteacher->neat5 = $request->neat5;

        $add_assignteacher->polite1 = $request->polite1;
        $add_assignteacher->polite2 = $request->polite2;
        $add_assignteacher->polite3 = $request->polite3;
        $add_assignteacher->polite4 = $request->polite4;
        $add_assignteacher->polite5 = $request->polite5;

        $add_assignteacher->honesty1 = $request->honesty1;
        $add_assignteacher->honesty2 = $request->honesty2;
        $add_assignteacher->honesty3 = $request->honesty3;
        $add_assignteacher->honesty4 = $request->honesty4;
        $add_assignteacher->honesty5 = $request->honesty5;

        $add_assignteacher->relationship1 = $request->relationship1;
        $add_assignteacher->relationship2 = $request->relationship2;
        $add_assignteacher->relationship3 = $request->relationship3;
        $add_assignteacher->relationship4 = $request->relationship4;
        $add_assignteacher->relationship5 = $request->relationship5;
    
        $add_assignteacher->williness1 = $request->williness1;
        $add_assignteacher->williness2 = $request->williness2;
        $add_assignteacher->williness3 = $request->williness3;
        $add_assignteacher->williness4 = $request->williness4;
        $add_assignteacher->williness5 = $request->williness5;

        $add_assignteacher->teamspirit1 = $request->teamspirit1;
        $add_assignteacher->teamspirit2 = $request->teamspirit2;
        $add_assignteacher->teamspirit3 = $request->teamspirit3;
        $add_assignteacher->teamspirit4 = $request->teamspirit4;
        $add_assignteacher->teamspirit5 = $request->teamspirit5;

        $add_assignteacher->verbal1 = $request->verbal1;
        $add_assignteacher->verbal2 = $request->verbal2;
        $add_assignteacher->verbal3 = $request->verbal3;
        $add_assignteacher->verbal4 = $request->verbal4;
        $add_assignteacher->verbal5 = $request->verbal5;
        // $add_assignteacher->teacher_comment = $request->teacher_comment;

        $add_assignteacher->sports1 = $request->sports1;
        $add_assignteacher->sports2 = $request->sports2;
        $add_assignteacher->sports3 = $request->sports3;
        $add_assignteacher->sports4 = $request->sports4;
        $add_assignteacher->sports5 = $request->sports5;

        $add_assignteacher->arts1 = $request->arts1;
        $add_assignteacher->arts2 = $request->arts2;
        $add_assignteacher->arts3 = $request->arts3;
        $add_assignteacher->arts4 = $request->arts4;
        $add_assignteacher->arts5 = $request->arts5;

        $add_assignteacher->creativity1 = $request->creativity1;
        $add_assignteacher->creativity2 = $request->creativity2;
        $add_assignteacher->creativity3 = $request->creativity3;
        $add_assignteacher->creativity4 = $request->creativity4;
        $add_assignteacher->creativity5 = $request->creativity5;
        
        $add_assignteacher->music1 = $request->music1;
        $add_assignteacher->music2 = $request->music2;
        $add_assignteacher->music3 = $request->music3;
        $add_assignteacher->music4 = $request->music4;
        $add_assignteacher->music5 = $request->music5;
        
        $add_assignteacher->paint1 = $request->paint1;
        $add_assignteacher->paint2 = $request->paint2;
        $add_assignteacher->paint3 = $request->paint3;
        $add_assignteacher->paint4 = $request->paint4;
        $add_assignteacher->paint5 = $request->paint5;
        $add_assignteacher->pins = substr(rand(0,time()),0, 9);
        $add_assignteacher->save();

      return redirect()->back()->with('success', 'you have added successfully');
  }

    

}

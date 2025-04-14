<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use App\Models\Studycenter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    //
  


   

    public function assignrole(){
       

        return view('dashboard.admin.assignrole');
    }

   
    
        
}


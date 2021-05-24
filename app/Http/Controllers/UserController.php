<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\profile;

class UserController extends Controller
{
    //
    public function index() { 

        return view('multi-step-form'); 
       }  
  
       public function store(Request $request) { 
        $profiles = new profile;
        $profiles->name = $request->name;
        $profiles->description = $request->desc;
        $profiles->pappointment = $request->Appointment;
        $profiles->price = $request->price;
        $profiles->hours = $request->hours;
        $profiles->save();
        echo"Hii this is the";
        
       // return response()->json(['result'=>'Form is successfully submitted!']);
  
      }
  }




<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    //
    public function index() { 

        return view('multi-step-form'); 
       }  
  
       public function store(Request $request) { 
        $users = new User;
        
  
        $users->name = $request->name;
        $users->description = $request->desc;
        $users->pappointment = $request->Appointment;
        $users->price = $request->price;
        $users->hours = $request->hours;
  
        $users->save();
        echo"Hii this is the";
        
       // return response()->json(['result'=>'Form is successfully submitted!']);
  
      }
  }




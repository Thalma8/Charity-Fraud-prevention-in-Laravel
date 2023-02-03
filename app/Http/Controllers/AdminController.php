<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\verified;

class AdminController extends Controller
{
   public function addview()
   {
    return view('admin.add_verified_groups');
   }
   public function upload (Request $request)
   { 
   $verified=new verified;
   $image = $request->file;
   $imagename=time().'.'.$image->getClientoriginalExtension();
   $request->file->move('verifiedimage',$imagename);

   $verified->image=$imagename;

   $verified->name=$request->name;
   $verified->phone=$request->phone;
   
   $verified->location=$request->location;
   
   $verified->website=$request->website;

   $verified->email=$request->email;

   $verified->speciality=$request->speciality;
   

   $verified -> save();
   return redirect()->back()->with('message','New Charity Group Added Successfully');
   }
}

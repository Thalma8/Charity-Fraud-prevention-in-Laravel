<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\verified;
use App\Models\reports;
use App\Models\requests;
use Notification;
use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
   public function addview()
   {
    if(Auth::id())
    {
      if(Auth::user()->usertype==1)
      {
         return view('admin.add_verified_groups');
      }
      else{
         return redirect()->back();
      }
    }
    else 
    {
      return redirect('login');
    }
   
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
   public function showrequests()
   {
      $data=requests::all();
      return view('admin.showrequests',compact('data'));
   }
   
   public function accepted($id)
   {
      $data=requests::find($id);
      $data-> status='Accepted';
      $data->save();
      return redirect()->back();
      
   }
   public function denied($id)
   {
      $data=requests::find($id);
      $data-> status='Denied';
      $data->save();
      return redirect()->back();
      
   }
   public function showverified_groups()
   {
      $data = verified::all();
      return view('admin.showverified_groups',compact('data'));
   }
   public function revokeveri($id)
   {
      $data = verified::find($id);
      $data -> delete();
      return redirect()->back();
   }
   public function updateverified($id)
   {
      $data = verified::find($id);
      return view('admin.updateverified',compact('data'));
   }
   public function editveri(Request $request , $id)
   {
      $verified = verified::find($id);
      $verified ->name=$request->name;
      $verified ->phone=$request->phone;
      $verified ->location=$request->location;
      $verified ->speciality=$request->speciality;
      $verified ->website=$request->website;
      $verified ->email=$request->email;
      $image=$request->file;
      if($image)
      { 
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->file->move('verifiedimage',$imagename);
      $verified->image=$imagename;
      }
      $verified -> save();
      return redirect()->back()->with('message','Charity Group details updated successfully');
   }
   public function emailview($id)
   {
      $data=requests::find($id);
      return view('admin.email_view',compact('data'));
   }
   public function sendemail(Request $request,$id)
   {
       $data=requests::find($id);
       $details=[
         'greeting' => $request->greeting,
         'body' => $request->body,
         'actiontext' => $request->actiontext,
         'actionurl' => $request->actionurl,
         'endpart' => $request->endpart

       ];
       Notification::send($data,new SendEmailNotification($details));
       return redirect()->back()->with('message','Email has been sent successfully');
   }
   public function reports()
   {
      $data = reports::all();
      return view('admin.reports',compact('data'));
   }
   public function escalated($id)
   {
      $data=reports::find($id);
      $data -> status ='Escalated';
      $data -> save();
      return redirect()-> back(); 
   }
   public function closed($id)
   {
      $data=reports::find($id);
      $data -> status ='closed';
      $data -> save();
      return redirect()-> back(); 
   }
   public function suspended($id)
   {
      $data=reports::find($id);
      $data -> status ='suspended';
      $data -> save();
      return redirect()-> back(); 
   }
   public function postevent()
   {
      
   }
 
}

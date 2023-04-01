<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\verified;
use App\Models\Requests;
use App\Models\reports;
use App\Models\events;

class HomeController extends Controller
{
    //
    public function redirect()
    {
        if (Auth::id())
        {
            if (Auth::user()->usertype=='0')
            {
                $verifieds = verified::all();
                return view ('user.home', compact('verifieds'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else 
        {
            return redirect() -> back();
        }
    }
    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {

        
        $verifieds = verified::all();

        return view('user.home',compact('verifieds'));
        }
    }
    public function requests(Request $request)
    {
      $data = new requests;
      $data -> name=$request->name;
      $data -> email=$request->email;
      $data ->phone=$request->phone;
      $data -> date=$request->date;
      $data -> speciality=$request->speciality;
      $data -> website=$request->website;
      $data -> intro=$request->intro;
      $data-> status ='In progress';

      if(Auth::id())
      { 
      $data->user_id=Auth::user()->id;
      }

      $data -> save();
      return redirect()->back()->with('message','Thank You very much for you interest. Your Request has been recieved we will contact you soon');
      
    } 
    public function reports(Request $reports)
    {
      $data = new reports;
      $data -> name=$reports->name;
      $data -> email=$reports->email;
      $data ->groupname=$reports->groupname;
      $data -> media=$reports->media;
      $data -> actions=$reports->actions;
      $data -> evidenceactions=$reports->evidenceactions;
      $data -> amount=$reports->amount;
      $data -> date=$reports->date;
      $data ->methodofpayment=$reports->methodofpayment;
      $data -> evidencetransaction=$reports->evidencetransaction;
      $data -> contactgroup=$reports->contactgroup;
      $data -> reportandresponse=$reports->reportandresponse;
      $data -> relevantinfo=$reports->relevantinfo;
      $data-> status ='In progress';

      if(Auth::id())
      { 
      $data->user_id=Auth::user()->id;
      }

      $data -> save();
      return redirect()->back()->with('message','Thank You very much for reporting a Fraud case');
      
    } 
    public function verificationstatus()
    {
        if(Auth::id())
        { 
        $userid=Auth::user()->id;
        $request=requests::where('user_id',$userid)->get();

        return view('user.verificationstatus',compact('request'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function cancel_request($id)

    {
        $data=requests::find($id);

        $data->delete();

        return redirect()->back();
    }
    public function cancel_report($id)

    {
        $data=reports::find($id);

        $data->delete();

        return redirect()->back();
    }
    public function fraudreport()
    {
        return view('user.fraudreport');
    }
    
    public function events()
    {
        return view('user.request_veri');
    }
    public function about()
    {
        return view('user.about');
    }
    public function reportedcases()
    {
        if(Auth::id())
        { 
        $userid=Auth::user()->id;
        $reports=reports::where('user_id',$userid)->get();

        return view('user.reportedcases',compact('reports'));
        }
        else
        {
            return redirect()->back();
        }
    }
    public function postevent()
    {
       return view('user.postevent');
    }
    public function uploadevent(Request $request)
    {
        $event=new events;
        $image = $request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('verifiedimage',$imagename);
     
      $event->image=$name;
      $event->name=$request->name;
      $event->email=$request->email;
      $event->eventname=$request->eventname;
      $event->eventlocation=$request->eventlocation;
      $event->eventdate=$request->eventdate;
      $event->save();
      return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\verified;
use App\Models\Requests;

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
}

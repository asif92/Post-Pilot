<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //


      public function dashboard()
    {
                session()->regenerate();
                session()->put('brand', 'Reset');
        if(Auth::user()->category=="Individual"){

 return view('user.dashboard')->with(['page_title' => 'Dashboard']);;

        }elseif (Auth::user()->category=="Team Admin") {

            return view('team_admin.dashboard')->with(['page_title' => 'Dashboard']);;
            // code...
        }elseif (Auth::user()->category=="Admin") {


            $team_admin=User::where('category','Team Admin')->get();
            $users=User::where('category','Individual')->get();
            return view('admin.dashboard',compact('team_admin','users'))->with(['page_title' => 'Dashboard']);;
            // code...
        }
        

    }
       public function user_dashboard()
    {
        // dd(Auth::user()->category);
// dd(Auth::check());
                session()->regenerate();
                session()->put('brand', 'Reset');
        if(Auth::user()->category=="Individual" or Auth::user()->category=="Admin" ){

 return view('user.dashboard')->with(['page_title' => 'Dashboard']);;

        }elseif (Auth::user()->category=="Team Admin") {

            return view('team_admin.dashboard')->with(['page_title' => 'Dashboard']);;
        }
        

    }
   

     
     public function k_board()
    {
 return view('user.workspace.k_board')->with(['page_title' => 'Boards']);;
    }
      
     





}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function analytics()
    {
        if(Auth::user()->category=="Individual" or Auth::user()->category=="Team Admin" or  Auth::user()->category=="Admin")
        {
            return view('user.social_media.analytics')->with(['page_title' => 'Analytics']);
        }
        return redirect()->route('logout');
    }
    public function settings()
    {
        if(Auth::user()->category=="Individual" or Auth::user()->category=="Team Admin" or  Auth::user()->category=="Admin")
        {
            return view('user.social_media.settings')->with(['page_title' => 'Settings']);
        }
        return redirect()->route('logout');
    }
    public function planning()
    {
        if(Auth::user()->category=="Individual" or Auth::user()->category=="Team Admin" or  Auth::user()->category=="Admin")
        {
            return view('user.social_media.planning')->with(['page_title' => 'Planning']);
        }
        return redirect()->route('logout');
    }
    public function inbox()
    {
        if(Auth::user()->category=="Individual" or Auth::user()->category=="Team Admin" or  Auth::user()->category=="Admin")
        {
            return view('user.social_media.inbox')->with(['page_title' => 'Inbox']);
        }
        return redirect()->route('logout');
    }
    
    
    
    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function product(){
        $gadgets = array("OnePlus 7","OnePlus 7 pro","OnePlus 8","OnePlus 8T");
        return view('product')
        ->with ('gadgets',$gadgets); 
    }

    public function ourteams(){
        $members = array("Mahadi (Founder)","Steve (CEO)","Stark (CFO)","Tom (Senior Software Engineer)");
        return view('ourteams')
        ->with ('members',$members);
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function contactus(){
        $email = 'info@oneplus.tech';
        $phone = '+88025225221';
        $web = 'www.oneplus.com';
        return view('contactus')
        ->with ('email',$email)
        ->with ('phone',$phone)
        ->with ('web',$web);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function AboutUs(){
        return view('home.aboutus');
    }

    public function Solutions(){
        return view('home.solutions');
    }

    public function ContactUs(){
        return view('home.contactus');
    }
    
    public function Industries(){
        return view('home.industries');
    }
     
    public function SocialImpact(){
        return view('home.socialImpact');
    }
 
    public function Careers(){
        return view('home.careers');
    }

    public function Appointment(){
        return view('home.appointment');
    }
}

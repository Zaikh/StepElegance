<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('index');
    }

    public function home() {
        return view('Home');
    }

    public function about() {
        return view('About_US');
    }

    public function contact() {
        return view('Contact_us');
    }

    public function offers() {
        return view('Offers');
    }

    public function Sign_in() {
        return view('Sign_in');
    }

    
    public function Signup() {
        return view('Signup');
    }

    public function admin_login() {
        return view('admin_login');
    }
}

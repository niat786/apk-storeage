<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about_us(){
        return view('pages.about');
    }
    public function contact_us(){
        return view('pages.contact');
    }
    public function disclaimer(){
        return view('pages.disclaimer');
    }
    public function privacy_policy(){
        return view('pages.privacy');
    }
}
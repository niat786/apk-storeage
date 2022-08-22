<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    public function users(Request $request) {
        // $s = $request->server('HTTP_REFERER');
        // dd($s);
        return view('admin.dashboard');
    }
    public function files() {
        return view('admin.files');
    }
    public function public_files() {
        return view('admin.public_files');
    }
}

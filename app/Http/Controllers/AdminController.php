<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{
    public function users() {
        return view('admin.dashboard');
    }
    public function files() {
        return view('admin.files');
    }
}

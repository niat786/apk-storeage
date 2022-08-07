<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\FileMeta;
// use Auth;

class FileStoreController extends Controller
{
    public function my_files() {
        // $files = FileMeta::where('user_id', Auth::User()->id)->orderBy("AESC")->paginate(4);
        return view('store-my-files');
    }

    public function public_files() {
        // $files = FileMeta::paginate(4);
        return view('store-public-files');

    }

}

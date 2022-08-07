<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurStoreController extends Controller
{
    function upload_local_file() {
        return view('store.upload-local-file');
    }

    function upload_online_file() {
        return view('store.upload-online-file');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileMeta;
use Auth;

class FileController extends Controller
{


    public function index($id)
    {
        $uploaded_file = FileMeta::where('id', $id)->where('user_id', Auth::User()->id)->get();

        return view('livewire.upload-success-page', ['uploaded_file' => $uploaded_file]);
    }

    public function failed()
    {

        return view('upload-failed');
    }

    public function show_single_file($id)
    {
        $single_file = FileMeta::where('id', $id)->where('user_id', Auth::User()->id)->get();
        return view('show-single-file', ['single_file' => $single_file]);
    }

    public function delete_file(Request $request)
    {
        $file = FileMeta::where('user_id', Auth::User()->id )->where('id', $request->id)->first();
        if ($file === null) {
            return ['status'=>403, 'message'=>0];
        }else{
            $file->delete();
            return ['status'=>200, 'message'=>1];;
        }
    }

    public function delete_file_success(){
        return view('delete-file-success');
    }

    public function delete_failed() {
        return view('delete-file-failed');
    }
}

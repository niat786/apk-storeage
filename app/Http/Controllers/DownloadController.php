<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileMeta;
use Illuminate\Support\Facades\URL;
use DB;


class DownloadController extends Controller
{
    public function redirect_download_page($id, $name) {
        return redirect()->to("https://apkeve.com/download-file/files/$id/$name");
    }

    public function all_files()
    {
        $files = FileMeta::where('b2_account_type', 'public')->paginate(20);
        return view('downloads.all-files', ['files' => $files]);
    }

    public function show_single_file($id) {
        $file = FileMeta::where('id',$id)->get();
        return view('downloads.single-file', ['single_file' => $file]);

    }

    public function show_file($userID = 0, $file_name = '')
    {
        $file_url = URL::temporarySignedRoute(
            'generate-download-link', now()->addMinutes(1), ['u' => $userID, 'f'=> $file_name]
        );
        return view('downloads.show-file', ['url'=>$file_url, 'u'=>$userID, 'f'=>$file_name]);
        // return redirect()->to($file_url);
    }

    public function test_download_page(Request $request)
    {

        $session_expired = 0;
        if (! $request->hasValidSignature()) {
        $session_expired = 1;
        }
        return view('downloads.get-the-file',['session' =>$session_expired,'url'=>$request->file_url, 'u'=>$request->u, 'f'=>$request->f]);
    }


    public function download_file($user_id = 0, $file_name = '')
    {
        // https://dl.apkeve.com/file/apkeve/file.pdf
        $subdomains = ['qwctoscenda', 'ooddnshecka', 'kendoswcoda', 'soendkeoska', 'hdowneksica', 'osdocensoda'];
        $subdomain = $subdomains[rand(0,5)];
        $download_link = "https://".$subdomain.".apkeve.com/file/public-file/".$file_name;
        return redirect()->to($download_link);
        // $file = DB::table('file_metas')->where('user_id', $user_id)->where('name', $file_name)->first();

        // if ($file) {
        //     return redirect()->to($file->download_link);
        // }

        // return redirect()->back()->with('notfound', 'Sorry File Not Available for downloading ... ');


        // $d_link = URL::temporarySignedRoute('get-the-file',  now()->addMinutes(1440), ['fileID' => $file_id, 'name' => $file_name]);
        // return view('downloads.get-the-file', ['download_link', $d_link]);
    }
}
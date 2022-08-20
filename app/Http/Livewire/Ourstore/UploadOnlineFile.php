<?php

namespace App\Http\Livewire\Ourstore;

use Livewire\Component;
use Illuminate\Support\Facades\File;
use BackblazeB2\Client;
use BackblazeB2\Bucket;
use App\Models\Domain;
use App\Models\B2Account;
use Auth;
use App\Models\FileMeta;
use DB;

class UploadOnlineFile extends Component
{
    public $fileurl;
    public $domainID = 0;
    public $filename;

    public $B2AccountID = 0;
    public $user_id;
    public $domains_list;
    public $B2Accounts;

    public function render()
    {
        return view('livewire.ourstore.upload-online-file');
    }

    public function save() {
    $messages = ['file.url'=> 'Please provide a valid URL',
    'file.required'=> 'Please provide a File Download Link'];

    $this->validate([
    'fileurl' => 'required|url',
    ], $messages);

    $file_name = $this->filename ?? basename($this->fileurl);

    $file_content = @file_get_contents($this->fileurl);

    if ($file_content  === false) {
        return redirect('upload-failed');
      } else {
        if (file_put_contents($file_name, $file_content)) {
            $client = new Client('004b9b536b4e9e40000000005', 'K004LZmjrs/NxdGFSXpngkTYfWYszBQ');
            $file = $client->upload([
            'BucketId' => 'eb19db859356bba48e290e14',
            'FileName' => $file_name,
            'Body' => fopen(public_path($file_name), 'r')
        ]);

        function formatBytes($size, $precision = 2)
        {
            $base = log($size, 1024);
            $suffixes = ['', 'KB', 'MB', 'GB', 'TB'];

            return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
        }

        $file_size = formatBytes(filesize(public_path($file_name)));

        // delete downloaded file from public folder
        File::delete($file_name);
        // if (!$this->domainID) {
        //     $this->domainID = $this->domains_list[0]->id;
        // }

        $ext = explode('.', $file_name);
        $extension = $ext[count($ext) - 1];


            // delete downloaded file from public folder
            File::delete($file_name);

            // $domain_info = Domain::where('id', $this->domainID)->where('user_id', $this->user_id)->first();
            // $d_link = 'https://download.apkeve.com/'.$file_name;
            $d_link = "https://apkeve.com/download/files/".Auth::User()->id."/".$file_name;

            $filemeta = new FileMeta;

            $filemeta->name = $file_name;
            $filemeta->user_id = Auth::User()->id;
            $filemeta->domain_id = $this->domainID;
            $filemeta->download_link = $d_link;
            $filemeta->size = $file_size;
            $filemeta->extension = $extension;
            $filemeta->b2_account_id = $this->B2AccountID;
            $filemeta->b2_account_type = 'public';


            $filemeta->save();

            return redirect($filemeta->id.'/upload-success');
        }
     }
    }

    public function updatedFileurl() {
        $this->filename =  basename($this->fileurl);
    }
}

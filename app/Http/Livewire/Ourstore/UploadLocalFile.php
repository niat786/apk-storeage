<?php

namespace App\Http\Livewire\Ourstore;

use Livewire\Component;
use Livewire\WithFileUploads;
use BackblazeB2\Client;
use BackblazeB2\Bucket;
use Illuminate\Support\Facades\Storage;
use  App\Models\FileMeta;
use App\Models\Domain;
use App\Models\B2Account;
use Auth;
use Carbon\Carbon;

class UploadLocalFile extends Component
{
use WithFileUploads;
public $file;
public $domainID = 0;
public $B2AccountID =0;

    public function render()
    {
        return view('livewire.ourstore.upload-local-file');
    }

    public function save()
    {
        $messages = ['file.mimes'=> 'The file type is not supported',
        'file.required'=> 'Please Select a Valid File'
        ];

        $this->validate([
            'file' => 'required|file|mimes:jpg,bmp,png,ppt,pptx,doc,docx,pdf,xls,xlsx,txt,zip,apk,jpeg,webp',
        ],$messages);

        $file_extension = $this->file->getClientOriginalExtension();

        $name = $this->file->getClientOriginalName();

        // $client = new Client('004b9b536b4e9e40000000001', 'K004JjIrjCuA/2R6XmKYnK/eJITETco');
        $client = new Client('004b9b536b4e9e40000000005', 'K004LZmjrs/NxdGFSXpngkTYfWYszBQ');



        $this->file->storeAs('files', $name);
        $file_to_upload = Storage::path('files/'.$name);

        $file = $client->upload([
            'BucketId' => 'eb19db859356bba48e290e14',
            'FileName' => $name,
            'Body' => fopen($file_to_upload, 'r')
        ]);


        function formatBytes($size, $precision = 2)
        {
            $base = log($size, 1024);
            $suffixes = ['', 'KB', 'MB', 'GB', 'TB'];

            return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
        }

        $file_size = formatBytes(filesize(storage_path('app/files/'.$name)));

        $ext = explode('.', $name);
        $extension = $ext[count($ext) - 1];



        // $domain_info = Domain::where('id', $this->domainID)->where('user_id', $this->user_id)->first();
        // $d_link = 'https://'.$domain_info->subdomain.'.'.$domain_info->name.'/'.$name;
        $d_link ="https://apkeve.com/download-file/files/".Auth::User()->id."/".$name;

            $filemeta = new FileMeta;

            $filemeta->name = $name;
            $filemeta->user_id = Auth::User()->id;
            $filemeta->domain_id = $this->domainID;
            $filemeta->download_link = $d_link;
            $filemeta->size = $file_size;
            $filemeta->extension = $extension;
            $filemeta->b2_account_id = $this->B2AccountID;
            $filemeta->b2_account_type = 'public';

            $filemeta->save();


        Storage::delete('files/'.$name);
        // Storage::delete('livewire-tmp/'.$temp_file_name);

        $temp_files = Storage::Files("livewire-tmp");

        if(count($temp_files) >0) {
            foreach($temp_files as $file) {

            $file_modified_at = Storage::lastModified($file);

            $old_file =  Carbon::parse($file_modified_at)->addMinutes(30);
                if($old_file->lessThan(Carbon::Now())){
                    Storage::delete($file);
                }
            }
        }
        return redirect($filemeta->id.'/upload-success');

    }
}
<?php

namespace App\Http\Livewire;

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
use DB;



class UploadLocalFile extends Component
{

use WithFileUploads;
public $file;
public $domainID;
public $B2AccountID;
public $user_id;
public $domains_list;
public $B2Accounts;

    public function render()
    {

        $this->user_id = Auth::User()->id;

        $this->domains_list = Domain::where('user_id', $this->user_id)->get();
        $this->B2Accounts = B2Account::where('user_id', $this->user_id)->get();

        if($this->B2Accounts->count() == 0) {
            session()->flash('message','You need to add a backblaze account to upload files');
            return view('connect-b2');
        }
        if($this->domains_list->count() == 0) {
            session()->flash('message','You need to add a domain to generate download links');
            return view('add-domain');
        }

        if(!$this->B2AccountID && $this->B2Accounts->count() > 1) {
            return view('select-b2-account', ['B2Accounts'=>$this->B2Accounts]);
        }

        if(!$this->domainID && $this->domains_list->count() > 1) {
            return view('livewire.select-domain', ['domains_list'=>$this->domains_list]);
        }

        return view('livewire.upload-local-file');
    }


    public function save()
    {

        $messages = ['file.mimes'=> 'The file type is not supported',
        'file.required'=> 'Please Select a Valid File'
    ];

    $this->validate([
        'file' => 'required|file|mimes:jpg,bmp,png,ppt,pptx,doc,docx,pdf,xls,xlsx,txt,mp3,mp4,zip,mkv,flv,apk,jpeg,webp',
    ],$messages);

    $file_extension = $this->file->getClientOriginalExtension();

    $name = $this->file->getClientOriginalName();

    $b2_id = $this->B2AccountID ?? $this->B2Accounts[0]->id;

    $b2_keys = DB::table('b2_accounts')->where('id', $b2_id)->where('user_id', $this->user_id)->first();

        // $temp_file_name = explode('?expires', basename($this->file->temporaryUrl()))[0];

        $client = new Client($b2_keys->keyid, $b2_keys->applicationkey);
        // $fileList = $client->listFiles([
        //     'BucketId' => '4b690be533761b747ee90e14'
        // ]);
        $this->file->storeAs('files', $name);
        $file_to_upload = Storage::path('files/'.$name);

        $file = $client->upload([
            'BucketId' => $b2_keys->bucketid,
            'FileName' => $name,
            'Body' => fopen($file_to_upload, 'r')

            // The file content can also be provided via a resource.
            // 'Body' => fopen('/path/to/input', 'r')

        ]);

        if(!$this->domainID) {
            $this->domainID = $this->domains_list[0]->id;
        }
        function formatBytes($size, $precision = 2)
        {
            $base = log($size, 1024);
            $suffixes = ['', 'KB', 'MB', 'GB', 'TB'];

            return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
        }

        $file_size = formatBytes(filesize(storage_path('app/files/'.$name)));

        $ext = explode('.', $name);
        $extension = $ext[count($ext) - 1];

        $domain_info = Domain::where('id', $this->domainID)->where('user_id', $this->user_id)->first();
        $d_link = 'https://'.$domain_info->subdomain.'.'.$domain_info->name.'/file/'.$this->B2Accounts[0]->bucket_name.'/'.$file_name;


        $filemeta = new FileMeta;

        $filemeta->name = $name;
        $filemeta->user_id = $this->user_id;
        $filemeta->domain_id = $this->domainID ?? $this->domains_list[0]->id;
        $filemeta->download_link = $d_link;
        $filemeta->size = $file_size;
        $filemeta->extension = $extension;
        $filemeta->uploading_type = 'local_upload';
        $filemeta->b2_account_id = $this->B2AccountID ?? $this->B2Accounts[0]->id;

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

        // $this->file->storeAs('files', $name);
        return redirect($filemeta->id.'/upload-success');

    }
}

<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use BackblazeB2\Client;
use BackblazeB2\Bucket;
// use App\Models\Domain;
// use App\Models\B2Account;
use Auth;
use App\Models\FileMeta;
use DB;

class UploadOnlineFile extends Component
{
    public $fileurl;
    public $domainID;
    public $filename;

    public $B2AccountID;
    public $user_id;
    public $domains_list;
    public $B2Accounts;

    public function render()
    {
        $this->user_id = Auth::User()->id;

        $this->domains_list = DB::table('domains')->where('user_id', $this->user_id)->get();
        $this->B2Accounts = DB::table('b2_accounts')->where('user_id', $this->user_id)->get();

        if($this->B2Accounts->count() == 0) {
            session()->flash('message','You need to add a backblaze account to upload files');
            return view('connect-b2');
        }
        if($this->domains_list->count() == 0) {
            session()->flash('message','You need to add a domain to generate download links');
            return view('add-domain');
        }

        // if(!$this->B2AccountID && $this->B2Accounts->count() > 1) {
        //     return view('select-b2-account', ['B2Accounts'=>$this->B2Accounts]);
        // }

        // if(!$this->domainID && $this->domains_list->count() > 1) {
        //     return view('livewire.select-domain', ['domains_list'=>$this->domains_list]);
        // }

        return view('livewire.upload-online-file', ['domains_list'=>$this->domains_list, 'B2Accounts'=>$this->B2Accounts]);
    }

    public function save() {

        $messages = ['file.url'=> 'Please provide a valid URL',
        'file.required'=> 'Please provide a File Download Link'];

        $this->validate([
            'fileurl' => 'required|url',
        ],$messages);

        $file_name = $this->filename ?? basename($this->fileurl);



    // save the file to public folder by using base name //
    $file_content = @file_get_contents($this->fileurl);

if ($file_content  === false) {
    return redirect('upload-failed');

}else {

    if (file_put_contents($file_name, $file_content)) {
        $b2_id = $this->B2AccountID ?? $this->B2Accounts[0]['id'];
        $b2_keys = DB::table('b2_accounts')->where('id', $b2_id)->where('user_id', $this->user_id)->first();

        $client = new Client($b2_keys->keyid, $b2_keys->applicationkey);
        $file = $client->upload([
            'BucketId' =>  $b2_keys->bucketid,
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
        if (!$this->domainID) {
            $this->domainID = $this->domains_list[0]['id'];
        }

        $ext = explode('.', $file_name);
        $extension = $ext[count($ext) - 1];


        $the_b2_account_id = $this->B2AccountID ?? $this->B2Accounts[0]['id'];
        $the_domain_id = $this->domainID ?? $this->domains_list[0]['id'];

        $domain_info = DB::table('domains')->where('id', $the_domain_id)->where('user_id', $this->user_id)->first();
        $bucket_info = DB::table('b2_accounts')->where('id', $the_b2_account_id)->where('user_id', $this->user_id)->first();

        $d_link = 'https://'.$domain_info->subdomain.'.'.$domain_info->name.'/file/'.$bucket_info->bucket_name.'/'.$file_name;

        $filemeta = new FileMeta;

        $filemeta->name = $file_name;
        $filemeta->user_id = $this->user_id;
        $filemeta->domain_id = $the_domain_id;
        $filemeta->download_link = $d_link;
        $filemeta->size = $file_size;
        $filemeta->extension = $extension;
        $filemeta->b2_account_id = $the_b2_account_id;

        $filemeta->save();

        return redirect($filemeta->id.'/upload-success');

    }
}


    }

    public function updatedFileurl() {
        $this->filename =  basename($this->fileurl);
    }

}

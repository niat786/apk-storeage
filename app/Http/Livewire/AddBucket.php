<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;
use Auth;
use App\Models\B2Account;

class AddBucket extends Component
{
    public $reference_account;
    public $bucketID;
    public $bucket_name;
    public $b2_accounts;
    public function render()
    {
        $this->b2_accounts = DB::table('b2_accounts')->where('user_id', Auth::User()->id)->get();
        return view('livewire.add-bucket', ['b2_accounts'=> $this->b2_accounts]);
    }

    public function save()
    {
        $ref_acc = $this->reference_account ?? $this->b2_accounts[0]['bucket_name'];
        $app_keys = DB::table('b2_accounts')->where('user_id', Auth::User()->id)->where('bucket_name', $ref_acc)->first();
        $b2 = new B2Account;
        $b2->keyid = $app_keys->keyid;
        $b2->applicationkey = $app_keys->applicationkey;
        $b2->bucket_name = $this->bucket_name;
        $b2->bucketid = $this->bucketID;
        $b2->user_id = Auth::User()->id;
        $b2->save();
       return redirect()->to(url('add-bucket-success'));
    }
}

<?php

namespace App\Http\Livewire\ManageAccount;

use Livewire\Component;
use DB;
use Auth;
use App\Models\Domain;
use App\Models\B2Account;

class Domains extends Component
{
    public function render()
    {
        $domains = DB::table('domains')->where('user_id', Auth::User()->id)->get();
        $buckets = B2Account::where('user_id', Auth::User()->id)->get();
        return view('livewire.manage-account.domains', ['domains' => $domains, 'buckets' => $buckets]);
    }
}

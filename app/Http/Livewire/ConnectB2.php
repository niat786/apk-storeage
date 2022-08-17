<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;
use Auth;

class ConnectB2 extends Component
{
    public $domains;
    public function render()
    {
        $this->domains = DB::table('domains')->where('user_id', Auth::User()->id)->get();

        if($this->domains->count() == 0) {
            session()->flash('message','You need to add your domain first!');
            return view('add-domain');
        }
        return view('livewire.connect-b2', ['domains'=> $this->domains]);
    }

}

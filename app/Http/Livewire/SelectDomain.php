<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SelectDomain extends Component
{
    public $domainID;
    public function render()
    {
        return view('livewire.select-domain');
    }
    public function save() {
        dd($this->domainID);
    }
}

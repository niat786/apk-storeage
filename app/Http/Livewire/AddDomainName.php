<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddDomainName extends Component
{
    public $domain_name = '';
    public $sub_domain = '';

    public function render()
    {
        return view('livewire.add-domain-name');
    }


    public function save() {
        dd($this->domain_name,$this->sub_domain);
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowSingleFile extends Component
{
    public $single_file;
    public function render()
    {
        return view('livewire.show-single-file');
    }
    public function mount($file) {
        $this->single_file = $file;
    }
}

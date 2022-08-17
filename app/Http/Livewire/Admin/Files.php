<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\FileMeta;


class Files extends Component
{
    public function render()
    {
        $files = FileMeta::paginate(20);
        return view('livewire.admin.files', ['files' => $files]);
    }
}

<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\FileMeta;

class PublicFiles extends Component
{
    public function render()
    {
        $files = FileMeta::where('b2_account_type', 'public')->paginate(20);
        return view('livewire.admin.public-files', ['files' => $files]);
    }
}

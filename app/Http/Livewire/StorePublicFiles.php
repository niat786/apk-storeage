<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FileMeta;


class StorePublicFiles extends Component
{
    public $storeType = 'public_store';
    public $search = '';
    public $category = null;
    protected $queryString = [
        'search' => ['except' => '', 'as' => 's']
    ];

    public function render()
    {
        if ($this->storeType == 'my_files') {
            $this->my_files();
        }

        if (!$this->search == '') {
            $files = FileMeta::where('name', 'like', '%'.$this->search.'%')->paginate(10);
            return view('livewire.store-personal-files', ['all_files'=> $files]);
        }

        if ($this->category) {
            $files = FileMeta::where('category', $this->category)->orderBy('name', 'asc')->paginate(15);
        return view('livewire.store-personal-files', ['all_files'=> $files]);
        }


        $files = FileMeta::where('b2_account_type', 'public')->orderBy('name', 'asc')->paginate(20);
        return view('livewire.store-public-files', ['all_files'=> $files]);
    }

    public function my_files()
    {
        return redirect()->to(url('my-files'));
    }


}

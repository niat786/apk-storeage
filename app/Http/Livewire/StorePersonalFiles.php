<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FileMeta;
use Auth;

class StorePersonalFiles extends Component
{
    public $storeType = 'my_files';
    public $category = null;
    public $search = '';
    protected $queryString = [
        'search' => ['except' => '', 'as' => 's']
    ];


    public function render()
    {
        if ($this->storeType == 'public_store') {
            $this->public_store();
        }
        if (!$this->search == '') {
            $files = FileMeta::where('name', 'like', '%'.$this->search.'%')->where('user_id', Auth::User()->id)->paginate(4);
            return view('livewire.store-personal-files', ['all_files'=> $files]);
        }

        if ($this->category) {
            $files = FileMeta::where('user_id', Auth::User()->id)->where('category', $this->category)->orderBy('name', 'asc')->paginate(15);
        return view('livewire.store-personal-files', ['all_files'=> $files]);
        }

        $files = FileMeta::where('user_id', Auth::User()->id)->orderBy('name', 'asc')->paginate(15);
        return view('livewire.store-personal-files', ['all_files'=> $files]);
    }

    public function public_store()
    {
        return redirect()->to(url('public-files'));
    }


}

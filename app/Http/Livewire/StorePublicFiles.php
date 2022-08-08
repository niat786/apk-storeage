<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FileMeta;
use Auth;


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
                $images = ['jpg', 'jpeg', 'bmp', 'png', 'webp'];
                $apps = ['exe', 'apk', 'dmg', 'msi', 'ipa'];
                if ($this->category == 'image') {
                    $files = FileMeta::where('user_id', Auth::User()->id)->where('b2_account_type', 'public')->whereIn('extension', $images)->orderBy('name', 'asc')->paginate(15);

                }elseif($this->category == 'app'){
                    $files = FileMeta::where('user_id', Auth::User()->id)->where('b2_account_type', 'public')->whereIn('extension', $apps)->orderBy('name', 'asc')->paginate(15);

                }else{

                    $files = FileMeta::where('user_id', Auth::User()->id)->where('b2_account_type', 'public')->where('extension', $this->category)->orderBy('name', 'asc')->paginate(15);
                }
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

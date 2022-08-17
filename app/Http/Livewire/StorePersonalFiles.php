<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use App\Models\FileMeta;
use Auth;
use DB;

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
            $files = DB::table('file_metas')->where('name', 'like', '%'.$this->search.'%')->where('user_id', Auth::User()->id)->paginate(4);
            return view('livewire.store-personal-files', ['all_files'=> $files]);
        }

        if ($this->category) {
            $images = ['jpg', 'jpeg', 'bmp', 'png', 'webp'];
            $apps = ['exe', 'apk', 'dmg', 'msi', 'ipa'];
            if ($this->category == 'image') {
                $files = DB::table('file_metas')->where('user_id', Auth::User()->id)->whereIn('extension', $images)->orderBy('name', 'asc')->paginate(20);

            }elseif($this->category == 'app'){
                $files = DB::table('file_metas')->where('user_id', Auth::User()->id)->whereIn('extension', $apps)->orderBy('name', 'asc')->paginate(20);

            }else{

                $files = DB::table('file_metas')->where('user_id', Auth::User()->id)->where('extension', $this->category)->orderBy('name', 'asc')->paginate(20);
            }
            return view('livewire.store-personal-files', ['all_files'=> $files]);
        }

        $files = DB::table('file_metas')->where('user_id', Auth::User()->id)->where('deleted_at','=',NULL)->orderBy('name', 'asc')->paginate(20);
        return view('livewire.store-personal-files', ['all_files'=> $files]);
    }

    public function public_store()
    {
        return redirect()->to(url('public-files'));
    }


}

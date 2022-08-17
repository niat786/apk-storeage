<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\models\User;

class Dashboard extends Component
{
    public function render()
    {
        $users = User::paginate(20);
        return view('livewire.admin.dashboard', ['users' => $users]);
    }
}

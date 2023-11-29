<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CreateTest extends Component
{
    public function getMyName(User $user) {
        return $user->username;
    }

    public function render()
    {
        return view('livewire.create-test');
    }
}

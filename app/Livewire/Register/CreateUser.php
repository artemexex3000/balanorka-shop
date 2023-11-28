<?php

namespace App\Livewire\Register;

use Livewire\Component;

class CreateUser extends Component
{
    public $title = "Some title";

    public function save()
    {

    }

    public function render()
    {
        return view('livewire.register.create-user');
    }
}

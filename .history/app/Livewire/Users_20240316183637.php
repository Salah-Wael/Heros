<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Conversation;
use App\Models\User;

class Users extends Component
{
    public function render()
    {
        return view('livewire.users');
    }
}

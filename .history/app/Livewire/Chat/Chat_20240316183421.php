<?php

namespace App\Livewire\Chat;

use Livewire\Component;
use App\Models\Conversation;
use App\Models\Message;

class Chat extends Component
{
    public function render()
    {
        return view('livewire.chat.chat');
    }
}

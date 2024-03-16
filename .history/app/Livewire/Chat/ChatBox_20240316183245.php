<?php

namespace App\Livewire\Chat;

use Livewire\Component;
use App\Models\Message;
use App\Notifications\MessageRead;
use App\Notifications\MessageSent;

class ChatBox extends Component
{
    public function render()
    {
        return view('livewire.chat.chat-box');
    }
}

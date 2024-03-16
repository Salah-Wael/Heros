<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use Livewire\Component;

class ChatList extends Component
{
    public function render()
    {
        return view('livewire.chat.chat-list');
    }
}

<?php

namespace App\Livewire\Chat;

use Livewire\Component;
use App\Models\Conversation;
use App\Models\Message;

class Chat extends Component
{
    public $query;
    public $selectedConversation;

    public function mount($selectedConversation = null)
    {

        $this->selectedConversation = Conversation::findOrFail($this->query);
        /// dd($selectedConversation);


        #mark message belogning to receiver as read
        Message::where('conversation_id', $this->selectedConversation->id)
            ->where('receiver_id', auth()->user()->id)
            ->whereNull('read_at')
            ->update(['read_at' => now()]);
    }


    public function render()
    {
        // return view('livewire.chat.chat');
        return view('livewire.chat.chat', [
            'selectedConversation' => $this->selectedConversation,
            'query' => $this->query,
        ]);
    }
}

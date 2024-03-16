<?php

namespace App\Http\Livewire\Chat;
use App\Models\User
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $user = auth()->user();
        return view('livewire.chat.index', [
            'conversations' => $user->conversations()->latest('updated_at')->get()
        ]);
    }
}

<?php

namespace App\Http\Livewire\Chat;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $user = auth()->user();
        return view('livewire.chat.index');
    }
}

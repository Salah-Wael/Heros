<?php

namespace App\Http\Livewire;

use App\Models\Conversation;
use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        $users = User::where('id', '!=', auth()->user()->id)->where('role', '=', 'hero')->get();
        dd(auth()->user()->id);
        return view('livewire.users', compact('users'));
            
    }
    public function message($userId)
    {

        //  $createdConversation =   Conversation::updateOrCreate(['sender_id' => auth()->id(), 'receiver_id' => $userId]);

        $authenticatedUserId = auth()->user()->id;

    # Check if conversation already exists
    $existingConversation = Conversation::where(function ($query) use ($authenticatedUserId, $userId) {
                $query->where('sender_id', $authenticatedUserId)
                    ->where('receiver_id', $userId);
                })
            ->orWhere(function ($query) use ($authenticatedUserId, $userId) {
                $query->where('sender_id', $userId)
                    ->where('receiver_id', $authenticatedUserId);
            })->first();

    if ($existingConversation) {
        # Conversation already exists, redirect to existing conversation
        return redirect()->route('chat', ['query' => $existingConversation->id]);
    }

      # Create new conversation
      $createdConversation = Conversation::create([
          'sender_id' => $authenticatedUserId,
          'receiver_id' => $userId,
      ]);

        return redirect()->route('chat', ['query' => $createdConversation->id]);

    }

}

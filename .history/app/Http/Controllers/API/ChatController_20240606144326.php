<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversation;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        // Fetch the selected conversation and query from the request
        $selectedConversationId = $request->query('selectedConversation');
        $query = $request->query('query', '');

        // Find the selected conversation or set to null
        $selectedConversation = $selectedConversationId ? Conversation::find($selectedConversationId) : null;

        // Pass the variables to the view
        return view('chat.index', compact('selectedConversation', 'query'));
    }
}


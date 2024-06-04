<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversation;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        $selectedConversation = $request->query('selectedConversation') ? Conversation::find($request->query('selectedConversation')) : null;
        $query = $request->query('query', '');

        return view('livechat.index', compact('selectedConversation', 'query'));
    }
}


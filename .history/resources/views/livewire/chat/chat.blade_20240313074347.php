<div class=" fixed  h-full  flex bg-white border  lg:shadow-sm overflow-hidden inset-0 lg:top-16  lg:inset-x-2 m-auto lg:h-[90%] rounded-t-lg">

    <div class="hidden lg:flex relative w-full md:w-[320px] xl:w-[400px] overflow-y-auto shrink-0 h-full border" >
        {{-- <livewire:chat.chat-list :selectedConversation="$selectedConversation" :query="$query"> --}}

        @php
        // Encode the selectedConversation ID for security if necessary
        $selectedConversationId = isset($selectedConversation) ? encrypt($selectedConversation->id) : null;
        @endphp
        <div>
            <!-- Include the Livewire component -->
            <div wire:ignore id="chatListContainer">
                <!-- You can use data attributes to pass additional data to your Livewire component -->
                <livewire:chat.chat-list :selected-conversation-id="$selectedConversationId" :query="$query" />
            </div>
        </div>

        {{-- <livewire:chat.chat-list wire:model="selectedConversation" wire:initial.data="selectedConversation" wire:model.defer="query"> --}}
        {{-- @include('livewire.chat.chat-list') --}}
        {{-- @include('your.partial.view', ['selectedConversation' => $selectedConversation]) --}}
        {{-- @include('your.partial.view', ['selectedConversation' => $selectedConversation, 'query' => $query]) --}}

    </div>

    <div class="grid w-full border-l h-full relative overflow-y-auto" style="contain:content">

    <livewire:chat.chat-box :selectedConversation="$selectedConversation">

    </div>


</div>



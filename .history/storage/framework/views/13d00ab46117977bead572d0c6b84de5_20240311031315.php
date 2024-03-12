<div class=" fixed  h-full  flex bg-white border  lg:shadow-sm overflow-hidden inset-0 lg:top-16  lg:inset-x-2 m-auto lg:h-[90%] rounded-t-lg">

    <div class="relative w-full md:w-[320px] xl:w-[400px] overflow-y-auto shrink-0 h-full border" >
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('chat.chat-list', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1130588783-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>

    <div class="hidden md:grid   w-full border-l h-full relative overflow-y-auto" style="contain:content">
        <div class="m-auto text-center justify-center flex flex-col gap-3">
            <h4 class="font-medium text-lg"> Choose a conversation to start chatting </h4>
        </div>
    </div>
    
</div>
<?php /**PATH D:\Computer Science\my-github\Heros\resources\views/livewire/chat/index.blade.php ENDPATH**/ ?>
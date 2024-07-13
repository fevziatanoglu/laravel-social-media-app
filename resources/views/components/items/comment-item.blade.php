<div class="flex flex-row px-10  p-5 gap-5  text-white border-[1px]  border-gray-600 ">

    {{-- user avatar --}}
    <img class="flex grow-0  min-h-10 max-h-10 min-w-10 max-w-10 bg-yellow-500 rounded-full "
        src="https://api.dicebear.com/9.x/adventurer/svg?seed=oreo{{ $comment->user->name }}" alt="user-avatar">


    <div class="flex flex-col">
        <div class="flex flex-row gap-1">
            {{-- username --}}
            <a href="" class="hover:underline font-bold  ">{{ $comment->user->name }}</a>
            {{-- postdate --}}
            <p class="opacity-50 font-semibold">· {{ $comment->created_at->diffForHumans() }}</p>
        </div>


        {{-- content --}}
        <p>
            {{ $comment->content }}
        </p>
    </div>


</div>

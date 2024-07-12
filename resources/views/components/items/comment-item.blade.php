<div class="flex flex-col w-full">
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

<div class="flex flex-row  px-10 py-3 gap-5 text-white border-[1px] border-b-0 border-gray-600   ">
    {{-- user avatar --}}
    <div class="grow-0  min-h-10 max-h-10 min-w-10   bg-yellow-500 rounded-full "></div>

    <div class="flex flex-col w-full">
        <div class="flex flex-row gap-1">
            {{-- username --}}
            <a href="" class="hover:underline font-bold  ">Name</a>
            {{-- postdate --}}
            <p class="opacity-50 font-semibold">· Date</p>
        </div>

        {{-- content --}}
        <p>
            {{ $post->content }}
        </p>

        {{-- buttons --}}
        <div class="flex flex-row justify-between p-1 ">
            <button class="p-2 hover:opacity-50  rounded-full h-10 w-10">l</button>
            <button class="p-2 hover:opacity-50 rounded-full h-10 w-10">c</button>
            <button class="p-2 hover:opacity-50 rounded-full h-10 w-10">s</button>
        </div>
    </div>





    {{-- {{$post->content}} --}}
</div>

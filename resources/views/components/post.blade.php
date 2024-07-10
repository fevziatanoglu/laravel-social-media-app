<div class=" flex flex-row px-3 py-2 gap-5  w-1/3">
    {{-- user avatar --}}
    <div class=" shrink-0 grow-0 h-[50px] w-[50px] bg-yellow-500 rounded-full "></div>

    <div>
        <div class="flex flex-row gap-2">
            {{-- username --}}
            <a href="" class="hover:underline font-bold  ">Name</a>
            {{-- postdate --}}
            <p class="opacity-50 font-semibold">· Date</p>
        </div>

        {{-- content --}}
        <p>
            {{$post-> content}}
        </p>

        {{-- buttons --}}
        <div class="flex flex-row justify-between p-1">
            <button class="p-2 hover:opacity-50  rounded-full h-10 w-10">l</button>
            <button class="p-2 hover:opacity-50 rounded-full h-10 w-10">c</button>
            <button class="p-2 hover:opacity-50 rounded-full h-10 w-10">s</button>
        </div>
    </div>





    {{-- {{$post->content}} --}}
</div>

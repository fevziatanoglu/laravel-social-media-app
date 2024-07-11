<form action={{ route('create-post') }} method="POST" 
    class="flex flex-col  px-10 py-3 text-white border-[1px] border-b-0 border-gray-600 gap-2 " >
    @csrf
    {{-- user avatar --}}
    <div class="flex flex-row  gap-2 w-full">
        <div class="grow-0  min-h-10 max-h-10 min-w-10   bg-red-500 rounded-full "></div>

        <textarea name="post-content" id="post-content" rows="3" type="text"
            class="bg-black border-0  px-2 text-base overflow-hidden w-full resize-none" placeholder="Enter your post"></textarea>

    </div>
    @error('post-content')
        <span class="text-red-400" >{{$message}}</span>
    @enderror
    <div class="w-full flex flex-row justify-end">
        <button type="submit" class="bg-blue-500 px-5 py-2 rounded-3xl">Share</button>
    </div>

</form>

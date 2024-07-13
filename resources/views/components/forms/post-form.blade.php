<form action={{ route('post.store') }} method="POST"
    class="flex flex-row  px-10 py-3 text-white border-b-[1px] border-gray-600 gap-2 items-center">
    @csrf
    @method('post')
    <div class="flex flex-row  gap-2 w-full">
        {{-- user avatar --}}
        <img class="flex grow-0  min-h-10 max-h-10 min-w-10 max-w-10 bg-yellow-500 rounded-full "
            src="https://api.dicebear.com/9.x/adventurer/svg?seed={{ Auth::user()->name}}" alt="user-avatar">

        <textarea name="content" id="content" rows="3" type="text"
            class="bg-black border-0  p-2 text-base overflow-hidden w-full resize-none" placeholder="Enter your post"></textarea>

    </div>
    @error('content')
        <span class="text-red-400">{{ $message }}</span>
    @enderror

    <button type="submit" class="bg-blue-500 px-8 py-3 rounded-3xl">Share</button>


</form>

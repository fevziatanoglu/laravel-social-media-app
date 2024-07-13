<form action={{ route('create-comment', $post->id) }} method="POST"
    class="flex flex-row  px-10 py-3 text-white border-[1px] border-b-0 border-gray-600 gap-2 ">
    @csrf

    <input name="content" id="content" type="text"
        class="bg-black border-5 px-2 rounded-xl text-white border-blue-500 border-2  overflow-hidden w-full resize-none"
        placeholder="Enter your comment">


    @error('content')
        <span class="text-red-400">{{ $message }}</span>
    @enderror


    <button type="submit" class="bg-blue-500 px-5 py-2 rounded-3xl">Comment</button>




</form>

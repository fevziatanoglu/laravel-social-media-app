<form action={{ route('create-comment' , $post->id) }} method="POST"
    class="flex flex-col  px-10 py-3 text-white border-[1px] border-b-0 border-gray-600 gap-2 ">
    @csrf

    <textarea name="content" id="content" rows="3" type="text"
        class="bg-black border-0  px-2 text-base overflow-hidden w-full resize-none" placeholder="Enter your comment"></textarea>


    @error('content')
    <span class="text-red-400" >{{$message}}</span>
    @enderror
    <div class="w-full flex flex-row justify-end">
        <button type="submit" class="bg-blue-500 px-5 py-2 rounded-3xl">Comment</button>
    </div>



</form>
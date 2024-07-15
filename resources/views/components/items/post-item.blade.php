<div class="flex flex-row  p-5 gap-5  text-white border-[1px]  border-gray-600 ">






    {{-- user avatar --}}
    <img class="flex grow-0  min-h-10 max-h-10 min-w-10 max-w-10 bg-yellow-500 rounded-full "
        src="https://api.dicebear.com/9.x/adventurer/svg?seed={{ $post->user->name }}" alt="user-avatar">





    <div class="w-full">





        {{-- upper div --}}
        <div class=" flex flex-row justify-between">





            {{-- post info --}}
            <div class="flex flex-row gap-1">
                <a href={{ route('get-user', $post->user->id) }}
                    class="hover:underline font-bold">{{ $post->user->name }}</a>
                <p class="opacity-50 font-semibold hover:cursor-default"> · {{ $post->created_at->diffForHumans() }}
                </p>
            </div>





            {{-- buttons --}}
            <div class="text-sm flex flex-row items-start gap-2  underline ">
                {{-- view --}}
                <a href={{ route('post.get', $post->id) }} class="text-green-500">View</a>

                @if (Auth::id() == $post->user->id)

                    {{-- edit --}}
                    @if ($isEdit ?? false)
                        <a href={{ route('post.get', $post->id) }} class="text-yellow-500">Cancel Edit</a>
                    @else
                        <a href={{ route('post.edit', $post->id) }} class="text-yellow-500">Edit</a>
                    @endif

                    {{-- delete --}}
                    <form action={{ route('post.delete', $post->id) }} method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500  underline">Delete</button>
                    </form>

                @endif

            </div>
        </div>





        {{-- content --}}
        <p class="mt-1">{{ $post->content }} </p>


        {{-- reaction buttons --}}

        <div class="underline flex flex-row justify-between mt-10">
            <a href={{ route('post.get', $post->id) }} class="text-blue-500">Comment
                {{ $post->comments()->count() }}</a>

            @if (Auth::user()->isLiked($post))
                <form action={{ route('unlike-post', $post->id) }} method='post'>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 underline ">Unlike {{ $post->likes()->count() }}</button>
                </form>
            @else
                <form action={{ route('like-post', $post->id) }} method='post'>
                    @csrf
                    @method('POST')
                    <button type="submit" class="text-red-500 underline ">Like {{ $post->likes()->count() }}</button>
                </form>
            @endif


            <a href="" class="text-orange-500">Follow</a>
            {{-- <a href="" class="text-gray-500">Dislike</a> --}}
        </div>
    </div>





</div>

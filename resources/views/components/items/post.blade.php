
<div class="flex flex-row  px-10 py-3 gap-5 text-white border-[1px]  border-gray-600   ">

    {{-- user avatar --}}
    <div class="grow-0  min-h-10 max-h-10 min-w-10   bg-yellow-500 rounded-full "></div>

    <div class="flex flex-col w-full">
        <div class="flex flex-row gap-1">
            {{-- username --}}
            <a href="" class="hover:underline font-bold  ">{{$post->user->name}}</a>
            {{-- postdate --}}
            <p class="opacity-50 font-semibold">· {{ $post->created_at->diffForHumans()}}</p>
        </div>

        {{-- content --}}
        @if ($isEdit ?? false)
            {{-- update form --}}
            <form action={{ route('update-post' , $post->id) }} method="POST"
                class="flex flex-col p-5 gap-5  text-white  ">
                @csrf
                @method('PUT')
                <div class="flex flex-row  gap-2 w-full">

                    <textarea name="content" id="content" rows="4" type="text"
                        class="bg-black border-[1px] border-white rounded-md px-2 text-base overflow-hidden w-full resize-none" placeholder="Edit your post">{{$post->content}}</textarea>

                </div>
                @error('content')
                    <span class="text-red-400">{{ $message }}</span>
                @enderror
                <div class="w-full flex flex-row justify-end">
                    <button type="submit" class="bg-blue-500 px-5 py-2 rounded-3xl">Edit</button>
                </div>

            </form>
        @else
            {{-- content --}}
            <p>
                {{ $post->content }}
            </p>
        @endif


        {{-- buttons --}}
        <div class="flex flex-row justify-between p-1 ">
            <button class="p-2 hover:opacity-50  rounded-full h-10 w-10">l</button>
            <button class="p-2 hover:opacity-50 rounded-full h-10 w-10">c</button>
            <button class="p-2 hover:opacity-50 rounded-full h-10 w-10">s</button>
        </div>
    </div>

    {{-- delete form --}}
    <form action={{ route('delete-post', $post->id) }} method="POST">
        @csrf
        @method('DELETE')
        <button class="self-start bg-red-500 p-2">x {{ $post->id }}</button>
    </form>
    {{-- get post button --}}
    <a href={{ route('get-post', $post->id) }} class="bg-yellow-500">View</a>
    {{-- edit buttons --}}
    @if ($isEdit ?? false)
        <a href={{ route('get-post', $post->id) }} class="bg-yellow-500">Cancel Edit</a>
    @else
        <a href={{ route('edit-post', $post->id) }} class="bg-yellow-500">Edit</a>
    @endif


    @include('components/comments-box')

</div>

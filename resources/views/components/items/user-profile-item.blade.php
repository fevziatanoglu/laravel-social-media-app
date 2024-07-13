<div class="flex flex-row  px-5 py-3 pb-10 gap-5 text-white border-[1px]  border-gray-600    ">

    {{-- user avatar --}}
    <img class="flex grow-0  min-h-28 max-h-10 min-w-28 bg-yellow-500 rounded-full "
        src="https://api.dicebear.com/9.x/adventurer/svg?seed=oreo{{ $user->name }}" alt="user-avatar">


<div class="flex flex-col  justify-between w-full">

    <div class="flex flex-row justify-between items-center  w-full ">
        <div class="flex flex-row items-center gap-2  h-full">
            <h1 class="text-3xl font-bold ">{{ $user->name }}</h1>

            <div class="   opacity-50 font-semibold text-center">
                · Joined {{ $user->created_at->diffForHumans() }}
            </div>
        </div>


        <div>

            @auth
                @if (Auth::id() == $user->id)
                    <button class="text-blue-500 underline ">Edit</button>
                @else
                    <button class="text-blue-500 underline ">Follow</button>
                @endif
            @endauth
        </div>
    </div>

    <div class="text-xl flex flex-row gap-5 ">
        <div>
            Posts: {{ count($user->comments)}}
        </div>
        <div>
            Followers: 0

        </div>
    </div>
</div>


</div>

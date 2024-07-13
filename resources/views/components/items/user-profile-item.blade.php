<div class="flex flex-row  px-5 py-3 gap-5 text-white border-[1px]  border-gray-600   ">

    {{-- user avatar --}}
    <img class="flex grow-0  min-h-28 max-h-10 min-w-28 bg-yellow-500 rounded-full "
        src="https://api.dicebear.com/9.x/adventurer/svg?seed=oreo{{ $user->name }}" alt="user-avatar">
    
    <h1 class="text-3xl font-bold">{{$user->name}}</h1>


    <div>
        <p class="opacity-50 font-semibold">
            Joined · {{ $user->created_at->diffForHumans() }}
        </p>
    </div>

    <div>
        <div>Followers : 1</div>
        <button>Follow</button>
    </div>






</div>

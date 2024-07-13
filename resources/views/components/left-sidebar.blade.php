<nav class="sticky left-0 top-0 h-screen w-2/5 flex  flex-col justify-start  items-center pt-10 gap-10   text-white  ">

    <a href="/" class="text-5xl font-extrabold ">Laravel Social</a>

    <div class="text-3xl flex  flex-col justify-start  items-center  gap-3">
        <a href="/">Home</a>
        <a href="/">Search</a>
        @auth
        <a href={{ route("get-user" , ['user' => auth()->id() ?? '']) }}>Profile</a>
        @include('components/forms/logout-form')
        @endauth
        @guest
        <a href={{ route('login')}}>Login</a>
        @endguest
        <a href="/">Post</a>

    </div>
</nav>

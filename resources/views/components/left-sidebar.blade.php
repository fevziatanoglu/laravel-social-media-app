<nav class="sticky left-0 top-0 text-center text-2xl flex  flex-col justify-start  items-center  gap-7">

    <a href="/" class="text-4xl font-extrabold ">LaraSoc</a>

    <a href="/">Home</a>
    <a href="/">Search</a>
    @auth
        <a href={{ route('get-user', ['user' => auth()->id() ?? '']) }}>Profile</a>
        <a href="/">Post</a>
        @include('components/forms/logout-form')
    @endauth
    @guest
        <a href={{ route('login') }}>Login</a>
    @endguest

</nav>

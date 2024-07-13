<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Laravel Social Media</title>
</head>

<body class="bg-black container  text-white overflow-x-hidden">
    <main class="  flex flex-row justify-center  m-0 w-screen  gap-4 px-24 ">
        {{-- left --}}
        <div class="w-1/5   py-3">
            @include('components/left-sidebar')
        </div>
        {{-- page --}}
        <div class=" w-3/5 border-[1px]  border-gray-600 ">
            @yield('page')
        </div>
        {{-- right --}}
        <div class=" w-1/5 py-3">
            @include('components/right-sidebar')
        </div>
    </main>



</body>

</html>

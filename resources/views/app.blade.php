<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Laravel Social Media</title>
</head>

<body class="bg-black container ">
    <main class="relative flex flex-row ">
        @include('components/left-sidebar')
        @yield('page')
        @include('components/right-sidebar')
    </main>



</body>

</html>

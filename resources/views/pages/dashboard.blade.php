@extends('app')

@section('page')
    @guest

    @endguest
    @auth
        @include('components/forms/post-form')
    @endauth
    @foreach ($posts as $post)
        @include('components/items/post-item')
    @endforeach
    @if (count($posts) == 0)
        <h1 class="text-center text-5xl mt-5">There is no post!</h1>
    @endif
@endsection

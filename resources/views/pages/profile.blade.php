@extends('app')


@section('page')
    @include('components.items.user-profile-item')
    @foreach ($user->posts as $post)
        @include('components/items/post')
    @endforeach
@endsection

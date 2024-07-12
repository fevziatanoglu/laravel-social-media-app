@extends('app')

@section('page')

<div class=" w-1/2 text-white">
    <div>
        @auth
        <div>{{Auth::user()->name}}</div>
        @include('components.forms.logout-form')
        @endauth

        @guest
        
        @endguest
        @include('components/items/flash-message-item')
        @include('components/forms/post-form')
        @foreach ($posts as $post)
           @include('components/items/post')
       @endforeach

    </div>
    
</div>
       

    
@endsection
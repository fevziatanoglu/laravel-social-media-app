@extends('app')

@section('page')

<div class=" w-1/2 text-white">
    <div>
        

        @guest
        
        @endguest
        @include('components/items/flash-message-item')
        @auth
        <div>{{Auth::user()->name}}</div>
        @include('components.forms.logout-form')

        @include('components/forms/post-form')

        @endauth
        @foreach ($posts as $post)
           @include('components/items/post')
       @endforeach

    </div>
    
</div>
       

    
@endsection
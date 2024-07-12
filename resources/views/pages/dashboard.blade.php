@extends('app')

@section('page')

<div class=" w-1/2">
    <div>
        @include('components/items/flash-message-item')
        @include('components/forms/post-form')
        @foreach ($posts as $post)
           @include('components/items/post')
       @endforeach
       <div class="bg-white flex flex-row">
       {{-- {{ $posts->links()}} --}}
       </div>
    </div>
    
</div>
       

    
@endsection
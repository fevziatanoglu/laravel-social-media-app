@extends('app')

@section('page')

<div class=" w-1/2">
    <div>
        @include('components/flash-message')
        @include('components/post-form')
        @foreach ($posts as $post)
           @include('components/post')
       @endforeach
       <div class="bg-white flex flex-row">
       {{-- {{ $posts->links()}} --}}
       </div>
    </div>
    
</div>
       

    
@endsection
@extends('app')

@section('page')

<div class=" w-1/2">
    <div>
        @include('components/post-form')
        @foreach ($posts as $post)
           @include('components/post' , ['post' => $post])
       @endforeach
    </div>
    
</div>
       

    
@endsection
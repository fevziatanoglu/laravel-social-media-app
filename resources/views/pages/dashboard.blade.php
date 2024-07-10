@extends('app')

@section('page')
    <div>
        Dashboard

        @foreach ($posts as $post)
         <div>
            @include('components/post' , ['post' => $post])
        </div>      
        
        @endforeach

    </div>
@endsection
@extends('app')


@section('page')
   

    <div class=" w-1/2 text-white">
        <div class="flex flex-col">
            
    

            <div>{{$user->name}}</div>
            
            @foreach ($user->posts as $post)
               @include('components/items/post')
           @endforeach
    
        </div>
        
    </div>
@endsection
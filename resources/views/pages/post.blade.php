@extends('app')

@section('page')
    <div class=" w-1/2">
        <div class="flex flex-row gap-3 text-white items-center">
            <a href={{ route('dashboard') }}>{{ '<--' }} </a>
            <h1 class="text-2xl font-bold  ">Post</h1>
        </div>
        @include('components/post')
    </div>
@endsection

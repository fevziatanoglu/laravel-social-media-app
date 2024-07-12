@extends('app')

@section('page')
    {{-- if user auth --}}
    @auth
        <h1>Login</h1>
        @include('components/forms/login-form')
    @endauth

    {{-- if user not auth --}}
    @guest
        <h1>Register</h1>
        @include('components/forms/register-form')
    @endguest
@endsection

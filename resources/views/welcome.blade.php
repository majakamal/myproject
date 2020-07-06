@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="/img/beverage.jpg" alt="beverages shop logo">
        <div class="title m-b-md">
            Beverages For All 
        </div>
        <p class="mssg"> {{session('mssg')}}</p>
        <a href="/beverages/create">Order Beverages</a>
    </div>
</div>
@endsection
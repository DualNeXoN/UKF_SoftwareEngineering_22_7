<?php
use Illuminate\Support\Facades\Session
?>
@extends('layouts.layout')

@section('content')

    @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}} </div>
    @endif
    <form method="POST" action="{{route('login-user')}}">
     @csrf
        <div>
            uId
            <input type="text" name="uid" value="">
            <span class="text-danger">@error('uid') {{$message}}} @enderror</span>
        </div>

        <div>
            Password
            <input type="password" name="password" id="password">
            <span class="text-danger">@error('password') {{$message}}} @enderror</span>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
    </form>

@endsection

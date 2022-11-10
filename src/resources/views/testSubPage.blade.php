
@extends('layouts.layout')

@section('content')

@if(Session::has('user'))
 <?php $data = Session::get('user'); ?>


 <h4>User Data</h4>
    <hr>
    <table class="table">
        <thead>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Birth date</th>
        <th scope="col">uid</th>
        <th scope="col"></th>
        </thead>
        <tbody>
        <tr>
            <td>{{$data['name'].' '.$data['surname']}}</td>
            <td>null</td>
            <td>{{$data['birth']}}</td>
            <td>{{$data['uid']}}</td>
            <td> <a href="/logout">Logout </a> </td>
        </tr>
        </tbody>
    </table>

@else
    User is not logged
@endif

@endsection

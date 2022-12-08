@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/workerpractices.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col main-label">
                <h2>Worker Archive</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive-md">
                    <table class="table-stripped table">
                        <thead>
                            <tr>
                                <th scope="col">Practice</th>
                                <th scope="col">Company</th>
                                <th scope="col">Student</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

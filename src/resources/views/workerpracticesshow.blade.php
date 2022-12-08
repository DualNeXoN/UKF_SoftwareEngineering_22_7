@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/workerpracticeshow.css') }}">
@endsection
{{$student = $practice->studentPractice()->student()}}
@section('content')

    <div class="row justify-content-center">
        <div class="card text-center" style="width: 30rem;">
            <div class="card-body">
                <h5 class="card-title"><strong>Practice</strong></h5>
                <hr>
                <p class="card-text"><strong>Name:</strong> {{ $practice->label}}</p>
                <hr>
                <p class="card-text"><strong>Name of company: </strong>{{$practice->company()->name}}</p>
                <hr>
                <p class="card-text"><strong>Description</strong></p>
                <p class="card-text scroll">{{$practice->description}}</p>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card text-center" style="width: 30rem;">
                <div class="card-body">
                    <h5 class="card-title"><strong>Student</strong></h5>
                    <hr>
                    <p class="card-text"><strong>Name: </strong> {{ $student->name.' '.$student->surname}}</p>
                    <hr>
                    <p class="card-text"><strong>Field of study: </strong> {{$practice->studyProgramme()->name}}</p>
                    <hr>
                    <p class="card-text"><strong>Adress</strong></p>
                    <p class="card-text scroll">hfshjsfjsfdgj</p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-lg-center" style="margin-top: 20px">

            <a href="#" class="btn btn-warning btn-outline-dark btn-lg">Approve</a>
            <a href="/worker/practices/show/{{$practice->id}}/refuse" class="btn btn-outline-danger btn-lg btwn-2">Refuse</a>

    </div>
@endsection

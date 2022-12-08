@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col main-label">
                <h2>Practices</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive-md">
                    <table class="table-stripped table">
                        <thead>
                            <tr>
                                <th scope="col">Practices</th>
                                <th scope="col">Company</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        @foreach($practices as $practice)
                            @if(!is_null($practice->studentPractice()) && $practice->studentPractice()->archived == 1)
                                @else
                            <tr>
                                <td>{{$practice->label}}</td>
                                <td>{{$practice->company()->name}}</td>
                            @if(is_null($practice->studentPractice()))
                                    <td class="text-danger justify-content-center">Not assigned</td>
                                    <td>
                                        <div class="col-12 col-xl-4 operation">
                                            <form method="post" action="/">
                                                <button type="submit" class="btn btn-primary full-width disabled">Show</button>
                                            </form>
                                        </div>
                                    </td>
                                @else
                                <td class="text-success justify-content-center">Assigned</td>
                                <td>
                                    <div class="col-12 col-xl-4 operation">
                                        <form method="GET" action="/worker/practices/show/{{$practice->id}}">

                                            <button type="submit" class="btn btn-primary full-width">Show</button>
                                        </form>
                                    </div>
                                </td>
                                @endif
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

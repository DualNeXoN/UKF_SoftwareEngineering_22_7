@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" href="{{asset("css/availablepractices.css")}}">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col main-label">
                Professional Practice List
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive-md">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th scope="col">Practice</th>
                                <th scope="col">Company</th>
                                <th scope="col">Contract</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if(count($practices) == 0)
                                <td colspan="3" class="text-center"><strong>No professional practices recorded</strong></td>
                            @else
                            @foreach($practices as $practice)

                                <tr>
                                    <td scope="row" href="">{{ $practice->label }}</td>
                                    <td >{{ $practice->company()->name }}</td>
                                    <td>{{ $practice->contractType()->contract }}</td>
                                    <td>
                                        <div class="row">
                                            @if($practice->isAvailable())
                                            <div class="col-12 col-md-6 col-xl-4 operation">
                                                <form method="POST" action="{{ route('practice-assign-student') }}">
                                                    @csrf
                                                    <input type="hidden" name="practiceId" value="{{ $practice->id }}"/>
                                                    @if(Session::has('user'))
                                                    <input type="hidden" name="studentId" value="{{ Session::get('user')['id'] }}"/>
                                                    @else
                                                    <input type="hidden" name="studentId" value=""/>
                                                    @endif
                                                    <button type="submit" class="btn btn-primary full-width">Assign to me</button>
                                                </form>
                                            </div>
                                            @elseif(Session::has('user') && $practice->isUserAssigned(Session::get('user')['id']))
                                            <div class="col-12 col-md-6 col-xl-4 operation">
                                                <button type="submit" class="btn btn-success full-width" disabled>Assigned</button>
                                            </div>
                                            @else
                                            <div class="col-12 col-md-6 col-xl-4 operation">
                                                <button type="submit" class="btn btn-danger full-width" disabled>Full</button>
                                            </div>
                                            @endif
                                            <div class="col-12 col-md-6 col-xl-4 operation">
                                                <form method="GET" action="{{ route('practice-profile', [$practice->id]) }}">
                                                    <button type="submit" class="btn btn-primary full-width">Details</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection

@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/availablepractices.css') }}">
@endsection

@section('content')
    <div class="container">

        <div class="row justify-content-center text-center">
            <div class="col main-label">
                {{__("translation.practice list")}}
            </div>
        </div>

        <div class="row">
            @if(count($practices) == 0)
                <div class="col-12 text-center">
                    <p><strong>{{__("translation.no_practice")}}</strong></p>
                </div>
            @else
            @foreach($practices as $practice)
                <div class="col-12 col-md-12 col-lg-6 my-2">
                    <div class="card @if($practice->isAvailable()) border-primary @elseif(Session::has('user') && $practice->isUserAssigned(Session::get('user')['id'])) border-success @else border-danger @endif text-center">
                        <div class="card-body">
                            <p class="card-text practice-label"><strong>{{ $practice->label }}</strong></p>
                            <hr>
                            <p class="card-text"><strong>{{__("translation.company:")}}</strong>{{ $practice->company()->name }}</p>
                            <hr>
                            <p class="card-text"><strong>{{__("translation.contract type:")}}</strong>{{ $practice->contractType()->contract }}</p>
                            <hr>
                            <p class="card-text"><strong>{{__("translation.description")}}</strong></p>
                            <p class="card-text scroll">{{ $practice->description }}</p>
                            <hr>
                            @if($practice->isAvailable())
                                <form method="POST" action="{{ route('practice-assign-student') }}">
                                    @csrf
                                    <input type="hidden" name="practiceId" value="{{ $practice->id }}" />
                                    @if (Session::has('user'))
                                        <input type="hidden" name="studentId" value="{{ Session::get('user')['id'] }}" />
                                    @else
                                        <input type="hidden" name="studentId" value="" />
                                    @endif
                                    <button type="submit" class="btn btn-primary full-width">{{__("translation.assign to me")}}</button>
                                </form>
                            @elseif(Session::has('user') && $practice->isUserAssigned(Session::get('user')['id']))
                                <div class="col-12 operation my-2">
                                    <button type="submit" class="btn btn-success full-width" disabled>{{__("translation.assigned")}}</button>
                                </div>
                            @else
                                <div class="col-12 operation my-2">
                                    <button type="submit" class="btn btn-danger full-width" disabled>{{__("translation.full")}}</button>
                                </div>
                            @endif
                            <div class="col-12 operation my-2">
                                <form method="GET" action="{{ route('practice-profile', [$practice->id]) }}">
                                    <button type="submit" class="btn btn-primary full-width">{{__("translation.details")}}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
        </div>

    </div>
@endsection

@extends('layouts.layout')

@section('content')

{{$int = $state}}
<div class="card border-primary w-50 mx-auto">
    <div class="card-body">
        <h2 class="text-center">Practice Report</h2>
        <form method="GET"  action="{{url('/download/report')}}">

            @if($int == 2)
            <div class="alert alert-success align-items-center text-center" role="alert">
                <strong>Approved report</strong>
              </div>
                <div class="d-md-flex justify-content-md-center">
                    <button class="btn btn-outline-dark btn-lg px-5" type="submit">Download report</button>
                </div>
            @else
              <div class="alert alert-danger align-items-center text-center" role="alert">
                <strong>Not Approved report</strong>
              </div>
                <div class="d-md-flex justify-content-md-center">
                    <button class="btn btn-outline-dark btn-lg px-5"  type="button" disabled>Download report</button>
                </div>
            @endif

        </form>
    </div>
  </div>
@endsection

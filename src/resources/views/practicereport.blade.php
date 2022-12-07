@extends('layouts.layout')

@section('content')

<div class="card border-primary w-50 mx-auto">
    <div class="card-body">
        <h2 class="text-center">{{__("translation.practice report")}}</h2>
        <form> 
            <div class="alert alert-success align-items-center text-center" role="alert">
                <strong>{{__("translation.approved report")}}</strong>
              </div>
              <!-- Not Approved
              <div class="alert alert-danger align-items-center text-center" role="alert">
                <strong>Not Approved report</strong>
              </div>    
            -->
            <div class="d-md-flex justify-content-md-center">           
            <button class="btn btn-outline-dark btn-lg px-5" type="submit">{{__("translation.get report")}}</button>
            </div>
        </form>
    </div>
  </div>

@endsection
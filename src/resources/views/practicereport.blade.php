@extends('layouts.layout')

@section('content')

<div class="card border-primary w-50 mx-auto">
    <div class="card-body">
        <h2 class="text-center">Practice Report</h2>
        <form> 
            <div class="alert alert-success align-items-center text-center" role="alert">
                <strong>Approved report</strong>
              </div>
              <!-- Not Approved
              <div class="alert alert-danger align-items-center text-center" role="alert">
                <strong>Not Approved report</strong>
              </div>    
            -->
            <div class="d-md-flex justify-content-md-center">           
            <button class="btn btn-outline-dark btn-lg px-5" type="submit">Get report</button>
            </div>
        </form>
    </div>
  </div>

@endsection
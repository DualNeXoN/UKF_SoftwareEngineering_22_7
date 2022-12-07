@extends('layouts.layout')

@section('content')

   <div class="container z-depth-1 my-5 p-5">

<!-- Section -->
<section>
  <h3 class="font-weight-bold text-center dark-grey-text pb-2">{{$practice->label}}</h3>
  <hr class="w-header my-4">

  <div class="row d-flex justify-content-center">

  <div class="col-md-6 col-xl-4">
      <h5 class="font-weight-normal">Study Programme</h5>
    </div>
    <div class="col-md-6">
      <p class="text-muted mb-5 pb-2">{{$practice->studyProgramme()->name}}</p>
    </div>

    <div class="col-md-6 col-xl-4">
      <h5 class="font-weight-normal">Company</h5>
    </div>
    <div class="col-md-6">
      <p class="text-muted mb-5 pb-2">{{$practice->company()->name}}</p>
    </div>


    <div class="col-md-6 col-xl-4">
      <h5 class="font-weight-normal">Contract Type</h5>
    </div>
    <div class="col-md-6">
      <p class="text-muted mb-5 pb-2">{{$practice->contractType()->contract}}</p>
    </div>


    <div class="col-md-6 col-xl-4">
      <h5 class="font-weight-normal">Description</h5>
    </div>
    <div class="col-md-6">
      <p class="text-muted mb-5 pb-2">{{$practice->description}}</p>
    </div>

    <div class="col-md-6 col-xl-4">
      <h5 class="font-weight-normal">Adress</h5>
    </div>
    <div class="col-md-6">
      <p class="text-muted mb-5 pb-2">{{$practice->company()->address()->number.' '.$practice->company()->address()->street.' / '.$practice->company()->address()->postcode.' '.$practice->company()->address()->town()->name}}</p>
    </div>

    <div class="col-md-6 col-xl-4">
      <h5 class="font-weight-normal">Contact Person</h5>
    </div>
    <div class="col-md-6">
      <p class="text-muted mb-5 pb-2">{{$practice->company()->person()->name.' '.$practice->company()->person()->surname}}</p>
    </div>

    <div class="col-md-6 col-xl-4">
      <h5 class="font-weight-normal">Academic Year</h5>
    </div>
    <div class="col-md-6">
      <p class="text-muted mb-5 pb-2">
        @if($practice->isAvailable() == 'true')
              {{$practice->studentPractice()->academicYear()->year}}
          @else
            is not assigned
          @endif

      </p>
    </div>

    <div class="col-md-6 col-xl-4">
      <h5 class="font-weight-normal">Company Feedback</h5>
    </div>
    <div class="col-md-6">
      <p class="text-muted mb-5 pb-2"></p>
    </div>

  </div>

</section>
<!-- Section -->

</div>
@endsection

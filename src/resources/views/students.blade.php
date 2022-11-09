@extends('layouts.layout')

@section('content')


<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">Name</h5>
            <p class="text-muted mb-1">Nieco</p>
            <p class="text-muted mb-4">Nieco</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Edit</button>
              <button type="button" class="btn btn-outline-primary ms-1">Internship</button>
              <button type="button" class="btn btn-outline-primary ms-1">Logout</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Name</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Date of Birth</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Date</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Univesity Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">example@student.ukf.sk</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Ais ID</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">number</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Faculty</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Faculty</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Field of Study</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Faculty</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">adress</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection

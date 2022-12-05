@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/students.css') }}">
@endsection

@section('content')
    @if (Session::has('user'))


    <section style="background-color: #eee;">
        <div class="container py-5">

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{$user->name.' '.$user->surname}}</h5>
                            <p class="text-muted mb-1">{{$user->role}}</p>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-primary full-width">Edit</button>
                                <button type="button" class="btn btn-outline-primary ms-1 full-width">Professional Practices</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">ID</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$user->id}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$user->name.' '.$user->surname}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Date of Birth</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$user->birth_date}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$user->address()->number." ".$user->address()->street}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">AiS ID</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{$user->user()->uid}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <div class="modal fade" id="editModal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="col-12">
                                <div style="border-radius: 15px;">
                                    <div class="p-md-5 p-4">
                                        <h3 class="fw-bold">Edit Company profile</h3>
                                        <!-- Edit form -->
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6 mb-4">
                                                    <div class="forms-inputs-lg mb-4">
                                                        <input type="text" placeholder="Company name" id="compName" class="form-control form-control-lg" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-4">
                                                    <div class="forms-inputs-lg mb-4">
                                                        <input type="text" placeholder="Copmpany city" id="compCity" class="form-control form-control-lg" />
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="fw-bold">Edit Contact profile</h3>
                                            <div class="row">
                                                <div class="col-md-6 mb-4">

                                                    <div class="forms-inputs mb-4">
                                                        <input type="text" placeholder="Contact name" id="contName" class="form-control form-control-lg" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="forms-inputs mb-4">
                                                        <input type="text" placeholder="Contact surname" id="contSur" class="form-control form-control-lg" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4 pb-2">

                                                    <div class="forms-inputs mb-4">
                                                        <input type="email" placeholder="Contact E-mail" id="contEmail" class="form-control form-control-lg" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4 pb-2">
                                                    <div class="forms-inputs mb-4">
                                                        <input type="text" placeholder="Contact address" id="contAddress" class="form-control form-control-lg" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="margin-left: 270px">
                                                <button class="btn btn-outline-dark btn-lg px-5" type="submit">Edit</button>
                                            </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endif
@endsection

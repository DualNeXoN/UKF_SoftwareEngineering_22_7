@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/companyperson.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col main-label">
                Company Professional Practice List
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-8 col-md-6 col-lg-4 col-xl-3">
                <!-- Add modal button -->
                <button class="btn btn-success full-width" data-bs-toggle="modal" data-bs-target="#addModal" type="button">Add Profesional Practice
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive-md">
                    <table class="table-stripped table">
                        <thead>
                            <tr>
                                <th scope="col">Label</th>
                                <th scope="col">Study Program</th>
                                <th scope="col">Abbreviation</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td>
                                    <div class="row">
                                        <div class="col-12 col-xl-4 operation">
                                            <form method="post" action="#">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#editModal" class="btn btn-primary full-width">Edit</button>
                                            </form>
                                        </div>
                                        <div class="col-12 col-xl-4 operation">
                                            <form method="post" action="#">
                                                <button type="button" class="btn btn-danger full-width">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add Professional Practice -->
    <div class="modal fade" id="addModal">
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
                                <h3 class="fw-bold">Add Professional practices</h3>
                                <!-- Add form -->
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">

                                            <div class="forms-inputs-lg mb-4">
                                                <input type="text" placeholder="Label" name="label" class="form-control form-control-lg" />
                                            </div>

                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <input type="text" placeholder="Study Program" name="studyProgram" class="form-control form-control-lg" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="forms-inputs mb-4">
                                                <input type="text" placeholder="Abbreviation" name="abbreviation" class="form-control form-control-lg" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <button class="btn btn-outline-dark btn-lg px-5" type="submit">Add
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Edit modal Professional Practice -->
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
                                <h3 class="fw-bold">Edit Professional practices</h3>
                                <!-- Edit form -->
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">

                                            <div class="forms-inputs-lg mb-4">
                                                <input type="text" placeholder="Label" name="label" class="form-control form-control-lg" />
                                            </div>

                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <input type="text" placeholder="Study Program" name="studyProgram" class="form-control form-control-lg" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="forms-inputs mb-4">
                                                <input type="text" placeholder="Abbreviation" name="abbreviation" class="form-control form-control-lg" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <button class="btn btn-outline-dark btn-lg px-5" type="submit">Edit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

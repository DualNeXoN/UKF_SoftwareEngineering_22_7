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
                                <th scope="col">Description</th>
                                <th scope="col">Contract Type</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($practices as $practice)
                            <tr>
                                <td>{{$practice->label}} </td>
                                <td>{{$practice->studyProgramme()->abbreviation}}</td>
                                <td>{{$practice->description}}</td>
                                <td>{{$practice->contractType()->contract}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-12 col-xl-4 operation">
                                            <form method="post" action="#">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#editModal-{{$practice->id}}" class="btn btn-primary full-width">Edit</button>
                                            </form>
                                        </div>
                                        <div class="col-12 col-xl-4 operation">
                                            <form method="POST" action="{{url('/company/person/delete-practice/'.$practice->id)}}">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger full-width">Delete</button>
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

    <!--Edit modal Professional Practice -->
    <div class="modal fade" id="editModal-{{$practice->id}}">
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
                                <h3 class="fw-bold">Edit Professional Practice</h3>
                                <!-- Edit form -->
                                <form method="POST" action="{{ route('updatePractice') }}">
                                    @csrf

                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <input type="text" placeholder="Label" name="label" class="form-control form-control-lg" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <textarea type="text" placeholder="Description" name="description" class="form-control form-control-lg input-description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <select class="form-select form-select-lg" name="studyProgram">
                                                    <option style="display:none">Study Program</option>
                                                    <option value="1">Ai-bc</option>
                                                    <option value="2">Ai-m</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <select class="form-select form-select-lg" name="contractType">
                                                    <option  style="display:none">Contract Type</option>
                                                    <option value="1">Full-time</option>
                                                    <option value="2">Part-time</option>
                                                    <option value="3">Freelance</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col col-md-12 col-lg-6 col-xl-3">
                                            <button class="btn btn-outline-dark btn-lg full-width" type="submit">Edit</button>
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{$practice->id}}" name="id">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
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
                                <h3 class="fw-bold">Add Professional Practice</h3>
                                <!-- Add form -->
                                <form method="POST" action="{{ route('addPractice') }}">
                                    @csrf
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <input type="text" placeholder="Label" name="label" class="form-control form-control-lg" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <textarea type="text" placeholder="Description" name="description" class="form-control form-control-lg input-description"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <select class="form-select form-select-lg" name="studyProgram">
                                                    <option style="display:none">Study Program</option>
                                                    <option value="1">Ai-bc</option>
                                                    <option value="2">Ai-m</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <select class="form-select form-select-lg" name="contractType">
                                                    <option  style="display:none">Contract Type</option>
                                                    <option value="1">Full-time</option>
                                                    <option value="2">Part-time</option>
                                                    <option value="3">Freelance</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col col-md-12 col-lg-6 col-xl-3">
                                            <button class="btn btn-outline-dark btn-lg full-width" type="submit">Add</button>
                                        </div>
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

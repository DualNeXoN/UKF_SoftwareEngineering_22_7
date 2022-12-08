@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" href="{{asset("css/adminpanel.css")}}">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col main-label">
                {{__("translation.admin panel users")}}
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-8 col-md-6 col-lg-4 col-xl-3">
                <!-- Add User modal button switcher -->
                <button class="btn btn-success full-width" data-bs-toggle="modal" data-bs-target="#addUserModal" type="button">{{__("translation.create user")}}</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive-md">
                    <table class="table table-stripped">
                        <thead>
                        <tr>
                            <th scope="col">UID</th>
                            <th scope="col">{{__("translation.role")}}</th>
                            <th scope="col">{{__("translation.name_person")}}</th>
                            <th scope="col">{{__("translation.date of birth")}}</th>
                            <th scope="col">{{__("translation.adress")}}</th>
                            <th scope="col">{{__("translation.actions")}}</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($data as $row)
                                <tr>
                                    <th scope="row">{{$row->id}}</th>
                                    <td>{{$row->role}}</td>
                                    <td>{{$row->name.' '.$row->surname}}</td>
                                    <td>{{$row->birth_date}}</td>
                                    <td>null</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-12 col-xl-4 operation">
                                                <form method="POST" action={{url('admin/users/reset-password')}}>
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary full-width">{{__("translation.reset password")}}</button>
                                                    <input type="hidden" name="id" value= {{$row->id}}>
                                                </form>
                                            </div>
                                            <div class="col-12 col-xl-4 operation">
                                                <form method="post">
                                                    <button type="button" class="btn btn-primary full-width">{{__("translation.edit")}}
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="col-12 col-xl-4 operation">
                                                <form method="post" action="{{url('/delete-user/'.$row->id)}}">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger full-width">{{__("translation.delete")}}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add User -->
    <div class="modal fade" id="addUserModal">
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
                                <h3 class="fw-bold">{{__("translation.add user")}}</h3>
                                <!-- Add User Form -->
                                <form method="POST" action="{{ route('register-user') }}">
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <input type="number" placeholder="{{__("translation.uid")}}" min="100000" max="999999" name="uid" class="form-control form-control-lg"/>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <select class="form-select form-select-lg" name="role">
                                                    <option value="1">{{__("translation.administrator")}}</option>
                                                    <option value="2">{{__("translation.student")}}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <input type="text" placeholder="{{__("translation.name_first")}}" name="First Name" maxlength="45" class="form-control form-control-lg"/>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <input type="text" placeholder="{{__("translation.name_last")}}" name="Last Name" maxlength="45" class="form-control form-control-lg"/>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <div class="forms-inputs mb-4">
                                                <input type="date" placeholder="{{__("translation.birth date")}}" name="birth" class="form-control form-control-lg" id="birthdayDate"/>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <select class="form-select form-select-lg" name="country">
                                                    <option value="1">{{__("translation.slovakia")}}</option>
                                                    <option value="2">{{__("translation.czechia")}}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <select class="form-select form-select-lg" name="town">
                                                    <option value="1">{{__("translation.bratislava")}}</option>
                                                    <option value="2">{{__("translation.nitra")}}</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs mb-4">
                                                <input type="text" placeholder={{__("translation.street")}} name="street" maxlength="96" class="form-control form-control-lg"/>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs mb-4">
                                                <input type="text" placeholder={{__("translation.number_home")}} name="number" maxlength="20" class="form-control form-control-lg"/>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs mb-4">
                                                <input type="text" placeholder={{__("translation.postcode")}} name="postcode" maxlength="10" class="form-control form-control-lg"/>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row justify-content-center">

                                        <div class="col-lg-6 col-md-8 mb-4 text-center">
                                            <button class="btn btn-outline-dark btn-lg px-5" type="submit">{{__("translation.add user")}}</button>
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

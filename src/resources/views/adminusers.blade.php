@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" href="{{asset("css/adminpanel.css")}}">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col main-label">
                Admin Panel Users
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-8 col-md-6 col-lg-4 col-xl-3">
                <!-- Sign Up modal button switcher -->
                <button class="btn btn-success full-width" data-bs-toggle="modal" data-bs-target="#registerModal" type="button">Create User</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive-md">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Role</th>
                                <th scope="col">Name</th>
                                <th scope="col">Birth Date</th>
                                <th scope="col">Address</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Admin</td>
                                <td>Ferko mrkvička</td>
                                <td>1.1.2000</td>
                                <td>Nitra</td>
                                <td>
                                    <div class="row">
                                        <div class="col-12 col-xl-4 operation">
                                            <form method="post" action="#">
                                                <button type="submit" class="btn btn-primary full-width">Reset Password</button>
                                            </form>
                                        </div>
                                        <div class="col-12 col-xl-4 operation">
                                            <form method="post" action="#">
                                                <button type="button" class="btn btn-primary full-width">Edit</button>
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
                            <tr>
                                <th scope="row">2</th>
                                <td>Student</td>
                                <td>David Ros</td>
                                <td>2.2.2000</td>
                                <td>Nové Zámky</td>
                                <td>
                                  <div class="row">
                                      <div class="col-12 col-xl-4 operation">
                                          <form method="post" action="#">
                                              <button type="submit" class="btn btn-primary full-width">Reset Password</button>
                                          </form>
                                      </div>
                                      <div class="col-12 col-xl-4 operation">
                                          <form method="post" action="#">
                                              <button type="button" class="btn btn-primary full-width">Edit</button>
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
                            <tr>
                                <th scope="row">3</th>
                                <td>Student</td>
                                <td>Ondrej Krík</td>
                                <td>3.3.2000</td>
                                <td>Nitra</td>
                                <td>
                                  <div class="row">
                                      <div class="col-12 col-xl-4 operation">
                                          <form method="post" action="#">
                                              <button type="submit" class="btn btn-primary full-width">Reset Password</button>
                                          </form>
                                      </div>
                                      <div class="col-12 col-xl-4 operation">
                                          <form method="post" action="#">
                                              <button type="button" class="btn btn-primary full-width">Edit</button>
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
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Sign Up -->
    <div class="modal fade" id="registerModal">
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
                                <h3 class="fw-bold">Sign Up</h3>
                                <!-- Registration form -->
                                <form method="POST" action="{{ route('register-user') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">

                                            <div class="forms-inputs-lg mb-4">
                                                <input type="text" placeholder="First Name" name="name" class="form-control form-control-lg" />
                                            </div>

                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="forms-inputs-lg mb-4">
                                                <input type="text" placeholder="Last Name" name="surname" class="form-control form-control-lg" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="forms-inputs mb-4">
                                                <input type="date" placeholder="Date of Birth" name="birth" class="form-control form-control-lg" id="birthdayDate" />

                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="forms-inputs mb-4">
                                                <input type="text" placeholder="Hometown" name="town" class="form-control form-control-lg" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="forms-inputs mb-4">
                                                <input type="email" placeholder="Email" name="email" class="form-control form-control-lg" />
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="forms-inputs mb-4">
                                                <input type="text" placeholder="Ais ID" name="uid" class="form-control form-control-lg" />
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="forms-inputs mb-4">
                                                <input type="password" placeholder="Password" name="pass" id="password" class="form-control form-control-lg" />
                                            </div>

                                        </div>
                                        <div class="col-md-6 mb-4 pb-2">

                                            <div class="forms-inputs mb-4">
                                                <input type="password" placeholder="Confirm Password" name="confpass" class="form-control form-control-lg" />
                                            </div>
                                        </div>
                                        <button class="btn btn-outline-dark btn-lg px-5" type="submit">Sign
                                            Up</button>
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

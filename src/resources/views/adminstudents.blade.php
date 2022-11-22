@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" href="{{asset("css/adminpanel.css")}}">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col main-label">
                Admin Panel Students
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
@endsection

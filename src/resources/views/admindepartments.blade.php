@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" href="{{asset("css/adminpanel.css")}}">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col main-label">
                Admin Panel Departments
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive-md">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Head</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Department 1</td>
                                <td>Person</td>
                                <td>
                                    <div class="row">
                                        <div class="col-12 col-xl-4 operation">
                                            <form method="post" action="#">
                                                <button type="submit" class="btn btn-primary full-width">Assign Person</button>
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
                              <td>Department 2</td>
                              <td>Person</td>
                              <td>
                                  <div class="row">
                                      <div class="col-12 col-xl-4 operation">
                                          <form method="post" action="#">
                                              <button type="submit" class="btn btn-primary full-width">Assign Person</button>
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
                            <td>Department 3</td>
                            <td>Person</td>
                            <td>
                                <div class="row">
                                    <div class="col-12 col-xl-4 operation">
                                        <form method="post" action="#">
                                            <button type="submit" class="btn btn-primary full-width">Assign Person</button>
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

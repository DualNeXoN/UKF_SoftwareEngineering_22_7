@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" href="{{asset("css/adminpanel.css")}}">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col main-label">
                {{__("translation.admin panel comps")}}
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive-md">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">{{__("translation.name_comp")}}</th>
                                <th scope="col">{{__("translation.adress")}}</th>
                                <th scope="col">{{__("translation.contact person")}}</th>
                                <th scope="col">{{__("translation.actions")}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Company 1</td>
                                <td>Address 1</td>
                                <td>Contact Person 1</td>
                                <td>
                                    <div class="row">
                                        <div class="col-12 col-xl-4 operation">
                                            <form method="post" action="#">
                                                <button type="submit" class="btn btn-primary full-width">{{__("translation.assign person")}}</button>
                                            </form>
                                        </div>
                                        <div class="col-12 col-xl-4 operation">
                                            <form method="post" action="#">
                                                <button type="button" class="btn btn-primary full-width">{{__("translation.edit")}}</button>
                                            </form>
                                        </div>
                                        <div class="col-12 col-xl-4 operation">
                                            <form method="post" action="#">
                                                <button type="button" class="btn btn-danger full-width">{{__("translation.delete")}}</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Company 2</td>
                              <td>Address 2</td>
                              <td>Contact Person 2</td>
                              <td>
                                  <div class="row">
                                      <div class="col-12 col-xl-4 operation">
                                          <form method="post" action="#">
                                              <button type="submit" class="btn btn-primary full-width">{{__("translation.assign person")}}</button>
                                          </form>
                                      </div>
                                      <div class="col-12 col-xl-4 operation">
                                          <form method="post" action="#">
                                              <button type="button" class="btn btn-primary full-width">{{__("translation.edit")}}</button>
                                          </form>
                                      </div>
                                      <div class="col-12 col-xl-4 operation">
                                          <form method="post" action="#">
                                              <button type="button" class="btn btn-danger full-width">{{__("translation.delete")}}</button>
                                          </form>
                                      </div>
                                  </div>
                              </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Company 3</td>
                            <td>Address 3</td>
                            <td>Contact Person 3</td>
                            <td>
                                <div class="row">
                                    <div class="col-12 col-xl-4 operation">
                                        <form method="post" action="#">
                                            <button type="submit" class="btn btn-primary full-width">{{__("translation.assign person")}}</button>
                                        </form>
                                    </div>
                                    <div class="col-12 col-xl-4 operation">
                                        <form method="post" action="#">
                                            <button type="button" class="btn btn-primary full-width">{{__("translation.edit")}}</button>
                                        </form>
                                    </div>
                                    <div class="col-12 col-xl-4 operation">
                                        <form method="post" action="#">
                                            <button type="button" class="btn btn-danger full-width">{{__("translation.delete")}}</button>
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

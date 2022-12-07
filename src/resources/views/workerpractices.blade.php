@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col main-label">
                <h2>Worker Practices</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="table-responsive-md">
                    <table class="table-stripped table">
                        <thead>
                            <tr>
                                <th scope="col">Practices</th>
                                <th scope="col">Company</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Practice</td>
                                <td>Company</td>
                                <td class="text-success justify-content-center">Approved</td>
                                <td>
                                    <div class="col-12 col-xl-4 operation">
                                        <form method="post" action="#">
                                            <a href="/"><button type="submit" class="btn btn-primary full-width">Show</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Practice</td>
                                <td>Company</td>
                                <td class="text-danger justify-content-center">Not Approved</td>
                                <td>
                                    <div class="col-12 col-xl-4 operation">
                                        <form method="post" action="#">
                                            <button type="submit" class="btn btn-primary full-width disabled">Show</button>
                                        </form>
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

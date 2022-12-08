@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/companies.css') }}">
@endsection

@section('content')
    <section>
        <div class="container py-5">

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/company.png') }}" alt="avatar" class="img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ $company->name }}</h5>
                        </div>
                        <hr width="100%">
                        <div class="card-body text-center">
                            <img src="{{ asset('https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp') }}" alt="avatar" class="img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{ $company->person()->name }}</h5>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editeModal">{{ __('translation.edit') }}</button>
                                <form method="GET" action="/student/profile/{{ $company->person()->id }}">
                                    <button type="submit" class="btn btn-outline-primary ms-1 full-width">{{ __('translation.show contact person') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Company info -->
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">{{ __('translation.name_comp_full') }}</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $company->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">{{ __('translation.comp_adress') }}</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">
                                        {{ $company->address()->number .' ' .$company->address()->street .' ' .$company->address()->town()->name .' ' .$company->address()->town()->country()->name }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Contact person info -->
                    <!-- (For now hidden)
                                            <div class="col-lg-20 height">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">Contact name</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <p class="text-muted mb-0">Name</p>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">Contact surname</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <p class="text-muted mb-0">Last name</p>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">Contact E-mail</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <p class="text-muted mb-0">email@email.com</p>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">Address</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <p class="text-muted mb-0">Adress</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            -->

                </div>
            </div>

            <!-- Edit button Modal -->
            <div class="modal fade" id="editeModal">
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
                                        <h3 class="fw-bold">{{ __('translation.edit company profile') }}</h3>
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
                                            <h3 class="fw-bold">{{ __('translation.edit contact profile') }}</h3>
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
                                                <button class="btn btn-outline-dark btn-lg px-5" type="submit">{{ __('translation.edit') }}</button>
                                            </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Internships button Modal -->
            <div class="modal fade" id="internModal">
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
                                        <h3 class="fw-bold">{{ __('translation.internships details') }}</h3>
                                        <!-- Internships form -->
                                        <form>
                                            <div class="row text-center">
                                                <div class="col-md-6">
                                                    <img class="img-responsive" style=" width: 150px;" src="{{ asset('img/company.png') }}" alt="company">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card-body">
                                                        <div>
                                                            <div class="col-sm-5" style="margin-top: 50px; margin-right: 100px;">
                                                                <h2 class="mb-0">Something</h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                            <div class="d-grid d-md-block gap-2">
                                                <button class="btn btn-outline-dark btn-lg px-5" type="button">{{ __('translation.generate statement') }}</button>
                                                <button class="btn btn-outline-dark btn-lg px-5" style="margin-left: 200px" type="button">{{ __('translation.feedback') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

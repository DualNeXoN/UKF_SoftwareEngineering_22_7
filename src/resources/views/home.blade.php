@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
@endsection

@section('content')
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Section Heading-->
            <h2 class="page-section-heading text-uppercase text-secondary mb-0 text-center">PPUTILS</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Grid Items-->
            <div class="row justify-content-center">
                <!-- Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('img/users.png') }}" alt="..." />
                    </div>
                </div>
                <!-- Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('img/companies.png') }}" alt="..." />
                    </div>
                </div>
                <!-- Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('img/department.png') }}" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-primary mb-0 text-white" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-uppercase text-center text-white">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">We are Lucky Seven and this is our project PPUtils.</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">We manage students, companies and department.</p>
                </div>
            </div>
            <!-- About Section Button-->

        </div>
    </section>
    <!-- Logo Lucky Seven Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Logo Lucky Seven Heading-->
            <h2 class="page-section-heading text-uppercase text-secondary mb-0 text-center">Lucky Seven</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Lucky Seven Section-->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('img/logo_ls.png') }}" alt="..." />
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

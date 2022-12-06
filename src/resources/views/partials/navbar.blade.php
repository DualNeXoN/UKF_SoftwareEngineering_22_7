<nav class="navbar navbar-expand-lg bg-nav">
    <div class="container-fluid">
        <a href="/"><img src="{{ asset('img/logo_pputils_t.png') }}" alt="Logo" width="75" class="navbar-brand"></a>

        <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            @if (Session::has('user'))
                <!--

                SEM IDU KOMPONENTY AK SI PRIHLASENY

                -->


            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active mw mx-2" href="/">{{__("translation.home")}}</a>
                    </li>
                    @if(\App\Http\Controllers\PermissionController::checkPermision(array(4)))

                        <!--

                         SEM IDU KOMPONENTY PRE STUDENTA

                        -->

                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle mw mx-2" href="#" id="navbarDropdownPractice" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{__("translation.student practice")}}
                            </a>
                            <div class="navbar-brand dropdown-menu" aria-labelledby="navbarDropdownPractice">
                                <a class="navbar-brand dropdown-item" href="/practice/list">{{__("translation.show all practices")}}</a>
                            </div>
                        </li>
                    @elseif(\App\Http\Controllers\PermissionController::checkPermision(array(1)))

                        <!--

                         SEM IDU KOMPONENTY PRE ADMINA

                        -->
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle mw mx-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__("translation.admin panel")}}
                        </a>
                        <div class="navbar-brand dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="navbar-brand dropdown-item" href="/admin/users">{{__("translation.users")}}</a>
                            <a class="navbar-brand dropdown-item" href="/admin/companies">{{__("translation.companies")}}</a>
                            <a class="navbar-brand dropdown-item" href="/admin/departments">{{__("translation.departments")}}</a>
                        </div>
                    </li>
                    @elseif(\App\Http\Controllers\PermissionController::checkPermision(array(5)))

                        <!--

                         SEM IDU KOMPONENTY PRE KONTAKTNU OSOBU FIRMY

                        -->
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle mw mx-2" href="#" id="navbarDropdownPractice" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__("translation.company panel")}}
                        </a>
                        <div class="navbar-brand dropdown-menu" aria-labelledby="navbarDropdownPractice">
                            <a class="nav-link active mw mx-2" href="/company/person">{{__("translation.company practices")}}</a>
                            <a class="nav-link active mw mx-2" href="/company/profile/">{{__("translation.company profile")}}</a>

                        </div>
                    </li>
                    @elseif(\App\Http\Controllers\PermissionController::checkPermision(array(2)))

                        <!--

                         SEM IDU KOMPONENTY PRE VEDUCEHO ODDELENIA

                        -->

                    @elseif(\App\Http\Controllers\PermissionController::checkPermision(array(3)))

                        <!--

                         SEM IDU KOMPONENTY PRE POVERENEHO PRACOVNIKA

                        -->

                    @endif
                    <li class="nav-item">
                        @include('partials.languageSwitcher')
                    </li>
                </ul>
            </div>
        </div>



            <?php $user = Session::get('user'); ?>
            <a href="/student/profile/{{$user->id}}" class="link-primary"><button class="btn-control btn btn-dark mb-auto"><i class="bi bi-person-circle"></i> {{ $user['name'] . ' ' . $user['surname'] }}
            </button></a>
            <a href="/logout">
                <button class="btn-control btn btn-outline-dark my-2 my-sm-0 mr btwn-2" id="mynavbar" type="submit">{{__("translation.logout")}}</button>
            </a>

        @else
            <!-- Login form -->
            @if (Session::has('fail'))
                <div class="alert alert-danger">{{ Session::get('fail') }} </div>
            @elseif(Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }} </div>
            @endif

            <form class="d-flex ms-auto" method="POST" action="{{ route('login-user') }}">
                @csrf
                <div class="forms-inputs">
                    <input type="text" name="uid" value="" placeholder="Ais ID" class="form-control input-w" />
                    @error('uid')
                        <span class="text-danger">
                            {{ $message }}}
                        </span>
                    @enderror
                </div>

                <div class="forms-inputs btwn-2">
                    <input type="password" name="password" id="password" placeholder={{__("translation.password")}} class="form-control input-w" />
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}}
                        @enderror
                    </span>
                </div>
                <button class="btn-control btn btn-outline-dark btwn-2" type="submit">{{__("translation.login")}}</button>
            </form>
        @endif
    </div>

</nav>

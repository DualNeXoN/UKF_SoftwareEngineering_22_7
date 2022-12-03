<nav class="navbar navbar-expand-lg bg-nav">
    <div class="container-fluid">
        <a href="/"><img src="{{ asset('img/logo_pputils_t.png') }}" alt="Logo" width="75" class="navbar-brand"></a>

        <button class="navbar-toggler me-auto" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active mw mx-2" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle mw mx-2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admin Panel
                        </a>
                        <div class="navbar-brand dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="navbar-brand dropdown-item" href="/admin/users">Users</a>
                            <a class="navbar-brand dropdown-item" href="/admin/companies">Companies</a>
                            <a class="navbar-brand dropdown-item" href="/admin/departments">Departments</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        @include('partials.languageSwitcher')
                    </li>
                </ul>
            </div>
        </div>
        @if (Session::has('user'))
            <?php $user = Session::get('user'); ?>
            <a href="/students" class="h3">{{ $user['name'] . ' ' . $user['surname'] }}</a>
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
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control input-w" />
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}}
                        @enderror
                    </span>
                </div>
                <button class="btn-control btn btn-outline-dark btwn-2" type="submit">Login</button>
            </form>
        @endif
    </div>

</nav>

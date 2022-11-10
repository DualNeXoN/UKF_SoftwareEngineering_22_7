<nav class="navbar navbar-expand-md bg-nav">
    <div class="container-fluid">
    <a href="/"><img src="{{asset('img/logo_pputils_t.png')}}" alt="" width="75" class="navbar-brand"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="navbar-brand nav-link mx-2 mw" href="#">Help</a>
        </li>
        <li class="nav-item dropdown">
          <a class="navbar-brand nav-link dropdown-toggle mx-2 mw" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Internships
          </a>
          <div class="navbar-brand dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="navbar-brand dropdown-item" href="/students">Students</a>
            <a class="navbar-brand dropdown-item" href="/companies">Companies</a>
            <div class="dropdown-divider"></div>
            <a class="navbar-brand dropdown-item" href="#">Departments</a>
          </div>
        </li>
      </ul>
    </div>

        @if(Session::has('user'))
                <?php $user = Session::get('user');?>
                <a href="/test" class="h3">{{$user['name'].' '.$user['surname']}}</a>

        @else

    <!-- Login form -->
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}} </div>
            @elseif(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}} </div>
           @endif
    <form class="d-flex" method="POST" action="{{route('login-user')}}">
        @csrf
    <div class="forms-inputs collapse navbar-collapse" id="mynavbar">
      <input type="text" name="uid" value="" placeholder="Ais ID" class="form-control-lg input-w"/>
        <span class="text-danger">@error('uid') {{$message}}} @enderror</span>
    </div>

    <div class="forms-inputs btwn-2 collapse navbar-collapse" id="mynavbar">
      <input type="password" name="password" id="password" placeholder="Password" class="form-control form-control-lg input-w" />
        <span class="text-danger">@error('password') {{$message}}} @enderror</span>
    </div>
    <button class="btn-control btn btn-outline-dark btn-lg px-4 btwn-2 collapse navbar-collapse" id="mynavbar" type="submit">Log in</button>
  </form>
    <!-- Sign Up modal -->
       <button class="btn btn-outline-dark btn-lg px-4 btwn"  data-bs-toggle="modal" data-bs-target="#registerModal" type="button">Sign up</button>
      </div>
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
                        <div class=" p-4 p-md-5">
                          <h3 class="fw-bold">Sign Up</h3>
                          <!-- Registration form -->
                          <form method="POST" action="{{route('register-user')}}">
                            @csrf

                            <div class="row">
                              <div class="col-lg-6 mb-4">

                                <div class="forms-inputs-lg mb-4">
                                <input type="text" placeholder="First Name" name="name" class="form-control form-control-lg" />
                                </div>

                              </div>
                              <div class="col-lg-6 mb-4">
                                <div class="forms-inputs-lg mb-4">
                                    <input type="text" placeholder="Last Name" name="surname"  class="form-control form-control-lg" />
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
                                    <input type="email" placeholder="Email" name="email"  class="form-control form-control-lg" />
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
                                  <button class="btn btn-outline-dark btn-lg px-5" type="submit">Sign Up</button>
                                </div>

                          </form>
                        </div>
                      </div>
                  </div>
            </div>
          </div>
        </div>
    @endif
  </nav>



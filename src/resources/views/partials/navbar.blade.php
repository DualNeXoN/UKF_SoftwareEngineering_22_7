<nav class="navbar navbar-expand navbar-light bg-nav">
    <div class="container-fluid">
    <a href="/"><img src="{{asset('img/logo_pputils_t.png')}}" alt="" width="75" class="navbar-brand"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link mx-2 mw" href="#">Help</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mx-2 mw" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Internships
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">First</a>
            <a class="dropdown-item" href="#">Second</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Third</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="forms-inputs">
      <span class="form-label" for="typeNumber">Ais ID</span>
      <input type="text" id="typeNumber" class="form-control-lg input-w"/>
    </div>

    <div class="forms-inputs btwn-2">
      <span class="form-label" for="typePasswordX">Password</span>
      <input type="password" id="typePasswordX" class="form-control form-control-lg input-w" />
    </div>
    <button class="btn-control btn btn-outline-dark btn-lg px-4 btwn-2" type="submit">Log in</button>
    
       <button class="btn btn-outline-dark btn-lg px-4 btwn" data-bs-toggle="modal" data-bs-target="#registerModal" type="button">Sign up</button>
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
              <div class="">
                <div class="row justify-content-center card-pos pos-mar">
                  <div class="col-12">
                    <div style="border-radius: 15px;">
                      <div class=" p-4 p-md-5">
                        <h3 class="fw-bold">Sign Up</h3>
                        <form>
            
                          <div class="row">
                            <div class="col-lg-6 mb-4">
            
                              <div class="forms-inputs-lg mb-4">
                              <span class="form-label" for="firstName">First Name</span>
                                <input type="text" id="firstName" class="form-control form-control-lg" />
                              </div>
            
                            </div>
                            <div class="col-lg-6 mb-4">
                              <div class="forms-inputs-lg mb-4">
                                  <span class="form-label" for="lasttName">Last Name</span>
                                <input type="text" id="lastName" class="form-control form-control-lg" />
                              </div>
                            </div>
                          </div>
            
                          <div class="row">
                            <div class="col-md-6 mb-4">
            
                              <div class="forms-inputs mb-4">
                              <span for="birthdayDate" class="form-label">Date of Birth</span>
                                <input type="date" class="form-control form-control-lg" id="birthdayDate" />
                               
                              </div>
            
                            </div>
                            <div class="col-md-6 mb-4">
                              <div class="forms-inputs mb-4">
                                  <span class="form-label" for="homeTown">Hometown</span>
                                <input type="text" id="homeTown" class="form-control form-control-lg" />
                              </div>
                            </div>
                          </div>
            
                          <div class="row">
                            <div class="col-md-6 mb-4 pb-2">
            
                              <div class="forms-inputs mb-4">
                                  <span class="form-label" for="emailAddress">Email</span>
                                <input type="email" id="emailAddress" class="form-control form-control-lg" />
                              </div>
            
                            </div>
                            <div class="col-md-6 mb-4 pb-2">
            
                              <div class="forms-inputs mb-4">
                                  <span class="form-label" for="aisNumber">Ais ID</span>
                                <input type="text" id="aisNumber" class="form-control form-control-lg" />
                              </div>
            
                            </div>
                          </div>
            
                          <div class="row">
                              <div class="col-md-6 mb-4 pb-2">
            
                                  <div class="forms-inputs mb-4">
                                      <span class="form-label" for="passType">Password</span>
                                    <input type="password" id="passType" class="form-control form-control-lg" />
                                  </div>
                
                                </div>
                                <div class="col-md-6 mb-4 pb-2">
            
                                  <div class="forms-inputs mb-4">
                                      <span class="form-label" for="confPassType">Confirm Password</span>
                                    <input type="password" id="confPassType" class="form-control form-control-lg" />
                                  </div>
                                </div>
                                <button class="btn btn-outline-dark btn-lg px-5" type="submit">Sign Up</button>
                                
                              </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
    
        </div>
      </div>
    </div>
  </nav>


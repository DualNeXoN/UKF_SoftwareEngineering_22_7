@extends('layouts.layout')

@section('content')

<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row justify-content-center card-pos h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="fw-bold mb-4 text-uppercase">Sign Up</h3>
              <form>
  
                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div class="forms-inputs mb-4">
                    <span class="form-label" for="firstName">First Name</span>
                      <input type="text" id="firstName" class="form-control form-control-lg" />
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="forms-inputs mb-4">
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
  </section>

@endsection
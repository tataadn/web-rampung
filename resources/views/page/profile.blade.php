@extends('theme.index')

@section('content')
    <!-- profile -->
    <div class="profile">
        <div class="row justify-content-center" style="padding-top: 6rem;">
            <h3 class="mb-3 text-center">Profile Saya</h3>
            <div class="col-sm-4">
              <img src="img/Profile pic-pana.png" alt="" style="width: 400px;">
            </div>
            <div class="col-sm-4">
              <div class="border p-4 shadow-5">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                          <p class="mb-0">Nama</p>
                      </div>
                      <div class="col-sm-9">
                          <p class="text-muted mb-0">Nama nama</p>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                      </div>
                      <div class="col-sm-9">
                        <p class="text-muted mb-0">email@email.com</p>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-sm-3">
                          <p class="mb-0">Username</p>
                      </div>
                      <div class="col-sm-9">
                          <p class="text-muted mb-0">username</p>
                      </div>
                    </div>
                      <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <p class="mb-0">Password</p>
                      </div>
                      <div class="col-sm-9">
                        <p class="text-muted mb-0">password</p>
                      </div>
                    </div>  
                  </div>
              </div>
              <div class="row text-center">
                <div class="col">
                  <a href="coba2.html" type="button" class="btn btn-primary btn-rounded btn-lg">Edit Profile</a>
                </div>
              </div>
            </div>
        </div>
    </div>
    <!-- profile -->
@endsection

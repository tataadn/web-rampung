@extends('theme.index')

@section('content')
    <!-- edit -->
    <div class="content">
        <div class="row justify-content-center" style="padding-top: 6rem;">
          <h3 class="mb-3 text-center">Profile Saya</h3>
            <div class="col-sm-4">
                <img src="img/Profile pic-pana.png" alt="" style="width: 400px;">
            </div>
            <div class="col-sm-4">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                      <form>
                        <div class="form-outline mb-4">
                          <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example1cg">Nama</label>
                        </div>
        
                        <div class="form-outline mb-4">
                          <input type="username" id="form3Example3cg" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example3cg">Username</label>
                        </div>
        
                        <div class="form-outline mb-4">
                          <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                          <label class="form-label" for="form3Example4cg">Password</label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="" type="submit" class="btn btn-primary btn-rounded mb-4">Submit</a>
                        </div>
                      </form>
                    </div>
                </div>
          </div>
        </div>
    </div>
    <!-- edit -->
@endsection
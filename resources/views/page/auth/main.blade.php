@extends('theme.auth')

 @section('content')
 <div id="login_page">
   <!-- Login -->
   <section class="vh-100" style="background-image:url({{asset('img/artificial-intelligence.jpg')}})">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img
                    src="{{asset('img/Mobile login-rafiki.png')}}"
                    alt="login form"
                    class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                  />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 text-black">

                    <form id="form_login">
                      <div class="d-flex align-items-center">
                          <img
                          src="{{asset('img/rampung.logo.png')}}"
                          width="70px"
                          alt="Rampung Analytic Logo"
                          loading="lazy"
                        />
                        <span class="h1 fw-bold mb-0">Rampung Analytic</span>
                      </div>
    
                      <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masuk ke Akun Anda</h5>
    
                      <div class="form-outline mb-4">
                        <input type="username" name="username" id="form2Example17" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example17">Username</label>
                      </div>
    
                      <div class="form-outline mb-4">
                        <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example27">Password</label>
                      </div>
    
                      <div class="pt-1 mb-4">
                        <button class="btn btn-primary btn-lg btn-block" id="button_login" type="button" onclick="auth('#button_login','#form_login','{{route('auth.login')}}','Login')">Login</button>
                      </div>
    
                      <a class="small text-muted" href="javascript:void(0);" 
                      {{-- onclick="auth_content('forgot_page')" --}}
                      >Lupa password?</a>
                      <p class="mb-2 pb-lg-2" style="color: #393f81;">Belum memiliki akun? <a href="javascript:void(0);" onclick="auth_content('register_page');" style="color: #393f81;">Register di sini</a></p>
                      <p class="pb-lg-2" style="color: #393f81;">Kembali ke home? <a href="{{route('page.home')}}" style="color: #393f81;">Klik disini</a></p>
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- Login -->
 </div>

 <div class="sign-up-mode pb-5">
    <div id="register_page">
      <!-- register -->
        <section class="vh-100">
          <div class="container py-4 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
              <h2 class="text-center pt-2">Register Akun</h2>
              <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="{{asset('img/Tablet login-rafiki.png')}}" class="img-fluid" alt="Phone image">
              </div>
              <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">  
                <form id="form_register">  
                  <!-- nama input -->
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Sudah memiliki akun? <a href="javascript:void(0);" onclick="auth_content('login_page');" style="color: #393f81;">Login di sini</a></p>
                  <div class="form-outline mb-4">
                      <input type="name" id="form1Example23" name="name" class="form-control form-control-lg" />
                      <label class="form-label" for="form1Example23">Nama</label>
                    </div>
        
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" />
                    <label class="form-label" for="form1Example13">Email</label>
                  </div>
        
                  <!-- username input -->
                  <div class="form-outline mb-4">
                      <input type="username" id="form1Example23" name="username" class="form-control form-control-lg" />
                      <label class="form-label" for="form1Example23">Username</label>
                    </div>
        
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="form1Example23" name="password" class="form-control form-control-lg" />
                    <label class="form-label" for="form1Example23">Password</label>
                  </div>
        
                  <!-- Submit button -->
                  <button type="button" id="button_register" class="btn btn-primary btn-lg btn-block" onclick="auth('#button_register','#form_register','{{route('auth.register')}}','Register')">Sign in</button>
                </form>
              </div>
            </div>
          </div>
        </section>
        <br>
      <!-- register -->
    </div>
 </div>
 @section('custom_js')
  <script>
        auth_content('login_page');
        $("#email_login").focus();
  </script>
 @endsection
@endsection
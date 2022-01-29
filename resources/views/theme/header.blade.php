<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="/">
        <img
          src="img/rampung.logo.png"
          width="100%"
          alt="Rampung Analytic Logo"
          loading="lazy"
        />
      </a>

      <!-- Collapsible wrapper -->
      <div class="collapse justify-content-center navbar-collapse" id="navbarSupportedContent">
        
        <!-- Left links -->
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item me-3">
            <strong><a class="nav-link {{request()->is('about') ? 'active' : ''}}" href="{{route('page.about')}}">Tentang Kami</a></strong>
          </li>
          <li class="nav-item dropdown position-static me-3">
            <a
              class="nav-link {{ (request()->is('solution')  ? 'active' : request()->is('academy') ?? request()->is('scholarship')) ? 'active' : ''}}"
              href="#"
              id="navbarDropdown"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              <strong>Solusi</strong>
            </a>
            <!-- Dropdown menu -->
            <div
              class="dropdown-menu w-100 mt-0"
              aria-labelledby="navbarDropdown"
              style="
                border-top-left-radius: 0;
                border-top-right-radius: 0;
              "
            >
              <div class="container">
                <div class="row my-4">
                  <div
                    class="col-md-4 col-lg-4 mb-lg-0"
                  >
                    <div
                      class="list-group list-group-flush"
                    >
                      <p
                        class="mb-0 list-group-item text-uppercase font-weight-bold"
                      >
                        Produk
                      </p>
                      <a
                        href=""
                        class="list-group-item list-group-item-action"
                        ><i
                          class="fas fa-caret-right pe-2"
                        ></i
                        >Rala Lab</a
                      >
                      <a
                        href=""
                        class="list-group-item list-group-item-action"
                        ><i
                          class="fas fa-caret-right pe-2"
                        ></i
                        >Rala.ai</a
                      >
                    </div>
                  </div>
                  <div
                    class="col-md-4 col-lg-4 mb-md-0"
                  >
                    <div
                      class="list-group list-group-flush"
                    >
                      <p
                        class="mb-0 list-group-item text-uppercase font-weight-bold"
                      >
                        layanan
                      </p>
                      <a
                        href=""
                        class="list-group-item list-group-item-action"
                        ><i
                          class="fas fa-caret-right pe-2"
                        ></i
                        >Rala Research</a
                      >
                      <a
                        href="{{route('page.solution')}}"
                        class="list-group-item list-group-item-action  {{request()->is('solution') ? 'active' : ''}}"
                        ><i
                          class="fas fa-caret-right pe-2"
                        ></i
                        >Rala Data Solution</a
                      >
                      <a
                        href=""
                        class="list-group-item list-group-item-action"
                        ><i
                          class="fas fa-caret-right pe-2"
                        ></i
                        >Rala Report</a
                      >
                      <a
                        href="{{route('page.academy')}}"
                        class="list-group-item list-group-item-action  {{request()->is('academy') ? 'active' : ''}}"
                        ><i
                          class="fas fa-caret-right pe-2"
                        ></i
                        >Rala Academy</a
                      >
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                    <div
                      class="list-group list-group-flush"
                    >
                    <p
                      class="mb-0 list-group-item text-uppercase font-weight-bold"
                    >
                      <a class="list-group-item list-group-item-action  {{request()->is('scholarship') ? 'active' : ''}}" href="{{route('page.scholarship')}}">
                        Indonesia Paham Statistika Scholarship
                      </a>
                    </p>
                      <p class="list-group-item">
                        Merupakan program pelatihan literasi statistika untuk guru dan pelajar yang bertujuan untuk meningkatkan kemampuan literasi statistik siswa dan guru. Program gratis dengan sertifikat 32 JPL (8 hari pelatihan). Pelatihan diadakan setiap hari Sabtu/Minggu
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item me-3">
            <strong><a class="nav-link  {{request()->is('blog') ? 'active' : ''}}" href="{{route('page.blog')}}">Blog</a></strong>
          </li>
          <li class="nav-item me-3">
            <strong><a class="nav-link  {{request()->is('carier') ? 'active' : ''}}" href="{{route('page.carier')}}">Karir</a></strong>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Button -->
        @guest
          <a href="{{route('auth.index')}}" type="button" class="btn btn-outline-primary me-2" data-mdb-ripple-color="dark">MASUK/DAFTAR</a>  
        @endguest

        @auth
        <div class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle d-flex align-items-center"
            href="#"
            id="navbarDropdownMenuLink"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
            style="color: black"
          >
            <img
              src="https://www.nicepng.com/png/detail/302-3026464_png-file-svg-login-member-icon-png.png"
              class="rounded-circle"
              height="22"
              alt="Portrait of a Woman"
              loading="lazy"
            />
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li>
              <a class="dropdown-item fw-bold" href="#">{{Auth::user()->name}}</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{route('profile.index')}}">My Profile</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{route('auth.logout')}}">Logout</a>
            </li>
          </ul>
        </div>
        @endauth
        {{-- <a href="/register" type="button" class="btn btn-primary me-2">DAFTAR</a> --}}
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
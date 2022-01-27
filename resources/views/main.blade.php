<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Rampung</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/rampung.logo.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
  </head>
  <body>
    <!-- Start your project here-->
      <!-- Navbar -->
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
                  <strong><a class="nav-link" href="/tentang">Tentang Kami</a></strong>
                </li>
                <li class="nav-item dropdown position-static me-3">
                  <a
                    class="nav-link"
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
                              href=""
                              class="list-group-item list-group-item-action"
                              ><i
                                class="fas fa-caret-right pe-2"
                              ></i
                              >Rala Data</a
                            >
                            <a
                              href=""
                              class="list-group-item list-group-item-action"
                              ><i
                                class="fas fa-caret-right pe-2"
                              ></i
                              >Solution</a
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
                              href=""
                              class="list-group-item list-group-item-action"
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
                            Indonesia Paham Statistika Scholarship
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
                  <strong><a class="nav-link" href="/blog">Blog</a></strong>
                </li>
                <li class="nav-item me-3">
                  <strong><a class="nav-link" href="/karir">Karir</a></strong>
                </li>
              </ul>
              <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
              <!-- Button -->
              <a href="/login" type="button" class="btn btn-outline-primary me-2" data-mdb-ripple-color="dark">MASUK</a>
              <a href="/register" type="button" class="btn btn-primary me-2">DAFTAR</a>
            </div>
            <!-- Right elements -->
          </div>
          <!-- Container wrapper -->
        </nav>
      <!-- Navbar -->

      @yield('content')

      <!-- Footer -->
        <footer class="text-center text-lg-start bg-light text-muted">
          <section 
            class="d-flex justify-content-center 
            justify-content-lg-between p-4 border-bottom">
          </section>

          <!-- Section: Links  -->
          <section class="">
            <div class="container text-center small text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-3">
                  <!-- Content -->
                  <img src="img/rampung.logo.png" alt="" class="mb-3" style="width: 150px;">
                  <p>
                    <i class="fas fa-home me-3"></i> PT Inovasi Rampung Indonesia
                    Jalan Karangmojo-Semanu KM.2
                    Kelor, Kec. Karangmojo
                    Gunungkidul 55891, Yogyakarta
                  </p>
                  <p>
                    <i class="fas fa-phone me-3"></i> (+62) 83867525611
                  </p>
                  <p>
                    <i class="fas fa-envelope me-3"></i> info@rampunganalytic.com
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    SOLUSI
                  </h6>
                  <p>
                    <a href="#!" class="text-reset">RalaLab</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Rala.ai</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Rala Research</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Rala Data Solution</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Rala Report</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Rala Academy</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    PERUSAHAAN
                  </h6>
                  <p>
                    <a href="#!" class="text-reset">Tentang Kami</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Karir</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Hubungi Kami</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold mb-4">
                    IKUTI KAMI
                  </h6>
                  <a href=""><i class="fab fa-instagram fa-2x me-2"></i></a>
                  <a href=""><i class="fab fa-linkedin fa-2x me-2"></i></a>
                  <a href=""><i class="fab fa-youtube fa-2x me-2"></i></a>
                  <a href=""><i class="fab fa-facebook fa-2x me-2"></i></a>
                  <a href=""><i class="fab fa-twitter fa-2x me-2"></i></a>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Section: Links  -->

          <!-- Copyright -->
          <div class="text-center small text-white p-3 bg-primary" style="background-color: rgba(0, 0, 0, 0.05);">
            <div class="row">
              <div class="col-4"><a class="text-white fw-bold" href="">2022 PT Inovasi Rampung Indonesia. All rights reserved</a></div>
              <div class="col-4"><a class="text-white fw-bold" href="">Kebijakan Privasi</a></div>
              <div class="col-4"><a class="text-white fw-bold" href="">Syarat dan Ketentuan</a></div>
            </div>
          </div>
          <!-- Copyright -->
        </footer>
      <!-- Footer -->
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>

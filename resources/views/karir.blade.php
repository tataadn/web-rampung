@extends('main')

@section('content')
        <!-- jumbotron -->
        <section id="jumbotron">
            <div class="row" style="padding: 5rem 3rem 3rem 3rem;">
                <div class="col">
                    <div class="p-5 text-center bg-light">
                        <h1 class="mb-4">Jadilah bagian dari perjalanan kami</h1>
                        <h5 class="mb-5">Bergabunglah dalam perjalanan kami untuk menciptakan pendidikan Indonesia yang berdaya saing melalui pemanfaatan big data analytics dan artificial intelligence. Temukan berbagai tantangan serta kesempatan baru yang akan mengasah kemampuanmu!</h5>
                        <a class="btn btn-primary text-uppercase" href="" role="button"><h6>Lihat Lowongan</h6></a>
                    </div>
                </div>
            </div>
        </section>
      <!-- jumbotron -->

      <!-- content pertama -->
      <section class="content">
        <div class="container p-5 justify-content-center">
            <div class="row">
                <div class="col">
                    <h4 class="text-uppercase text-center p-2">value kami</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="kartu me-3">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                          <img src="img/Online lesson _Isometric.png" class="img-fluid"/>
                          <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                          </a>
                        </div>
                        <div class="card-body text-center">
                          <h5 class="card-title">Growth</h5>
                          <p class="card-text">Kami percaya bahwa pengembangan diri harus dilakukan terus menerus</p>
                        </div>
                      </div>
                </div>
                <div class="col-sm-4">
                    <div class="kartu me-3">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                          <img src="img/Analysis _Isometric.png" class="img-fluid"/>
                          <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                          </a>
                        </div>
                        <div class="card-body text-center">
                          <h5 class="card-title">Kaizen</h5>
                          <p class="card-text">Kami melakukan penyempurnaan pada setiap elemen secara terus menerus</p>
                          </div>
                      </div>
                </div>
                <div class="col-sm-4">
                    <div class="kartu me-3">
                        <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                          <img src="img/Data analyst _Isometric.png" class="img-fluid"/>
                          <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                          </a>
                        </div>
                        <div class="card-body text-center">
                          <h5 class="card-title">Excellence</h5>
                          <p class="card-text">Kami selalu menerapkan standar tinggi dalam bekerja untuk menjamin kualitas</p>
                          </div>
                      </div>
                </div>
            </div>
        </div>
      </section>
      <!-- content pertama -->

      <!-- content kedua -->
      <section class="content">
          <div class="container justify-content-center p-5">
              <div class="row">
                  <div class="col">
                      <h4 class="text-uppercase text-center p-4">posisi yang dibutuhkan</h4>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-4">
                        <div class="me-3 hover-zoom" style="width: 18rem;">
                            <img src="img/Analysis _Isometric.png" class="card-img-top" alt="Sunset Over the Sea"/>
                        </div>
                  </div>
                  <div class="col-sm-4">
                        <div class="me-3 hover-zoom" style="width: 18rem;">
                            <img src="img/Data analyst _Isometric.png" class="card-img-top" alt="Sunset Over the Sea"/>
                        </div>
                  </div>
                  <div class="col-sm-4">
                        <div class="me-3 hover-zoom" style="width: 18rem;">
                            <img src="img/Online lesson _Isometric.png" class="card-img-top" alt="Sunset Over the Sea"/>
                        </div>
                  </div>
              </div>
              <div class="row p-3">
                  <div class="col-sm-4">
                        <div class="me-3 hover-zoom" style="width: 18rem;">
                            <img src="img/Analysis _Isometric.png" class="card-img-top" alt="Sunset Over the Sea"/>
                        </div>
                  </div>
                  <div class="col-sm-4">
                        <div class="me-3 hover-zoom" style="width: 18rem;">
                            <img src="img/Data analyst _Isometric.png" class="card-img-top" alt="Sunset Over the Sea"/>
                        </div>
                  </div>
                  <div class="col-sm-4">
                        <div class="me-3 hover-zoom" style="width: 18rem;">
                            <img src="img/Online lesson _Isometric.png" class="card-img-top" alt="Sunset Over the Sea"/>
                        </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- content kedua -->
@endsection
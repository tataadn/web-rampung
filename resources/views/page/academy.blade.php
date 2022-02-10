@extends('theme.index')

@section('content')

        <!-- jumbotron -->
        <section class="jumbotron" style="background-image: linear-gradient(to bottom, rgba(251, 251, 251, 0.6) 0%,rgba(251, 251, 251, 0.6) 100%), url(img/bigdata.jpg);">
            <div class="container p-5 justify-content-center text-center">
                <div class="row m-3 pt-3">
                    <div class="col mt-3 mb-2">
                        <h1 class="fw-bold display-5">Rala Academy</h1>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-sm-4 mb-3 hover-zoom">
                        <a href="{{route('page.course')}}">
                            <img src="img/bg/1.png" alt="" style="max-width: 280px;">
                        </a>
                    </div>
                    <div class="col-sm-4 mb-3 hover-zoom">
                        <a href="{{route('page.training')}}">
                            <img src="img/bg/2.png" alt="" style="max-width: 280px;">
                        </a>
                    </div>
                    <div class="col-sm-4 mb-3 hover-zoom">
                        <a href="{{route('page.mentorship')}}">
                            <img src="img/bg/3.png" alt="" style="max-width: 280px;">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- jumbotron -->

<<<<<<< Updated upstream
=======
        <!-- kelas course -->
        <section id="course">
            <div class="container p-5">
                <div class="row m-3 pt-3">
                    <div class="col text-center">
                        <h1 class="fw-bold display-5">Kelas Short Course</h1>
                        <h5>Akselerasi Pengetahuan dengan Belajar melalui Short Course</h5>
                    </div>
                </div>
                <div class="row m-3 pt-3 justify-content-center">
                    <div class="col-sm-4">
                        <div class="border border-primary m-3" style="border-radius: 3rem;">
                            <div class="m-2">
                                <img src="https://cdn-cms.pgimgs.com/static/2020/09/1.-Mengenal-Pendidikan-di-Indonesia.png" class="card-img-top" style="border-radius: 2.5rem;" alt="Fissure in Sandstone"/>
                                <div class="card-body">
                                    <h6>Kelas Short Course</h6>
                                    <h5 class="card-title">NLP dengan Deep Learning
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col" style="margin-top: -35px;">
                                <div class="text-center">
                                    <a href="#!" class="btn btn-primary text-uppercase"><h6>Rp 99.000</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border border-primary m-3" style="border-radius: 3rem;">
                            <div class="m-2">
                                <img src="https://cdn-cms.pgimgs.com/static/2020/09/1.-Mengenal-Pendidikan-di-Indonesia.png" class="card-img-top" style="border-radius: 2.5rem;" alt="Fissure in Sandstone"/>
                                <div class="card-body">
                                    <h6>Kelas Short Course</h6>
                                    <h5 class="card-title">Dasar-dasar Pemrograman Python
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col" style="margin-top: -35px;">
                                <div class="text-center">
                                    <a href="#!" class="btn btn-primary text-uppercase"><h6>Rp 99.000</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row m-3 pt-3">
                    <div class="col-sm-4">
                        <div class="border border-primary m-3" style="border-radius: 3rem;">
                            <div class="m-2">
                                <img src="https://cdn-cms.pgimgs.com/static/2020/09/1.-Mengenal-Pendidikan-di-Indonesia.png" class="card-img-top" style="border-radius: 2.5rem;" alt="Fissure in Sandstone"/>
                                <div class="card-body">
                                    <h6>Kelas Short Course</h6>
                                    <h5 class="card-title">Data Mining Algorithms
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col" style="margin-top: -35px;">
                                <div class="text-center">
                                    <a href="#!" class="btn btn-primary text-uppercase"><h6>Rp 99.000</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border border-primary m-3" style="border-radius: 3rem;">
                            <div class="m-2">
                                <img src="https://cdn-cms.pgimgs.com/static/2020/09/1.-Mengenal-Pendidikan-di-Indonesia.png" class="card-img-top" style="border-radius: 2.5rem;" alt="Fissure in Sandstone"/>
                                <div class="card-body">
                                    <h6>Kelas Short Course</h6>
                                    <h5 class="card-title">Basic Text Processing
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col" style="margin-top: -35px;">
                                <div class="text-center">
                                    <a href="#!" class="btn btn-primary text-uppercase"><h6>Rp 99.000</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border border-primary m-3" style="border-radius: 3rem;">
                            <div class="m-2">
                                <img src="https://cdn-cms.pgimgs.com/static/2020/09/1.-Mengenal-Pendidikan-di-Indonesia.png" class="card-img-top" style="border-radius: 2.5rem;" alt="Fissure in Sandstone"/>
                                <div class="card-body">
                                    <h6>Kelas Short Course</h6>
                                    <h5 class="card-title">Data Mining Algorithms
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col" style="margin-top: -35px;">
                                <div class="text-center">
                                    <a href="#!" class="btn btn-primary text-uppercase"><h6>Rp 99.000</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- kelas course -->

        <!-- kelas virtual -->
        <section id="virtual">
            <div class="container">
                <div class="row mt-5 pt-5">
                    <div class="col pt-5 text-center">
                        <h1 class="fw-bold display-5">Kelas Virtual Training Day</h1>
                        <h5>Virtual Training untuk Persiapan Mengikuti Fundamental Mentorship</h5>
                    </div>
                </div>
                <div class="row m-3 pt-5 pb-5">
                    <div class="col text-center">
                        <h1 class="fw-bold display-5">Isi Konten</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- kelas virtual -->

        <!-- kelas mentorship -->
        <section id="mentorship">
            <div class="container">
                <div class="row mt-4 pt-5">
                    <div class="col pt-5 text-center">
                        <h1 class="fw-bold display-5">Kelas Fundamental Mentorship</h1>
                        <h5>Bangun keahlianmu dengan belajar dari fundamental</h5>
                    </div>
                </div>
                <div class="row m-3 pt-3">
                    <div class="col-sm-3">
                        <div class="border border-primary m-3" style="border-radius: 3rem;">
                            <div class="m-2">
                                <img src="https://cdn-cms.pgimgs.com/static/2020/09/1.-Mengenal-Pendidikan-di-Indonesia.png" class="card-img-top" style="border-radius: 2.5rem;" alt="Fissure in Sandstone"/>
                                <div class="card-body">
                                    <h6><small>Kelas Fundamental Mentorship</small></h6>
                                    <h5 class="card-title fw-bold">Python, R & SQL Programming
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col" style="margin-top: -35px;">
                                <div class="text-center">
                                    <a href="#detail" class="btn btn-primary text-uppercase"><h6>lihat kelas</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border border-primary m-3" style="border-radius: 3rem;">
                            <div class="m-2">
                                <img src="https://cdn-cms.pgimgs.com/static/2020/09/1.-Mengenal-Pendidikan-di-Indonesia.png" class="card-img-top" style="border-radius: 2.5rem;" alt="Fissure in Sandstone"/>
                                <div class="card-body">
                                    <h6><small>Kelas Fundamental Mentorship</small></h6>
                                    <h5 class="card-title fw-bold">Data Visualization
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col" style="margin-top: -35px;">
                                <div class="text-center">
                                    <a href="#detail" class="btn btn-primary text-uppercase"><h6>lihat kelas</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border border-primary m-3" style="border-radius: 3rem;">
                            <div class="m-2">
                                <img src="https://cdn-cms.pgimgs.com/static/2020/09/1.-Mengenal-Pendidikan-di-Indonesia.png" class="card-img-top" style="border-radius: 2.5rem;" alt="Fissure in Sandstone"/>
                                <div class="card-body">
                                    <h6><small>Kelas Fundamental Mentorship</small></h6>
                                    <h5 class="card-title fw-bold">Machine Learning
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col" style="margin-top: -35px;">
                                <div class="text-center">
                                    <a href="#detail" class="btn btn-primary text-uppercase"><h6>lihat kelas</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border border-primary m-3" style="border-radius: 3rem;">
                            <div class="m-2">
                                <img src="https://cdn-cms.pgimgs.com/static/2020/09/1.-Mengenal-Pendidikan-di-Indonesia.png" class="card-img-top" style="border-radius: 2.5rem;" alt="Fissure in Sandstone"/>
                                <div class="card-body">
                                    <h6><small>Kelas Fundamental Mentorship</small></h6>
                                    <h5 class="card-title fw-bold">Deep Learning
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col" style="margin-top: -35px;">
                                <div class="text-center">
                                    <a href="#detail" class="btn btn-primary text-uppercase"><h6>lihat kelas</h6></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- kelas mentorship -->

        <!-- detail kelas -->
        <section id="detail">
            <div class="container pt-2">
                <div class="row mt-5 pt-5">
                    <div class="col-md-3">
                        <div class="border border-info">
                            <div class="card-body">
                                <h3 class="card-tittle fw-bold">Detail Kelas</h3>
                                <!-- Tab navs -->
                                <div
                                    class="nav flex-column nav-tabs"
                                    id="v-tabs-tab"
                                    role="tablist"
                                    aria-orientation="vertical"
                                    >
                                    <a
                                        class="nav-link"
                                        id="v-tabs-tentang-tab"
                                        data-mdb-toggle="tab"
                                        href="#v-tabs-tentang"
                                        role="tab"
                                        aria-controls="v-tabs-tentang"
                                        aria-selected="true"
                                        style="text-transform: capitalize;"
                                        ><h6>Tentang Program</h6></a
                                    >
                                    <a
                                        class="nav-link"
                                        id="v-tabs-metode-tab"
                                        data-mdb-toggle="tab"
                                        href="#v-tabs-metode"
                                        role="tab"
                                        aria-controls="v-tabs-metode"
                                        aria-selected="false"
                                        style="text-transform: capitalize;"
                                        ><h6>Metode Belajar</h6></a
                                    >
                                    <a
                                        class="nav-link"
                                        id="v-tabs-benefit-tab"
                                        data-mdb-toggle="tab"
                                        href="#v-tabs-benefit"
                                        role="tab"
                                        aria-controls="v-tabs-benefit"
                                        aria-selected="false"
                                        style="text-transform: capitalize;"
                                        ><h6>Benefit</h6></a
                                    >
                                    <a
                                        class="nav-link"
                                        id="v-tabs-kurikulum-tab"
                                        data-mdb-toggle="tab"
                                        href="#v-tabs-kurikulum"
                                        role="tab"
                                        aria-controls="v-tabs-kurikulum"
                                        aria-selected="true"
                                        style="text-transform: capitalize;"
                                        ><h6>Kurikulum</h6></a
                                    >
                                    <a
                                        class="nav-link"
                                        id="v-tabs-projects-tab"
                                        data-mdb-toggle="tab"
                                        href="#v-tabs-projects"
                                        role="tab"
                                        aria-controls="v-tabs-projects"
                                        aria-selected="false"
                                        style="text-transform: capitalize;"
                                        ><h6>Projects</h6></a
                                    >
                                    <a
                                        class="nav-link"
                                        id="v-tabs-jadwal-tab"
                                        data-mdb-toggle="tab"
                                        href="#v-tabs-jadwal"
                                        role="tab"
                                        aria-controls="v-tabs-jadwal"
                                        aria-selected="false"
                                        style="text-transform: capitalize;"
                                        ><h6>Jadwal Kelas</h6></a
                                    >
                                    <a
                                        class="nav-link"
                                        id="v-tabs-mentor-tab"
                                        data-mdb-toggle="tab"
                                        href="#v-tabs-mentor"
                                        role="tab"
                                        aria-controls="v-tabs-mentor"
                                        aria-selected="true"
                                        style="text-transform: capitalize;"
                                        ><h6>Mentor</h6></a
                                    >
                                    <a
                                        class="nav-link"
                                        id="v-tabs-biaya-tab"
                                        data-mdb-toggle="tab"
                                        href="#v-tabs-biaya"
                                        role="tab"
                                        aria-controls="v-tabs-biaya"
                                        aria-selected="false"
                                        style="text-transform: capitalize;"
                                        ><h6>Biaya Kelas</h6></a
                                    >
                                    <a
                                        class="nav-link"
                                        id="v-tabs-testimoni-tab"
                                        data-mdb-toggle="tab"
                                        href="#v-tabs-testimoni"
                                        role="tab"
                                        aria-controls="v-tabs-testimoni"
                                        aria-selected="false"
                                        style="text-transform: capitalize;"
                                        ><h6>Testimoni</h6></a
                                    >
                                    <a
                                        class="nav-link"
                                        id="v-tabs-faq-tab"
                                        data-mdb-toggle="tab"
                                        href="#v-tabs-faq"
                                        role="tab"
                                        aria-controls="v-tabs-faq"
                                        aria-selected="false"
                                        style="text-transform: capitalize;"
                                        ><h6>FAQ</h6></a
                                    >
                                </div>
                                <!-- Tab navs -->
                                <a href="https://wa.me/6283867525611?text=Saya%20ingin%20mendaftar%20kelas%20ini" target="_blank" class="btn btn-block btn-primary text-uppercase mt-3"><h6>DAFTAR</h6></a>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-md-9">
                      <!-- Tab content -->
                      <div class="tab-content" id="v-tabs-tabContent">
                        <div
                          class="tab-pane fade"
                          id="v-tabs-tentang"
                          role="tabpanel"
                          aria-labelledby="v-tabs-home-tab"
                        >
                          Ini Konten Konten Program
                        </div>
                        <div
                          class="tab-pane fade"
                          id="v-tabs-metode"
                          role="tabpanel"
                          aria-labelledby="v-tabs-profile-tab"
                        >
                          Ini Konten Metode Belajar
                        </div>
                        <div
                          class="tab-pane fade"
                          id="v-tabs-benefit"
                          role="tabpanel"
                          aria-labelledby="v-tabs-messages-tab"
                        >
                          <h5 class="text-primary pt-4">Benefit</h5>
                          <h3>Yang Akan Kamu Dapat Dengan Mengikuti Kelas Ini</h3>
                          <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="2000">
                            <div class="col-sm-6">
                                <div class=" m-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                      <div class="col-md-4">
                                        <img
                                          src="img/Analysis _Isometric.png"
                                          alt="Trendy Pants and Shoes"
                                          class="img-fluid rounded-start"
                                        />
                                      </div>
                                      <div class="col-md-8">
                                        <div class="card-body">
                                          <h6 class="card-title fw-bold">Belajar Dari Dasar</h6>
                                          <p class="card-text">
                                            Menggunakan teknologi mutakhir
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-sm-6">
                                <div class=" m-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                      <div class="col-md-4">
                                        <img
                                          src="img/Data analyst _Isometric.png"
                                          alt="Trendy Pants and Shoes"
                                          class="img-fluid rounded-start"
                                        />
                                      </div>
                                      <div class="col-md-8">
                                        <div class="card-body">
                                          <h5 class="card-title fw-bold">Hard & Soft Skill</h5>
                                          <p class="card-text">
                                            Menggunakan teknologi mutakhir
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                          </div>
                          <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="2000">
                            <div class="col-sm-6">
                                <div class=" m-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                      <div class="col-md-4">
                                        <img
                                          src="img/Analysis _Isometric.png"
                                          alt="Trendy Pants and Shoes"
                                          class="img-fluid rounded-start"
                                        />
                                      </div>
                                      <div class="col-md-8">
                                        <div class="card-body">
                                          <h6 class="card-title fw-bold">Instruktur Praktisi</h6>
                                          <p class="card-text">
                                            Menggunakan teknologi mutakhir
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-sm-6">
                                <div class=" m-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                      <div class="col-md-4">
                                        <img
                                          src="img/Data analyst _Isometric.png"
                                          alt="Trendy Pants and Shoes"
                                          class="img-fluid rounded-start"
                                        />
                                      </div>
                                      <div class="col-md-8">
                                        <div class="card-body">
                                          <h5 class="card-title fw-bold">Capstone Project</h5>
                                          <p class="card-text">
                                            Menggunakan teknologi mutakhir
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                          </div>
                          <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="2000">
                            <div class="col-sm-6">
                                <div class=" m-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                      <div class="col-md-4">
                                        <img
                                          src="img/Analysis _Isometric.png"
                                          alt="Trendy Pants and Shoes"
                                          class="img-fluid rounded-start"
                                        />
                                      </div>
                                      <div class="col-md-8">
                                        <div class="card-body">
                                          <h6 class="card-title fw-bold">Fasilitas Setelah Lulus</h6>
                                          <p class="card-text">
                                            Menggunakan teknologi mutakhir
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="col-sm-6">
                                <div class=" m-3" style="max-width: 540px;">
                                    <div class="row g-0">
                                      <div class="col-md-4">
                                        <img
                                          src="img/Data analyst _Isometric.png"
                                          alt="Trendy Pants and Shoes"
                                          class="img-fluid rounded-start"
                                        />
                                      </div>
                                      <div class="col-md-8">
                                        <div class="card-body">
                                          <h5 class="card-title fw-bold">Forum Diskusi</h5>
                                          <p class="card-text">
                                            Menggunakan teknologi mutakhir
                                          </p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="tab-pane fade"
                          id="v-tabs-kurikulum"
                          role="tabpanel"
                          aria-labelledby="v-tabs-home-tab"
                        >
                          Ini konten Kurikulum
                        </div>
                        <div
                          class="tab-pane fade"
                          id="v-tabs-projects"
                          role="tabpanel"
                          aria-labelledby="v-tabs-profile-tab"
                        >
                        <h5 class="text-primary pt-4">Projects</h5>
                        <h3>Dengan Mengerjakan Project, Akan Membantumu Memahami Masalah Riil</h3>
                        <div class="row m-2 justify-content-center pt-5" data-aos="fade-up" data-aos-duration="2000">
                          <div class="col-sm-6 mb-4">
                              <div class="border border-warning" style="max-width: 540px;">
                                  <div class="row g-0">
                                    <div class="col-md-4">
                                      <img
                                        src="img/Analysis _Isometric.png"
                                        alt="Trendy Pants and Shoes"
                                        class="img-fluid rounded-start"
                                      />
                                    </div>
                                    <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title fw-bold">Weekly Project</h5>
                                        <p class="card-text">
                                          Selama 2 bulan kamu akan diberikan praktik langsung atau challenge setiap minggu nya untuk mempraktikkan pemahamanmu terkait materi yang sedang dipelajari.
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          </div>
                          <div class="col-sm-6 mb-4">
                              <div class="border border-warning" style="max-width: 540px;">
                                  <div class="row g-0">
                                    <div class="col-md-4">
                                      <img
                                        src="img/Data analyst _Isometric.png"
                                        alt="Trendy Pants and Shoes"
                                        class="img-fluid rounded-start"
                                      />
                                    </div>
                                    <div class="col-md-8">
                                      <div class="card-body">
                                        <h5 class="card-title fw-bold">Final Project</h5>
                                        <p class="card-text">
                                          Selama 2 bulan kamu akan diberikan praktik langsung atau challenge setiap minggu nya untuk mempraktikkan pemahamanmu terkait materi yang sedang dipelajari.
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          </div>
                        </div>
                        </div>
                        <div
                          class="tab-pane fade"
                          id="v-tabs-jadwal"
                          role="tabpanel"
                          aria-labelledby="v-tabs-messages-tab"
                        >
                          ini konten jadwal kelas
                        </div>
                        <div
                          class="tab-pane fade"
                          id="v-tabs-mentor"
                          role="tabpanel"
                          aria-labelledby="v-tabs-home-tab"
                        >
                          Ini konten mentor
                        </div>
                        <div
                          class="tab-pane fade"
                          id="v-tabs-biaya"
                          role="tabpanel"
                          aria-labelledby="v-tabs-profile-tab"
                        >
                        <h5 class="text-primary pt-4">Biaya Kelas</h5>
                        <h3>Belajar Tanpa Takut Biaya Mahal</h3>
                        <div class="row justify-content-center pt-5" data-aos="fade-up" data-aos-duration="2000">
                          <div class="col-sm-4 mb-4">
                              <div class="border border-info" style="max-width: 540px; border-radius: 20%;">
                                  <div class="row g-0">
                                    <div class="col">
                                      <div class="card-body">
                                        <h6 class="card-title fw-bold">Early Bird Fundamental Mentorship</h6>
                                        <div class="text-center">
                                          <h5 class="card-text pt-5">
                                            <s>Rp. 500.000</s>
                                          </h5>
                                          <h2 class="fw-bold">Rp 350.000</h2>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          </div>
                          <div class="col-sm-4 mb-4">
                            <div class="border border-info" style="max-width: 540px; border-radius: 20%;">
                                <div class="row g-0">
                                  <div class="col">
                                    <div class="card-body">
                                      <h6 class="card-title fw-bold lh-baseline">Fundamental Mentorship
                                        + Career Preparation + Konsultasi Privat
                                      </h6>
                                      <div class="text-center pt-5">
                                        <h2 class="pt-3 fw-bold">Rp 850.000</h2>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                          <div class="col-sm-4 mb-4">
                            <div class="border border-info" style="max-width: 540px; border-radius: 20%;">
                                <div class="row g-0">
                                  <div class="col">
                                    <div class="card-body">
                                      <h6 class="card-title fw-bold lh-baseline">Fundamental Mentorship
                                        Promo Cicilan 2x                                        
                                      </h6>
                                      <div class="text-center pt-5">
                                        <h1></h1>
                                        <h2 class="pt-4 fw-bold">Rp 175.000 <a href="" style="color: black; font-size:small; cursor: text;">x2</a></h2>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        </div>
                        <div
                          class="tab-pane fade"
                          id="v-tabs-testimoni"
                          role="tabpanel"
                          aria-labelledby="v-tabs-messages-tab"
                        >
                          ini konten Testimoni
                        </div>
                        <div
                          class="tab-pane fade"
                          id="v-tabs-faq"
                          role="tabpanel"
                          aria-labelledby="v-tabs-messages-tab"
                        >
                          ini konten FAQ
                        </div>
                      </div>
                      <!-- Tab content -->
                    </div>
                </div>
            </div>
        </section>
        <!-- detail kelas -->

>>>>>>> Stashed changes
@endsection
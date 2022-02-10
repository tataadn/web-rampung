@extends('theme.index')

@section('content')

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
                                <a  class="btn btn-primary text-uppercase"
                                    data-mdb-toggle="collapse"
                                    href="#collapse1"
                                    role="button"
                                    aria-expanded="false"
                                    aria-controls="collapse1">
                                    <h6>lihat kelas</h6>
                                </a>
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
                                <a  class="btn btn-primary text-uppercase"
                                data-mdb-toggle="collapse"
                                href="#collapse2"
                                role="button"
                                aria-expanded="false"
                                aria-controls="collapse2">
                                <h6>lihat kelas</h6>
                            </a>
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
                                <a  class="btn btn-primary text-uppercase"
                                    data-mdb-toggle="collapse"
                                    href="#collapse3"
                                    role="button"
                                    aria-expanded="false"
                                    aria-controls="collapse3">
                                    <h6>lihat kelas</h6>
                                </a>
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
                                <a  class="btn btn-primary text-uppercase"
                                data-mdb-toggle="collapse"
                                href="#collapse4"
                                role="button"
                                aria-expanded="false"
                                aria-controls="collapse4">
                                <h6>lihat kelas</h6>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- kelas mentorship -->

    <!-- detail kelas -->
    <section class="collapse" id="collapse1">
        <div class="container pt-2">
            <div class="row mt-5 pt-5">
                <h2 class="fw-bold text-center">Python, R & SQL Programming</h2>
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
                            <a href="" class="btn btn-block btn-primary text-uppercase mt-3"><h6>DAFTAR</h6></a>
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
                        <h5 class="text-primary pt-4">Ini Konten Konten Program</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-metode"
                        role="tabpanel"
                        aria-labelledby="v-tabs-profile-tab"
                        >
                        <h5 class="text-primary pt-4">Ini Konten Metode Belajar</h5>
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
                        <h5 class="text-primary pt-4">Ini konten Kurikulum</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-jadwal"
                        role="tabpanel"
                        aria-labelledby="v-tabs-messages-tab"
                        >
                        <h5 class="text-primary pt-4">ini konten jadwal kelas</h5>
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
                        <h5 class="text-primary pt-4">ini konten Testimoni</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-faq"
                        role="tabpanel"
                        aria-labelledby="v-tabs-messages-tab"
                        >
                        <h5 class="text-primary pt-4">ini konten FAQ</h5>
                        </div>
                    </div>
                  <!-- Tab content -->
                </div>
            </div>
        </div>
    </section>

    <section class="collapse" id="collapse2">
        <div class="container pt-2">
            <div class="row mt-5 pt-5">
                <h2 class="fw-bold text-center">Data Visualization</h2>
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
                                    id="v-tabs-tentang-tab2"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-tentang2"
                                    role="tab"
                                    aria-controls="v-tabs-tentang2"
                                    aria-selected="true"
                                    style="text-transform: capitalize;"
                                    ><h6>Tentang Program</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-metode-tab2"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-metode2"
                                    role="tab"
                                    aria-controls="v-tabs-metode2"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>Metode Belajar</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-benefit-tab2"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-benefit2"
                                    role="tab"
                                    aria-controls="v-tabs-benefit2"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>Benefit</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-kurikulum-tab2"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-kurikulum2"
                                    role="tab"
                                    aria-controls="v-tabs-kurikulum2"
                                    aria-selected="true"
                                    style="text-transform: capitalize;"
                                    ><h6>Kurikulum</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-jadwal-tab2"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-jadwal2"
                                    role="tab"
                                    aria-controls="v-tabs-jadwal2"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>Jadwal Kelas</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-biaya-tab2"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-biaya2"
                                    role="tab"
                                    aria-controls="v-tabs-biaya2"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>Biaya Kelas</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-testimoni-tab2"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-testimoni2"
                                    role="tab"
                                    aria-controls="v-tabs-testimoni2"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>Testimoni</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-faq-tab2"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-faq2"
                                    role="tab"
                                    aria-controls="v-tabs-faq2"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>FAQ</h6></a
                                >
                            </div>
                            <!-- Tab navs -->
                            <a href="" class="btn btn-block btn-primary text-uppercase mt-3"><h6>DAFTAR</h6></a>
                        </div>
                    </div>
                </div>
              
                <div class="col-md-9">
                  <!-- Tab content -->
                    <div class="tab-content" id="v-tabs-tabContent">
                        <div
                        class="tab-pane fade"
                        id="v-tabs-tentang2"
                        role="tabpanel"
                        aria-labelledby="v-tabs-home-tab"
                        >
                        <h5 class="text-primary pt-4">Ini Konten Konten Program</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-metode2"
                        role="tabpanel"
                        aria-labelledby="v-tabs-profile-tab"
                        >
                        <h5 class="text-primary pt-4">Ini Konten Metode Belajar</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-benefit2"
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
                        id="v-tabs-kurikulum2"
                        role="tabpanel"
                        aria-labelledby="v-tabs-home-tab"
                        >
                        <h5 class="text-primary pt-4">Ini konten Kurikulum</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-jadwal2"
                        role="tabpanel"
                        aria-labelledby="v-tabs-messages-tab"
                        >
                        <h5 class="text-primary pt-4">ini konten jadwal kelas</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-biaya2"
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
                        id="v-tabs-testimoni2"
                        role="tabpanel"
                        aria-labelledby="v-tabs-messages-tab"
                        >
                        <h5 class="text-primary pt-4">ini konten Testimoni</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-faq2"
                        role="tabpanel"
                        aria-labelledby="v-tabs-messages-tab"
                        >
                        <h5 class="text-primary pt-4">ini konten FAQ</h5>
                        </div>
                    </div>
                  <!-- Tab content -->
                </div>
            </div>
        </div>
    </section>

    <section class="collapse" id="collapse3">
        <div class="container pt-2">
            <div class="row mt-5 pt-5">
                <h2 class="fw-bold text-center">Machine Learning</h2>
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
                                    id="v-tabs-tentang-tab3"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-tentang3"
                                    role="tab"
                                    aria-controls="v-tabs-tentang3"
                                    aria-selected="true"
                                    style="text-transform: capitalize;"
                                    ><h6>Tentang Program</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-metode-tab3"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-metode3"
                                    role="tab"
                                    aria-controls="v-tabs-metode3"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>Metode Belajar</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-benefit-tab3"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-benefit3"
                                    role="tab"
                                    aria-controls="v-tabs-benefit3"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>Benefit</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-kurikulum-tab3"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-kurikulum3"
                                    role="tab"
                                    aria-controls="v-tabs-kurikulum3"
                                    aria-selected="true"
                                    style="text-transform: capitalize;"
                                    ><h6>Kurikulum</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-jadwal-tab3"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-jadwal3"
                                    role="tab"
                                    aria-controls="v-tabs-jadwal3"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>Jadwal Kelas</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-biaya-tab3"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-biaya3"
                                    role="tab"
                                    aria-controls="v-tabs-biaya3"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>Biaya Kelas</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-testimoni-tab3"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-testimoni3"
                                    role="tab"
                                    aria-controls="v-tabs-testimoni3"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>Testimoni</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-faq-tab3"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-faq3"
                                    role="tab"
                                    aria-controls="v-tabs-faq3"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>FAQ</h6></a
                                >
                            </div>
                            <!-- Tab navs -->
                            <a href="" class="btn btn-block btn-primary text-uppercase mt-3"><h6>DAFTAR</h6></a>
                        </div>
                    </div>
                </div>
              
                <div class="col-md-9">
                  <!-- Tab content -->
                    <div class="tab-content" id="v-tabs-tabContent">
                        <div
                        class="tab-pane fade"
                        id="v-tabs-tentang3"
                        role="tabpanel"
                        aria-labelledby="v-tabs-home-tab"
                        >
                        <h5 class="text-primary pt-4">Ini Konten Konten Program</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-metode3"
                        role="tabpanel"
                        aria-labelledby="v-tabs-profile-tab"
                        >
                        <h5 class="text-primary pt-4">Ini Konten Metode Belajar</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-benefit3"
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
                        id="v-tabs-kurikulum3"
                        role="tabpanel"
                        aria-labelledby="v-tabs-home-tab"
                        >
                        <h5 class="text-primary pt-4">Ini konten Kurikulum</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-jadwal3"
                        role="tabpanel"
                        aria-labelledby="v-tabs-messages-tab"
                        >
                        <h5 class="text-primary pt-4">ini konten jadwal kelas</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-biaya3"
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
                        id="v-tabs-testimoni3"
                        role="tabpanel"
                        aria-labelledby="v-tabs-messages-tab"
                        >
                        <h5 class="text-primary pt-4">ini konten Testimoni</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-faq3"
                        role="tabpanel"
                        aria-labelledby="v-tabs-messages-tab"
                        >
                        <h5 class="text-primary pt-4">ini konten FAQ</h5>
                        </div>
                    </div>
                  <!-- Tab content -->
                </div>
            </div>
        </div>
    </section>

    <section class="collapse" id="collapse4">
        <div class="container pt-2">
            <div class="row mt-5 pt-5">
                <h2 class="fw-bold text-center">Deep Learning</h2>
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
                                    id="v-tabs-tentang-tab4"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-tentang4"
                                    role="tab"
                                    aria-controls="v-tabs-tentang4"
                                    aria-selected="true"
                                    style="text-transform: capitalize;"
                                    ><h6>Tentang Program</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-metode-tab4"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-metode4"
                                    role="tab"
                                    aria-controls="v-tabs-metode4"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>Metode Belajar</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-benefit-tab4"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-benefit4"
                                    role="tab"
                                    aria-controls="v-tabs-benefit4"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>Benefit</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-kurikulum-tab4"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-kurikulum4"
                                    role="tab"
                                    aria-controls="v-tabs-kurikulum4"
                                    aria-selected="true"
                                    style="text-transform: capitalize;"
                                    ><h6>Kurikulum</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-jadwal-tab4"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-jadwal4"
                                    role="tab"
                                    aria-controls="v-tabs-jadwal4"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>Jadwal Kelas</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-biaya-tab4"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-biaya4"
                                    role="tab"
                                    aria-controls="v-tabs-biaya4"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>Biaya Kelas</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-testimoni-tab4"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-testimoni4"
                                    role="tab"
                                    aria-controls="v-tabs-testimoni4"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>Testimoni</h6></a
                                >
                                <a
                                    class="nav-link"
                                    id="v-tabs-faq-tab4"
                                    data-mdb-toggle="tab"
                                    href="#v-tabs-faq4"
                                    role="tab"
                                    aria-controls="v-tabs-faq4"
                                    aria-selected="false"
                                    style="text-transform: capitalize;"
                                    ><h6>FAQ</h6></a
                                >
                            </div>
                            <!-- Tab navs -->
                            <a href="" class="btn btn-block btn-primary text-uppercase mt-3"><h6>DAFTAR</h6></a>
                        </div>
                    </div>
                </div>
              
                <div class="col-md-9">
                  <!-- Tab content -->
                    <div class="tab-content" id="v-tabs-tabContent">
                        <div
                        class="tab-pane fade"
                        id="v-tabs-tentang4"
                        role="tabpanel"
                        aria-labelledby="v-tabs-home-tab"
                        >
                        <h5 class="text-primary pt-4">Ini Konten Konten Program</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-metode4"
                        role="tabpanel"
                        aria-labelledby="v-tabs-profile-tab"
                        >
                        <h5 class="text-primary pt-4">Ini Konten Metode Belajar</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-benefit4"
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
                        id="v-tabs-kurikulum4"
                        role="tabpanel"
                        aria-labelledby="v-tabs-home-tab"
                        >
                        <h5 class="text-primary pt-4">Ini konten Kurikulum</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-jadwal4"
                        role="tabpanel"
                        aria-labelledby="v-tabs-messages-tab"
                        >
                        <h5 class="text-primary pt-4">ini konten jadwal kelas</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-biaya4"
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
                        id="v-tabs-testimoni4"
                        role="tabpanel"
                        aria-labelledby="v-tabs-messages-tab"
                        >
                        <h5 class="text-primary pt-4">ini konten Testimoni</h5>
                        </div>
                        <div
                        class="tab-pane fade"
                        id="v-tabs-faq4"
                        role="tabpanel"
                        aria-labelledby="v-tabs-messages-tab"
                        >
                        <h5 class="text-primary pt-4">ini konten FAQ</h5>
                        </div>
                    </div>
                  <!-- Tab content -->
                </div>
            </div>
        </div>
    </section>
    <!-- detail kelas -->

@endsection
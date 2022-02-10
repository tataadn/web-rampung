@extends('theme.index')

@section('content')

        <!-- jumbotron -->
        <section class="jumbotron">
          <div class="bg-image p-5 text-center shadow-1-strong rounded mb-5"
               style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.6) 0%,rgba(0, 0, 0, 0.6) 100%), url(https://www.afscme.org/member-resources/afscme-advantage/desktop-image/hero-scholarship-2.jpg);"
          >
            <h1 class="text-light pt-5 mt-5 mb-5 h2 display-5 fw-bold">
              Indonesia Paham Statistika <br> Scholarship
            </h1>
          </div>
        </section>
        <!-- jumbotron -->

        <!-- scholarship -->
        <section id="scholarship">
            <div class="row m-4">
                <div class="col justify-content-center pt-2">
                  <h1 class="fw-bold mb-4 text-center">FAQ About Scholarship</h1>
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading1">
                        <button
                          class="accordion-button collapsed fw-bold"
                          type="button"
                          data-mdb-toggle="collapse"
                          data-mdb-target="#flush-collapse1"
                          aria-expanded="false"
                          aria-controls="flush-collapse1"
                        >
                        Apa itu Program Indonesia Paham Statistika?
                        </button>
                      </h2>
                      <div
                        id="flush-collapse1"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-heading1"
                        data-mdb-parent="#accordionFlushExample"
                      >
                        <div class="accordion-body">
                          <h6>Merupakan program pelatihan literasi statistika untuk guru dan pelajar yang bertujuan untuk meningkatkan kemampuan literasi statistik siswa dan guru. Program gratis dengan sertifikat 16 JPL (8 hari pelatihan). Pelatihan diadakan setiap hari Sabtu/Minggu.</h6>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading2">
                        <button
                          class="accordion-button collapsed fw-bold"
                          type="button"
                          data-mdb-toggle="collapse"
                          data-mdb-target="#flush-collapse2"
                          aria-expanded="false"
                          aria-controls="flush-collapse2"
                        >
                        Mengapa Perlu Ikut?
                        </button>
                      </h2>
                      <div
                        id="flush-collapse2"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-heading2"
                        data-mdb-parent="#accordionFlushExample"
                      >
                        <div class="accordion-body">
                          <h6>Program ini sangat menarik untuk diikuti karena menawarkan benefit luar biasa di antaranya pengajar yang asik, mendapatkan sertifikat 16 JPL, dapat mengganti pertemuan di kelas selama 1 minggu, dan tentunya program ini <b>GRATIS!</b></h6>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading3">
                        <button
                          class="accordion-button collapsed fw-bold"
                          type="button"
                          data-mdb-toggle="collapse"
                          data-mdb-target="#flush-collapse3"
                          aria-expanded="false"
                          aria-controls="flush-collapse3"
                        >
                        Jenis kelas yang dibuka pada program Indonesia Paham Statistika?
                        </button>
                      </h2>
                      <div
                        id="flush-collapse3"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-heading3"
                        data-mdb-parent="#accordionFlushExample"
                      >
                        <div class="accordion-body">
                          <ul>
                            <li><h6>Kelas Sinkron (Tatap muka secara online)</h6></li>
                            <li><h6>Kelas Asinkron (Penugasan Mandiri)</h6></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading4">
                        <button
                          class="accordion-button collapsed fw-bold"
                          type="button"
                          data-mdb-toggle="collapse"
                          data-mdb-target="#flush-collapse4"
                          aria-expanded="false"
                          aria-controls="flush-collapse4"
                        >
                        Apa saja yang dipelajari di program Indonesia Paham Statistika?
                        </button>
                      </h2>
                      <div
                        id="flush-collapse4"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-heading4"
                        data-mdb-parent="#accordionFlushExample"
                      >
                        <div class="accordion-body">
                          <table class="table">
                            <tbody class="fw-bold">
                              <tr>
                                <td><h6>Basic Statistic</h6></td>
                                <td><h6>: 2 hari (90 menit/pertemuan)</h6></td>
                              </tr>
                              <tr>
                                <td><h6>Multivariate Statistic</h6></td>
                                <td><h6>: 2 hari</h6></td>
                              </tr>
                              <tr>
                                <td><h6>Structural Modeling</h6></td>
                                <td><h6>: 2 hari</h6></td>
                              </tr>
                              <tr>
                                <td><h6>Experimental Research</h6></td>
                                <td><h6>: 2 hari</h6></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading5">
                        <button
                          class="accordion-button collapsed fw-bold"
                          type="button"
                          data-mdb-toggle="collapse"
                          data-mdb-target="#flush-collapse5"
                          aria-expanded="false"
                          aria-controls="flush-collapse5"
                        >
                        Siapa yang bisa ikutan program ini?
                        </button>
                      </h2>
                      <div
                        id="flush-collapse5"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-heading5"
                        data-mdb-parent="#accordionFlushExample"
                      >
                        <div class="accordion-body">
                          <h6>Target utama dari program ini adalah pelajar dan guru, namun kami juga membuka untuk umum.</h6>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading6">
                        <button
                          class="accordion-button collapsed fw-bold"
                          type="button"
                          data-mdb-toggle="collapse"
                          data-mdb-target="#flush-collapse6"
                          aria-expanded="false"
                          aria-controls="flush-collapse6"
                        >
                        Bagaimana cara ikutan program ini?
                        </button>
                      </h2>
                      <div
                        id="flush-collapse6"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-heading6"
                        data-mdb-parent="#accordionFlushExample"
                      >
                        <div class="accordion-body">
                          <h6>Text here</h6>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading7">
                        <button
                          class="accordion-button collapsed fw-bold"
                          type="button"
                          data-mdb-toggle="collapse"
                          data-mdb-target="#flush-collapse7"
                          aria-expanded="false"
                          aria-controls="flush-collapse7"
                        >
                        Mekanisme belajar
                        </button>
                      </h2>
                      <div
                        id="flush-collapse7"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-heading7"
                        data-mdb-parent="#accordionFlushExample"
                      >
                        <div class="accordion-body">
                          <h6>Text Here</h6>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading8">
                        <button
                          class="accordion-button collapsed fw-bold"
                          type="button"
                          data-mdb-toggle="collapse"
                          data-mdb-target="#flush-collapse8"
                          aria-expanded="false"
                          aria-controls="flush-collapse8"
                        >
                        Mekanisme belajar
                        </button>
                      </h2>
                      <div
                        id="flush-collapse8"
                        class="accordion-collapse collapse"
                        aria-labelledby="flush-heading8"
                        data-mdb-parent="#accordionFlushExample"
                      >
                        <div class="accordion-body">
                          <h6>Sertifikat akan diberikan jika mengikuti keseluruhan program 8 pertemuan.</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </section>
        <!-- scholarship -->

@endsection
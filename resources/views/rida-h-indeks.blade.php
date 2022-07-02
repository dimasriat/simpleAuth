<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Riset Inovasi Dalam Angka UNS</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      type="image/png"
      href="/assets/img/logo/logo-uns.png"
    />
    <!-- Place favicon.ico in the root directory -->

    <!-- ======== CSS here ======== -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/lineicons.css" />
    <link rel="stylesheet" href="/assets/css/animate.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <style>
        .wrapper {
            display: flex;
        }
        select, textarea, input {
            margin: 0.5rem 0;
        }
        label {
            margin:0;
        }
    </style>
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ======== preloader start ======== -->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- preloader end -->

    <!-- ======== header start ======== -->
    <header class="header">
      <div class="navbar-area2 sticky">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="/">
                  <img src="/assets/img/logo/logo-uns.png" alt="Logo" />
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div
                  class="collapse navbar-collapse sub-menu-bar"
                  id="navbarSupportedContent"
                >
                  <ul id="nav" class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/">Home</a>
                    </li>    
                    <li class="nav-item">
                        <a href="{{ route('rida.intro') }}">RIDA</a>
                    </li>    
                    <li class="nav-item">
                        <a href="{{ route('dashboard.index') }}">Admin</a>
                    </li>    
                   
                  </ul>
                </div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ======== header end ======== --

    <!-- ======== about-section start ======== -->
    <section class="section" style="margin-top: 8rem">
        <div class="container wrapper">
            <div style="padding-right: 1rem; ">
                <h2>Filter</h2>
                @php
                    function isSelectedValue($name, $value) {
                        return $name === $value ? 'selected' : '';
                    }
                @endphp
                <form method="GET" action="{{ route('rida.h-indeks') }}">
                <div>
                    <label for="unit">Unit:</label><br />
                    <select name="unit" id="unit">
                        <option value="0"  {{ isSelectedValue($request->input('unit'), '0') }}>Universitas</option>
                        <option value="1"  {{ isSelectedValue($request->input('unit'), '1') }}>Fakultas Kedokteran</option>
                        <option value="2"  {{ isSelectedValue($request->input('unit'), '2') }}>Fakultas Pertanian</option>
                        <option value="3"  {{ isSelectedValue($request->input('unit'), '3') }}>Fakultas KIP</option>
                        <option value="4"  {{ isSelectedValue($request->input('unit'), '4') }}>Fakultas MIPA</option>
                        <option value="5"  {{ isSelectedValue($request->input('unit'), '5') }}>Fakultas Ekonomi dan Bisnis</option>
                        <option value="6"  {{ isSelectedValue($request->input('unit'), '6') }}>Fakultas Hukum</option>
                        <option value="7"  {{ isSelectedValue($request->input('unit'), '7') }}>Fakultas Ilmu Sosial dan Politik</option>
                        <option value="8"  {{ isSelectedValue($request->input('unit'), '8') }}>Fakultas Ilmu Budaya</option>
                        <option value="9"  {{ isSelectedValue($request->input('unit'), '9') }}>Fakultas Keolahragaan</option>
                        <option value="10"  {{ isSelectedValue($request->input('unit'), '10') }}>Fakultas Teknik</option>
                        <option value="11"  {{ isSelectedValue($request->input('unit'), '11') }}>Fakultas Seni Rupa dan Desain</option>
                        <option value="12"  {{ isSelectedValue($request->input('unit'), '12') }}>Sekolah Vokasi</option>
                        <option value="13"  {{ isSelectedValue($request->input('unit'), '13') }}>Sekolah Pascasarjana</option>
                    </select>
                </div>
                    <input type="submit" name="filter" value="Filter" />
                </form>
            </div>
            <div style="width: 100%; padding-left: 1rem; ">
                <h2>H-Indeks Penelitian Dan Pengabdian Kepada Masyarakat</h2>
                <div>
                    <canvas id="chart-pegawai" style="margin-bottom:8rem;"></canvas>
                </div>            
                <h2>Tabel Pegawai</h2>
                <table style="width: 100%" cellspacing="0">
                    <tr>
                        <td style="border: 1px solid black; text-align:center;" colspan="2" rowspan="2">H-index</td>
                        <td style="border: 1px solid black; text-align:center;" colspan="13">FAKULTAS</td>
                        <td style="border: 1px solid black; text-align:center;" colspan="2" rowspan="2">JUMLAH</td>
                    </tr>
                    <tr>
                    <td style="border: 1px solid black; text-align:center;">FK</td>
                    <td style="border: 1px solid black; text-align:center;">FP</td>
                    <td style="border: 1px solid black; text-align:center;">FKIP</td>
                    <td style="border: 1px solid black; text-align:center;">FMIPA</td>
                    <td style="border: 1px solid black; text-align:center;">FEB</td>
                    <td style="border: 1px solid black; text-align:center;">FH</td>
                    <td style="border: 1px solid black; text-align:center;">FISIP</td>
                    <td style="border: 1px solid black; text-align:center;">FIB</td>
                    <td style="border: 1px solid black; text-align:center;">FKOR</td>
                    <td style="border: 1px solid black; text-align:center;">FT</td>
                    <td style="border: 1px solid black; text-align:center;">FSRD</td>
                    <td style="border: 1px solid black; text-align:center;">SV</td>
                    <td style="border: 1px solid black; text-align:center;">PASCASARJANA</td>
                    </tr>
                    @php
                      function getPercentage($val, $total) {
                        $a = (int) $val;
                        $b = (int) $total;
                        $result = $b == 0 ? 0 : $a * 100 / $b;
                        return number_format((float)$result, 1, '.', '') . '%';
                      }

                      $jumlah_h_index_unit = [];
                      $jumlah_h_index_unit_total = 0;
                      for($unit = 0; $unit <= 13; $unit++) {
                        $jumlah_h_index_unit[$unit] = 0;                        
                      }
                    @endphp
                    @for($h = 0; $h <= 22; $h++)
                      @php
                        $jumlah_row = 0;
                      @endphp
                      @for($unit = 1; $unit <= 13; $unit++)
                        @php
                          $jumlah_row += $h_index_value[$unit][$h];
                        @endphp
                      @endfor
                      <tr>
                          <td style="border: 1px solid black; text-align:center;" rowspan="2">{{ $h }}</td>
                          <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                          @for($unit = 1; $unit <= 13; $unit++)
                            <td style="border: 1px solid black; text-align:center;">{{ $h_index_value[$unit][$h] }}</td>
                            @php
                              $jumlah_h_index_unit[$unit] += $h_index_value[$unit][$h];
                            @endphp
                          @endfor
                          <td style="border: 1px solid black; text-align:center;">{{ $jumlah_row }}</td>
                          @php
                            $jumlah_h_index_unit_total += $jumlah_row;
                          @endphp
                      </tr>
                      <tr>
                          <td style="border: 1px solid black; text-align:center;">Percent</td>
                          @for($unit = 1; $unit <= 13; $unit++)
                            <td style="border: 1px solid black; text-align:center;">{{ getPercentage($h_index_value[$unit][$h], $jumlah_row) }}</td>
                          @endfor
                          <td style="border: 1px solid black; text-align:center;">100%</td>
                      </tr>
                    @endfor
                    <tr>
                        <td style="border: 1px solid black; text-align:center;" colspan="2" rowspan="2">Jumlah</td>
                        @for($unit = 1; $unit <= 13; $unit++)
                          <td style="border: 1px solid black; text-align:center;">{{ $jumlah_h_index_unit[$unit] }}</td>
                        @endfor
                        <td style="border: 1px solid black; text-align:center;">{{ $jumlah_h_index_unit_total }}</td>
                    </tr>
                    <tr>
                        @for($unit = 1; $unit <= 13; $unit++)
                          <td style="border: 1px solid black; text-align:center;">{{ getPercentage($jumlah_h_index_unit[$unit], $jumlah_h_index_unit_total) }}</td>
                        @endfor
                        <td style="border: 1px solid black; text-align:center;">
                            100%
                        </td>
                    </tr>
                    </table>
        
            </div>
        </div><!-- end container -->
    </section>
    
     <!-- ======== about-section end ======== -->
     <footer class="footer">
      <div class="container">
        <div class="widget-wrapper">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="footer-widget">
                <div class="logo mb-30">
                  <a href="/">
                    <img src="assets/img/logo/logo-uns.png" alt="" />
                  </a>
                </div>
                <p class="desc mb-30 text-white">
                  Untuk mendapatkan informasi terbaru terkait aktivitas Riset dan Inovasi UNS
                  <br>Anda dapat mengikuti kami melalui sosial media di bawah Ini.
                </p>
                <ul class="socials">
                  <li>
                    <a href="jvascript:void(0)">
                      <i class="lni lni-facebook-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="jvascript:void(0)">
                      <i class="lni lni-instagram-filled"></i>
                    </a>
                  </li>
                  <!-- <li>
                    <a href="jvascript:void(0)">
                      <i class="lni lni-twitter-filled"></i>
                    </a>
                  </li> -->
                  <!-- <li>
                    <a href="jvascript:void(0)">phpphp
                      <i class="lni lni-linkedin-original"></i>
                    </a>
                  </li> -->
                </ul>
              </div>
            </div>

            <div class="col">
              <div class="footer-widget">
                <h3>Tentang Kami</h3>
                <p class="desc mb-10 text-white">
                  Untuk info lebih lanjut kunjungi atau hubungi yang tertera di bawah ini.
                </p>
                <ul class="links">
                  <li><a href="javascript:void(0)">Email</a></li>
                  <li><a href="javascript:void(0)">No Telepon <br> </a></li>
                  <li><a href="javascript:void(0)">Alamat <br>Gedung LPPM UNS Lt. 1 Jl. Ir. Sutami 36A Jebres Surakarta Jawa Tengah 57126</a></li>
                  <!-- <li><a href="javascript:void(0)">Testimonials</a></li> -->
                </ul>
              </div>
            </div>

            <!-- <div class="col-xl-3 col-lg-3 col-md-6">
              <div class="footer-widget">
                <h3>Features</h3>
                <ul class="links">
                  <li><a href="javascript:void(0)">How it works</a></li>
                  <li><a href="javascript:void(0)">Privacy policy</a></li>
                  <li><a href="javascript:void(0)">Terms of service</a></li>
                  <li><a href="javascript:void(0)">Refund policy</a></li>
                </ul>
              </div>
            </div> -->

            <div class="col-xl-3 col-lg-3 col-md-6">
              <div class="footer-widget">
                <h3>Portal Informasi</h3>
                <ul class="links">
                  <li><a href="https://uns.ac.id">Laman UNS</a></li>
                  <li><a href="https://risnov.uns.ac.id/">Laman RISNOV</a></li>
                  <!-- <li><a href="jvascript:void(0)">Booking System</a></li>
                  <li><a href="jvascript:void(0)">Tracking System</a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ======== footer end ======== -->

    <!-- ======== scroll-top ======== -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ======== JS here ======== -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/main.js"></script>
        <script type="text/javascript" src="{{ asset('design\js\chart.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('design\js\newChart.js') }}"></script>
        <script>
        let id_unit = {!! json_encode($request->input('unit')) !!};
        let h_index_value = {!! json_encode($h_index_value) !!};
        id_unit = id_unit ? id_unit : 0;
        const label_pegawai = [
            "Universitas",
            "Fakultas Kedokteran",
            "Fakultas Pertanian",
            "Fakultas KIP",
            "Fakultas MIPA",
            "Fakultas Ekonomi dan Bisnis",
            "Fakultas Hukum",
            "Fakultas Ilmu Sosial dan Politik",
            "Fakultas Ilmu Budaya",
            "Fakultas Keolahragaan",
            "Fakultas Teknik",
            "Fakultas Seni Rupa dan Desain",
            "Sekolah Vokasi",
            "Sekolah Pascasarjana",
        ]
        newChart(
            'chart-pegawai', 
            'H-Indeks Penelitian Dan Pengabdian Kepada Masyarakat', 
            [...Array.from(Array(23).keys()).map(item => `${item}`)],
            [
                {
                    label: label_pegawai[id_unit],
                    data: h_index_value[id_unit],
                },
            ]
        );
    </script>
  </body>
</html>

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
                <form method="GET" action="{{ route('rida.app') }}">
                <div>
                    <label for="unit">Unit:</label><br />
                    <select name="unit" id="unit">
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
                        <option value="14"  {{ isSelectedValue($request->input('unit'), '14') }}>Kantor Pusat</option>
                        <option value="15"  {{ isSelectedValue($request->input('unit'), '15') }}>Rumah Sakit</option>
                    </select>
                </div>
                <div>
                    <label for="status_pegawai">Status Pegawai:</label><br />
                    <select name="status_pegawai" id="status_pegawai">
                        <option value="">Semua Kategori</option>
                        <option value="1"  {{ isSelectedValue($request->input('status_pegawai'), '1') }}>Purna Tugas</option>
                        <option value="2"  {{ isSelectedValue($request->input('status_pegawai'), '2') }}>PNS</option>
                        <option value="3"  {{ isSelectedValue($request->input('status_pegawai'), '3') }}>Kontrak Profesional</option>
                        <option value="4"  {{ isSelectedValue($request->input('status_pegawai'), '4') }}>Non PNS</option>
                        <option value="5"  {{ isSelectedValue($request->input('status_pegawai'), '5') }}>CPNS</option>
                        <option value="6"  {{ isSelectedValue($request->input('status_pegawai'), '6') }}>Calon Non PNS</option>
                    </select>
                </div>
                <div>
                    <label for="jenis_kelamin">Jenis Kelamin:</label><br />
                    <select name="jenis_kelamin" id="jenis_kelamin">
                        <option value="">Semua Kategori</option>
                        <option value="1"  {{ isSelectedValue($request->input('jenis_kelamin'), '1') }}>Laki Laki</option>
                        <option value="2"  {{ isSelectedValue($request->input('jenis_kelamin'), '2') }}>Perempuan</option>
                    </select>
                </div>
                <div>
                    <label for="jenjang_pendidikan">Jenjang Pendidikan:</label><br />
                    <select name="jenjang_pendidikan" id="jenjang_pendidikan">
                        <option value="1"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '1') }}>S3</option>
                        <option value="2"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '2') }}>Sp-1</option>
                        <option value="3"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '3') }}>Sp-2</option>
                        <option value="4"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '4') }}>S2</option>
                        <option value="5"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '5') }}>Sp-1(K)</option>
                        <option value="6"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '6') }}>PROFESI</option>
                        <option value="7"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '7') }}>S1</option>
                        <option value="8"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '8') }}>SMU/SLTA</option>
                        <option value="9"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '9') }}>D3</option>
                        <option value="10"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '10') }}>SMP/SLTP</option>
                        <option value="11"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '11') }}>SD</option>
                        <option value="12"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '12') }}>D1</option>
                        <option value="13"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '13') }}>D4</option>
                        <option value="14"  {{ isSelectedValue($request->input('jenjang_pendidikan'), '14') }}>D2</option>
                    </select>
                </div>
                <div>
                    <label for="jenis_staff">Jenis Staff:</label><br />
                    <select name="jenis_staff" id="jenis_staff">
                        <option value="">Semua Kategori</option>
                        <option value="1"  {{ isSelectedValue($request->input('jenis_staff'), '1') }}>Tenaga Pendidik</option>
                        <option value="2"  {{ isSelectedValue($request->input('jenis_staff'), '2') }}>Tenaga Kependidikan</option>
                    </select>
                </div>
                <div>
                    <label for="periode">Periode:</label><br />
                    <input type="number" id="periode" name="periode" value="{{ $periode }}" min="1900" max="{{ date('Y') }}"/>
                </div>
                    <input type="submit" name="filter" value="Filter" />
                </form>
            </div>
            <div style="width: 100%; padding-left: 1rem; ">
                <h2>Persebaran Usia</h2>
                <div>
                    <canvas id="chart-pegawai" style="margin-bottom:8rem;"></canvas>
                </div>            
                <h2>Tabel Pegawai</h2>
                <table style="width: 100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="border: 1px solid black !important; text-align:center !important;" rowspan="3">No</th>
                            <th style="border: 1px solid black !important; text-align:center !important;" rowspan="3">Status</th>
                            <th style="border: 1px solid black !important; text-align:center !important;" colspan="21">Rentang usia</th>
                            <th style="border: 1px solid black !important; text-align:center !important;" rowspan="3">Total</th>
                        </tr>
                        <tr>
                            <th colspan="3" style="border: 1px solid black !important; text-align:center !important;">
                                &lt;25</th>
                            <th colspan="3" style="border: 1px solid black !important; text-align:center !important;">
                                25-35</th>
                            <th colspan="3" style="border: 1px solid black !important; text-align:center !important;">
                                36-45</th>
                            <th colspan="3" style="border: 1px solid black !important; text-align:center !important;">
                                46-55</th>
                            <th colspan="3" style="border: 1px solid black !important; text-align:center !important;">
                                56-65</th>
                            <th colspan="3" style="border: 1px solid black !important; text-align:center !important;">
                                66-75</th>
                            <th colspan="3" style="border: 1px solid black !important; text-align:center !important;">
                                &gt;75</th>
                        </tr>
                        <tr>
                            <th style="border: 1px solid black !important; text-align:center !important;">L</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">P</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">JML</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">L</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">P</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">JML</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">L</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">P</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">JML</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">L</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">P</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">JML</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">L</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">P</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">JML</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">L</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">P</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">JML</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">L</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">P</th>
                            <th style="border: 1px solid black !important; text-align:center !important;">JML</th>
                        </tr>
                    </thead>
                    <tbody id="output-table"></tbody>                           
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
        <script type="text/javascript" src="{{ asset('design\js\moment.min.js') }}"></script>
        <script>
            let encodedJSON = {!! json_encode($data_pegawai) !!};
            let encodedPeriode = {!! json_encode($periode) !!};
            const result = {};
            encodedJSON.forEach(({ nip, jenis_kelamin, status_pegawai }) => {
                const age = moment(encodedPeriode, 'YYYY').diff(moment(nip.slice(0, 8), "YYYYMMDD"), "years");
                if (!result[status_pegawai]) {
                    result[status_pegawai] = { total: 0 };
                    result[status_pegawai]["<25"] = { L: 0, P: 0 };
                    result[status_pegawai]["25-35"] = { L: 0, P: 0 };
                    result[status_pegawai]["36-45"] = { L: 0, P: 0 };
                    result[status_pegawai]["46-55"] = { L: 0, P: 0 };
                    result[status_pegawai]["56-65"] = { L: 0, P: 0 };
                    result[status_pegawai]["66-75"] = { L: 0, P: 0 };
                    result[status_pegawai][">75"] = { L: 0, P: 0 };
                    
                    result['Jumlah'] = { total: 0 };
                    result['Jumlah']["<25"] = { L: 0, P: 0 };
                    result['Jumlah']["25-35"] = { L: 0, P: 0 };
                    result['Jumlah']["36-45"] = { L: 0, P: 0 };
                    result['Jumlah']["46-55"] = { L: 0, P: 0 };
                    result['Jumlah']["56-65"] = { L: 0, P: 0 };
                    result['Jumlah']["66-75"] = { L: 0, P: 0 };
                    result['Jumlah'][">75"] = { L: 0, P: 0 };
                }
                if (age < 25) {
                    result[status_pegawai]["<25"][
                        jenis_kelamin === "Laki Laki" ? "L" : "P"
                    ]++;
                    result['Jumlah']["<25"][
                        jenis_kelamin === "Laki Laki" ? "L" : "P"
                    ]++;
                }
                if (25 <= age && age <= 35) {
                    result[status_pegawai]["25-35"][
                        jenis_kelamin === "Laki Laki" ? "L" : "P"
                    ]++;
                    result['Jumlah']["25-35"][
                        jenis_kelamin === "Laki Laki" ? "L" : "P"
                    ]++;
                }
                if (36 <= age && age <= 45) {
                    result[status_pegawai]["36-45"][
                        jenis_kelamin === "Laki Laki" ? "L" : "P"
                    ]++;
                    result['Jumlah']["36-45"][
                        jenis_kelamin === "Laki Laki" ? "L" : "P"
                    ]++;
                }
                if (46 <= age && age <= 55) {
                    result[status_pegawai]["46-55"][
                        jenis_kelamin === "Laki Laki" ? "L" : "P"
                    ]++;
                    result['Jumlah']["46-55"][
                        jenis_kelamin === "Laki Laki" ? "L" : "P"
                    ]++;
                }
                if (56 <= age && age <= 65) {
                    result[status_pegawai]["56-65"][
                        jenis_kelamin === "Laki Laki" ? "L" : "P"
                    ]++;
                    result['Jumlah']["56-65"][
                        jenis_kelamin === "Laki Laki" ? "L" : "P"
                    ]++;
                }
                if (66 <= age && age <= 75) {
                    result[status_pegawai]["66-75"][
                        jenis_kelamin === "Laki Laki" ? "L" : "P"
                    ]++;
                    result['Jumlah']["66-75"][
                        jenis_kelamin === "Laki Laki" ? "L" : "P"
                    ]++;
                }
                if (75 < age) {
                    result[status_pegawai][">75"][
                        jenis_kelamin === "Laki Laki" ? "L" : "P"
                    ]++;
                    result['Jumlah'][">75"][
                        jenis_kelamin === "Laki Laki" ? "L" : "P"
                    ]++;
                }
                result[status_pegawai]["total"]++;
                result['Jumlah']["total"]++;
            });

            result["Persen"] = { total: 100 };
            result["Persen"]["<25"] = {
                L: (100 * result["Jumlah"]["<25"]["L"]) / result["Jumlah"]["total"],
                P: (100 * result["Jumlah"]["<25"]["P"]) / result["Jumlah"]["total"],
            };
            result["Persen"]["25-35"] = {
                L: (100 * result["Jumlah"]["25-35"]["L"]) / result["Jumlah"]["total"],
                P: (100 * result["Jumlah"]["25-35"]["P"]) / result["Jumlah"]["total"],
            };
            result["Persen"]["36-45"] = {
                L: (100 * result["Jumlah"]["36-45"]["L"]) / result["Jumlah"]["total"],
                P: (100 * result["Jumlah"]["36-45"]["P"]) / result["Jumlah"]["total"],
            };
            result["Persen"]["46-55"] = {
                L: (100 * result["Jumlah"]["46-55"]["L"]) / result["Jumlah"]["total"],
                P: (100 * result["Jumlah"]["46-55"]["P"]) / result["Jumlah"]["total"],
            };
            result["Persen"]["56-65"] = {
                L: (100 * result["Jumlah"]["56-65"]["L"]) / result["Jumlah"]["total"],
                P: (100 * result["Jumlah"]["56-65"]["P"]) / result["Jumlah"]["total"],
            };
            result["Persen"]["66-75"] = {
                L: (100 * result["Jumlah"]["66-75"]["L"]) / result["Jumlah"]["total"],
                P: (100 * result["Jumlah"]["66-75"]["P"]) / result["Jumlah"]["total"],
            };
            result["Persen"][">75"] = {
                L: (100 * result["Jumlah"][">75"]["L"]) / result["Jumlah"]["total"],
                P: (100 * result["Jumlah"][">75"]["P"]) / result["Jumlah"]["total"],
            };
            console.log(result);
            const tbody = document.getElementById('output-table');

            const td = (v, float = false) => `<td style="border: 1px solid black !important; text-align:center !important;">${float ? parseFloat(v).toFixed(1) : v}</td>`;
            const tds_jenjang = (row, j) => td(result[row][j]['L']) + td(result[row][j]['P']) + td(result[row][j]['L'] + result[row][j]['P']);
            const tds_persen = (j) => td(result['Persen'][j]['L'],true) + td(result['Persen'][j]['P'],true) + td(result['Persen'][j]['L'] + result['Persen'][j]['P'],true);

            let i = 1;
            for(let row in result) {
                if (row === 'Jumlah' || row === 'Persen') continue;
                tbody.innerHTML += `<tr>${
                    td(i++) +
                    td(row) +
                    tds_jenjang(row, '<25') +
                    tds_jenjang(row, '25-35') +
                    tds_jenjang(row, '36-45') +
                    tds_jenjang(row, '46-55') +
                    tds_jenjang(row, '56-65') +
                    tds_jenjang(row, '66-75') +
                    tds_jenjang(row, '>75') +
                    td(result[row]['total'])
                }</tr>`;
                // console.log(tr);
            }
            tbody.innerHTML += `<tr style="font-weight: bold">${
                `<td style="border: 1px solid black !important; text-align:center !important;" colspan="2">Jumlah</td>` +
                tds_jenjang('Jumlah', '<25') +
                tds_jenjang('Jumlah', '25-35') +
                tds_jenjang('Jumlah', '36-45') +
                tds_jenjang('Jumlah', '46-55') +
                tds_jenjang('Jumlah', '56-65') +
                tds_jenjang('Jumlah', '66-75') +
                tds_jenjang('Jumlah', '>75') +
                td(result['Jumlah']['total'])
            }</tr>`;

            tbody.innerHTML += `<tr style="font-weight: bold">${
                `<td style="border: 1px solid black !important; text-align:center !important;" colspan="2">Persen (%)</td>` +
                tds_persen('<25') +
                tds_persen('25-35') +
                tds_persen('36-45') +
                tds_persen('46-55') +
                tds_persen('56-65') +
                tds_persen('66-75') +
                tds_persen('>75') +
                td(result['Persen']['total'])
            }</tr>`;
            
        </script>

        <script type="text/javascript" src="{{ asset('design\js\chart.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('design\js\newChart.js') }}"></script>
        <script>
        const ages = encodedJSON.map(item => moment(encodedPeriode, 'YYYY').diff(moment(item.nip.slice(0, 8),'YYYYMMDD'), 'years'));
        const ageGroups = { 
            '<25': ages.filter(item => item < 25).length,
            '25-35': ages.filter(item => 25 <= item && item <= 35).length,
            '36-45': ages.filter(item => 36 <= item && item <= 45).length,
            '46-55': ages.filter(item => 46 <= item && item <= 55).length,
            '56-65': ages.filter(item => 56 <= item && item <= 65).length,
            '66-75': ages.filter(item => 66 <= item && item <= 75).length,
            '>75': ages.filter(item => 75 < item).length,
        };
        console.log(encodedJSON);
            newChart(
                'chart-pegawai', 
                'Persebaran Usia', 
                ['Edisi 1'],
                [
                    {
                        label:'<25',
                        data: [ageGroups['<25']]
                    },
                    {
                        label:'25-35',
                        data: [ageGroups['25-35']]
                    },
                    {
                        label:'36-45',
                        data: [ageGroups['36-45']]
                    },
                    {
                        label:'46-55',
                        data: [ageGroups['46-55']]
                    },
                    {
                        label:'56-65',
                        data: [ageGroups['56-65']]
                    },
                    {
                        label:'66-75',
                        data: [ageGroups['66-75']]
                    },
                    {
                        label:'>75',
                        data: [ageGroups['>75']]
                    },
                ]
            );
        </script>
  </body>
</html>

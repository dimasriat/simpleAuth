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
                    <td style="border: 1px solid black; text-align:center;">FIB</td>
                    <td style="border: 1px solid black; text-align:center;">FKIP</td>
                    <td style="border: 1px solid black; text-align:center;">FEB</td>
                    <td style="border: 1px solid black; text-align:center;">FH</td>
                    <td style="border: 1px solid black; text-align:center;">FISIP</td>
                    <td style="border: 1px solid black; text-align:center;">FK</td>
                    <td style="border: 1px solid black; text-align:center;">FP</td>
                    <td style="border: 1px solid black; text-align:center;">FT</td>
                    <td style="border: 1px solid black; text-align:center;">FMIPA</td>
                    <td style="border: 1px solid black; text-align:center;">FSRD</td>
                    <td style="border: 1px solid black; text-align:center;">FKOR</td>
                    <td style="border: 1px solid black; text-align:center;">SV</td>
                    <td style="border: 1px solid black; text-align:center;">PASCASARJANA</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">0</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">89</td>
                        <td style="border: 1px solid black; text-align:center;">322</td>
                        <td style="border: 1px solid black; text-align:center;">102</td>
                        <td style="border: 1px solid black; text-align:center;">85</td>
                        <td style="border: 1px solid black; text-align:center;">84</td>
                        <td style="border: 1px solid black; text-align:center;">333</td>
                        <td style="border: 1px solid black; text-align:center;">77</td>
                        <td style="border: 1px solid black; text-align:center;">112</td>
                        <td style="border: 1px solid black; text-align:center;">51</td>
                        <td style="border: 1px solid black; text-align:center;">57</td>
                        <td style="border: 1px solid black; text-align:center;">37</td>
                        <td style="border: 1px solid black; text-align:center;">173</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                        <td style="border: 1px solid black; text-align:center;">1524</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">83.2%</td>
                        <td style="border: 1px solid black; text-align:center;">66.8%</td>
                        <td style="border: 1px solid black; text-align:center;">66.7%</td>
                        <td style="border: 1px solid black; text-align:center;">81.7%</td>
                        <td style="border: 1px solid black; text-align:center;">80%</td>
                        <td style="border: 1px solid black; text-align:center;">88.6%</td>
                        <td style="border: 1px solid black; text-align:center;">41.6%</td>
                        <td style="border: 1px solid black; text-align:center;">47.5%</td>
                        <td style="border: 1px solid black; text-align:center;">31.9%</td>
                        <td style="border: 1px solid black; text-align:center;">86.4%</td>
                        <td style="border: 1px solid black; text-align:center;">90.2%</td>
                        <td style="border: 1px solid black; text-align:center;">83.2%</td>
                        <td style="border: 1px solid black; text-align:center;">66.7%</td>
                        <td style="border: 1px solid black; text-align:center;">68.5%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">1</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">12</td>
                        <td style="border: 1px solid black; text-align:center;">70</td>
                        <td style="border: 1px solid black; text-align:center;">23</td>
                        <td style="border: 1px solid black; text-align:center;">8</td>
                        <td style="border: 1px solid black; text-align:center;">13</td>
                        <td style="border: 1px solid black; text-align:center;">24</td>
                        <td style="border: 1px solid black; text-align:center;">26</td>
                        <td style="border: 1px solid black; text-align:center;">35</td>
                        <td style="border: 1px solid black; text-align:center;">9</td>
                        <td style="border: 1px solid black; text-align:center;">7</td>
                        <td style="border: 1px solid black; text-align:center;">3</td>
                        <td style="border: 1px solid black; text-align:center;">19</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">249</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">11.2%</td>
                        <td style="border: 1px solid black; text-align:center;">14.5%</td>
                        <td style="border: 1px solid black; text-align:center;">15%</td>
                        <td style="border: 1px solid black; text-align:center;">7.7%</td>
                        <td style="border: 1px solid black; text-align:center;">12.4%</td>
                        <td style="border: 1px solid black; text-align:center;">6.4%</td>
                        <td style="border: 1px solid black; text-align:center;">14.1%</td>
                        <td style="border: 1px solid black; text-align:center;">14.8%</td>
                        <td style="border: 1px solid black; text-align:center;">5.6%</td>
                        <td style="border: 1px solid black; text-align:center;">10.6%</td>
                        <td style="border: 1px solid black; text-align:center;">7.3%</td>
                        <td style="border: 1px solid black; text-align:center;">9.1%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">11.2%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">2</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">5</td>
                        <td style="border: 1px solid black; text-align:center;">47</td>
                        <td style="border: 1px solid black; text-align:center;">16</td>
                        <td style="border: 1px solid black; text-align:center;">6</td>
                        <td style="border: 1px solid black; text-align:center;">6</td>
                        <td style="border: 1px solid black; text-align:center;">5</td>
                        <td style="border: 1px solid black; text-align:center;">26</td>
                        <td style="border: 1px solid black; text-align:center;">22</td>
                        <td style="border: 1px solid black; text-align:center;">17</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">9</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">161</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">4.7%</td>
                        <td style="border: 1px solid black; text-align:center;">9.8%</td>
                        <td style="border: 1px solid black; text-align:center;">10.5%</td>
                        <td style="border: 1px solid black; text-align:center;">5.8%</td>
                        <td style="border: 1px solid black; text-align:center;">5.7%</td>
                        <td style="border: 1px solid black; text-align:center;">1.3%</td>
                        <td style="border: 1px solid black; text-align:center;">14.1%</td>
                        <td style="border: 1px solid black; text-align:center;">9.3%</td>
                        <td style="border: 1px solid black; text-align:center;">10.6%</td>
                        <td style="border: 1px solid black; text-align:center;">1.5%</td>
                        <td style="border: 1px solid black; text-align:center;">2.4%</td>
                        <td style="border: 1px solid black; text-align:center;">4.3%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">7.2%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">3</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">11</td>
                        <td style="border: 1px solid black; text-align:center;">3</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">9</td>
                        <td style="border: 1px solid black; text-align:center;">27</td>
                        <td style="border: 1px solid black; text-align:center;">20</td>
                        <td style="border: 1px solid black; text-align:center;">22</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">3</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">99</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">2.3%</td>
                        <td style="border: 1px solid black; text-align:center;">2%</td>
                        <td style="border: 1px solid black; text-align:center;">1.9%</td>
                        <td style="border: 1px solid black; text-align:center;">1%</td>
                        <td style="border: 1px solid black; text-align:center;">2.4%</td>
                        <td style="border: 1px solid black; text-align:center;">14.6%</td>
                        <td style="border: 1px solid black; text-align:center;">8.5%</td>
                        <td style="border: 1px solid black; text-align:center;">13.8%</td>
                        <td style="border: 1px solid black; text-align:center;">1.5%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">1.4%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">4.4%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">4</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">13</td>
                        <td style="border: 1px solid black; text-align:center;">3</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">13</td>
                        <td style="border: 1px solid black; text-align:center;">12</td>
                        <td style="border: 1px solid black; text-align:center;">18</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">65</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0.9%</td>
                        <td style="border: 1px solid black; text-align:center;">2.7%</td>
                        <td style="border: 1px solid black; text-align:center;">2%</td>
                        <td style="border: 1px solid black; text-align:center;">1%</td>
                        <td style="border: 1px solid black; text-align:center;">1%</td>
                        <td style="border: 1px solid black; text-align:center;">0.3%</td>
                        <td style="border: 1px solid black; text-align:center;">7%</td>
                        <td style="border: 1px solid black; text-align:center;">5.1%</td>
                        <td style="border: 1px solid black; text-align:center;">11.3%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">1%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">2.9%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">5</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">9</td>
                        <td style="border: 1px solid black; text-align:center;">3</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">5</td>
                        <td style="border: 1px solid black; text-align:center;">10</td>
                        <td style="border: 1px solid black; text-align:center;">18</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">49</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">1.9%</td>
                        <td style="border: 1px solid black; text-align:center;">2%</td>
                        <td style="border: 1px solid black; text-align:center;">1%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.3%</td>
                        <td style="border: 1px solid black; text-align:center;">2.7%</td>
                        <td style="border: 1px solid black; text-align:center;">4.2%</td>
                        <td style="border: 1px solid black; text-align:center;">11.3%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">1%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">2.2%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">6</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">5</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">3</td>
                        <td style="border: 1px solid black; text-align:center;">5</td>
                        <td style="border: 1px solid black; text-align:center;">8</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">24</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">1%</td>
                        <td style="border: 1px solid black; text-align:center;">0.7%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.3%</td>
                        <td style="border: 1px solid black; text-align:center;">1.6%</td>
                        <td style="border: 1px solid black; text-align:center;">2.1%</td>
                        <td style="border: 1px solid black; text-align:center;">5%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">33.3%</td>
                        <td style="border: 1px solid black; text-align:center;">1.1%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">7</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                        <td style="border: 1px solid black; text-align:center;">7</td>
                        <td style="border: 1px solid black; text-align:center;">8</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">21</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.4%</td>
                        <td style="border: 1px solid black; text-align:center;">0.7%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.3%</td>
                        <td style="border: 1px solid black; text-align:center;">1.1%</td>
                        <td style="border: 1px solid black; text-align:center;">3%</td>
                        <td style="border: 1px solid black; text-align:center;">5%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.9%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">8</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                        <td style="border: 1px solid black; text-align:center;">4</td>
                        <td style="border: 1px solid black; text-align:center;">3</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">11</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.4%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">1.1%</td>
                        <td style="border: 1px solid black; text-align:center;">1.7%</td>
                        <td style="border: 1px solid black; text-align:center;">1.9%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.5%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">9</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">4</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.7%</td>
                        <td style="border: 1px solid black; text-align:center;">1%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.5%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.6%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.2%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">10</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">7</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.3%</td>
                        <td style="border: 1px solid black; text-align:center;">1.1%</td>
                        <td style="border: 1px solid black; text-align:center;">0.8%</td>
                        <td style="border: 1px solid black; text-align:center;">1.3%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.3%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">11</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.4%</td>
                        <td style="border: 1px solid black; text-align:center;">0.6%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.1%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">12</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">3</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.8%</td>
                        <td style="border: 1px solid black; text-align:center;">0.6%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.1%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">13</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.2%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.6%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.1%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">14</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">15</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">16</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">17</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.4%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">18</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.4%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">19</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">20</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">2</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.8%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.1%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">21</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" rowspan="2">22</td>
                        <td style="border: 1px solid black; text-align:center;">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">0</td>
                        <td style="border: 1px solid black; text-align:center;">1</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; text-align:center;">Percent</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0.5%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                        <td style="border: 1px solid black; text-align:center;">0%</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;" colspan="2" rowspan="2">Jumlah</td>
                        <td style="border: 1px solid black; text-align:center;">107</td>
                        <td style="border: 1px solid black; text-align:center;">482</td>
                        <td style="border: 1px solid black; text-align:center;">153</td>
                        <td style="border: 1px solid black; text-align:center;">104</td>
                        <td style="border: 1px solid black; text-align:center;">105</td>
                        <td style="border: 1px solid black; text-align:center;">376</td>
                        <td style="border: 1px solid black; text-align:center;">185</td>
                        <td style="border: 1px solid black; text-align:center;">236</td>
                        <td style="border: 1px solid black; text-align:center;">160</td>
                        <td style="border: 1px solid black; text-align:center;">66</td>
                        <td style="border: 1px solid black; text-align:center;">41</td>
                        <td style="border: 1px solid black; text-align:center;">208</td>
                        <td style="border: 1px solid black; text-align:center;">3</td>
                        <td style="border: 1px solid black; text-align:center;">2226</td>
                    </tr>
                                            <tr>
                        <td style="border: 1px solid black; text-align:center;">
                            4.8%
                        </td>
                        <td style="border: 1px solid black; text-align:center;">
                            21.7%
                        </td>
                        <td style="border: 1px solid black; text-align:center;">
                            6.9%
                        </td>
                        <td style="border: 1px solid black; text-align:center;">
                            4.7%
                        </td>
                        <td style="border: 1px solid black; text-align:center;">
                            4.7%
                        </td>
                        <td style="border: 1px solid black; text-align:center;">
                            16.9%
                        </td>
                        <td style="border: 1px solid black; text-align:center;">
                            8.3%
                        </td>
                        <td style="border: 1px solid black; text-align:center;">
                            10.6%
                        </td>
                        <td style="border: 1px solid black; text-align:center;">
                            7.2%
                        </td>
                        <td style="border: 1px solid black; text-align:center;">
                            3%
                        </td>
                        <td style="border: 1px solid black; text-align:center;">
                            1.8%
                        </td>
                        <td style="border: 1px solid black; text-align:center;">
                            9.3%
                        </td>
                        <td style="border: 1px solid black; text-align:center;">
                            0.1%
                        </td>
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
        const data_pegawai = [
            [1524, 249, 161, 99, 65, 49, 24, 21, 11, 4, 7, 2, 3, 2, 0, 0, 0, 1, 1, 0, 2, 0, 1 ], // univ
            [333, 24, 5, 9, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ], // fk
            [77, 26, 27, 13, 5, 3, 2, 2, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1 ], // fp
            [322, 70, 47, 11, 13, 9, 5, 2, 2, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0 ], // fkip
            [51, 9, 17, 22, 18, 18, 8, 8, 3, 1, 2, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0 ,0, 0 ], // fmipa
            [102, 23, 16, 3, 3, 3, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ], // feb
            [85, 8, 6, 2, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ], // fh
            [84, 13, 6, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ], // fisip
            [89, 12, 5, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ], // fib
            [37, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ], // fkor
            [112, 35, 22, 20, 12, 10, 5, 7, 4, 0, 2, 1, 2, 0, 0, 0, 0, 1, 1, 0, 2, 0, 0 ], // ft
            [57, 7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ], // fsrd
            [173, 19, 9, 3, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ], // sv
            [2, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 ], // pascasarjana



            

        ]
        newChart(
            'chart-pegawai', 
            'H-Indeks Penelitian Dan Pengabdian Kepada Masyarakat', 
            [...Array.from(Array(23).keys()).map(item => `${item}`)],
            [
                {
                    label: label_pegawai[id_unit],
                    data: [...data_pegawai[id_unit]],
                },
            ]
        );
    </script>
  </body>
</html>

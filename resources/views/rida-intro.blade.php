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
    <!-- ======== header end ======== -->
    
    <!-- ======== about-section start ======== -->
    <section id="why" class="feature-extended-section pt-80">
      <div class="feature-extended-wrapper">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xxl-5 col-xl-6 col-lg-8 col-md-9">
              <div class="section-title text-center mb-60">
                <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                  Aplikasi RIDA
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                  Silakan memilih jenis data yang ada
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended" style="text-align: center">
                <div class="icon">
                  <i class="lni lni-display"></i>
                </div>
                <div class="content">
                  <h3>Tenaga Pendidik</h3>
                  <a href="/app?jenis_staff=1" style="width: 100%">
                    <button class="main-btn btn-hover" style="padding: 0.5rem; width: 100%; display: block;">
                    Buka
                  </button>
                  </a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended" style="text-align: center">
                <div class="icon">
                  <i class="lni lni-display"></i>
                </div>
                <div class="content">
                  <h3>Tenaga Kependidikan</h3>
                  <a href="/app?unit=4&jenjang_pendidikan=10&jenis_staff=2" style="width: 100%">
                    <button class="main-btn btn-hover" style="padding: 0.5rem; width: 100%; display: block;">
                    Buka
                  </button>
                  </a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended" style="text-align: center">
                <div class="icon">
                  <i class="lni lni-display"></i>
                </div>
                <div class="content">
                  <h3>H-Indeks Penelitian dan Pengabdian Masyarakat</h3>
                  <a href="/app/h-indeks" style="width: 100%">
                    <button class="main-btn btn-hover" style="padding: 0.5rem; width: 100%; display: block;">
                    Buka
                  </button>
                  </a>
                </div>
              </div>
            </div>
<!--             
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended" style="text-align: center">
                <div class="icon">
                  <i class="lni lni-display"></i>
                </div>
                <div class="content">
                  <h3>Usulan Hibah Proposal</h3>
                  <a href="#" style="width: 100%">
                    <button class="main-btn btn-hover" style="padding: 0.5rem; width: 100%; display: block;">
                    Buka
                  </button>
                  </a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended" style="text-align: center">
                <div class="icon">
                  <i class="lni lni-display"></i>
                </div>
                <div class="content">
                  <h3>Sebaran Skema Penelitian PNBP</h3>
                  <a href="#" style="width: 100%">
                    <button class="main-btn btn-hover" style="padding: 0.5rem; width: 100%; display: block;">
                    Buka
                  </button>
                  </a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended" style="text-align: center">
                <div class="icon">
                  <i class="lni lni-display"></i>
                </div>
                <div class="content">
                  <h3>H-Indeks Penelitian dan Pengabdian Masyarakat</h3>
                  <a href="#" style="width: 100%">
                    <button class="main-btn btn-hover" style="padding: 0.5rem; width: 100%; display: block;">
                    Buka
                  </button>
                  </a>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section><footer class="footer">
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
                    <a href="jvascript:void(0)">
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
  </body>
</html>

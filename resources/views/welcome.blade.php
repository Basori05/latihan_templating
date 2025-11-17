<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Bara Buku Store - Bookshop</title>
    <meta name="description" content="Toko buku modern dengan berbagai koleksi bacaan inspiratif." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-alpha-2.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css"/>
    <link rel="stylesheet" href="assets/css/animate.css"/>
    <link rel="stylesheet" href="assets/css/lindy-uikit.css"/>

    <!-- CUSTOM BARA BUKU STORE THEME -->
    <style>
      :root {
        --book-brown: #6b4226;
        --book-orange: #d98a43;
        --book-cream: #fff4e3;
        --book-dark: #3a281b;
      }
      body {
        background: var(--book-cream);
      }
      .header-2, .navbar-area {
        background: var(--book-dark) !important;
      }
      h1, h2, h3, h4, h5 {
        color: var(--book-brown);
      }
      .button {
        background: var(--book-orange) !important;
        border-color: var(--book-orange) !important;
      }
      .button:hover {
        background: #e9a768 !important;
      }
      .single-feature .icon i {
        color: var(--book-orange);
      }
    </style>
  </head>
  <body>

    <!-- ========================= preloader start ========================= -->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left"><div class="spinner-circle"></div></div>
              <div class="spinner-right"><div class="spinner-circle"></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========================= preloader end ========================= -->

    <!-- ========================= hero-section-wrapper-2 start ========================= -->
    <section id="home" class="hero-section-wrapper">

      <!-- ========================= header-2 start ========================= -->
      <header class="header header-2">
        <div class="navbar-area">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">

                  <a class="navbar-brand" href="#">
                    <!-- LOGO DIISI -->
                    <img src="assets/img/logo.jpg" alt="Bara Buku Store" style="height:50px;">
                  </a>

                  <button class="navbar-toggler" type="button">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent2">
                    <ul id="nav2" class="navbar-nav ml-auto">
                      <li class="nav-item"><a class="page-scroll active" href="#home">Beranda</a></li>
                      <li class="nav-item"><a class="page-scroll" href="#services">Kategori Buku</a></li>
                      <li class="nav-item"><a class="page-scroll" href="#about">Tentang</a></li>
                      <li class="nav-item"><a class="page-scroll" href="#pricing">Paket Buku</a></li>
                      <li class="nav-item"><a class="page-scroll" href="#contact">Kontak</a></li>
                    </ul>
                    <a href="#0" class="button button-sm radius-10 d-none d-lg-flex">Belanja Sekarang</a>
                  </div>

                </nav>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========================= header-2 end ========================= -->


      <!-- ========================= hero-2 start ========================= -->
      <div class="hero-section hero-style-2">
        <div class="container">
          <div class="row align-items-end">

            <div class="col-lg-6">
              <div class="hero-content-wrapper">
                <h4 class="wow fadeInUp" data-wow-delay=".2s">Selamat datang di</h4>
                <h2 class="mb-30 wow fadeInUp" data-wow-delay=".4s">Bara Buku Store</h2>
                <p class="mb-50 wow fadeInUp" data-wow-delay=".6s">
                  Koleksi buku lengkap mulai dari fiksi, pendidikan, pengembangan diri, hingga literatur populer Indonesia.
                </p>
                <div class="buttons">
                  <a href="#services" class="button button-lg radius-10 wow fadeInUp" data-wow-delay=".7s">Jelajahi Buku</a>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="hero-image">
                <!-- GANTI JADI LOGO JUGA -->
                <img src="" alt="Bara Buku Store">
                <img src="assets/img/background about.jpg" alt="" class="shape shape-1">
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- ========================= hero-2 end ========================= -->
    </section>
    <!-- ========================= hero-section-wrapper-2 end ========================= -->


    <!-- ========================= feature style-2 start ========================= -->
    <section id="services" class="feature-section feature-style-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">

            <div class="row">
              <div class="col-xl-7 col-lg-10 col-md-9">
                <div class="section-title mb-60">
                  <h3 class="mb-15 wow fadeInUp" data-wow-delay=".2s">Kategori Buku</h3>
                  <p class="wow fadeInUp" data-wow-delay=".4s">Temukan berbagai genre buku untuk setiap kebutuhan bacaanmu.</p>
                </div>
              </div>
            </div>

            <div class="row">

              <div class="col-md-6">
                <div class="single-feature wow fadeInUp">
                  <div class="icon"><i class="lni lni-book"></i></div>
                  <div class="content">
                    <h5 class="mb-25">Fiksi & Novel</h5>
                    <p>Koleksi novel romantis, misteri, aksi, hingga sastra klasik.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="single-feature wow fadeInUp">
                  <div class="icon"><i class="lni lni-graduation"></i></div>
                  <div class="content">
                    <h5 class="mb-25">Buku Pendidikan</h5>
                    <p>Buku pelajaran, referensi sekolah, dan materi kuliah.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="single-feature wow fadeInUp">
                  <div class="icon"><i class="lni lni-users"></i></div>
                  <div class="content">
                    <h5 class="mb-25">Pengembangan Diri</h5>
                    <p>Buku motivasi, bisnis, produktivitas, dan skill hidup.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="single-feature wow fadeInUp">
                  <div class="icon"><i class="lni lni-library"></i></div>
                  <div class="content">
                    <h5 class="mb-25">Paket Koleksi</h5>
                    <p>Paket buku pilihan untuk harga lebih hemat.</p>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>
      </div>

      <div class="feature-img wow fadeInLeft">
        <!-- DIGANTI PAKET 1 -->
        <img src="assets/img/paket-1.jpg" alt="">
      </div>
    </section>
    <!-- ========================= feature style-2 end ========================= -->


    <!-- ========================= about style-3 start ========================= -->
    <section id="about" class="about-section about-style-3">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-lg-6">
            <div class="about-image wow fadeInLeft">
              <!-- FOTO ABOUT -->
              <img src="assets/img/background about.jpg" alt="Tentang Bara Buku Store">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="about-content-wrapper">
              <div class="section-title mb-40">
                <h3 class="mb-25 wow fadeInUp">Tentang Bara Buku Store</h3>
                <p class="wow fadeInUp">
                  Bara Buku Store hadir untuk menyediakan buku-buku berkualitas dengan pengalaman belanja yang nyaman, modern, dan informatif.
                </p>
              </div>
              <a href="#services" class="button button-lg radius-3 wow fadeInUp">Lihat Buku</a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- ========================= about style-3 end ========================= -->


    <!-- ========================= pricing style-1 start ========================= -->
    <section id="pricing" class="pricing-section pricing-style-1 bg-white">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-xxl-5 col-xl-5 col-lg-7 col-md-10">
            <div class="section-title text-center mb-60">
              <h3 class="mb-15 wow fadeInUp">Paket Buku Hemat</h3>
              <p class="wow fadeInUp">Dapatkan harga terbaik dengan bundling koleksi kami.</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-pricing wow fadeInUp">
              <div class="image">
                <!-- Paket 1 -->
                <img src="assets/img/paket-1.jpg" alt="">
              </div>
              <h6>Paket Pemula</h6>
              <h4>2 Buku</h4>
              <h3>Rp 99.000</h3>
              <ul>
                <li><i class="lni lni-checkmark-circle"></i> Mix Buku Populer</li>
                <li><i class="lni lni-checkmark-circle"></i> 1 Buku Bonus</li>
              </ul>
              <a href="#0" class="button radius-30">Beli</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-pricing active wow fadeInUp">
              <span class="button button-sm radius-30 popular-badge">Paling Laris</span>
              <div class="image">
                <!-- Paket 2 -->
                <img src="assets/img/paket-2.jpg" alt="">
              </div>
              <h6>Paket Favorit</h6>
              <h4>5 Buku</h4>
              <h3>Rp 199.000</h3>
              <ul>
                <li><i class="lni lni-checkmark-circle"></i> Mix Buku Pilihan</li>
                <li><i class="lni lni-checkmark-circle"></i> 1 Buku Premium</li>
              </ul>
              <a href="#0" class="button radius-30">Beli</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-8 col-sm-10">
            <div class="single-pricing wow fadeInUp">
              <div class="image">
                <!-- Paket 3 -->
                <img src="assets/img/paket-3.jpg" alt="">
              </div>
              <h6>Paket Ultimate</h6>
              <h4>10 Buku</h4>
              <h3>Rp 349.000</h3>
              <ul>
                <li><i class="lni lni-checkmark-circle"></i> Koleksi Lengkap</li>
              </ul>
              <a href="#0" class="button radius-30">Beli</a>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- ========================= pricing style-1 end ========================= -->


    <!-- ========================= team style-1 start ========================= -->
    <section id="team" class="team-section team-style-1">
      <div class="container">

        <div class="section-title text-center mb-60">
          <h3 class="mb-15 wow FadeInUp">Koleksi Unggulan</h3>
          <p class="wow fadeInUp">Beberapa buku favorit pembaca kami.</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-xl-3 col-md-6 col-sm-10">
            <div class="single-team">
              <div class="image">
                <img src="assets/img/paket 1.jpg" alt="">
              </div>
              <div class="info">
                <h6>Novel Romance</h6>
                <p>Paling dicari</p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 col-sm-10">
            <div class="single-team">
              <div class="image">
                <img src="assets/img/paket 2.jpg" alt="">
              </div>
              <div class="info">
                <h6>Buku Motivasi</h6>
                <p>Inspiratif</p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 col-sm-10">
            <div class="single-team">
              <div class="image">
                <img src="assets/img/paket 3.jpg" alt="">
              </div>
              <div class="info">
                <h6>Buku Bisnis</h6>
                <p>Pilihan Profesional</p>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 col-sm-10">
            <div class="single-team">
              <div class="image">
                <img src="assets/img/paket 3.jpg" alt="">
              </div>
              <div class="info">
                <h6>Komik & Manga</h6>
                <p>Best for Fun</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- ========================= team style-1 end ========================= -->


    <!-- CONTACT SECTION -->
    <section id="contact" class="contact-section contact-style-6">
      <div class="container">
        <div class="section-title mb-40">
          <h3 class="mb-15">Hubungi Kami</h3>
          <p>Butuh rekomendasi buku? Ingin stok grosir? Kami siap membantu!</p>
        </div>
      </div>
    </section>


    <!-- FOOTER -->
    <footer class="footer footer-style-1">
      <div class="container">
        <div class="copyright-wrapper">
          <p class="text-center">© 2025 Bara Buku Store • Toko Buku Modern</p>
        </div>
      </div>
    </footer>

    <!-- JS -->
    <script src="assets/js/bootstrap.5.0.0.alpha-2-min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>

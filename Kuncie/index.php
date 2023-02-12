<?php
  session_start();
  $conn = mysqli_connect("localhost","root","","marketeers");
  $email = $_SESSION['email'];
  $username = mysqli_query($conn,"SELECT username FROM user WHERE email = '$email'");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Mentor Bootstrap Template - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Mentor - v4.10.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="site-header fixed-top sps header-dark sps--abv">
      <div class="container-fluid d-flex align-items-center">
        <!-- <h1 class="logo me-auto"><a href="index.html">Mentor</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <div>
          <div class="d-flex">
            <div class="align-self-center elumine-site-logo">
              <a href="index.html" class="logo me-auto"><img src="assets/img/kuncie_logo.png" alt="Responsive image" class="img-fluid" /></a>
            </div>
          </div>
        </div>

        <div class="header-container navbar navbar-toggleable-md navbar navbar-inverse justify-content-between">
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li>
                <a class="active" href="index.html"><i class="bi bi-house-fill" style="font-size: 1em; padding: 5px"></i> Beranda</a>
              </li>
              <!-- <li><a href="about.html">Kategori</a></li> -->
              <li class="dropdown">
                <a href="#"
                  ><span><i class="bi bi-tags-fill" style="font-size: 1em; padding: 5px"></i>Kategori</span> <i class="bi bi-chevron-down"></i
                ></a>
                <ul>
                  <!-- Bisnis -->
                  <li class="dropdown">
                    <a href="#"><span>Bisnis</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li class="dropdown">
                        <a href="#"><span>Dasar Bisnis</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="#"><span>Branding</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Copywriting</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Finansial Bisnis</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Ideasi Bisnis</span></a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#"><span>Pengembangan Bisnis</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="#"><span>Copywriting</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Dana Bisnis</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Digital Marketing</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Ekspansi Bisnis</span></a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#"><span>Tantangan Bisnis</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="#"><span>Copywriting</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Ekspansi Bisnis</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Relasi Bisnis</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Finansial Bisnis</span></a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Industri -->
                  <li class="dropdown">
                    <a href="#"><span>Industri</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li class="dropdown">
                        <a href="#"><span>Fashion</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="#"><span>Ideal Bisnis</span></a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#"><span>Industri Kreatif</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="#"><span>Film & TV</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Fotografi</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Ideasi Bisnis</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Pembuatan Konten</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Penulisan</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Seni Dan Kerajinan</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Seni Rupa</span></a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#"><span>Makanan & Minuman</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="#"><span>Barista</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Ekspansi Bisnis</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Ideasi Bisnis</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Pembuatan Konten</span></a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Keterampilan -->
                  <li class="dropdown">
                    <a href="#"><span>Keterampilan</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li class="dropdown">
                        <a href="#"><span>Keterampilan Khusus</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="#"><span>Barista</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Copywriting</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Digital Marketing</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Film & TV</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Finansial Bisnis</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Fotografi</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Microsoft Office</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Pembuatan Konten</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Pengembangan Aplikasi</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Penulisan</span></a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#"><span>Pengembangan Diri</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="#"><span>Presentasi</span></a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Profesional -->
                  <li class="dropdown">
                    <a href="#"><span>Profesional</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li class="dropdown">
                        <a href="#"><span>Keahlian Dunia Kerja</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="#"><span>Copywriting</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Microsoft Office</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Persiapan Karir</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Presentasi</span></a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#"><span>Media Sosial</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="#"><span>Digital Marketing</span></a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#"><span>Tech</span><i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li>
                            <a href="#"><span>Digital Marketing</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Pengembangan Aplikasi</span></a>
                          </li>
                          <li>
                            <a href="#"><span>Persiapan Karir</span></a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li>
                <a href="trainers.html"><i class="bi bi-person-fill" style="font-size: 1em; padding: 5px"></i>Mentor</a>
              </li>

              <li class="dropdown">
                <a href="#"
                  ><span><i class="bi bi-laptop" style="font-size: 1em; padding: 5px"></i>Mini MBA</span> <i class="bi bi-chevron-down"></i
                ></a>
                <ul>
                  <li><a href="#">Mini MBA SBM ITB</a></li>
                  <!-- <li class="dropdown">
                    <a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li> -->
                  <li><a href="#">Mini MBA Political Marketing</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#"
                  ><span><i class="bi bi-graph-up-arrow" style="font-size: 1em; padding: 5px"></i>Bootcamp</span> <i class="bi bi-chevron-down"></i
                ></a>
                <ul>
                  <li><a href="#">Komplit Data Analytics</a></li>
                  <!-- <li class="dropdown">
                    <a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li> -->
                  <li><a href="#">Komplit Barista Kopi</a></li>
                  <li><a href="#">Komplit Perpajakan</a></li>
                  <li><a href="#">Komplit Product Management</a></li>
                  <li><a href="#">Komplit Quality Assurance</a></li>
                  <li><a href="#">Komplit Graphic Design</a></li>
                  <li><a href="#">Komplit Career Preparation</a></li>
                </ul>
              </li>

              <li class="dropdown">
                <a href="#"
                  ><span><i class="bi bi-mortarboard-fill" style="font-size: 1em; padding: 5px"></i>Kelas</span> <i class="bi bi-chevron-down"></i
                ></a>
                <ul>
                  <li><a href="course.html">Kelas Jago</a></li>
                  <li><a href="course.html">Promo Paket Kelas Istimewa</a></li>
                  <li><a href="course.html">Microsoft Certification Program</a></li>
                </ul>
              </li>

              <li>
                <a href="events.html"><i class="bi bi-pc-display-horizontal" style="font-size: 1em; padding: 5px"></i>Webinar</a>
              </li>
              <li>
                <a href="contact.html"><i class="bi bi-cart3" style="font-size: 20px; padding: 5px"></i></a>
              </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
        </div>
        <!-- .navbar -->

        <a href="courses.html" class="get-started-btn">Masuk</a>
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
      <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Temukan berbagai<br />ilmu, tips, inspirasi,<br />serta kolaborasi <br />langsung dari ahlinya!</h1>
        <h2>Tunggu apa lagi? Yuk,gabung bersama Kuncie sekarang!</h2>

        <a href="courses.html" class="btn-get-started">Get Started</a>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <div class="container-fluid carousel-contain py-5">
        <div class="container">
          <h2 class="text-center mb-5" style="color: black" ;>Advertisement</h2>
          <div id="carouselExampleIndicators" class="carousel slide col-lg-6 offset-lg-3" data-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner ratio ratio-16x9" style="border-radius: 25px">
              <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/course-1.jpg" alt="First slide" />
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/course-2.jpg" alt="Second slide" />
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/course-3.jpg" alt="Third slide" />
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <svg fill="#FFB533" xmlns="http://www.w3.org/2000/svg" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16" style="width: 50px; height: 50px">
                <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
              </svg>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <svg fill="#FFB533" xmlns="http://www.w3.org/2000/svg" class="bi bi-arrow-right-circle-fill fa-5x" viewBox="0 0 16 16" style="width: 50px; height: 50px">
                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
              </svg>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>

      <!--End oF Carousel -->
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="assets/img/about_kuncie.png" class="img-fluid" alt="Responsive image" style="border-radius: 25px" />
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h3>Apa itu Kuncie ?</h3>
              <p class="fst-italic">
                Kuncie adalah platform Belajar Bisnis Online dengan para pemilik bisnis sukses secara langsung. Melalui platform Kuncie ini bisa membantu para calon pengusaha seperti Kamu dengan para pemilik bisnis lokal di Indonesia yang
                siap berbagi pengetahuan dan tips praktis melalui online video course maupun sesi mentoring 1-on-1.Berikut fitur kunci lainnya :
              </p>
              <ul>
                <li><i class="bi bi-check-circle"></i> Tonton video yang singkat, padat, dan penuh dengan pengetahuan</li>
                <li><i class="bi bi-check-circle"></i> Dapatkan kurikulum yang unik untuk kebutuhanmu</li>
                <li><i class="bi bi-check-circle"></i> Kumpulkan poin dan tukarkan dengan berbagai macam hadiah</li>
                <li><i class="bi bi-check-circle"></i> Dapatkan sesi mentoring dengan Mentor favoritmu</li>
                <li><i class="bi bi-check-circle"></i> Luaskan networkmu melalui interaksi dengan pengguna Kuncie lainnya</li>
              </ul>
              <p>Tidak hanya itu, kamu juga dapat berinteraksi dengan para calon pengusaha lain, untuk sebuah pengalaman belajar yang interaktif, menyenangkan, dan tidak bikin bosan!</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts section-bg">
        <div class="container">
          <div class="row counters">
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Students</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
              <p>Courses</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
              <p>Events</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Trainers</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Counts Section -->

      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
              <div class="content">
                <h3>Why Choose Kuncie?</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit Asperiores dolores sed et. Tenetur quia eos. Autem tempore
                  quibusdam vel necessitatibus optio ad corporis.
                </p>
                <div class="text-center">
                  <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-boxes d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-receipt"></i>
                      <h4>Corporis voluptates sit</h4>
                      <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-cube-alt"></i>
                      <h4>Ullamco laboris ladore pan</h4>
                      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                    </div>
                  </div>
                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-images"></i>
                      <h4>Labore consequatur</h4>
                      <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End .content-->
            </div>
          </div>
        </div>
      </section>
      <!-- End Why Us Section -->

      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container" data-aos="fade-up">
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-3 col-md-4">
              <div class="icon-box">
                <i class="ri-store-line" style="color: #ffbb2c"></i>
                <h3><a href="">Lorem Ipsum</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="ri-bar-chart-box-line" style="color: #5578ff"></i>
                <h3><a href="">Dolor Sitema</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
              <div class="icon-box">
                <i class="ri-calendar-todo-line" style="color: #e80368"></i>
                <h3><a href="">Sed perspiciatis</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
              <div class="icon-box">
                <i class="ri-paint-brush-line" style="color: #e361ff"></i>
                <h3><a href="">Magni Dolores</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="ri-database-2-line" style="color: #47aeff"></i>
                <h3><a href="">Nemo Enim</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="ri-gradienter-line" style="color: #ffa76e"></i>
                <h3><a href="">Eiusmod Tempor</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="ri-file-list-3-line" style="color: #11dbcf"></i>
                <h3><a href="">Midela Teren</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="ri-price-tag-2-line" style="color: #4233ff"></i>
                <h3><a href="">Pira Neve</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="ri-anchor-line" style="color: #b2904f"></i>
                <h3><a href="">Dirada Pack</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="ri-disc-line" style="color: #b20969"></i>
                <h3><a href="">Moton Ideal</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="ri-base-station-line" style="color: #ff5828"></i>
                <h3><a href="">Verdo Park</a></h3>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
              <div class="icon-box">
                <i class="ri-fingerprint-line" style="color: #29cc61"></i>
                <h3><a href="">Flavor Nivelanda</a></h3>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Features Section -->

      <!-- ======= Trainers Section ======= -->
      <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2 style="font-family: Poppins; font-weight: 700; font-size: 32px; color: #2c1a32">Kelas Komplit</h2>
          </div>
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member rounded" style="background-color: #2c1a32">
                <img src="assets/img/SBM ITB Mini MBA.jpeg" class="img-fluid mt-4 rounded" alt="" />
                <div class="member-content">
                  <h4 style="color: white">SBM ITB Mini MBA</h4>
                  <span style="color: #f4c474">87 Video Self Learning <br />22 Kali Pertemuan</span>
                  <p style="color: white">
                    Bekerjasama dengan SBM ITB, Program Mini MBA merupakan online fast track untuk mempelajari lebih dalam tentang manajemen bisnis tingkat tinggi dan berfokus pada pengembangan bisnis serta leadership.
                  </p>
                  <a class="btn btn-primary" style="background-color: #1aa294" href="#" role="button">Beli Program</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member rounded" style="background-color: #2c1a32">
                <img src="assets/img/Political Marketing.jpeg" class="img-fluid mt-4 rounded" alt="" />
                <div class="member-content">
                  <h4 style="color: white">Political Marketing</h4>
                  <span style="color: #f4c474">5 kali pertemuan</span>
                  <p class="mt-4" style="color: white">
                    Kuncie dengan kolaborasi dengan SBM ITB dan LSI (Lembaga Survei Indonesia) menghadirkan kelas komplit tentang Political Marketing yang diciptakan untuk meningkatkan pengetahuan di bidang Pemasaran Politik.
                  </p>
                  <a class="btn btn-primary" style="background-color: #1aa294" href="#" role="button">Beli Program</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member rounded" style="background-color: #2c1a32">
                <img src="assets/img/Kursus Pajak Intensif.jpeg" class="img-fluid mt-4 rounded" alt="" />
                <div class="member-content">
                  <h4 style="color: white">Kursus Pajak Intensif</h4>
                  <span style="color: #f4c474">6 kali pertemuan</span>
                  <p class="mt-3" style="color: white">
                    Kelas ini mengakomodasi kebutuhan perusahaan, pelaku UMKM, individu, ataupun profesional untuk belajar seluk beluk pajak sehingga mampu menghitung besaran pajak dan mengaplikasikannya.
                  </p>
                  <a class="btn btn-primary" style="background-color: #1aa294" href="#" role="button">Beli Program</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Trainers Section -->
   

      <!-- ======= Kelas Unggulan Section ======= -->

      <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Courses</h2>
            <p>Popular Courses</p>
          </div>

          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <div class="d-flex justify-content-center">
                  <img src="assets/img/kelas unggulan 1 .jpeg" class="img-fluid mt-3 rounded" alt="..." />
                </div>
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <i class="bi bi-star-fill Yellow"
                      ><i class="bi bi-star-fill"
                        ><i class="bi bi-star-fill"
                          ><i class="bi bi-star-fill"
                            ><i class="bi bi-star-fill"><i class="bi bi-star-fill">(144)</i></i></i
                          ></i
                        ></i
                      ></i
                    >
                    <p class="price">Rp. 149.000</p>
                  </div>

                  <h3><a href="course-details.html">Dasar Menulis Fiksi Cara Dee Lestari</a></h3>
                  <p>
                    Mentor: Dee Lestari<br /><br />
                    Ayo belajar menulis fiksi dari Dee Lestari dan dapatkan tips menulis fiksi berdasarkan pengalaman menulisnya selama lebih dari dua dekade.
                  </p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="" />
                      <span>Dee Lestari</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center"><i class="bx bx-user"></i>&nbsp;995 &nbsp;&nbsp; <i class="bx bx-heart"></i>&nbsp;65</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <div class="d-flex justify-content-center">
                  <img src="assets/img/kelas unggulan 2.jpeg" class="img-fluid mt-3 rounded" alt="..." />
                </div>
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <i class="bi bi-star-fill Yellow"
                      ><i class="bi bi-star-fill"
                        ><i class="bi bi-star-fill"
                          ><i class="bi bi-star-fill"
                            ><i class="bi bi-star-fill"><i class="bi bi-star-fill">(7)</i></i></i
                          ></i
                        ></i
                      ></i
                    >
                    <p class="price">Rp. 149.000</p>
                  </div>

                  <h3><a href="course-details.html">Cara berpresentasi dengan menggugah dan efektif</a></h3>
                  <p>
                    Mentor : Teuku Daffa<br /><br />
                    Skill presentasi punya peranan penting di dunia kerja. Ayo kuasai teknik presentasi mulai dari persiapan, metode online maupun offline, hingga praktek presentasi langsung dari Teuku Daffa, seorang certified public
                    speaker!
                  </p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="" />
                      <span>Teuku Daffa</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center"><i class="bx bx-user"></i>&nbsp;72 &nbsp;&nbsp; <i class="bx bx-heart"></i>&nbsp;65</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <div class="d-flex justify-content-center">
                  <img src="assets/img/kelas unggulan 3.jpeg" class="img-fluid mt-3 rounded" alt="..." />
                </div>
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <i class="bi bi-star-fill Yellow"
                      ><i class="bi bi-star-fill"
                        ><i class="bi bi-star-fill"
                          ><i class="bi bi-star-fill"
                            ><i class="bi bi-star-fill"><i class="bi bi-star-fill">(4)</i></i></i
                          ></i
                        ></i
                      ></i
                    >
                    <p class="price">Rp. 50.000</p>
                  </div>

                  <h3><a href="course-details.html">Mini Class - Workflow Seorang Photographer</a></h3>
                  <p>
                    Mentor : Martha Suherman<br /><br />
                    Fotografer adalah salah satu profesi yang sangat mengandalkan ketajaman mata
                    Ternyata, fotografer nggak cuma jepret-jepret aja! Ayo belajar workflow seorang fotografer langsung dari Martha Suherman
                  </p>
                  <div class="trainer d-flex justify-content-between align-items-center">
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="" />
                      <span>Martha Suherman</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center"><i class="bx bx-user"></i>&nbsp;245 &nbsp;&nbsp; <i class="bx bx-heart"></i>&nbsp;65</div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Course Item-->
          </div>
        </div>
      </section>
      <!-- End Popular Courses Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Mentor</h3>
              <p>
                A108 Adam Street <br />
                New York, NY 535022<br />
                United States <br /><br />
                <strong>Phone:</strong> +1 5589 55488 55<br />
                <strong>Email:</strong> info@example.com<br />
              </p>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
              </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
              <h4>Join Our Newsletter</h4>
              <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
              <form action="" method="post"><input type="email" name="email" /><input type="submit" value="Subscribe" /></form>
            </div>
          </div>
        </div>
      </div>

      <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Mentor</span></strong
            >. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>

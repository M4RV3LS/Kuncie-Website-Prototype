<?php
session_start();
require '../../function.php';

if(!isset($_SESSION['email']))
{
    header("Location: ../../login.php");
    exit;
}
$email = $_SESSION['email'];
$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'"));
if (isset($_POST['logout']))
{
    unset($_SESSION['email']);
    session_destroy();
    header("Location: ../../login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Kuncie Website Prototype</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet" /> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />

    <!--Script-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js">
    </script>

    <!-- =======================================================
  * Template Name: Mentor - v4.10.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <form action="" method="post">
        <!-- ======= Header ======= -->
        <header id="header" class="site-header fixed-top sps header-dark sps--abv">
            <div class="container-fluid d-flex align-items-center">
                <!-- <h1 class="logo me-auto"><a href="index.html">Mentor</a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <div>
                    <div class="d-flex">
                        <div class="align-self-center elumine-site-logo col-8 offset-2">
                            <a href="index.php" class="logo me-auto"><img src="assets/img/kuncie_logo.png"
                                    alt="Responsive image" class="img-fluid" /></a>
                        </div>
                    </div>
                </div>

                <div class="header-container navbar navbar-toggleable-md navbar navbar-inverse justify-content-between">
                    <nav id="navbar" class="navbar order-last order-lg-0">
                        <ul>
                            <li>
                                <a id="beranda" class="active" href="index-login.php"><i class="bi bi-house-fill"
                                        style="font-size: 1em; padding: 5px"></i> Beranda</a>
                            </li>

                            <!-- Mulai Kategori -->
                            <li class="dropdown">
                                <a href="#"><span><i class="bi bi-tags-fill"
                                            style="font-size: 1em; padding: 5px"></i>Kategori</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <!-- Bisnis -->
                                    <li class="dropdown">
                                        <a href="#"><span>Bisnis</span> <i class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            <li class="dropdown">
                                                <a href="#"><span>Dasar Bisnis</span><i
                                                        class="bi bi-chevron-right"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="course-details.php"><span>Branding</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Copywriting</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Finansial Bisnis</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Ideasi Bisnis</span></a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#"><span>Pengembangan Bisnis</span><i
                                                        class="bi bi-chevron-right"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="course-details.php"><span>Copywriting</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Dana Bisnis</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Digital Marketing</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Ekspansi Bisnis</span></a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#"><span>Tantangan Bisnis</span><i
                                                        class="bi bi-chevron-right"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="course-details.php"><span>Copywriting</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Ekspansi Bisnis</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Relasi Bisnis</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Finansial Bisnis</span></a>
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
                                                        <a href="course-details.php"><span>Ideal Bisnis</span></a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#"><span>Industri Kreatif</span><i
                                                        class="bi bi-chevron-right"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="course-details.php"><span>Film & TV</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Fotografi</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Ideasi Bisnis</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Pembuatan Konten</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Penulisan</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Seni Dan Kerajinan</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Seni Rupa</span></a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#"><span>Makanan & Minuman</span><i
                                                        class="bi bi-chevron-right"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="course-details.php"><span>Barista</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Ekspansi Bisnis</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Ideasi Bisnis</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Pembuatan Konten</span></a>
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
                                                <a href="#"><span>Keterampilan Khusus</span><i
                                                        class="bi bi-chevron-right"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="course-details.php"><span>Barista</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Copywriting</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Digital Marketing</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Film & TV</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Finansial Bisnis</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Fotografi</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="kelas-bisnis.php"><span>Microsoft Office</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Pembuatan Konten</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Pengembangan
                                                                Aplikasi</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Penulisan</span></a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#"><span>Pengembangan Diri</span><i
                                                        class="bi bi-chevron-right"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="course-details.php"><span>Presentasi</span></a>
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
                                                <a href="#"><span>Keahlian Dunia Kerja</span><i
                                                        class="bi bi-chevron-right"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="course-details.php"><span>Copywriting</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Microsoft Office</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Persiapan Karir</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Presentasi</span></a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#"><span>Media Sosial</span><i
                                                        class="bi bi-chevron-right"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="course-details.php"><span>Digital Marketing</span></a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="dropdown">
                                                <a href="#"><span>Tech</span><i class="bi bi-chevron-right"></i></a>
                                                <ul>
                                                    <li>
                                                        <a href="course-details.php"><span>Digital Marketing</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Pengembangan
                                                                Aplikasi</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="course-details.php"><span>Persiapan Karir</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="pricing.php"><i class="bi bi-briefcase-fill"
                                        style="font-size: 1em; padding: 5px"></i>Kuncie Bersama</a>
                            </li>

                            <!-- Mulai Produk -->
                            <li class="dropdown">
                                <a href="#"><span><i class="bi bi-bag-check-fill"
                                            style="font-size: 1em; padding: 5px"></i>Produk</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <!-- Mini MBA -->
                                    <li class="dropdown">
                                        <a href=""><span>Kuncie Executive</span><i class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="courses.php">Mini MBA SBM ITB</a></li>
                                            <li><a href="courses.php">Mini MBA Political Marketing</a></li>
                                            <li><a href="courses.php">Live MBA Strategy</a></li>
                                            <li><a href="courses.php">Live MBA Leadership</a></li>
                                        </ul>
                                    </li>

                                    <!-- Kuncie Sukses -->
                                    <li class="dropdown">
                                        <a href="#"><span>Kuncie Sukses</span><i class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="courses.php">Komplit Data Analytics</a></li>
                                            <li><a href="courses.php">Komplit Product Management</a></li>
                                            <li><a href="courses.php">Komplit Quality Assurance</a></li>
                                        </ul>
                                    </li>
                                    <!--Kuncie Komplit-->
                                    <li class="dropdown">
                                        <a href="#"><span>Kuncie Komplit</span><i class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="courses.php">Komplit Barista Kopi</a></li>
                                            <li><a href="courses.php">Komplit Perpajakan</a></li>
                                            <li><a href="courses.php">Komplit Graphic Design</a></li>
                                            <li><a href="courses.php">Komplit Career Preparation</a></li>
                                        </ul>
                                    </li>

                                    <!-- Kelas -->
                                    <li class="dropdown">
                                        <a href="#"><span>Kelas</span><i class="bi bi-chevron-right"></i></a>
                                        <ul>
                                            <li><a href="courses.php">Kelas Jago</a></li>
                                            <li><a href="courses.php">Promo Paket Kelas Istimewa</a></li>
                                            <li><a href="courses.php">Microsoft Certification Program</a></li>
                                        </ul>
                                    </li>

                                    <!-- WEBINAR -->
                                    <li>
                                        <a href="events.php">Webinar</a>
                                    </li>

                                    <!-- Kelas Bersama -->
                                    <!-- <li>
                    <a href="pricing.php">Kelas Bersama</a>
                  </li> -->
                                </ul>
                            </li>
                            <!-- End Produk -->

                            <!--Mentor-->
                            <li>
                                <a href="trainers.php"><i class="bi bi-person-fill"
                                        style="font-size: 1em; padding: 5px"></i>Mentor</a>
                            </li>
                            <!-- Challenge -->
                            <li>
                                <a href="kuncie_challenge.php"><i class="bi bi-rocket-fill"
                                        style="font-size: 1em; padding: 5px"></i>Challenge</a>
                            </li>

                            <!-- Kuncie Store -->
                            <li>
                                <a href="kuncie_store.php"><i class="bi bi-bag-check-fill"
                                        style="font-size: 1em; padding: 5px"></i>Kuncie Store</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-person-circle" style="font-size : 20px"></i>
                                </a>
                                <ul id="profile-dropdown" style="left:-90px;">
                                    <li><a href="profile.php">My Profile</a></li>
                                    <li><a href="../../login.php" value="logout" name="logout">Log Out</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" id="welcome">Hi , <?php echo $row['username']?>!</a>
                            </li>

                            <!--<li style="visibility: hidden">-->
                            <!--    <a href="events.php">Webinar</a>-->
                            <!--</li>-->
                        </ul>

                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav>
                </div>
                <!-- .navbar -->
                <!-- <a href="courses.php" class="get-started-btn">Masuk</a> -->
            </div>
        </header>
        <!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex justify-content-center align-items-center">
            <div class="container position-relative mt-5" data-aos="zoom-in" data-aos-delay="100">
                <h1>Temukan berbagai<br />ilmu, tips, inspirasi,<br />serta kolaborasi <br />langsung dari ahlinya!</h1>
                <h2>Tunggu apa lagi? Yuk,gabung bersama Kuncie sekarang!</h2>

                <a href="courses.php" class="btn-get-started">Get Started</a>
            </div>
        </section>
        <!-- End Hero -->

        <main id="main">
            <!-- <div class = "container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="assets/img/course-1.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="assets/img/course-1.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="assets/img/course-1.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>  -->



            <!--End oF Carousel -->
            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                            <img src="assets/img/about_kuncie.png" class="img-fluid" alt="Responsive image"
                                style="border-radius: 25px" />
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                            <h3>Apa itu Kuncie ?</h3>
                            <p class="fst-italic">
                                Kuncie adalah platform Belajar Bisnis Online dengan para pemilik bisnis sukses secara
                                langsung. Melalui platform Kuncie ini bisa membantu para calon pengusaha seperti Kamu
                                dengan
                                para pemilik bisnis lokal di Indonesia yang
                                siap berbagi pengetahuan dan tips praktis melalui online video course maupun sesi
                                mentoring
                                1-on-1.Berikut fitur kunci lainnya :
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> Tonton video yang singkat, padat, dan penuh
                                    dengan
                                    pengetahuan</li>
                                <li><i class="bi bi-check-circle"></i> Dapatkan kurikulum yang unik untuk kebutuhanmu
                                </li>
                                <li><i class="bi bi-check-circle"></i> Kumpulkan poin dan tukarkan dengan berbagai macam
                                    hadiah</li>
                                <li><i class="bi bi-check-circle"></i> Dapatkan sesi mentoring dengan Mentor favoritmu
                                </li>
                                <li><i class="bi bi-check-circle"></i> Luaskan networkmu melalui interaksi dengan
                                    pengguna
                                    Kuncie lainnya</li>
                            </ul>
                            <p>Tidak hanya itu, kamu juga dapat berinteraksi dengan para calon pengusaha lain, untuk
                                sebuah
                                pengalaman belajar yang interaktif, menyenangkan, dan tidak bikin bosan!</p>
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
                            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Students</p>
                        </div>

                        <div class="col-lg-3 col-6 text-center">
                            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Courses</p>
                        </div>

                        <div class="col-lg-3 col-6 text-center">
                            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Events</p>
                        </div>

                        <div class="col-lg-3 col-6 text-center">
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                class="purecounter"></span>
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
                                    Kuncie adalah platform pembelajaran untuk pelajar dan profesional dari berbagai
                                    industri. Kuncie merupakan produk dari Telkomsel sebagai bentuk produk layanan
                                    digital.
                                    Kuncie menawarkan tiga program yaitu Kuncie kilat,
                                    Kuncie Jago, dan Kuncie komplit.
                                </p>
                                <div class="text-center">
                                    <a href="about.php" class="more-btn">Learn More <i
                                            class="bx bx-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-boxes d-flex flex-column justify-content-center">
                                <div class="row">
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class="bi bi-lightning-charge-fill"></i>
                                            <h4 class="mt-4">Kuncie kilat</h4>
                                            <p>Kuncie kilat merupakan program yang berisi online webinar dengan mentor
                                                yang
                                                ahli di bidangnya. Hasil yang diharapkan yaitu dapat mengerti konsep
                                                serta
                                                mengimplemetasikan konsep yang sudah dipelajari.p</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class="bi bi-star-fill"></i>
                                            <h4 class="mt-4">Kuncie jago</h4>
                                            <p>Kuncie jago merupakan program yang berisi kelas-kelas dengan video
                                                pembelajaran yang komprehensif. Hasil yang diharapkan yaitu dapat
                                                mengerti
                                                modul dan dapat menyelesaikan masalah serta membangun portofolio.</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            <i class="bi bi-patch-check-fill"></i>
                                            <h4 class="mt-4">Kuncie komplit</h4>
                                            <p>Kuncie komplit merupakan program yang berisi bootcamp dengan kursus
                                                online
                                                yang komprehensif. Hasil yang diharapkan yaitu mendapatkan pekerjaan
                                                serta
                                                sertifikasi dari universitas terbaik</p>
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
                            <a href="#">
                                <div class="icon-box d-flex flex-column">
                                    <img src="assets/img/Kategori/Fotografi.png" class="img-fluid"
                                        alt="Fotografi Vector" />
                                    <h3 style="color: black">Fotografi</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <a href="#">
                                <div class="icon-box d-flex flex-column">
                                    <img src="assets/img/Kategori/Digital-Marketing.png" class="img-fluid"
                                        alt="Fotografi Vector" />
                                    <h3 style="color: black">Digital Marketing</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <a href="#">
                                <div class="icon-box d-flex flex-column">
                                    <img src="assets/img/Kategori/Microsoft-Office.png" class="img-fluid"
                                        alt="Fotografi Vector" />
                                    <h3 style="color: black">Microsoft Office</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <a href="#">
                                <div class="icon-box d-flex flex-column">
                                    <img src="assets/img/Kategori/Persiapan-Karier.png" class="img-fluid"
                                        alt="Fotografi Vector" />
                                    <h3 style="color: black">Persiapan Karier</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <a href="#">
                                <div class="icon-box d-flex flex-column">
                                    <img src="assets/img/Kategori/Pembuatan-Konten.png" class="img-fluid"
                                        alt="Fotografi Vector" />
                                    <h3 style="color: black">Pembuatan Konten</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <a href="#">
                                <div class="icon-box d-flex flex-column">
                                    <img src="assets/img/Kategori/Pengembangan-Aplikasi.png" class="img-fluid"
                                        alt="Fotografi Vector" />
                                    <h3 style="color: black">Pengembangan Aplikasi</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <a href="#">
                                <div class="icon-box d-flex flex-column">
                                    <img src="assets/img/Kategori/Penulisan.png" class="img-fluid"
                                        alt="Fotografi Vector" />
                                    <h3 style="color: black">Penulisan</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <a href="#">
                                <div class="icon-box d-flex flex-column">
                                    <img src="assets/img/Kategori/Copywriting.png" class="img-fluid"
                                        alt="Fotografi Vector" />
                                    <h3 style="color: black">Copywriting</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Features Section -->

            <!-- Recommendation Section -->
            <section class="pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-3">Class Recommendations For You</h3>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev"
                                style="background-color:  #f4c474">
                                <i class="fa fa-arrow-left" style="color: white"></i>
                            </a>
                            <a class="btn mb-3" href="#carouselExampleIndicators2" role="button" data-slide="next"
                                style="background-color: #f4c474">
                                <i class="fa fa-arrow-right" style="color: white"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row" style="background-color:white">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="assets/img/kelas unggulan 2.jpeg" />
                                                    <div class="card-body">
                                                        <h3><a href="course-details.php">Cara berpresentasi dengan
                                                                menggugah dan efektif</a>
                                                        </h3>
                                                        <p class="card-text">Skill presentasi punya peranan penting di
                                                            dunia kerja. Ayo kuasai teknik
                                                            presentasi
                                                            mulai dari persiapan, metode online maupun offline, hingga
                                                            praktek presentasi
                                                            langsung dari Teuku Daffa, seorang certified public
                                                            speaker!.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="assets/img/kelas unggulan 2.jpeg" />
                                                    <div class="card-body">
                                                        <h3><a href="course-details.php">Cara berpresentasi dengan
                                                                menggugah dan efektif</a>
                                                        </h3>
                                                        <p class="card-text">Skill presentasi punya peranan penting di
                                                            dunia kerja. Ayo kuasai teknik
                                                            presentasi
                                                            mulai dari persiapan, metode online maupun offline, hingga
                                                            praktek presentasi
                                                            langsung dari Teuku Daffa, seorang certified public
                                                            speaker!.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="assets/img/kelas unggulan 2.jpeg" />
                                                    <div class="card-body">
                                                        <h3><a href="course-details.php">Cara berpresentasi dengan
                                                                menggugah dan efektif</a>
                                                        </h3>
                                                        <p class="card-text">Skill presentasi punya peranan penting di
                                                            dunia kerja. Ayo kuasai teknik
                                                            presentasi
                                                            mulai dari persiapan, metode online maupun offline, hingga
                                                            praktek presentasi
                                                            langsung dari Teuku Daffa, seorang certified public
                                                            speaker!.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row" style="background-color:white">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="assets/img/kelas unggulan 2.jpeg" />
                                                    <div class="card-body">
                                                        <h3><a href="course-details.php">Cara berpresentasi dengan
                                                                menggugah dan efektif</a>
                                                        </h3>
                                                        <p class="card-text">Skill presentasi punya peranan penting di
                                                            dunia kerja. Ayo kuasai teknik
                                                            presentasi
                                                            mulai dari persiapan, metode online maupun offline, hingga
                                                            praktek presentasi
                                                            langsung dari Teuku Daffa, seorang certified public
                                                            speaker!.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="assets/img/kelas unggulan 2.jpeg" />
                                                    <div class="card-body">
                                                        <h3><a href="course-details.php">Cara berpresentasi dengan
                                                                menggugah dan efektif</a>
                                                        </h3>
                                                        <p class="card-text">Skill presentasi punya peranan penting di
                                                            dunia kerja. Ayo kuasai teknik
                                                            presentasi
                                                            mulai dari persiapan, metode online maupun offline, hingga
                                                            praktek presentasi
                                                            langsung dari Teuku Daffa, seorang certified public
                                                            speaker!.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="assets/img/kelas unggulan 2.jpeg" />
                                                    <div class="card-body">
                                                        <h3><a href="course-details.php">Cara berpresentasi dengan
                                                                menggugah dan efektif</a>
                                                        </h3>
                                                        <p class="card-text">Skill presentasi punya peranan penting di
                                                            dunia kerja. Ayo kuasai teknik
                                                            presentasi
                                                            mulai dari persiapan, metode online maupun offline, hingga
                                                            praktek presentasi
                                                            langsung dari Teuku Daffa, seorang certified public
                                                            speaker!.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="row" style="background-color:white">
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="assets/img/kelas unggulan 2.jpeg" />
                                                    <div class="card-body">
                                                        <h3><a href="course-details.php">Cara berpresentasi dengan
                                                                menggugah dan efektif</a>
                                                        </h3>
                                                        <p class="card-text">Skill presentasi punya peranan penting di
                                                            dunia kerja. Ayo kuasai teknik
                                                            presentasi
                                                            mulai dari persiapan, metode online maupun offline, hingga
                                                            praktek presentasi
                                                            langsung dari Teuku Daffa, seorang certified public
                                                            speaker!.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="assets/img/kelas unggulan 2.jpeg" />
                                                    <div class="card-body">
                                                        <h3><a href="course-details.php">Cara berpresentasi dengan
                                                                menggugah dan efektif</a>
                                                        </h3>
                                                        <p class="card-text">Skill presentasi punya peranan penting di
                                                            dunia kerja. Ayo kuasai teknik
                                                            presentasi
                                                            mulai dari persiapan, metode online maupun offline, hingga
                                                            praktek presentasi
                                                            langsung dari Teuku Daffa, seorang certified public
                                                            speaker!.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <div class="card">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src="assets/img/kelas unggulan 2.jpeg" />
                                                    <div class="card-body">
                                                        <h3><a href="course-details.php">Cara berpresentasi dengan
                                                                menggugah dan efektif</a>
                                                        </h3>
                                                        <p class="card-text">Skill presentasi punya peranan penting di
                                                            dunia kerja. Ayo kuasai teknik
                                                            presentasi
                                                            mulai dari persiapan, metode online maupun offline, hingga
                                                            praktek presentasi
                                                            langsung dari Teuku Daffa, seorang certified public
                                                            speaker!.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script type="text/javascript"></script>

            <!-- End of Recommendation Section -->

            <!-- ======= Trainers Section ======= -->
            <section id="trainers" class="trainers">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2 style="font-family: Poppins; font-weight: 700; font-size: 32px; color: #2c1a32">Kelas
                            Komplit
                        </h2>
                    </div>
                    <div class="row" data-aos="zoom-in" data-aos-delay="100">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="member rounded" style="background-color: #2c1a32">
                                <img src="assets/img/SBM ITB Mini MBA.jpeg" class="img-fluid mt-4 rounded" alt="" />
                                <div class="member-content">
                                    <h4 style="color: white">SBM ITB Mini MBA</h4>
                                    <span style="color: #f4c474">87 Video Self Learning <br />22 Kali Pertemuan</span>
                                    <p style="color: white">
                                        Bekerjasama dengan SBM ITB, Program Mini MBA merupakan online fast track untuk
                                        mempelajari lebih dalam tentang manajemen bisnis tingkat tinggi dan berfokus
                                        pada
                                        pengembangan bisnis serta leadership.
                                    </p>
                                    <a class="btn btn-primary" style="background-color: #1aa294" href="#"
                                        role="button">Beli
                                        Program</a>
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
                                        Kuncie dengan kolaborasi dengan SBM ITB dan LSI (Lembaga Survei Indonesia)
                                        menghadirkan kelas komplit tentang Political Marketing yang diciptakan untuk
                                        meningkatkan pengetahuan di bidang Pemasaran Politik.
                                    </p>
                                    <a class="btn btn-primary" style="background-color: #1aa294" href="#"
                                        role="button">Beli
                                        Program</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="member rounded" style="background-color: #2c1a32">
                                <img src="assets/img/Kursus Pajak Intensif.jpeg" class="img-fluid mt-4 rounded"
                                    alt="" />
                                <div class="member-content">
                                    <h4 style="color: white">Kursus Pajak Intensif</h4>
                                    <span style="color: #f4c474">6 kali pertemuan</span>
                                    <p class="mt-3" style="color: white">
                                        Kelas ini mengakomodasi kebutuhan perusahaan, pelaku UMKM, individu, ataupun
                                        profesional untuk belajar seluk beluk pajak sehingga mampu menghitung besaran
                                        pajak
                                        dan mengaplikasikannya.
                                    </p>
                                    <a class="btn btn-primary" style="background-color: #1aa294" href="#"
                                        role="button">Beli
                                        Program</a>
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
                                    <img src="assets/img/kelas unggulan 1 .jpeg" class="img-fluid mt-3 rounded"
                                        alt="..." />
                                </div>
                                <div class="course-content">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <i class="bi bi-star-fill Yellow"><i class="bi bi-star-fill"><i
                                                    class="bi bi-star-fill"><i class="bi bi-star-fill"><i
                                                            class="bi bi-star-fill"><i
                                                                class="bi bi-star-fill">(144)</i></i></i></i></i></i>
                                        <p class="price">Rp. 149.000</p>
                                    </div>

                                    <h3><a href="course-details.php">Dasar Menulis Fiksi Cara Dee Lestari</a></h3>
                                    <p>
                                        Mentor: Dee Lestari<br /><br />
                                        Ayo belajar menulis fiksi dari Dee Lestari dan dapatkan tips menulis fiksi
                                        berdasarkan pengalaman menulisnya selama lebih dari dua dekade.
                                    </p>
                                    <div class="trainer d-flex justify-content-between align-items-center">
                                        <div class="trainer-profile d-flex align-items-center">
                                            <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="" />
                                            <span>Dee Lestari</span>
                                        </div>
                                        <div class="trainer-rank d-flex align-items-center"><i
                                                class="bx bx-user"></i>&nbsp;995 &nbsp;&nbsp; <i
                                                class="bx bx-heart"></i>&nbsp;65</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Course Item-->

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="course-item">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/img/kelas unggulan 2.jpeg" class="img-fluid mt-3 rounded"
                                        alt="..." />
                                </div>
                                <div class="course-content">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <i class="bi bi-star-fill Yellow"><i class="bi bi-star-fill"><i
                                                    class="bi bi-star-fill"><i class="bi bi-star-fill"><i
                                                            class="bi bi-star-fill"><i
                                                                class="bi bi-star-fill">(7)</i></i></i></i></i></i>
                                        <p class="price">Rp. 149.000</p>
                                    </div>

                                    <h3><a href="course-details.php">Cara berpresentasi dengan menggugah dan efektif</a>
                                    </h3>
                                    <p>
                                        Mentor : Teuku Daffa<br /><br />
                                        Skill presentasi punya peranan penting di dunia kerja. Ayo kuasai teknik
                                        presentasi
                                        mulai dari persiapan, metode online maupun offline, hingga praktek presentasi
                                        langsung dari Teuku Daffa, seorang certified public
                                        speaker!
                                    </p>
                                    <div class="trainer d-flex justify-content-between align-items-center">
                                        <div class="trainer-profile d-flex align-items-center">
                                            <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="" />
                                            <span>Teuku Daffa</span>
                                        </div>
                                        <div class="trainer-rank d-flex align-items-center"><i
                                                class="bx bx-user"></i>&nbsp;72 &nbsp;&nbsp; <i
                                                class="bx bx-heart"></i>&nbsp;65</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Course Item-->

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="course-item">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/img/kelas unggulan 3.jpeg" class="img-fluid mt-3 rounded"
                                        alt="..." />
                                </div>
                                <div class="course-content">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <i class="bi bi-star-fill Yellow"><i class="bi bi-star-fill"><i
                                                    class="bi bi-star-fill"><i class="bi bi-star-fill"><i
                                                            class="bi bi-star-fill"><i
                                                                class="bi bi-star-fill">(4)</i></i></i></i></i></i>
                                        <p class="price">Rp. 50.000</p>
                                    </div>

                                    <h3><a href="course-details.php">Mini Class - Workflow Seorang Photographer</a></h3>
                                    <p>
                                        Mentor : Martha Suherman<br /><br />
                                        Fotografer adalah salah satu profesi yang sangat mengandalkan ketajaman mata
                                        Ternyata, fotografer nggak cuma jepret-jepret aja! Ayo belajar workflow seorang
                                        fotografer langsung dari Martha Suherman
                                    </p>
                                    <div class="trainer d-flex justify-content-between align-items-center">
                                        <div class="trainer-profile d-flex align-items-center">
                                            <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="" />
                                            <span>Martha Suherman</span>
                                        </div>
                                        <div class="trainer-rank d-flex align-items-center"><i
                                                class="bx bx-user"></i>&nbsp;245 &nbsp;&nbsp; <i
                                                class="bx bx-heart"></i>&nbsp;65</div>
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
                        <div class="col-lg-8 col-md-6 footer-contact">
                            <img src="assets/img/kuncie_logo_white.png" class="img-fluid col-lg-6 mb-4"
                                alt="kuncie-logo" />
                            <h2 style="color: white; font-weight: bold; font-family: Poppins">Platform pembelajaran
                                terbaik
                                untuk para profesional di Indonesia</h2>
                            <div class="d-grid gap-2 d-md-block mt-3">
                                <a href="#" role="button" class="btn btn-primary btn-lg me-2" type="button"
                                    style="border-radius: 50px; background-color: #1aa294; width: 35%"><i
                                        class="bi bi-google-play me-3"></i>Download Android</a>
                                <a href="#" role="button" class="btn btn-primary btn-lg ms-2" type="button"
                                    style="border-radius: 50px; background-color: #1aa294; width: 35%"><i
                                        class="bi bi-apple me-3"></i>Download IOS</a>
                            </div>
                            <p class="mt-4">
                                Layanan Pengaduan Konsumen<br />
                                PT. Kuncie Pintar Nusantara<br />
                                Email: <a style="color: #f4c474">support@kuncie.com</a>
                            </p>
                            <p class="mt-4">
                                Direktorat Jenderal Perlindungan Konsumen dan Tertib Niaga<br />
                                Kementerian Perdagangan Republik Indonesia<br />
                                Whatsapp Ditjen PKTN: <a style="color: #f4c474">0853 1111 1010</a>
                            </p>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-links d-flex justify-content-end">
                            <div class="container mt-4">
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <h4 class="me-1" style="color: #f4c474"><a href="#">HELP</a> | <a href="#">
                                                HALO!</a> | <a href="#"> FAQ</a></h4>
                                    </div>
                                    <div class="col">
                                        <h4 class="me-1" style="color: #f4c474"><a href="#">KEBIJAKAN PRIVASI</a> | <a
                                                href="#">SYARAT & KETENTUAN</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul> -->

            <div class="container d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; 2023. <strong><span>Komisarees</span></strong>
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0" style="background-color: white">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>
        </footer>
        <!-- <footer>
      <div class ="d-flex row">
        <div class ="d-flex column"></div>
      </div>
    </footer> -->
        <!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/js/recommendation.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
</body>

</html>
<?php
  session_start();
  require '../../function.php';
  $email = $_SESSION['email'];
  $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'"));

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Courses - Mentor Bootstrap Template</title>
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

    <!-- Script -->
    <!-- <script src="assets/js/kelas_jago.js"></script> -->

    <!-- =======================================================
  * Template Name: Mentor - v4.10.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
  <form action = "" method = "post">
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
                <a id="beranda" class="active" href="index-login.php"><i class="bi bi-house-fill" style="font-size: 1em; padding: 5px"></i> Beranda</a>
              </li>

              <!-- Mulai Kategori -->
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
                        <a href="#"><span>Pengembangan Bisnis</span><i class="bi bi-chevron-right"></i></a>
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
                        <a href="#"><span>Tantangan Bisnis</span><i class="bi bi-chevron-right"></i></a>
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
                        <a href="#"><span>Industri Kreatif</span><i class="bi bi-chevron-right"></i></a>
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
                        <a href="#"><span>Makanan & Minuman</span><i class="bi bi-chevron-right"></i></a>
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
                        <a href="#"><span>Keterampilan Khusus</span><i class="bi bi-chevron-right"></i></a>
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
                            <a href="course-details.php"><span>Pengembangan Aplikasi</span></a>
                          </li>
                          <li>
                            <a href="course-details.php"><span>Penulisan</span></a>
                          </li>
                        </ul>
                      </li>

                      <li class="dropdown">
                        <a href="#"><span>Pengembangan Diri</span><i class="bi bi-chevron-right"></i></a>
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
                        <a href="#"><span>Keahlian Dunia Kerja</span><i class="bi bi-chevron-right"></i></a>
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
                        <a href="#"><span>Media Sosial</span><i class="bi bi-chevron-right"></i></a>
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
                            <a href="course-details.php"><span>Pengembangan Aplikasi</span></a>
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
                <a href="pricing.php"><i class="bi bi-briefcase-fill" style="font-size: 1em; padding: 5px"></i>Kuncie Bersama</a>
              </li>

              <!-- Mulai Produk -->
              <li class="dropdown">
                <a href="#"
                  ><span><i class="bi bi-bag-check-fill" style="font-size: 1em; padding: 5px"></i>Produk</span> <i class="bi bi-chevron-down"></i
                ></a>
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
                <a href="trainers.php"><i class="bi bi-person-fill" style="font-size: 1em; padding: 5px"></i>Mentor</a>
              </li>
              <!-- Challenge -->
              <li>
                <a href="kuncie_challenge.php"><i class="bi bi-rocket-fill" style="font-size: 1em; padding: 5px"></i>Challenge</a>
              </li>

              <!-- Kuncie Store -->
              <li>
                <a href="kuncie_store.php"><i class="bi bi-bag-check-fill" style="font-size: 1em; padding: 5px"></i>Kuncie Store</a>
              </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bi bi-person-circle" style = "font-size : 20px" ></i>
                            </a>
                            <ul id="profile-dropdown">
                                <li><a href="profile.php">My Profile</a></li>
                                <li><a href="../../login.php" value = "logout" name = "logout">Log Out</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" id="welcome">Hi , <?php echo $row['username']?>!</a>
                        </li>

                        <li style="visibility: hidden">
                            <a href="events.php">Webinar</a>
                        </li>
                    </ul>

                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
            </div>
            <!-- .navbar -->
            <!-- <a href="courses.php" class="get-started-btn">Masuk</a> -->
        </div>
    </header>
    <!-- End Header -->

    <main id="main" data-aos="fade-in">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div class="container">
          <h2>Courses</h2>
          <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium.</p>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- ======= Courses Section ======= -->
      <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Kelas</h2>
            <p>Kelas Jago</p>
          </div>

          <!-- Search Bar -->
          <input type="text" class="form-control  mb-3 mx-auto" id="myinput" placeholder="Live searching...." style="width: 50%" />
          <!-- End Search Bar -->
          <div class="container mb-5">
            <h3 class="text-danger mt-5 text-center" id="para" style="display: none">Not Found</h3>

            <div class="row" data-aos="zoom-in" data-aos-delay="100" id="card">
              <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch"></div> -->
            </div>
          </div>
          <script src="assets/js/kelas_jago.js"></script>
          <!-- <div class="row" data-aos="zoom-in" data-aos-delay="100">
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

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
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
                      <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="" />
                      <span>Teuku Daffa</span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center"><i class="bx bx-user"></i>&nbsp;72 &nbsp;&nbsp; <i class="bx bx-heart"></i>&nbsp;65</div>
                  </div>
                </div>
              </div>
            </div> -->

          <!-- End Course Item-->

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
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
                    Fotografer adalah salah satu profesi yang sangat mengandalkan ketajaman mata Ternyata, fotografer nggak cuma jepret-jepret aja! Ayo belajar workflow seorang fotografer langsung dari Martha Suherman
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
            </div> -->
          <!-- End Course Item-->
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

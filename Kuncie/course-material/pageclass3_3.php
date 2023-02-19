<?php
session_start();
require '../../../function.php';
$email = $_SESSION['email'];
//$email = "aaa@gmail.com";
$state = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user_class WHERE email = '$email' and class = 'PowerPoint01'"));
if($state['progress'] == 0)
{
  header("refresh:1;url = pageclass3_1.php");
  echo "
			<script>
			alert('Anda belum menyelesaikan Modul Sebelumnya!');
			</script>;
		";
}
else if($state['progress'] == 25)
{
  header("refresh:1;url = pageclass3_2.php");
  echo "
			<script>
			alert('Anda belum menyelesaikan Modul Sebelumnya!');
			</script>;
		";

}
else if($state['progress'] == 50)
{
  $update = mysqli_query($conn, "UPDATE user_class SET progress = progress + 25 WHERE email = '$email' and class = 'PowerPoint01'");
  $page = mysqli_query($conn, "UPDATE user_class SET page = 'pageclass3_3' WHERE email = '$email' and class = 'PowerPoint01'")
}
$state2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user_class WHERE email = '$email' and class = 'PowerPoint01'"));

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>iPortfolio Bootstrap Template - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="course_material.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: iPortfolio - v3.10.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>
  <body>s
    <form action = "" method = "POST">
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header" style="background-color: #2c1a32">
      <div class="d-flex flex-column">
        <!-- <div class="profile">
          <h1 class="text-light"><a href="index.html">Alex Smith</a></h1>
          <div class="social-links mt-3 text-center">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div> -->

        <nav id="navbar" class="nav-menu navbar">
          <ul>
            <li>
              <a href="../myclass.php" class="nav-link scrollto active"><i class="bi bi-caret-left-fill"></i> </a>
            </li>
            <li>
              <a href="pageclass3_1.php" class="nav-link scrollto"><i class="bi bi-1-square-fill"></i> <span>Page 1</span></a>
            </li>
            <li>
              <a href="pageclass3_2.php" class="nav-link scrollto"><i class="bi bi-2-square-fill"></i> <span>Page 2</span></a>
            </li>
            <li>
              <a href="pageclass3_3.php" class="nav-link scrollto active"><i class="bi bi-3-square-fill"></i> <span>Page 3</span></a>
            </li>
            <li>
              <a href="pageclass3_4.php" class="nav-link scrollto"><i class="bi bi-4-square-fill"></i> <span>page 4</span></a>
            </li>
          </ul>
        </nav>

        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $state2['progress'];?>"
            aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $state2['progress'];?>%;">
              <?php echo $state2['progress'];?>%
            </div>
            </div>
        <!-- .nav-menu -->
      </div>
    </header>
    <!-- End Header -->

    <!-- Isi Materi disini -->
    <main id="main">Lorem Ipsum</main>
    <!-- End Isi Materi -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="d-flex justify-content-between fixed-bottom align-items-center" style="background-color: #2c1a32; height: 80px">
          <button class="btn ms-3" type="button" style="background-color: #f4c474" name = "previous"><a href ="pageclass3_2.php" style = "color : White">Previous</button>
          <button class="btn me-3" type="button" style="background-color: #f4c474" name = "next"><a href ="pageclass3_4.php" style = "color : White">Next</a></button>
        </div>
      </div>
    </footer>
    <!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="course_material.js"></script>
  </body>
</html>

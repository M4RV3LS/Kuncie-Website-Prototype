<?php 
session_start();
require '../../function.php';
$email = $_SESSION['email'];
$result = mysqli_query($conn, "SELECT * FROM user_class WHERE email = '$email' AND b2bcode = 'AA1234' ");
$result2 = mysqli_query($conn, "SELECT * FROM user_class WHERE email = '$email' AND b2bcode IS NULL ;");
if ( isset($_POST['submit']))
{
    if($_POST['enroll'] == "AA1234")
    {
      $sql1 = "UPDATE user_class SET b2bcode = 'AA1234' WHERE email = '$email' AND class = 'Word01' ";
      mysqli_query($conn, $sql1);
      if(mysqli_affected_rows($conn) == 0)
      {
        $sql1_1 = "INSERT INTO user_class (`email`, `class`, `progress`,`b2bcode`,`page`) VALUES ('$email', 'Word01', '0' ,'AA1234','pageclass1_1')";

        mysqli_query($conn, $sql1_1);
      }
      $sql2 = "UPDATE user_class SET b2bcode = 'AA1234' WHERE email = '$email' AND class = 'OneNote01' ";
      mysqli_query($conn, $sql2);
      if(mysqli_affected_rows($conn) == 0)
      {
        $sql2_2 = "INSERT INTO user_class (`email`, `class`, `progress`,`b2bcode`,`page`) VALUES ('$email', 'OneNote01', '0' ,'AA1234','pageclass4_1')";
        mysqli_query($conn, $sql2_2);
      }
      header("refresh:0");
      echo "
      <script>
      alert('Kelas Berhasil Ditambahkan!');
      </script>;";
    }
    else
    {
      // echo "
      // <script>
      // alert('Kode yang anda masukkan salah!');
      // </script>;";
      $error = true;
    }
}

// if(isset($_POST['pageclass1_4.php']))
// {
//   header("Location: course-material/pageclass1_4.php");
// }
if(isset($_POST['pageclass4_2.php']))
{
  header("Location: course-material/pageclass4_2.php");
}
if(isset($_POST['pageclass4_3.php']))
{
  header("Location: course-material/pageclass4_3.php");
}


?>

<!DOCTYPE html>
<head>
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
  <!-- Bootstrap 3.3.5 -->
  <!-- <link rel="stylesheet" href="dashboard/bootstrap/css/bootstrap.min.css" /> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
  <!-- Ionicons-->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="dashboard/dist/css/AdminLTE.min.css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dashboard/dist/css/skins/_all-skins.min.css" />
  <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
  <link rel="stylesheet" href="assets/css/myclass.css" />
  <style>
    body {
      margin-top: 20px;
      background-color: white;
      color: #69707a;
    }
    a {
      text-decoration: none;
    }
    .img-account-profile {
      height: 10rem;
    }
    .rounded-circle {
      border-radius: 50% !important;
    }
    .card {
      box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
    }
    .card .card-header {
      font-weight: 500;
    }
    .card-header:first-child {
      border-radius: 0.35rem 0.35rem 0 0;
    }
    .card-header {
      padding: 1rem 1.35rem;
      margin-bottom: 0;
      background-color: rgba(33, 40, 50, 0.03);
      border-bottom: 1px solid rgba(33, 40, 50, 0.125);
    }
    .form-control,
    .dataTable-input {
      display: block;
      width: 100%;
      padding: 0.875rem 1.125rem;
      font-size: 0.875rem;
      font-weight: 400;
      line-height: 1;
      color: #69707a;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #c5ccd6;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      border-radius: 0.35rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .nav-borders .nav-link.active {
      color: #0061f2;
      border-bottom-color: #0061f2;
      background-color: #f4c474;
      border-radius: 25px;
      padding: 10px;
    }
    .nav-borders .nav-link {
      color: #69707a;
      border-bottom-width: 0.125rem;
      border-bottom-style: solid;
      border-bottom-color: transparent;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      padding-left: 0;
      padding-right: 0;
      margin-left: 1rem;
      margin-right: 1rem;
    }
    .fa-2x {
      font-size: 2em;
    }

    .table-billing-history th,
    .table-billing-history td {
      padding-top: 0.75rem;
      padding-bottom: 0.75rem;
      padding-left: 1.375rem;
      padding-right: 1.375rem;
    }
    .table > :not(caption) > * > *,
    .dataTable-table > :not(caption) > * > * {
      padding: 0.75rem 0.75rem;
      background-color: var(--bs-table-bg);
      border-bottom-width: 1px;
      box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
    }

    .border-start-primary {
      border-left-color: #0061f2 !important;
    }
    .border-start-secondary {
      border-left-color: #6900c7 !important;
    }
    .border-start-success {
      border-left-color: #00ac69 !important;
    }
    .border-start-lg {
      border-left-width: 0.25rem !important;
    }
    .h-100 {
      height: 100% !important;
    }
    .btn:hover {
      font-family: bold;

      color: white;
    }
  </style>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>

    <form action = "" method = "POST">
  <div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders">
      <a class="nav-link" href="index - login.php">Home</a>
      <a class="nav-link ms-0" href="profile.html">Profile</a>
      <a class="nav-link active" href="myclass.html">My Class</a>
      <!-- <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page">Security</a>
      <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-edit-notifications-page">Notifications</a> -->
    </nav>

    <!-- /.box -->

    <hr class="mt-0 mb-4" />

    <h3>Enroll Class</h3>
    <div class="container">
      <div class="col-4">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <!-- <span class="input-group-text" id="basic-addon1">@</span> -->
          </div>
          <input name="enroll" type="text" class="form-control" placeholder="input here" aria-label="Username" aria-describedby="basic-addon1" /><input type="submit" name = "submit"/>
        </div>
        <?php if( isset($error) ) : ?>
					<p style="color: red; font-style: italic;">Kode yang Anda Dimasukan Salah !</p>
				<?php endif; ?>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-3"><h2 class="col" style="font-family: Poppins; font-weight: 700; font-size: 32px; color: #2c1a32">Kelas Wajib</h2></div>

        <!-- <div class="col-3"></div>
        <div class="col-3"></div> -->
      </div>
      <div class="col-3"><hr class="col" style="width: 100%; margin-left: 0" /></div>
    </div>

    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">
        <!-- <div class="section-title">
          <h2>Courses</h2>
          <p>Popular Courses</p>
        </div> -->

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <?php while ($row = mysqli_fetch_assoc($result)) : ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <div class="d-flex justify-content-center">
                <img src="assets/img/kelas unggulan 1 .jpeg" class="img-fluid mt-3 rounded" alt="..." />
              </div>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p style="background-color: blue; color: white; padding: 10px; border-radius: 25px">Katgeori</p>
                  <button class="btn" type="submit" style="background-color: #f4c474"><a href ="course-material/<?php echo $row['page']?>.php">Masuk</a></button>
                </div>

                <!-- <h3><a href="course-details.html">Dasar Menulis Fiksi Cara Dee Lestari</a></h3> -->
                <h3><a href="course-details.html"><?php echo $row['class']?></a></h3>
                <p>
                  Mentor: Dee Lestari<br /><br />
                  Ayo belajar menulis fiksi dari Dee Lestari dan dapatkan tips menulis fiksi berdasarkan pengalaman menulisnya selama lebih dari dua dekade.
                </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <!-- <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="" />
                    <span>Dee Lestari</span> -->
                  </div>
                  <!-- <div class="trainer-rank d-flex align-items-center"><i class="bx bx-user"></i>&nbsp;995 &nbsp;&nbsp; <i class="bx bx-heart"></i>&nbsp;65</div> -->
                  <!-- <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                  </div> -->
                </div>
                <h5>Progress</h5>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: <?php echo $row['progress'];?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $row['progress'];?>%</div>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <!-- End Course Item-->
          <?php while ($row = mysqli_fetch_assoc($result)) : ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <div class="d-flex justify-content-center">
                <img src="assets/img/kelas unggulan 1 .jpeg" class="img-fluid mt-3 rounded" alt="..." />
              </div>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p style="background-color: blue; color: white; padding: 10px; border-radius: 25px">Katgeori</p>
                  <button class="btn" type="submit" style="background-color: #f4c474"><a href ="course-material/<?php echo $row['page']?>.php">Masuk</a></button>
                </div>

                <!-- <h3><a href="course-details.html">Dasar Menulis Fiksi Cara Dee Lestari</a></h3> -->
                <h3><a href="course-details.html"><?php echo $row['class']?></a></h3>
                <p>
                  Mentor: Dee Lestari<br /><br />
                  Ayo belajar menulis fiksi dari Dee Lestari dan dapatkan tips menulis fiksi berdasarkan pengalaman menulisnya selama lebih dari dua dekade.
                </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <!-- <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="" />
                    <span>Dee Lestari</span> -->
                  </div>
                  <!-- <div class="trainer-rank d-flex align-items-center"><i class="bx bx-user"></i>&nbsp;995 &nbsp;&nbsp; <i class="bx bx-heart"></i>&nbsp;65</div> -->
                  <!-- <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                  </div> -->
                </div>
                <h5>Progress</h5>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: <?php echo $row['progress'];?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $row['progress'];?>%</div>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <!-- End Course Item-->
        </div>
      </div>
    </section>

    <div class="container mt-5">
      <div class="row">
        <div class="col-3"><h2 class="col" style="font-family: Poppins; font-weight: 700; font-size: 32px; color: #2c1a32">Kelas Pilihan</h2></div>

        <!-- <div class="col-3"></div>
        <div class="col-3"></div> -->
      </div>
      <div class="col-3"><hr class="col" style="width: 100%; margin-left: 0" /></div>
    </div>

    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">
        <!-- <div class="section-title">
          <h2>Courses</h2>
          <p>Popular Courses</p>
        </div> -->

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <?php while ($row2 = mysqli_fetch_assoc($result2)) : ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <div class="d-flex justify-content-center">
                <img src="assets/img/kelas unggulan 1 .jpeg" class="img-fluid mt-3 rounded" alt="..." />
              </div>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p style="background-color: blue; color: white; padding: 10px; border-radius: 25px">Katgeori</p>
                  <button class="btn" type="submit" style="background-color: #f4c474"><a href ="course-material/<?php echo $row2['page']?>.php">Masuk</a></button>
                </div>

                <!-- <h3><a href="course-details.html">Dasar Menulis Fiksi Cara Dee Lestari</a></h3> -->
                <h3><a href="course-details.html"><?php echo $row2['class']?></a></h3>
                <p>
                  Mentor: Dee Lestari<br /><br />
                  Ayo belajar menulis fiksi dari Dee Lestari dan dapatkan tips menulis fiksi berdasarkan pengalaman menulisnya selama lebih dari dua dekade.
                </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <!-- <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="" />
                    <span>Dee Lestari</span> -->
                  </div>
                  <!-- <div class="trainer-rank d-flex align-items-center"><i class="bx bx-user"></i>&nbsp;995 &nbsp;&nbsp; <i class="bx bx-heart"></i>&nbsp;65</div> -->
                  <!-- <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                  </div> -->
                </div>
                <h5>Progress</h5>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: <?php echo $row2['progress'];?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $row2['progress'];?>%</div>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <!-- End Course Item-->
          <?php while ($row2 = mysqli_fetch_assoc($result2)) : ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <div class="d-flex justify-content-center">
                <img src="assets/img/kelas unggulan 1 .jpeg" class="img-fluid mt-3 rounded" alt="..." />
              </div>
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p style="background-color: blue; color: white; padding: 10px; border-radius: 25px">Katgeori</p>
                  <button class="btn" type="submit" style="background-color: #f4c474"><a href ="course-material/<?php echo $row['page']?>.php">Masuk</a></button>
                </div>

                <!-- <h3><a href="course-details.html">Dasar Menulis Fiksi Cara Dee Lestari</a></h3> -->
                <h3><a href="course-details.html"><?php echo $row2['class']?></a></h3>
                <p>
                  Mentor: Dee Lestari<br /><br />
                  Ayo belajar menulis fiksi dari Dee Lestari dan dapatkan tips menulis fiksi berdasarkan pengalaman menulisnya selama lebih dari dua dekade.
                </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <!-- <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="" />
                    <span>Dee Lestari</span> -->
                  </div>
                  <!-- <div class="trainer-rank d-flex align-items-center"><i class="bx bx-user"></i>&nbsp;995 &nbsp;&nbsp; <i class="bx bx-heart"></i>&nbsp;65</div> -->
                  <!-- <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                  </div> -->
                </div>
                <h5>Progress</h5>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: <?php echo $row2['progress'];?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $row2['progress'];?>%</div>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <!-- End Course Item-->
        </div>
      </div>
    </section>

    
  </div>

  <!-- jQuery 2.1.4 -->
  <script src="dashboard/plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="dashboard/bootstrap/js/bootstrap.min.js"></script>
  <!-- ChartJS 1.0.1 -->
  <script src="dashboard/plugins/chartjs/Chart.min.js"></script>
  <!-- FastClick -->
  <script src="dashboard/plugins/fastclick/fastclick.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dashboard/dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dashboard/dist/js/demo.js"></script>
  <!-- page script -->
  <!-- <script>
    $(function () {
      /* ChartJS
       * -------
       * Here we will create a few charts using ChartJS
       */

      //--------------
      //- AREA CHART -
      //--------------

      // Get context with jQuery - using jQuery's .get() method.
      var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
      // This will get the first returned node in the jQuery collection.
      var areaChart = new Chart(areaChartCanvas);

      var areaChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
          {
            label: "Electronics",
            fillColor: "rgba(210, 214, 222, 1)",
            strokeColor: "rgba(210, 214, 222, 1)",
            pointColor: "rgba(210, 214, 222, 1)",
            pointStrokeColor: "#c1c7d1",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56, 55, 40],
          },
          {
            label: "Digital Goods",
            fillColor: "rgba(60,141,188,0.9)",
            strokeColor: "rgba(60,141,188,0.8)",
            pointColor: "#3b8bba",
            pointStrokeColor: "rgba(60,141,188,1)",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(60,141,188,1)",
            data: [28, 48, 40, 19, 86, 27, 90],
          },
        ],
      };

      var areaChartOptions = {
        //Boolean - If we should show the scale at all
        showScale: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: false,
        //String - Colour of the grid lines
        scaleGridLineColor: "rgba(0,0,0,.05)",
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - Whether the line is curved between points
        bezierCurve: true,
        //Number - Tension of the bezier curve between points
        bezierCurveTension: 0.3,
        //Boolean - Whether to show a dot for each point
        pointDot: false,
        //Number - Radius of each point dot in pixels
        pointDotRadius: 4,
        //Number - Pixel width of point dot stroke
        pointDotStrokeWidth: 1,
        //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
        pointHitDetectionRadius: 20,
        //Boolean - Whether to show a stroke for datasets
        datasetStroke: true,
        //Number - Pixel width of dataset stroke
        datasetStrokeWidth: 2,
        //Boolean - Whether to fill the dataset with a color
        datasetFill: true,
        //String - A legend template
        legendTemplate:
          '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: true,
        //Boolean - whether to make the chart responsive to window resizing
        responsive: true,
      };

      //Create the line chart
      areaChart.Line(areaChartData, areaChartOptions);

      //-------------
      //- LINE CHART -
      //--------------
      var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
      var lineChart = new Chart(lineChartCanvas);
      var lineChartOptions = areaChartOptions;
      lineChartOptions.datasetFill = false;
      lineChart.Line(areaChartData, lineChartOptions);

      //-------------
      //- PIE CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
      var pieChart = new Chart(pieChartCanvas);
      var PieData = [
        {
          value: 700,
          color: "#f56954",
          highlight: "#f56954",
          label: "Chrome",
        },
        {
          value: 500,
          color: "#00a65a",
          highlight: "#00a65a",
          label: "IE",
        },
        {
          value: 400,
          color: "#f39c12",
          highlight: "#f39c12",
          label: "FireFox",
        },
        {
          value: 600,
          color: "#00c0ef",
          highlight: "#00c0ef",
          label: "Safari",
        },
        {
          value: 300,
          color: "#3c8dbc",
          highlight: "#3c8dbc",
          label: "Opera",
        },
        {
          value: 100,
          color: "#d2d6de",
          highlight: "#d2d6de",
          label: "Navigator",
        },
      ];
      var pieOptions = {
        //Boolean - Whether we should show a stroke on each segment
        segmentShowStroke: true,
        //String - The colour of each segment stroke
        segmentStrokeColor: "#fff",
        //Number - The width of each segment stroke
        segmentStrokeWidth: 2,
        //Number - The percentage of the chart that we cut out of the middle
        percentageInnerCutout: 50, // This is 0 for Pie charts
        //Number - Amount of animation steps
        animationSteps: 100,
        //String - Animation easing effect
        animationEasing: "easeOutBounce",
        //Boolean - Whether we animate the rotation of the Doughnut
        animateRotate: true,
        //Boolean - Whether we animate scaling the Doughnut from the centre
        animateScale: false,
        //Boolean - whether to make the chart responsive to window resizing
        responsive: true,
        // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: true,
        //String - A legend template
        legendTemplate:
          '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
      };
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      pieChart.Doughnut(PieData, pieOptions);

      //-------------
      //- BAR CHART -
      //-------------
      var barChartCanvas = $("#barChart").get(0).getContext("2d");
      var barChart = new Chart(barChartCanvas);
      var barChartData = areaChartData;
      barChartData.datasets[1].fillColor = "#00a65a";
      barChartData.datasets[1].strokeColor = "#00a65a";
      barChartData.datasets[1].pointColor = "#00a65a";
      var barChartOptions = {
        //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
        scaleBeginAtZero: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: true,
        //String - Colour of the grid lines
        scaleGridLineColor: "rgba(0,0,0,.05)",
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - If there is a stroke on each bar
        barShowStroke: true,
        //Number - Pixel width of the bar stroke
        barStrokeWidth: 2,
        //Number - Spacing between each of the X value sets
        barValueSpacing: 5,
        //Number - Spacing between data sets within X values
        barDatasetSpacing: 1,
        //String - A legend template
        legendTemplate:
          '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
        //Boolean - whether to make the chart responsive
        responsive: true,
        maintainAspectRatio: true,
      };

      barChartOptions.datasetFill = false;
      barChart.Bar(barChartData, barChartOptions);
    });
  </script> -->
</body>

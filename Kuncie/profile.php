<?php
session_start();
require '../../function.php';
$email = $_SESSION['email'];
//echo $email;

$sql2 = "SELECT * FROM user WHERE email = '$email'";
$row2 = mysqli_fetch_assoc(mysqli_query($conn, $sql2));
if ($row2['username'] != NULL)
{
  $uname = $row2['username'];
}
if ($row2['firstname'] != NULL)
{
  $fname = $row2['firstname'];
}
if ($row2['lastname'] != NULL)
{
  $lname = $row2['lastname'];
}
if ($row2['organizationname'] != NULL)
{
  $oname = $row2['organizationname'];
}
if ($row2['loc'] != NULL)
{
  $loc = $row2['loc'];
}
if ($row2['phonenumber'] != NULL)
{
  $phonenum = $row2['phonenumber'];
}
if ($row2['birthday'] != NULL)
{
  $bday = $row2['birthday'];
}
if ( isset($_POST['savechanges']))
{

    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $organizationname = $_POST['organizationname'];
    $location = $_POST['location'];
    $phone = $_POST['phone'];
    $birthday = $_POST['birthday'];
    if(!empty($_POST['interest']))
    {
      $interest = $_POST['interest'];
    }
    $sql = "UPDATE user SET username = '$username', firstname = '$firstname' , lastname = '$lastname' , organizationname = '$organizationname', loc = '$location', interest = '$interest' , phonenumber = '$phone' , birthday = '$birthday' WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    //header( "refresh:3;url= profile.php" );
    header("refresh:0");
    //header("Location = profile.php");		
    echo "
			<script>
			alert('Profile berhasil di update!');
			</script>;
		";
}
//session_destroy();


?>
<!DOCTYPE html>
<head>
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css">
	<link rel="stylesheet" href="css/style.css">
/>
  <style>
    body {
      margin-top: 20px;
      background-color: white;
      color: #69707a;
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
    select {
        width: 150px;
        margin: 10px;
    }
    select:focus {
        min-width: 150px;
        width: auto;
    }
    .select {
    padding: 10px;
    width: 200px;
    font-size:16px;
    border: 0;
    border-bottom: 3px solid teal;
  }
  </style>
</head>
<body>
  <form action = "" method = "POST">
  <div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <!-- target="__blank" -->
    <nav class="nav nav-borders">
      <a class="nav-link" href="index - login.php">Home</a>
      <a class="nav-link active ms-0" href="profile.html">Profile</a>
      <a class="nav-link" href="myclass.php">My Class</a>
      <!-- <!-- <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page">Security</a> -->
    </nav>
    <hr class="mt-0 mb-4" />
    <div class="row">
      <div class="col-xl-4">
        <!-- Profile picture card-->
        <div class="card mb-4 mb-xl-0">
          <div class="card-header">Profile Picture</div>
          <div class="card-body text-center">
            <!-- Profile picture image-->
            <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
            <!-- Profile picture help block-->
            <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
            <!-- Profile picture upload button-->
            <button class="btn btn-primary" type="button">Upload new image</button>
          </div>
        </div>
      </div>
      <div class="col-xl-8">
        <!-- Account details card-->
        <div class="card mb-4">
          <div class="card-header">Account Details</div>
          <div class="card-body">
            <form>
              <!-- Form Group (username)-->
              <div class="mb-3">
                <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                <input class="form-control" id="inputUsername" type="text" placeholder="ex : John Doe" value="<?php echo (isset($uname)) ? $uname: ''?>" name = "username"/>
              </div>
              <!-- Form Row-->
              <div class="row gx-3 mb-3">
                <!-- Form Group (first name)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputFirstName">First name</label>
                  <input class="form-control" id="inputFirstName" type="text" placeholder="ex : John" value="<?php echo (isset($fname)) ? $fname: ''?>" name = "firstname" />
                </div>
                <!-- Form Group (last name)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputLastName">Last name</label>
                  <input class="form-control" id="inputLastName" type="text" placeholder="ex : Doe" value="<?php echo (isset($lname)) ? $lname: ''?>" name = "lastname" />
                </div>
              </div>
              <!-- Form Row        -->
              <div class="row gx-3 mb-3">
                <!-- Form Group (organization name)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputOrgName">Organization name</label>
                  <input class="form-control" id="inputOrgName" type="text" placeholder="ex : ITB" value="<?php echo (isset($oname)) ? $oname: ''?>" name = "organizationname"/>
                </div>
                <!-- Form Group (location)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputLocation">Location</label>
                  <!-- $location = $data['location']; -->
                  <input class="form-control" id="inputLocation" type="text" placeholder="ex : Jl. Ganesha 10" value="<?php echo (isset($loc)) ? $loc: ''?>" name = "location" />
                </div>
              </div>
              <!-- Form Interest-->
              <div class = "mb-3">
              <label>Select interest</label>

              <select name="interest" class = "select">
                <option value="Jurnalistik">Jurnalistic</option>
                <option value="Accounting" <?php if($row2['interest'] == "Accounting") {echo "selected";}?>>Accounting</option>
				      </select>
              </div>
                <!-- Form Group (email address)-->
              <div class="mb-3">
                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                <input class="form-control" id="inputEmailAddress" type="email" name = "email" placeholder="Enter your email address" value="<?php echo (isset($email)) ? $email: ''?>" name = "emailaddress"/>
              </div>
              <!-- Form Row-->
              <div class="row gx-3 mb-3">
                <!-- Form Group (phone number)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputPhone">Phone number</label>
                  <input class="form-control" id="inputPhone" type="tel" placeholder="ex : 081924457364" value="<?php echo (isset($phonenum)) ? $phonenum: ''?>" name = "phone" />
                </div>
                <!-- Form Group (birthday)-->
                <div class="col-md-6">
                  <label class="small mb-1" for="inputBirthday">Birthday</label>
                  <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="ex : 16/02/2004" value="<?php echo (isset($birthday)) ? $birthday: ''?>"  name = "birthday"/>
                </div>
              </div>
              <!-- Save changes button-->
              <button class="btn btn-primary" type="submit" name ="savechanges" href="#">Save changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js"></script>
  <script src="js/main.js"></script>
</body>

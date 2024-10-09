<?php
$blood=$_POST['blood'];
$location=$_POST['location'];

$conn= new mysqli('localhost','root','','searchdonor');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}
else{
    $stmt= $conn->prepare("insert into search(blood,location)
    values(?,?)");
    $stmt->bind_param("ss",$blood,$location);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>WELL BLINK| Search Donor List</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/c15d3ec859.js" crossorigin="anonymous"></script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="style_css.css">
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="searchdonor.css">
  <link rel="stylesheet" href="requestblood.css">

  <!-- =======================================================
  * Template Name: Medicio
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

  <!--<div class="spinner-grow text-primary m-1" role="status">
    <span class="sr-only">Loading...</span>
  </div>
  <div class="spinner-grow text-dark m-1" role="status">
    <span class="sr-only">Loading...</span>
  </div>
  <div class="spinner-grow text-secondary m-1" role="status">
    <span class="sr-only">Loading...</span>
  </div>-->



  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-between  justify-content-lg-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Saturday, 10AM to 5PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +91 9830698155
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid header-container d-flex align-content-between justify-content-lg-between">

      <a class="navbar-brand " href="index.php">
        <h2 class="m-0" style="color: #CD0416">
          <i class="fa fa-tint" aria-hidden="true"></i>
          <strong>WELL BLINK</strong>
        </h2>
      </a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About us</a></li>
          <!--<li><a class="nav-link scrollto" href="#services">Services</a></li>  -->
          <li><a class="nav-link scrollto" href="contact us.php">Contact us</a></li>
          <li><a class="nav-link scrollto" href="donor.php">Donor List</a></li>
          <li><a class="nav-link scrollto" href="searchdonor.php">search Donor</a></li>
          <li><a class="nav-link scrollto" href="admin/adminlogin1.php">Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        <a href="login.php"><button class="btn btn-primary"><span class="d-none d-md-inline-block">Login/</span>
            Register</button></a>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <!--<h3>In an emergency? Need help now?</h3>-->
        <div class="ctext"><strong>Search Donor List</strong></div>
        <!--<div class="ctext1">Home <i class="fa fa-circle-o"></i> About</div>-->
        <!--<p>Make an Make an Appointment</p>-->
      </div>


    </div>
    <div class="ctext1">Home&nbsp;&nbsp;<i class="fa fa-circle-o"></i>&nbsp;&nbsp;Search Donor</div>
  </section><!-- End Cta Section -->

  <html>
    <head>
        <title>WELL BLINK| Reqired Blood</title>
        <link href="1.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"></script>
        <style>
            h5{
                margin: 40px;
                text-align: center;
                color: black;
                font-family: 'Times New Roman', Times, serif;
            }
            table
            {
                width: 92.5%;
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
            }
            th,td{
                text-align: center;
                border: 1px solid #ddd;
            }
            tbody tr:nth-child(even)
            {
              background-color: #f2f2f2;
            }
            tbody tr:hover{
              background-color: #ddd;
            }
            th{
              padding-top: 12px;
              padding-bottom: 12px;
              text-align: center;
              background-color: #04AA6D;
              color: white;
            }
        </style>
    </head>
    <body>
        <h5><b></b></h5>
        <table style="margin: 50px; padding: 10px;" >
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Blood</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
              <?php
              $servername="localhost";
              $username="root";
              $password="";
              $database="wbprofile";

              //create cpnnection
               
              $conn= new mysqli($servername,$username,$password,$database);
              if($conn->connect_error){
                die('connection failed:'.$conn->connect_error);
              }
              
              //read all row from database table
              $sql="SELECT * FROM wbpro WHERE blood='$blood'";
              $result = $conn->query($sql);

              if(!$result){
                echo("no records in found". $conn->error);
              }

              //read data of each row
              while($row = $result->fetch_assoc()){
                echo"<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["blood"] . "</td>
                <td>" . $row["phone"] . "</td>
                <td>" . $row["location"] . "</td>
                <td>" . $row["gender"] . "</td>
                <td>" . $row["age"] . "</td>
                <td>" . $row["message"] . "</td>
                </tr>";
              }
              /*if($stmt==false)
                {
                       echo"<p> no records in found";
              }*/
              ?>
            </tbody>
        </table>
    </body>
</html>


  <!--======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top" data-aos="fade-up">
      <div class="footerup" data-aos="fade-down" data-aos-delay="100">

      </div>
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="donor.php">Donor</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="searchdonor.php">Search Donor</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact us.php">Contact Us</a></li>
              <!--<li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>-->
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Popular Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact us.php">Contact Us</a></li>
              <!--<li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact us</a></li>-->
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Get In Touch</h4>
            <i class="fas fa-location fa-spin" style="font-size: 20px;"></i>
            <div class="location">
              81, Nilgunj Rd, Jagarata Pally, Deshpriya Nagar, Agarpara, Kolkata, West Bengal 700109
            </div>
            <div class="gmail">
              <i class="fa-solid fa-envelope fa-beat" style="font-size:20px"></i>
              <div class="gmail1">
                info@nit.ac.in
              </div>
            </div>
            <div class="call">
              <i class="fa-solid fa-phone fa-shake" style="font-size:20px"></i>
              <div class="call1">
                +91 9830698155
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <font size="5">Follow Us</font>
              <!--<p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>-->
              <div class="social-links mt-3">
                <a href="mailto:sukalyanporey22@gmail.com"><i class="fa-solid fa-envelope"></i></a>
                <a href="https://www.facebook.com/subhra.ghosh.7967747?mibextid=ZbWKwL" class="facebook"><i
                    class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/invites/contact/?i=gggyel4tfu83&utm_content=a1ymska"
                  class="instagram"><i class="bx bxl-instagram"></i></a>
                <!--<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->
                <a href="https://www.linkedin.com/in/sayan-saha-a7aa33249/" class="linkedin"><i
                    class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>



    <div class="copyright d-flex justify-content-between">
      <div class="foot">
        &copy; <u>WELL BLINK - Online Blood & Donor Management system.</u> All Rights<br> Reserved.
      </div>
    </div>
    <div class="credits d-flex justify-content-center">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
      <div class="foot1">
        Designed by <u>WE</u>
      </div>

    </div>

  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!--Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>
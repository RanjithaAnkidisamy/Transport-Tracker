
<?php
 $conn = new mysqli("mtransport-mysqldbserver.mysql.database.azure.com","balaji@mtransport-mysqldbserver","Michelin@1234","michelindb");
 $status="";
  if(isset($_POST['submit'])) { 
  
    
	$routeid=$_POST['routeid'];
	$Location=$_POST['Location'];
	 
	$query="update commontable set Location='".$Location."'
    where routeid='".$routeid."'";
	
	mysqli_query($conn, $query) or die(mysqli_error());
  
	
	       
    
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to Michelin</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Favicons -->
  <link href="img/icon.jpg" rel="icon">
  <link href="img/apple-touch-icon.jpg" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files Icons CSS***-->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <header id="header" class="fixed-top">
    <div class="container">
      <!--header logo-->
      <div class="logo float-left">
        <a href="#intro" class="scrollto"><img src="img/logo.jpg" alt="" class="img-fluid"></a>
      </div>
      <!--Navigation bar-->
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
         <!--  <li class="active"><a href="index.php">Home</a></li>
          <li><a href="login1.php">Login</a></li>
		  <li class="drop-down"><a href="">People</a>
                <ul>
                  <li><a href="addpeople.php">Add Employee</a></li>
                  <li><a href="deletepeople.php">Delete Employee</a></li>
				  </ul>
           </li> -->
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="img/location.jpg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>Track Michelin<br><span>Bus</span><br>Location</h2>
        <div>
          <a href="index.php" class="btn-get-started scrollto">HOME</a>
          <a href="login1.php" class="btn-services scrollto">LOGIN</a>
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">
 <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Track the Location</h3>
          <p>Enter Route Id to track the bus</p>
        </header>

        <div class="row wow fadeInUp">

          
               <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
            </div>
          
          
        </div>
          <div class="col-lg-6">

            <div class="form">

              <form action="index.php" method="post" role="form" class="contactForm">
              
                <div class="form-group">
				   <input type="number"  name="routeid" placeholder="Enter RouteID"/><br><br>
                  <input type="text"  name="Location" placeholder="Paste the URL"/>
                 
                </div>
               <button type="submit" name="submit">Submit Location</button>
				
             
              </form>
            </div>
          </div>

          

          
          
        </div>

      </div>
    </section><!-- #services -->

    

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Michelin</h3>
            <p>At MICHELIN, innovation is the creation of new value which is recognized by our customers. It has played and will continue to play a key role in the Group’s growth and performance. Putting innovation at the heart of our strategy is a firm conviction of ours: innovation, whatever its source, is the main driving force of our development, competitiveness and sustainability.
			</p>  </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
             A1 SIPCOT Industrial Park,<br>
			 Thervoykandigai Village,<br> Gummidipoondi, 
			 <br>Thiruvallur, <br>
			 Chennai,<br>
			 Tamil Nadu 601202<br>
              <strong>Phone:</strong> 044 6791 6302<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/michelinindia?lang=en" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/MichelinIndia/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/michelin/?hl=en" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="https://www.linkedin.com/company/michelin-india-tyres-pvt-ltd/about/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Michelin</strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- #footer -->

  <!-- JavaScript Libraries -->
  
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  <!--https://www.cloudways.com/blog/custom-php-mysql-contact-form/-->
  <!--https://www.formget.com/form-submission-using-ajax-php-and-javascript/-->

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>


</body>
</html>


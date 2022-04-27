<?php

if(isset($_POST['login'])){
   
	$connect =  mysqli_connect("localhost","root","","cyberscape");
	$name = $_POST["name"];
	$password = $_POST["password"];
  
   
	$sql = "SELECT id,name,password FROM admin WHERE name = '{$name}' and password = '{$password}'";
  
	$result = mysqli_query($connect, $sql) or die("Query Failed");
		   
   
  
	while($row = mysqli_fetch_assoc($result)){
			   
	  if($password == $row["password"]){
		  
		  header("Location: http://localhost/cyberscape/admin");
		  session_start();
		  $_SESSION["id"]  = $row["id"];
         
	  }
  
	  else{
		 
			echo "<center style='color:red;'>Email or Password not matched !</center>";
  
	  }
  
	}
}
      

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Admin - CyberScape</title>
	<!-- favicons Icons -->
	

	
	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">

	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

	<link
		href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
		rel="stylesheet">

		
	<link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../assets/vendors/animate/animate.min.css" />
	<link rel="stylesheet" href="../assets/vendors/animate/custom-animate.css" />
	<link rel="stylesheet" href="../assets/vendors/fontawesome/css/all.min.css" />
	<link rel="stylesheet" href="../assets/vendors/jarallax/jarallax.css" />
	<link rel="stylesheet" href="../assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
	<link rel="stylesheet" href="../assets/vendors/nouislider/nouislider.min.css" />
	<link rel="stylesheet" href="../assets/vendors/nouislider/nouislider.pips.css" />
	<link rel="stylesheet" href="../assets/vendors/odometer/odometer.min.css" />
	<link rel="stylesheet" href="../assets/vendors/swiper/swiper.min.css" />
	<link rel="stylesheet" href="../assets/vendors/notech-icons/style.css">
	<link rel="stylesheet" href="../assets/vendors/tiny-slider/tiny-slider.min.css" />
	<link rel="stylesheet" href="../assets/vendors/reey-font/stylesheet.css" />
	<link rel="stylesheet" href="../assets/vendors/owl-carousel/owl.carousel.min.css" />
	<link rel="stylesheet" href="../assets/vendors/owl-carousel/owl.theme.default.min.css" />
	<link rel="stylesheet" href="../assets/vendors/bxslider/jquery.bxslider.css" />
	<link rel="stylesheet" href="../assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
	<link rel="stylesheet" href="../assets/vendors/vegas/vegas.min.css" />
	<link rel="stylesheet" href="../assets/vendors/jquery-ui/jquery-ui.css" />


	<!-- template styles -->
	<link rel="stylesheet" href="../assets/css/notech.css" />
	<link rel="stylesheet" href="../assets/css/notech-responsive.css" />


	<!-- modes css -->
	<link rel="stylesheet" id="jssMode" href="../assets/css/notech-light.css">





</head>

<body>


	


	<div class="preloader">
		<img class="preloader__image" width="60" src="../assets/images/icons/coding.png" alt="" />
	</div>


    <!-- login start -->
    <section class="contact-page mt-5 pt-5" id="contact-us">
            <div class="container">
                <div class="section-title text-center">
                    
                    <h2 class="section-title__title">Log In</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-page__form">
                            <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Name" name="name" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Password" name="password" autocomplete="off">
                                        </div>
                                    </div>
                                   
                                        <div class="comment-form__btn-box">
                                            <button type="submit" class="thm-btn comment-form__btn" name="login">Log In</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      

        <!-- login end -->



        
        <script src="../assets/vendors/jquery/jquery-3.6.0.min.js"></script>
	<script src="../assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/vendors/timepicker/timePicker.js"></script>
        <script src="../assets/js/notech.js"></script>
</body>    


</html>

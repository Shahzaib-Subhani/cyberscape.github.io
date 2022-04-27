<?php 
session_start();
if(!isset($_SESSION['id'])){
    header("location:http://localhost/cyberscape/admin/login.php");
}
$connect =  mysqli_connect("localhost","root","","cyberscape");
$sql = "SELECT * FROM contact";
$result = mysqli_query($connect,$sql);

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
	<!-- /.preloader -->
	
			<nav class="main-menu clearfix">
				<div class="main-menu__wrapper clearfix">

					<div class="main-menu__left main-menu__left--two">
						<div class="main-menu__logo">
							<a href="index.html">
								<img class="logo-dark" src="../assets/images/resources/logo-1.png" alt="">
							</a>
                            
                        
							
						</div>
						<div class="main-menu__main-menu-box main-menu__main-menu-box--two">
							<a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
							<ul class="main-menu__list one-page-scroll-menu">
								<li class="scrollToLink current">
									<a href="#message">Messages</a>
								</li>

                                <li class="scrollToLink">
									<a href="logout.php">Log Out</a>
								</li>
                               
                               
							</ul>

                            
						</div>
                        
					</div>

					

				</div>
			</nav>
		</header>


        <section class="contact-details" id="message">
       <div class="container">
       <table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
							<th style="width:10%">Name</th>
							<th style="width:10%">Phone</th>
							<th style="width:10%">E-mail</th>
                            <th style="width:10%">Subject</th>
                            <th style="width:40%">Message</th>
                            <th style="width:5%">Action</th>
						</tr>
					</thead>
					<tbody>
					<?php while($mes = mysqli_fetch_assoc($result)){ ?>
						<tr>
							<td data-th="Product">
								<?php echo $mes["name"] ?>
							</td>
							<td data-th="Price"> <?php echo $mes["phone"] ?></td>
							
							<td> <?php echo $mes["email"] ?></td>
							<td> <?php echo $mes["subject"] ?></td>
							<td> <?php echo $mes["message"] ?></td>
							<form action="dlt.php" method="POST">
                                <input type="hidden" value="<?php echo $mes["id"] ?>" name="id">
                            <td class="actions" data-th="">
								
								<button class="btn btn-danger btn-sm " type="submit" name="dlt"><i class="fas fa-trash"></i></button></a>								
							</td>
                            </form>
						</tr>

						<?php }
                        
                        
                        ?>
					</tbody>
					
				</table>
       </div>

        </section>





        <script src="../assets/vendors/jquery/jquery-3.6.0.min.js"></script>
	<script src="../assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/vendors/timepicker/timePicker.js"></script>
        <script src="../assets/js/notech.js"></script>
</body>    


</html>

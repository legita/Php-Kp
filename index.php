<?php 
 
 include 'config/koneksi.php';
 
 error_reporting(0);
session_start();

if(isset($_GET['halaman'])) $halaman = $_GET['halaman'];
  else $halaman = "index";
  
  $id = session_id();
  $id = $_SESSION ['id'];

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ayam Bakar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Animate.css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="assets/css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Modernizr JS -->
	<script src="assets/js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		
	<div class="fh5co-loader"></div>

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<!-- <div class="top-menu"> -->
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-center logo-wrap">
						<div id="fh5co-logo" style="font-size: 40px;">| Ayam Bakar Rina |</div>
						<hr>
					</div>
					<div class="col-xs-12 text-center menu-wrap">
						<ul style="font-family: Kristen ITC;">
							<li class="active"><a class="color_animation" href="index.php?halaman=index">| Home | </a></li>
							<li class="active"><a class="color_animation" href="index.php?halaman=Menu">| Menu | </a></li>
							<li class="active"><a class="color_animation" href="index.php?halaman=About">| About | </a></li>
							<li class="active"><a class="color_animation" href="index.php?halaman=Pemesanan">| Keranjang | </a></li>
							<li class="active"><a class="color_animation" href="index.php?halaman=Pertanyaan">| Pertanyaan | </a></li>
							<?php
							
							  if(!isset($_SESSION['id']))
							  {
							      include 'login.php';
							  }
							  else {
							    include 'logout.php';
							  }
							
							?>
							<li class="active dropdown">
							  <a class="dropdown-toggle" data-toggle="dropdown">| Lainnya | 
							  <span class="caret"></span></a>
							  <ul class="dropdown-menu" style="background-color: brown;">
							    <li><a href="index.php?halaman=Konfirmasi">| Status Pemesanan |</a></li>
							    <li><a href="index.php?halaman=Biaya">| Informasi Biaya Pemesanan |</a></li>
							  </ul>
							</li>
						</ul>
						<hr>
					</div>
				</div>
			</div>
		<!-- </div> -->
	</nav>
    
	    <?php

	      if($halaman=='index'){
	        include 'awal.php';
	      } 

	      elseif ($halaman=='Menu') {
	        include 'menu.php';
	      }

	      elseif ($halaman=='About') {
	        include 'tentang.php';
	      }

	      elseif ($halaman=='signup') {
	        include 'signup.php';
	      }

	      elseif ($halaman=='Pertanyaan') {
	        include 'QandA.php';
	      }

	      elseif ($halaman=='order') {
	        include 'order.php';
	      }

	      elseif ($halaman=='pesan') {
	        include 'pesan.php';
	      }

	      elseif ($halaman=='Pemesanan') {
	        include 'pemesanan.php';
	      }

	      elseif ($halaman=='Konfirmasi') {
	        include 'konfirmasi-pemesanan.php';
	      }

	      elseif ($halaman=='Biaya') {
	        include 'biaya-pesanan.php';
	      }
	    ?>   
	
	<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
		<?php
			include 'footer.php';
		?>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="assets/js/jquery.min.js"></script>

	
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/js/jquery.waypoints.min.js"></script>
	<!-- Waypoints -->
	<script src="assets/js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="assets/js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="assets/js/main.js"></script>

	</body>
</html>


<?php

$koneksi =  mysqli_connect("localhost", "root", "", "gallery"); 

$result01 = mysqli_query($koneksi, "SELECT * FROM gen01");
$result02 = mysqli_query($koneksi, "SELECT * FROM gen02");
$result03 = mysqli_query($koneksi, "SELECT * FROM gen03");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Bamantara EEPISAT PENS</title>
	<link rel="icon" href="asset/eepisat.png" type="image/gif">
	<link rel="stylesheet" type="text/css" href="asset/icon/remixicon.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styleGallery.css">
</head>
<body>
	<header>
		<ul class="navMenuDesktop">
			<li><a href="home.php">Home</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<div class="logo">
				<a href="home.php"><img src="asset/eepisat.png" height="100px" width="100px" ></a>
			</div>
			<li><a href="teams.php">Teams</a></li>
			<li><a href="sponsorships.php">Sponsorships</a></li>
			<li><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="navMenuMobile">
        	<li><a href="home.php">Home</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="teams.php">Teams</a></li>
			<li><a href="sponsorships.php">Sponsorships</a></li>
			<li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="menuToggle">
        	<input type="checkbox"/>
	        	<span></span>
	        	<span></span>
	        	<span></span>
    	</div>
	</header>
	
	<main data-aos="fade-up">
		<div class="title">
			<h1>My Galleries</h1>
			<span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-duration="500"></span>
		</div>
		<section class="accordion">
			<div class="accordionGen1">
				<div class="header">
					<p>GEN 01</p><i class="ri-arrow-down-s-line"></i>
				</div>
				<div class="listImg">
					<?php while($gen01 = mysqli_fetch_assoc($result01)) : ?>
						<img src="uploads/gen01/<?php echo $gen01["gambar"]; ?>" loading="lazy">
					<?php endwhile; ?>
				</div>
			</div>
			<div class="accordionGen2">
				<div class="header">
					<p>GEN 02</p><i class="ri-arrow-down-s-line"></i>
				</div>
				<div class="listImg">
					<?php while($gen02 = mysqli_fetch_assoc($result02)) : ?>
						<img src="uploads/gen02/<?php echo $gen02["gambar"]; ?>" loading="lazy">
					<?php endwhile; ?>
				</div>
			</div>
			<div class="accordionGen3">
				<div class="header">
					<p>GEN 03</p><i class="ri-arrow-down-s-line"></i>
				</div>
				<div class="listImg">
					<?php while($gen03 = mysqli_fetch_assoc($result03)) : ?>
						<img src="uploads/gen03/<?php echo $gen03["gambar"]; ?>" loading="lazy">
					<?php endwhile; ?>
				</div>
			</div>
			<div class="accordionGen4">
				<div class="header">
					<p>GEN 04</p><i class="ri-arrow-down-s-line"></i>
				</div>
				<div class="listImg">
					<?php while($gen03 = mysqli_fetch_assoc($result03)) : ?>
						<img src="uploads/gen04/<?php echo $gen04["gambar"]; ?>" loading="lazy">
					<?php endwhile; ?>
				</div>
			</div>
		</section>
	</main>

	<footer>
		<div class="footer">
			<div class="copyright">
				<p class="copryright">BamantaraEEPISAT © 2022</p>
				<div class="toggle">
					<a href="#"><img src="asset/en.png" height="40px" width="70px" ></a>
				</div>
			</div>
			<ul class="listFooter">
				<li><a href="#">LinkedIn</a></li>
				<li><a href="#">Youtube</a></li>
				<li><a href="#">Instagram</a></li>
				<li><a href="#">Gmail</a></li>
	        </ul>
	        </div>
	</footer>

	<script src="accordionScript.js"></script>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Bamantara EEPISAT PENS</title>
	<link rel="icon" href="asset/eepisat.png" type="image/gif">
	<link rel="stylesheet" type="text/css" href="asset/icon/remixicon.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styleContact.css">
</head>
<body>
	<header>
		<ul class="navMenuDesktop">
			<li><a href="home.php">Home</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<div class="logo">
				<a href="#"><img src="asset/eepisat.png" height="100px" width="100px" ></a>
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
		<section class="contact">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.35572262540222!2d112.79443839068519!3d-7.275894159303199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa10ebfbf931%3A0x2eb0a9059e0c4559!2sPusat%20Unggulan%20Teknologi%20PENS!5e0!3m2!1sms!2sid!4v1668772699724!5m2!1sms!2sid" width="480" height="610" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="content">
				<div class="heading">
					<h1 class="title">Contact Us</h1>
					<span class="line" data-aos="fade-right" data-aos-anchor="#example-anchor" data-aos-duration="500"></span>
				</div>
				<form action="mail.php" method="POST">
					<div class="name">
						<label for="name">Name</label><br>
						<input type="text" name="name" autocomplete="off" required> 
					</div>
					<br>
					<div class="email">
						<label for="email">Email</label><br>
						<input type="text" name="email" autocomplete="off" required>
					</div>
					<br>
					<div class="message">
						<label for="message">Message</label><br>
						<textarea name="message" autocomplete="off" required></textarea>
					</div>
					<input type="submit" value="Send Message"></button>
				</form>
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
				<li><a href="https://www.linkedin.com/company/eepisat/" target="_blank">LinkedIn</a></li>
				<li><a href="https://www.youtube.com/@eepisat1744" target="_blank">Youtube</a></li>
				<li><a href="https://www.instagram.com/eepisat/" target="_blank">Instagram</a></li>
				<li><a href="mailto: eepisatindonesia@gmail.com">Gmail</a></li>
	        </ul>
	        </div>
	</footer>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>
</html>
<?php 

	// include class
	include('lib/MyMobileDetector.class.php');

	// create an instance of the class to allow us using its functions
	$mobileDetectorIstance = new MyMobileDetector();

?>
<html>
	<head>
		<title>Esercizio 2: Dynamic Content Serving | Il Responsive Web Design</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
		<header>
			<div id="header-top">
				<a href="#" id="brand-logo">BENVENUTO!</a>
			</div>
			<div id="header-bottom">
				<i>Categorie, tag, progetti, e tant'altro</i>
			</div>
		</header>

		<div id="page" class="clearfix">
			<sidebar id="left-sidebar">
				<nav id="left-menu">
					<ul>
						<li><a href="#category-HTML" title="HTML">HTML</a></li>
						<li><a href="#category-CSS" title="CSS">CSS</a></li>
						<li><a href="#category-Javascript" title="Javascript">Javascript</a></li>
						<li><a href="#category-PHP" title="PHP">PHP</a></li>
						<li><a href="#category-ASP" title="ASP">ASP</a></li>
						<li><a href="#category-Ajax" title="Ajax">Ajax</a></li>
						<li><a href="#category-jQuery" title="jQuery">jQuery</a></li>
						<li><a href="#category-AngularJS" title="AngularJS">AngularJS</a></li>
					</ul>
				</nav>
			</sidebar>
			<div id="content-wrapper">
				<div class="half-column">
					<h1>Esercizio 2: Dynamic Content Serving</h1>
					<?php 
						if($mobileDetectorIstance->isMobile()){
							// here html code for mobile
							echo '<h2>Versione Mobile</h2>';
						}else{
							// here html code for desktop
							echo '<h2>Versione Desktop</h2>';
						}
					?>
					<img src="../images/img1.png" alt="image 1" width="200" />
					
				</div>
				<div class="half-column">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus nunc ut leo vehicula pretium. Ut enim ante, rhoncus volutpat finibus molestie, tincidunt et lectus. Proin libero neque, elementum eu sollicitudin vitae, porttitor eu lacus. Nulla elementum nibh non felis varius, fermentum maximus ipsum tristique. Sed feugiat massa est, tempor vehicula libero pretium a. Nunc sit amet ex sit amet odio molestie semper. Nam eu vehicula diam, hendrerit viverra ex. Etiam rhoncus leo eu scelerisque tempus. Vestibulum auctor magna id lacus imperdiet venenatis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec tempus gravida nibh, ac auctor eros pulvinar ac. Nullam nec mauris ac purus interdum bibendum. Praesent euismod sem rutrum, lacinia urna sit amet, lacinia nisi. 
					</p>
				</div>
			</div>
		</div>
		<footer>
			<p>Copyright 2016 - Azienda fittizzia SRL</p>
		</footer>
	</body>
</html>
<?php 
	function get_some_content_from_somewhere	(){
		return "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus nunc ut leo vehicula pretium. Ut enim ante, rhoncus volutpat finibus molestie, tincidunt et lectus. Proin libero neque, elementum eu sollicitudin vitae, porttitor eu lacus. Nulla elementum nibh non felis varius, fermentum maximus ipsum tristique. Sed feugiat massa est, tempor vehicula libero pretium a. Nunc sit amet ex sit amet odio molestie semper. Nam eu vehicula diam, hendrerit viverra ex. Etiam rhoncus leo eu scelerisque tempus. Vestibulum auctor magna id lacus imperdiet venenatis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec tempus gravida nibh, ac auctor eros pulvinar ac. Nullam nec mauris ac purus interdum bibendum. Praesent euismod sem rutrum, lacinia urna sit amet, lacinia nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Proin eros nibh, tincidunt non dolor vel, porttitor aliquet magna. Aenean eu malesuada lacus. Phasellus nec tortor non nunc dapibus efficitur. Aliquam scelerisque tellus nulla, ut molestie ex iaculis ac. Sed elementum ex lobortis, accumsan felis et, laoreet ipsum. Nam egestas quam mi, at commodo dui luctus a. Vivamus suscipit metus eget laoreet accumsan. Integer mattis pharetra neque, eu suscipit massa. Vivamus mattis leo nibh, id malesuada nibh blandit at. Mauris at elit elit. Sed lobortis porta nisl, a tempor tortor laoreet nec. Mauris efficitur felis in orci sodales gravida. Maecenas suscipit lacus vel massa iaculis hendrerit. Aliquam ut neque in lectus pharetra pellentesque vel in tortor. Nullam ut purus venenatis sem lacinia tincidunt. Etiam ornare mollis rhoncus. <br> <br> In convallis ipsum in erat fermentum pharetra. Ut et nulla ipsum. Nunc sed eros justo. Quisque dictum eu massa ut congue. Quisque quam ante, aliquam non eleifend posuere, pellentesque eget tellus. Mauris tincidunt pulvinar sodales. Cras placerat eu tortor ut egestas. <br> <br> Praesent aliquet nisi sed diam suscipit, ut fringilla orci ullamcorper. In fringilla elit nisl, in viverra tortor cursus a. Donec et malesuada arcu, vitae aliquet metus. In scelerisque fringilla purus. Suspendisse gravida felis ultrices tellus venenatis, a cursus metus semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut posuere nulla ac odio vestibulum, a vulputate enim mattis. Sed auctor id erat ac consequat. Vestibulum ut tempor neque, nec laoreet sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed elit ipsum, tincidunt ac augue nec, scelerisque cursus velit. Praesent dignissim viverra condimentum. Nam ultricies hendrerit molestie. Suspendisse fringilla, sapien ac consectetur luctus, ex ipsum consequat libero, nec vestibulum est metus in dolor. Sed eget dui ac mauris fermentum venenatis vitae id dui. Duis vestibulum enim a maximus sagittis.";
	}
?>
<html>
	<head>
		<title>Esercizio 1: Separate URLs | Il Responsive Web Design</title>
		<link rel="stylesheet" type="text/css" href="style_responsive.css" />
	</head>
	<body>
		<header>
			<a href="/" id="brand-logo"><img src="../images/loghetto.png" alt="Brand Logo" width="100" /></a>
			<nav id="main-menu">
				<ul class="clearfix">
					<li><a href="#home" title="Home">Home</a></li>
					<li><a href="#chi-siamo" title="Chi Siamo">Chi Siamo</a></li>
					<li><a href="#prodotti" title="Prodotti">Prodotti</a></li>
					<li><a href="#contatti" title="Contatti">Contatti</a></li>
					<li><a href="index.php" title="Versione Fissa">Versione Fissa</a></li>
				</ul>
			</nav>
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
				<div class="boxes-wrapper clearfix">
					<?php for($i=0; $i < 3; $i++){ ?>
						<div class="box">
							<img src="../images/random.php?code=<?php echo rand(0,255); ?>" width="250" alt="Random Image" />
							<span class="title">Lorem ipsum dolor sit amet</span>
						</div>
					<?php } ?>
				</div>
				
				<div class="middle-text-wrapper clearfix">
					<div class="half-column">
						<h4>Mobile? Ricorda di:</h4>
						<ul>
							<li>Non utilizzare dimensioni assolute</li>
							<li>Fare attenzione alle dimensioni delle immagini</li>
							<li>Mantenere le proporzioni delle immagini durante il ridimensionamento</li>
						</ul>
					</div>
					<div class="half-column">
						<ul>
							<li>Unire le colonne</li>
							<li>Rendere i testi leggibili</li>
							<li>Non ingrandirli troppo</li>
							<li>Distanzia i contenuti cliccabili</li>
							<li>Aumenta le dimensioni dell'area cliccabile</li>
							<li>Lascia un po' di respiro ai contenuti</li>
						</ul>
					</div>
				</div>

				<div class="boxes-wrapper clearfix">
					<div class="half-column">
						<?php for($i=0; $i < 6; $i++){ ?>
							<div class="box box-little">
								<img src="../images/color_thumb.php?w=200&h=170&filter=redFilter" width="200" alt="Random Image" />
								<span class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
							</div>
						<?php } ?>
					</div>
					<div class="half-column">
						<?php for($i=0; $i < 6; $i++){ ?>
							<div class="box box-little">
								<img src="../images/color_thumb.php?w=200&h=170&filter=blueFilter" width="200" alt="Random Image" />
								<span class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</span>
							</div>
						<?php } ?>
					</div>
				</div>
				
			</div>
		</div>
		<footer>
			<p>Copyright 2016 - Azienda fittizzia SRL</p>
		</footer>
	</body>
</html>
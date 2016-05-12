<!DOCTYPE HTML>
<!--
	Plouf Inc. by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Plouf Inc. by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="#">Plouf Inc.</a></h1>
						<nav class="links">
							<ul>
								<li><a href="#">Accueil</a></li>
								<li><a href="application_chauffeur.html">Application Chauffeur</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="index.html">
											Accueil
										</a>
									</li>
									<li>
										<a href="application_chauffeur.php">
											Application Chauffeur
										</a>
									</li>
									<li>
										<a href="#">
											Contact
										</a>
									</li>
									<li>
										<a href="#">
											
										</a>
									</li>
								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions vertical">
									<li><a href="#" class="button big fit">Log In</a></li>
								</ul>
							</section>

					</section>

				<!-- Main -->
					<div id="main">

						

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">Application chauffeur</a></h2>
										<p>Gestion des livraisons</p>
									</div>
									<div class="meta">
										
										<a href="#" class="author"><span class="name">PLOUF INC.</span><img src="" alt="" /></a>
										<time class="published" datetime="2015-11-01">
											<?php
											$date = date("d-m-Y");
											$heure = date("H:i");
											Print("$date - $heure");
											?>
										</time>
									</div>
								</header>
								<a href="#" class="image featured"><img src="" alt="" /></a>
								<section>
									<h3>Formulaire de gestion livraison :</h3>
									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<label for="Nom">Nom:</label>
													<input type="text" name="nom" id="nom" size="10"/>
												<label for="Nom">Prénom:</label>
													<input type="text" name="nom" id="nom" size="10"/>
											</div>
											<br />
											<div class="12u$">
												<label for="type_vehicule">Type véhicule:</label>
												<div class="select-wrapper">

													<select name="demo-category" id="demo-category">
														<option value="">- Type de véhicule -</option>
														<option value="1">Manufacturing</option>
														<option value="1">Shipping</option>
														<option value="1">Administration</option>
														<option value="1">Human Resources</option>
													</select>
												</div>
											</div>
											<div class="4u 12u$(small)">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low</label>
											</div>
											<div class="4u 12u$(small)">
												<input type="radio" id="demo-priority-normal" name="demo-priority">
												<label for="demo-priority-normal">Normal</label>
											</div>
											<div class="4u$ 12u$(small)">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High</label>
											</div>
											<div class="6u 12u$(small)">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy</label>
											</div>
											<div class="6u$ 12u$(small)">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">Not a robot</label>
											</div>
											<div class="12u$">
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Envoyer" /></li>
													<li><input type="reset" value="Effacer" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section> 
							</article>



						

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="images/Laptop-New-version.png" alt="" /></a>
								<header>
									<h2>Plouf Inc.</h2>
									<p>Responsive Project for MESGUEN</p>
									<p>Projet Responsive pour MESGUEN</p>
								</header>
							</section>

						

						

						<!-- About -->
							<section class="blurb">
								<h2>About - A propos</h2>
								<p>Plouf Inc. is a pure enterprise of the north Finister. Thanks to great SLAM and amazing SISR, it's one of the best enterprise in developement and responsive siteweb.</p>
								<p>Plouf Inc. est un pure produit issue du terroir nord finistérien. Alliant SLAM de génie et de bons SISR, c'est une des meilleurs entreprise en développement et en site web responsive. </p>
								
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; SIO1 Estran Brest #SLAM are the best</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
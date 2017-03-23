<?php
header ("Location: ac11.php");
?>



<!DOCTYPE HTML>
<!--
	Plouf Inc. by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<script type="text/javascript">
    function getfile(){
        document.getElementById('hiddenfile').click();
    }
    function getvalue(){
        document.getElementById('selectedfile').value=document.getElementById('hiddenfile').value;
    }
</script>


<html>
	<head>
		<title>Mesguen</title>
		<meta charset="utf-8" />
		<!-- <meta http-equiv="refresh" content="60"> -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="icon" type="image/png" href="images/Laptop-New-version.png" />
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="#">Mesguen</a></h1>
						<!-- <nav class="links">
							<ul>
								<li><a href="#">Accueil</a></li>
								<li><a href="application_chauffeur.html">Application Chauffeur</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</nav> -->
						<nav class="main">
							<ul>
								<!-- <li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li> -->
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<!-- <section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section> -->

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="index.php">
											Accueil
										</a>
									</li>
									<li>
										<a href="ac12.php">
											AC12
										</a>
									</li>
									<li>
										<a href="ac13.php">
											AC13
										</a>
									</li>
								</ul>
							</section>

						<!-- Actions -->
							<!-- <section>
								<ul class="actions vertical">
									<li><a href="login.php" class="button big fit">Connexion</a></li>
								</ul>
							</section> -->

					</section>

				<!-- Main -->
					<div id="main">

						

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">Accueil</a></h2>
										<p>D&eacute;veloppement web applications</p>
									</div>
									<div class="meta">
										<p class="author"><span class="name">PLOUF INC.</span><!-- <img src="" alt="" /> --></p>
										<time class="published" datetime="2015-11-01">
											<?php
											include ('date/date_V2.0.php');
											?>
										</time>
									</div>
								</header>
								<section>
									<h3>Logiciels utilisés:</h3>
										<img title="phpmyadmin" src="images/logo_phpmyadmin.png"/>
										&nbsp
										<img title="sublime text" src="images/logo_sublimetext.png"/>
										&nbsp
										<img title="eclipse" src="images/logo_eclipse.png"/>
										&nbsp
									<hr>
									<h3>Languages de programmation utiliser :</h3>
										<img title="php" src="images/logo_php.png"/>
										&nbsp
										<img title="html5" src="images/logo_html5.png"/>
								</section> 
								<hr>
							</article>

							<embed src="singe.wav" autostart="true" loop="false" hidden="true"></embed>

						

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="images/Laptop-New-version.png" alt="" /></a>
								<header>
									<h2>Mesguen</h2>
									<p>Responsive Project for MESGUEN</p>
									<p>Projet Responsive pour MESGUEN</p>
								</header>
							</section>
						

						

						<!-- About -->
							<section class="blurb">
								
								
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									Contact d&eacute;veloppeur: 
									&nbsp;&nbsp;
									<li><a href="https://twitter.com/julienhellio" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://julienhellio.wordpress.com/" class="fa-wordpress"><span class="label">Wordpress</span></a></li>
									<li><a href="https://github.com/ploufppe/ppe" class="fa-github"><span class="label">GitHub</span></a></li>
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
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
		<title>MESGUEN</title>
		<meta charset="utf-8" />
		<!-- meta http-equiv="refresh" content="60"> -->
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
						<h1><a href="index.php">MESGUEN</a></h1>
							<nav class="main">
							<ul>
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
										<a href="driver_application.php">
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
									<li><a href="#" class="button big fit">Connexion</a></li>
								</ul>
							</section>

					</section>

				<!-- Main -->
					<div id="main">

						

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">AC12 - Organiser les tourn&eacute;es</a></h2>
										<p>Tournn&eacute;e num&eacute;ro</p>
									</div>
									<div class="meta">
										<p class="author"><span class="name">MESGUEN</span><!-- <img src="" alt="" /> --></p>
										<time class="published" datetime="2015-11-01">
											<?php
											include ('date_V2.0.php');
											?>
										</time>
									</div>
								</header>
									<p>
									<section>
									<form method="post" action="formulaire.php">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<div class="12u$">
												<div class="select-wrapper">
												<label>Etapes</label>
												<?php
														include 'connect_switch.php';
														$link = mysql_connect($host,$user,$password)
														or die("Impossible de se connecter : " . mysql_error());
														//echo 'Connexion realisee... <br />';
														
														$connexion = mysql_select_db($dbname)
														or die("Impossible d'ouvrir la base : ".mysql_error());
														//echo 'Base selectionnee... <br />';
														
														echo "<table name='nom' width=20%> \n";
														
														$query="select * from chauffeur";  
														$result=mysql_query($query); 
														while($i=mysql_fetch_array($result)) 
														{ 
														$CHFPRENOM=$i[CHFPRENOM]; 
														$CHFNOM=$i[CHFNOM]; 
														$CHFID=$i[CHFID];
														
														echo "<tr><td value='$CHFNOM'>".$CHFNOM."&nbsp".$CHFPRENOM."</td></tr>";
														}  
														echo "</table>";
													?> 
											<br />
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Envoyer" /></li>
													<li><input type="reset" value="Effacer" /></li>
												</ul>
											</div>
										</div>
									</form> 
								</section> 	



									</p>			
							</article>


					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="index.php" class="logo"><img src="images/Laptop-New-version.png" alt="" /></a>
								<header>
									<h2>MESGUEN</h2>
									<p>Responsive Project for MESGUEN</p>
									<p>Projet Responsive pour MESGUEN</p>
								</header>
							</section>
						

						

						<!-- About -->
							<section class="blurb">
								<h2>About - A propos</h2>
								<p>Plouf Inc. is a pure enterprise of the north Finister. Thanks to great SLAM and amazing SISR, it's one of the best enterprise in developement and responsive siteweb.</p>
								<p>Plouf Inc. est un pure produit issue du terroir nord finistÃ©rien. Alliant SLAM de gÃ©nie et de bons SISR, c'est une des meilleurs entreprise en dÃ©veloppement et en site web responsive. </p>
								
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
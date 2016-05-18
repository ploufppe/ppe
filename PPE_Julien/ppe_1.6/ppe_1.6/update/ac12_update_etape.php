<!DOCTYPE HTML>
<!--
	Plouf Inc. by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<title>MESGUEN</title>
		<meta charset="utf-8" />
		<!-- meta http-equiv="refresh" content="60"> -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/mainVLucas.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="icon" type="image/png" href="images/Laptop-New-version.png" />

	</head>
	<body>
		<script type='text/javascript'>
/* <![CDATA[ */ 
/*
|
| Affiche/cache le contenu d'un bloc une fois qu'un lien est cliqué.
|
*/
 
// On attend que la page soit chargée 
/*jQuery(document).ready(function()
{
   // On cache la zone de texte
   jQuery('#toggle').hide();
   // toggle() lorsque le lien avec l'ID #toggler est cliqué
   jQuery('a#toggler').click(function()
  {
      jQuery('#toggle').toggle(400);
      return false;
   });
});*/
/* ]]> */ 
</script>


		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php">MESGUEN</a></h1>
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
							<!-- <section>
								<ul class="actions vertical">
									<li><a href="#" class="button big fit">Connexion</a></li>
								</ul>
							</section>

					</section> -->

				<!-- Main -->
					<div id="main">

						

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">AC13 - Organiser les tourn&eacute;es</a></h2>
										<p>Etape
											<?php 
												$ETIPD=$_GET['id'];
												echo $ETIPD; 
											?> 
										</p>
									</div>
									<div class="meta">
										<p class="author"><span class="name">MESGUEN</span><!-- <img src="" alt="" /> --></p>
										<time class="published" datetime="2015-11-01">
											<?php
											include ('date/date_V2.0.php');
											?>
										</time>
									</div>
								</header>
									<p>
									<section>
									<form method="get" action="update/update_ac12.php">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<div class="12u$">
										<?php
											function nbspfct($unNombre)
											{			
												while ($unNombre != 0)
												{
													echo " &nbsp ";
													$unNombre-=1;
												}
											}
										?>
										<center>
										<?php 
											$ETPID=$_GET['id'];
											echo "<p ><h2>Modification - Etape".$ETPID."</h2></p>";
										?>
										</center>
												<input type="hidden" name="etpid" id="etpid" value="<?php echo $ETPID; ?>" />
												<label for="lieu">S&eacute;lectionner Lieu : <?php nbspfct(5); ?> </label>
												 <select name="lieu" id="lieu" style="color:#2ecc71" >
												 <option>Lieu - Ville</option>
													<?php
														include ("connectAD.php"); 
 
														$sql = 'SELECT LIEUID, LIEUNOM, VILNOM FROM LIEU, COMMUNE WHERE LIEU.vilId = COMMUNE.VILid ORDER BY LIEUNOM ASC';
														
														$tableau = tableSQL($sql);
														foreach ($tableau as $ligne) {
																$lieuid=$ligne['0'];
																$lieunom=$ligne['1'];
																$villenom=$ligne['2'];
															echo "<option value= '".$lieuid."'>".$lieunom.$villenom."</option>";
													
														}
													
														
													?>
												
												
												</select>
												<br/>

												<label for="calendrierRdvDebut">Rendez vous entre : <?php nbspfct(4); ?> </label>
												<input type="datetime-local" name="hreMin" id="hreMin" value="yyyy/mm/dd 00:00" style="color:#2ecc71"/>
												<br/>

												<label for="calendrierRdvFin">et : <?php nbspfct(21); ?></label>
												<input type="datetime-local" name="hreMax" id="hreMax" value="yyyy/mm/dd 00:00" style="color:#2ecc71"/>
												<br/>

												<label for="calendrierPriseEnCharge">Pris en charge le : <?php nbspfct(6); ?></label>
												<input type="datetime-local" name="etpFin" id="etpFin" value="yyyy/mm/dd-00:00" style="color:#2ecc71"/>
												<br/>

											

												<label for="commentaire">Commentaire : <?php nbspfct(9); ?></label>
												<textarea name="commentaire" id="commentaire" >Tapez votre texte!</textarea>

									
												<br /><br/>
											
											<?php
												if (isset($_GET['message']))
													echo $_GET['message'];
												else
													echo "&nbsp;";
												?>
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Valider" /></li>
													<li><input type="reset" value="Annuler" /></li>
												</ul>
											</div>
										</div>
									</form> 

									<!-- <div id="toggle"> Permet de faire apparaitre tout ce qui est dans le bloc avec une transition
									</div> -->

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
								</header>
							</section>
						

						

						<!-- About -->
							<section class="blurb">
								
							

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									Contact d&eacute;veloppeur: 
									&nbsp;&nbsp;
									<li><a href="https://twitter.com/julienhellio" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://julienhellio.wordpress.com/" class="fa-wordpress"><span class="label">Wordpress</span></a></li>
									<li><a href="https://github.com/ploufppe/ppe" class="fa-github"><span class="label">GitHub</span></a></li>
								</ul>
								<p class="copyright">&copy; SIO1 Estran Brest #SLAM</p>
							</section>
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

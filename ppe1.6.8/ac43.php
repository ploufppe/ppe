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
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
	</head>
	<body>

	<script type='text/javascript'>
/* <![CDATA[ */ 
/*
|-----------------------------------------------------------------------
|  jQuery Toggle Script by Matt - skyminds.net
|-----------------------------------------------------------------------
|
| Affiche/cache le contenu d'un bloc une fois qu'un lien est cliqu�.
|
*/
 
// On attend que la page soit charg�e 
jQuery(document).ready(function()
{
   // On cache la zone de texte
   jQuery('#toggle').hide();
   // toggle() lorsque le lien avec l'ID #toggler est cliqu�
   jQuery('a#toggler').click(function()
  {
      jQuery('#toggle').toggle(400);
      return false;
   });
});
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
										<a href="ac11.php">
											Application Chauffeur
										</a>
									</li>
									<!--  <li>
										<a href="#">
											Contact
										</a>
									</li>-->
								</ul>
							</section>

						<!-- Actions -->
						<!--  	<section>
								<ul class="actions vertical">
									<li><a href="#" class="button big fit">Connexion</a></li>
								</ul>
							</section>-->

					</section>

				<!-- Main -->
					<div id="main">

					<!-- Récupération du N° de tournée -->
					<?php
						$TRNNUM=$_GET['TRNNUM'];
						$ETPID =$_GET['id'];
					?>
						

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">AC43 - valider une &eacute;tapes</a></h2>
									</div>
									<div class="meta">
										<p class="author"><span class="name">MESGUEN</span><!-- <img src="" alt="" /> --></p>
										<time class="published" datetime="2015-11-01">
											<?php
											include ('date/date_V2.0.php');
											include ("connectAD.php"); 
											?>
										</time>
									</div>
								</header>
									<p>
									<section>
									<form method="get" action="update/updateac43.php" >
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<div class="12u$">
										
										<!-- Récupération et renvoi du N° de tournée et d'étape -->
										<input type="hidden" name="TRNNUM" id="TRNNUM" value="<?php echo $TRNNUM; ?>"/>
										<input type="hidden" name="ETPID" id="ETPID" value="<?php echo $ETPID; ?>"/>
										
													<?php
														
														$sql = 'SELECT LIEUNOM, VILNOM FROM LIEU, COMMUNE WHERE LIEU.vilId = COMMUNE.VILid AND LIEUID = '.$ETPID;
														$lieu = champSQL($sql);
														
														
													?>
												
												<br/>
												
												<h3>Arriv&eacute;e sur l'&eacute;tape : <?php nbspfct(10); ?><?php echo "lieu : $lieu";?> </h3>
												<label for="calendrierRdvDebut">Le </label>
												<input type="date" name="dateDeb" id="dateDeb" value="" style="color:#2ecc71"/>
												<label for="calendrierHreDebut"><?php nbspfct(5); ?>&agrave; </label>
												<input type="time" name="hreDeb" id="hreDeb" value="" style="color:#2ecc71"/>
												<br/><br/>

												
												<h3>Fin de l'&eacute;tape : </h3>
												<label for="calendrierRdvFin">Le </label>
												<input type="date" name="dateFin" id="dateFin" value=">" style="color:#2ecc71"/>
												<label for="calendrierHreFin"><?php nbspfct(5); ?>&agrave; </label>
												<input type="time" name="hreFin" id="hreFin" value="" style="color:#2ecc71"/>
												<br/><br/>

											
												<h3>Palette(s) : </h3>
												<label for="palLiv">Livr&eacute;e : <?php nbspfct(4); ?></label>
												<input type="number" name="palLiv" id="palLiv" min ="0" step="1" value="0" style="color:#2ecc71"/>
												<label for="palLivEur"><?php nbspfct(5); ?>dont EUR : </label>
												<input type="number" name="palLivEur" id="palLivEur" min ="0" step="1" value="0" style="color:#2ecc71"/>
												<br/>
												<label for="palChg">Charg&eacute;e : <?php nbspfct(2); ?></label>
												<input type="number" name="palChg" id="palChg" min ="0" value="0" step="1" style="color:#2ecc71"/>
												<label for="palChgEur"><?php nbspfct(5); ?>dont EUR : </label>
												<input type="number" name="palChgEur" id="palChgEur" min ="0"  step="1" value="0" style="color:#2ecc71"/>
												<br/>
												<label for="cheque">Ch&egrave;que : <?php nbspfct(3); ?></label>
												<input type="number" name="cheque" id="cheque" min ="0"  value="0" style="color:#2ecc71"/>
												<br/><br/>
												
												<label for="kilometre">Kms Compteur : <?php nbspfct(1); ?></label>
												<input type="number" name="kilometre" id="kilometre" min ="0"  value="0" style="color:#2ecc71"/>
												<br/>
												
												<label for="etat">Etat : <?php nbspfct(12); ?></label>
													<select name="etat" id="lieu" style="color:#2ecc71" >
														<option>CONFORME</option>
														<option>NON CONFORME</option>
													</select>
												<br/><br/>
												
												
												<label for="commentaire">Commentaire(s) : </label><br/>
												<textarea name="commentaire" id="commentaire" ></textarea>

									
												<br /><br/>
											
											<?php
												if (isset($_GET['message']))
													echo $_GET['message'];
												else
													echo "&nbsp;";
												?>
											<div class="12u$">
												<ul class="actions">
													<li><a href="ac12.php?TRNNUM='<?php echo $TRNNUM; ?>'"><input type="button" value="Retour" /></a></li>
													<li><a href="#" id="toggler"><button type="button" style=" border-radius: 10px;"><p><img src="images/Camera-01-32.png" style="padding:5px; padding-bottom: 5px;" /> Prendre une photo </p></button></a>
													</li>
													<li><input type="submit" value="Valider" /></li>
												</ul>
											</div>
										</div>
									</form> 

									<!--Permet de faire apparaitre tout ce qui est dans le bloc avec une transition -->
									 <div id="toggle"> 
									 <input type="file" name="photo" id="photo" />
									</div> 

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

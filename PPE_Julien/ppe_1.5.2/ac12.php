<!DOCTYPE HTML>
<!--
	Plouf Inc. by HTML5 UP
-->


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
										<a href="ac12.php">
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
										<p>Cr&eacute;ation tourn&eacute;es et gestion des &eacute;tapes</p>
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
								<div class="meta">
									<section>
										<center><h2>ETAPES</h2></center>
											<hr>
												<?php
													include 'connectAD.php';									
													
													
													// on crée la requête SQL
													$sql='SELECT `ETPID`, `LIEUNOM`
													FROM etape 
													INNER JOIN lieu 
													ON etape.ETPID = lieu.LIEUID
													ORDER BY ETPID';  
													
													// on envoie la requête
													$req = executeSQL($sql);
													echo '<table>';
													echo '<tr><th>id</th><th>Lieu Nom</th><th></th><th></th></tr>';
													$result= tableSQL($sql);

													foreach ($result as $ligne) {
													echo '<tr><td>';
														$ETPID = $ligne['0'];
													echo $ETPID;
													echo '</td><td>';
														$LIEUNOM = $ligne['1'];
													echo "$LIEUNOM";
													echo '</td>';
													echo '<td><a href="delete/delete_ac12.php?id='.$ETPID.'"><img src="images/delete-cross.png" /></a></td><td><a href="ac12_update_etape.php?id='.$ETPID.'"><img src="images/crayon.png" /></a></td></tr>';
													}
													echo '</table>';
												?>

									</section> 	

									</div>


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
						<article class="post" >
							<section class="blurb" >
								<center><h1>TOURNEE</h1></center>
									<hr>
									<form method="get" action="insert/insert_ac12.php">
										<div class="row uniform">
											<!-- <div class="6u 12u$(xsmall)"> -->
												<div class="12u$">
												<div class="select-wrapper">
												<!-- selection de la date de tournee -->
													<label for="calendrier">Date : <br />(aaaa/mm/jj)<br /></label>
													<input type="date" min=date  name="TRNDTE" id="TRNDTE" value="<?php  echo date('Y-m-d'); ?>" style=''/>

												</div>
												<br />
												<div class="select-wrapper">
												
												<label for="chauffeur">Chauffeur :</label>
												<!-- Affichage des chauffeur -->
													<?php
														
														
	
														//echo 'Connexion realisee... <br />';
														
														//echo 'Base selectionnee... <br />';
														
														echo "<select name='CHFID' id='CHFID' style='' > \n";
														
														$sql="select * from chauffeur";  
														$result=tableSQL($sql); 

														foreach ($result as $ligne) {
															$CHFID = $ligne['0'];
															$CHFNOM = $ligne['1'];
															$CHFPRENOM = $ligne['2'];
															echo "<option value='$CHFID'>".$CHFID.".&nbsp".$CHFNOM."&nbsp".$CHFPRENOM."</option> \n";
														}
														
														echo "</select>\n";
													?> 
													<br />
													<label for="vehicule">V&eacute;hicule : <br /></label>
													<!-- affichage des camions -->
													<?php
														
														echo "<select name='VEHIMMAT' id='VEHIMMAT' style=''> \n";
														
														$sql="select VEHIMMAT from vehicule";  
														$result=tableSQL($sql); 
														
														foreach ($result as $ligne) {
															$VEHIMMAT = $ligne['0'];
														echo "<option value='$VEHIMMAT'>".$VEHIMMAT."</option> \n";														}
														
														
									
														echo "</select>\n";
													?> 
													<br />
													<!-- affichage date prise en charge -->
													<label for="calendrier">Pris en charge le : <br />(aaaa/mm/jj)<br /> </label>
													<input type="datetime" name="TRNPECCHAUFFEUR" min="" id="TRNPECCHAUFFEUR" value="<?php  echo date('Y-m-d H:i:s'); ?>"  disabled="" style="border: solid 1px #2ecc71; height:53px; background-color: #DADFE1;" />
													
													<!-- affichage de la zone de commentaire -->
												<br />
												<label for="commentaire">Commentaire : <br /></label>
													<textarea name="TRNCOMMENTAIRE" id="TRNCOMMENTAIRE" style=''>Tapez votre texte!</textarea>	
											</div>
											</div>
											</div>
											<br />
											<div class="12u$">
												<ul class="actions">
													<br />
													<li><input type="submit" value="Envoyer" /></li>
													<li><input type="reset" value="Effacer" /></li>
												</ul>
										</div>
									</form> 
							</section>
						</article>
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

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
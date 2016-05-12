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
									<?php
													include 'connectAD.php';									
													
													
													// on crée la requête SQL
													$sql='SELECT `ETPID`, `LIEUNOM`
													FROM etape 
													INNER JOIN lieu 
													ON etape.ETPID = lieu.LIEUID';  
													
													// on envoie la requête
													$req = executeSQL($sql);
													echo '<table>';
													echo '<tr><th>Etapes id</th><th>Lieu Nom</th><th></th><th></th></tr>';
													$result= tableSQL($sql);

													foreach ($result as $ligne) {
													echo '<tr><td>';
														$ETPID = $ligne['0'];
													echo "$ETPID";
													echo '</td><td>';
														$LIEUNOM = $ligne['1'];
													echo "$LIEUNOM";
													echo '</td>';
													echo '<td><img src="images/delete-cross.png"></td><td><img src="images/crayon.png" "></td></tr>';
													}
													// on fait une boucle qui va faire un tour pour chaque enregistrement
													// while($data = mysql_fetch_assoc($req))
													// {
														
													// 	// on affiche les informations de l'enregistrement en cours
													// 	echo '<tr><td>'.$data['ETPID'].'</td><td>'.$data['LIEUNOM'].'</td>
													// 	<td><img src="images/delete-cross.png"></td><td><img src="images/crayon.png" "></td></tr>';
													// }
													echo '</table>';
													// on ferme la connexion à mysql
	
									
												?>
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
							<section class="blurb" >
								<article class="post" >
									<form method="get" action="insert_ac12.php">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<div class="12u$">
												<div class="select-wrapper">
												<!-- selection de la date de tournee -->
													<label for="calendrier">Date : <br />(aaaa/mm/jj)<br /></label>
													<input type="date" min=date  name="TRNDTE" id="TRNDTE" value="<?php  echo date('Y-m-d'); ?>" style='width:300px;height:53px'/>

												</div>
												<br />
												<div class="select-wrapper">
											
												<label for="chauffeur">Chauffeur :</label>
												<!-- Affichage des chauffeur -->
													<?php
														
														
	
														//echo 'Connexion realisee... <br />';
														
														//echo 'Base selectionnee... <br />';
														
														echo "<select name='CHFID' id='CHFID' style='width:300px;height:53px' > \n";
														
														$sql="select * from chauffeur";  
														$result=tableSQL($sql); 

														foreach ($result as $ligne) {
															$CHFID = $ligne['0'];
															$CHFNOM = $ligne['1'];
															$CHFPRENOM = $ligne['2'];
															echo "<option value='$CHFID'>".$CHFID.".&nbsp".$CHFNOM."&nbsp".$CHFPRENOM."</option> \n";
														}
														/*while($i=mysql_fetch_array($result)) 
														{
														
														$CHFPRENOM=$i[CHFPRENOM]; 
														$CHFNOM=$i[CHFNOM]; 
														$CHFID=$i[CHFID]; 
														echo "<option value='$CHFID'>".$CHFID.".&nbsp".$CHFNOM."&nbsp".$CHFPRENOM."</option> \n";
														}  */
														echo "</select>\n";
													?> 
													<br />
													<label for="vehicule">V&eacute;hicule : <br /></label>
													<!-- affichage des camions -->
													<?php
														include 'connect_switch.php';
														$link = mysql_connect($host,$user,$password)
														or die("Impossible de se connecter : " . mysql_error());
														//echo 'Connexion realisee... <br />';
														
														
														//echo 'Base selectionnee... <br />';
														
														echo "<select name='VEHIMMAT' id='VEHIMMAT' style='width:300px;height:53px'> \n";
														
														$query="select VEHIMMAT from vehicule";  
														$result=mysql_query($query); 
														while($i=mysql_fetch_array($result)) 
														{ 
														$VEHIMMAT=$i[VEHIMMAT];
														
														echo "<option value='$VEHIMMAT'>".$VEHIMMAT."</option> \n";
														}  
														echo "</select>\n";
													?> 
													<br />
													<!-- affichage date prise en charge -->
													<label for="calendrier">Pris en charge le : <br />(aaaa/mm/jj)<br /> </label>
													<input type="datetime" name="TRNPECCHAUFFEUR" min="" id="TRNPECCHAUFFEUR" value="<?php  echo date('Y/m/d H:i:s'); ?>"  disabled="" style="border: solid 1px #2ecc71; width:300px; height:53px; background-color: #bdc3c7" />
													</div>
												</div>
													<!-- affichage de la zone de commentaire -->
												<br />
												<label for="commentaire">Commentaire : <br /></label>
													<textarea name="TRNCOMMENTAIRE" id="TRNCOMMENTAIRE" style='width:300px;'>Tapez votre texte!</textarea>	
											</div>
											<br />
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Envoyer" /></li>
													<li><input type="reset" value="Effacer" /></li>
												</ul>
											</div>
										</div>
									</form> 
								</article class="post">
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
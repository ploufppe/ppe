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
    function setbackground()
{
window.setTimeout( "setbackground()", 0.08); // 5000 milliseconds delay

var index = Math.round(Math.random() * 9);

var ColorValue = "FFFFFF"; // default color - white (index = 0)

if(index == 1)
ColorValue = "FFCCCC"; //peach
if(index == 2)
ColorValue = "CCAFFF"; //violet
if(index == 3)
ColorValue = "A6BEFF"; //lt blue
if(index == 4)
ColorValue = "99FFFF"; //cyan
if(index == 5)
ColorValue = "D5CCBB"; //tan
if(index == 6)
ColorValue = "99FF99"; //lt green
if(index == 7)
ColorValue = "FFFF99"; //lt yellow
if(index == 8)
ColorValue = "FFCC99"; //lt orange
if(index == 9)
ColorValue = "CCCCCC"; //lt grey

document.getElementsByTagName("body")[0].style.backgroundColor = "#" + ColorValue;

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

	<!--<body onload="setbackground();">-->
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
									<?php
													include 'connect_switch.php';									
													
													$connexion = mysql_select_db($dbname)
													or die("Impossible d'ouvrir la base : ".mysql_error());
													
													// on crée la requête SQL
													$sql='select CHFID,CHFNOM,CHFPRENOM from chauffeur';  
													
													// on envoie la requête
													$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
													echo '<table>';
													echo '<tr><th>ID</th><th>Nom</th><th>Pr&eacute;nom</th></tr>';
													// on fait une boucle qui va faire un tour pour chaque enregistrement
													while($data = mysql_fetch_assoc($req))
													{
														
														// on affiche les informations de l'enregistrement en cours
														echo '<tr><td>'.$data['CHFID'].'</td><td>'.$data['CHFNOM'].'</td><td>'.$data['CHFPRENOM'].'</td></tr>';
													}
													echo '</table>';
													// on ferme la connexion à mysql
													mysql_close();
									
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
								<form method="post" action="formulaire.php">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<div class="12u$">
												<div class="select-wrapper">

													<label for="calendrier">Date : <br />(yyyy/mm/dd)<br /></label>
													<input type="date" name="calendrier" id="calendrier" value="yyyy/mm/dd" style='width:300px;height:53px'/>

												</div>
												<br />
												<div class="select-wrapper">
												
												<label for="chauffeur">Chauffeur :</label>
												<!-- Affichage des vehicules -->
													<?php
														include 'connect_switch.php';
														$link = mysql_connect($host,$user,$password)
														or die("Impossible de se connecter : " . mysql_error());
														//echo 'Connexion realisee... <br />';
														
														$connexion = mysql_select_db($dbname)
														or die("Impossible d'ouvrir la base : ".mysql_error());
														//echo 'Base selectionnee... <br />';
														
														echo "<select name='nom' style='width:300px;height:53px' > \n";
														
														$query="select * from chauffeur";  
														$result=mysql_query($query); 
														while($i=mysql_fetch_array($result)) 
														{ 
														$CHFPRENOM=$i[CHFPRENOM]; 
														$CHFNOM=$i[CHFNOM]; 
														$CHFID=$i[CHFID];
														
														echo "<option value='$CHFNOM'>".$CHFNOM."&nbsp".$CHFPRENOM."</option> \n";
														}  
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
														
														$connexion = mysql_select_db($dbname)
														or die("Impossible d'ouvrir la base : ".mysql_error());
														//echo 'Base selectionnee... <br />';
														
														echo "<select name='nom' style='width:300px;height:53px'> \n";
														
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
													<label for="calendrier">Pris en charge le : <br />(yyyy/mm/dd)<br /> </label>
													<input type="datetime-local" name="calendrier" id="calendrier" value="yyyy/mm/dd" style="border: solid 1px #2ecc71; width:300px; height:53px" />
													</div>
												</div>
													<!-- affichage de la zone de commentaire -->
												<br />
												<label for="commentaire">Commentaire : <br /></label>
													<textarea name="ac12commentaire" style='width:300px;'>Tapez votre texte!</textarea>	
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
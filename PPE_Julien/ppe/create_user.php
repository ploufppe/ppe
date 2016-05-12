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
		<title>Mesguen. by HTML5 UP</title>
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
						<h1><a href="index.php">Mesguen</a></h1>
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
										<h2><a href="index.php">Inscription</a></h2>
										<p>Gestion des inscriptions</p>
									</div>
									<div class="meta">
										<p class="author"><span class="name">Mesguen</span><!-- <img src="" alt="" /> --></p>
										<time class="published" datetime="2015-11-01">
											<?php
											include ('date_V2.0.php');
											?>
										</time>
									</div>
								</header>
								<?php
									include 'connect_switch.php';									
									
									$connexion = mysql_select_db($dbname)
									or die("Impossible d'ouvrir la base : ".mysql_error());
									
									// on crée la requête SQL
									$sql = 'SELECT id,nom,prenom,login,mdp FROM connexion';
									
									// on envoie la requête
									$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
									echo '<table>';
									echo '<tr><th>ID</th><th>Nom</th><th>Prenom</th><th>Login</th><th>Mot de passe</th></tr>';
									// on fait une boucle qui va faire un tour pour chaque enregistrement
									while($data = mysql_fetch_assoc($req))
									{
										
										// on affiche les informations de l'enregistrement en cours
										echo '<tr><td>'.$data['id'].'</td><td>'.$data['nom'].'</td><td>'.$data['prenom'].'</td><td>'.$data['login'].'</td><td>'.$data['mdp'].'</td><td><img src=""/> </tr>';
									}
									echo '</table>';
									// on ferme la connexion à mysql
									mysql_close();
									
							?> 			
							</article>
							


					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="index.php" class="logo"><img src="images/Laptop-New-version.png" alt="" /></a>
								<header>
									<h2>Mesguen</h2>
								</header>
							</section>
						

						

						<!-- About -->
							<section class="blurb">
								<article class="post">
								<form method="GET" action="insert.php">
								<h4>Inscription :</h4>
												<label for="log">Nom :</label>
													<input type="text" name="nom" id="nom" size="10" value="Nom" style="width:300px;" />
													<br />
												<label for="log">Pr&eacute;nom :</label>
													<input type="text" name="prenom" id="prenom" size="10" value="Pr&eacute;nom" style="width:300px;" />
													<br />
												<label for="log">Votre Login :</label>
													<input type="text" name="login" id="login" size="10" value="login" style="width:300px;" />
													<br />
												<label for="log">Mot de Passe:</label>
													<input type="password" name="mdp" id="mdp" size="10" value="password" maxlength="30" style="width:300px;" />
													<br />
													<p><input type="submit" name="create" value="Cr&eacute;er" /></p>
													
								</form>				
							</article>
								
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
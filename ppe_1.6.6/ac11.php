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
		<link rel="stylesheet" href="assets/css/mainVLucas.css" />
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
										<h2><a href="#">AC11 - Organiser les tourn&eacute;es</a></h2>
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
										<center><h2>Tournées</h2></center>
											<hr>
												<?php
													include 'connectAD.php';
													
													// on crée la requête SQL
													$sql='SELECT `TRNNUM`, `VEHIMMAT`, `CHFID`, `TRNDTE`, `TRNPECCHAUFFEUR`, `TRNARCHAUFFEUR`, `TRNCOMMENTAIRE`
													FROM tournee 
													ORDER BY TRNNUM';  
													
													echo '<table>';
													echo '<tr>
													<th>N° de tournée</th>
													<th>Immatriculation véhicule</th>
													<th>Chauffeur</th>
													<th>Date tournée</th>
													<th>Prise en charge par le chauffeur</th>
													<th>Arrivée du chauffeur</th>
													<th>Commentaire(s) tournée</th>
													</tr>';
													
													$result= tableSQL($sql);

													foreach ($result as $ligne) {
													echo '<tr><td id="circle">';
														$TRNID = $ligne['0'];
													echo $TRNID;
													echo '</td><td>';
														$Vehimat = $ligne['1'];
													echo "$Vehimat";
													echo '</td>';
													echo '</td><td>';
														$CHFID = $ligne['2'];
														$sql2='select CHFNOM, CHFPRENOM from chauffeur where CHFID = '.$CHFID;
														$result2=tableSQL($sql2);
														foreach ($result2 as $ligne2) {
														$NOMCHF = $ligne2['0'];
														$PRECHF = $ligne2['1'];
														}
													echo "$PRECHF $NOMCHF";
													echo '</td>';
													echo '</td><td>';
														$Trndte = $ligne['3'];
													echo "$Trndte";
													echo '</td>';
													echo '</td><td>';
														$TrnPecChauffeur = $ligne['4'];
													echo "$TrnPecChauffeur";
													echo '</td>';
													echo '</td><td>';
														$TnrArChauffeur = $ligne['5'];
													echo "$TnrArChauffeur";
													echo '</td>';
													echo '</td><td>';
														$TrnCom = $ligne['6'];
													echo "$TrnCom";
													echo '</td>';
													
													echo '<td><a href="delete/delete_ac11.php?id='.$TRNID.'"><img src="images/delete-cross.png" /></a></td><td><a href="ac12update.php?TRNNUM='.$TRNID.'"><img src="images/crayon.png" /></a></td></tr>';
													
													}
													echo '</table>';
												?>
												<form method="get" action="ac12.php">
													<br />
													<input type="submit" value="Ajouter tournée" style="margin-left : 80%;" />
												</form>
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
						
						
						
						
						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									Contact d&eacute;veloppeur: 
									&nbsp;&nbsp;
									<li><a href="https://twitter.com/lucasmillet29" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="https://lucasmilletblog.wordpress.com/" class="fa-wordpress"><span class="label">Wordpress</span></a></li>
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
<?php include('includes/session.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" media="all" type="text/css" href="css/index.css" />
		<link rel="stylesheet" media="all" type="text/css" href="css/style.css" />
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<title>Spectacle scientifique, spectacle de robots et exposition avec la Ménagerie Technologique</title>
	</head>
	<body>
		<?php include('includes/menu_admin.php'); ?>
		<header>
			<div id="arborescence"><p><a href="index.html">accueil</a></p></div>
			<?php include("includes/header.php"); ?>
		</header>
		<nav>
			<div id="onglet_actif"><img src="images/menu_onglets/alaune.png" alt="a la une" width="140" height="35" /></div>
			<div id="exposition"><p><a href="exposition_la_menagerie_technologique.html">exposition</a></p></div>
			<div id="spectacles"><p><a href="spectacles_la_menagerie_technologique.html">spectacles</a></p></div>
			<div id="galerie"><p><a href="galerie_la_menagerie_technologique.html">galerie</a></p></div>
			<div id="presse"><p><a href="presse_la_menagerie_technologique.html">presse</a></p></div>
			<div id="surmesure"><p><a href="sur_mesure_la_menagerie_technologique.html">sur mesure</a></p></div>
			<div id="coupsdemain"><p><a href="coups_de_main_la_menagerie_technologique.html">coups de main</a></p></div>
			<div id="projet"><p><a href="projet_la_menagerie_technologique.html">projet</a></p></div>
			<div id="partenaires"><p><a href="partenaires_la_menagerie_technologique.html">partenaires</a></p></div>
			<div id="espacepro"><p><a href="espace_pro_la_menagerie_technologique.html">espace pro</a></p></div>
			<div id="contact"><p><a href="contact_la_menagerie_technologique.html">contact</a></p></div>
			<p><a href="admin">admin</a></p>
		</nav>
		<section>
			<div id="left_photo">
				<img src="images/index/left_photo.jpg" alt="Sophie, Bertrand et robot staubli" />
			</div>
		</section>
		<?php include("includes/footer.php"); ?>
	</body>
</html>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" media="screen" type="text/css" href="../css/admin/style.css" />
		<link rel="stylesheet" media="screen" type="text/css" href="../css/style.css" />
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<title>Page d'administration protégée</title>
	</head>
	<body>
		<div id="admin_menu">
			<div id="administration_png"><img src="../images/admin/administrationOn.png" alt="connexion" width="101" height="35" /></div>
			<div id="administration"><p class="nav-Nlien"><a>connexion</a></p></div>
		</div>
		<header>
			<div id="arborescence"><p><span class="gt"><a href="../index.html">accueil</a> &gt; <a href="index.html">administration</a> &gt;</span> connexion</p></div>
			<?php include("../includes/header.php"); ?>
		</header>
		<nav>
			<div id="alaune"><p><a href="../index.html">à la une</a></p></div>
			<div id="exposition"><p><a href="../exposition_la_menagerie_technologique.html">exposition</a></p></div>
			<div id="spectacles"><p><a href="../spectacles_la_menagerie_technologique.html">spectacles</a></p></div>
			<div id="galerie"><p><a href="../galerie_la_menagerie_technologique.html">galerie</a></p></div>
			<div id="presse"><p><a href="../presse_la_menagerie_technologique.html">presse</a></p></div>
			<div id="surmesure"><p><a href="../sur_mesure_la_menagerie_technologique.html">sur mesure</a></p></div>
			<div id="coupsdemain"><p><a href="../coups_de_main_la_menagerie_technologique.html">coups de main</a></p></div>
			<div id="projet"><p><a href="../projet_la_menagerie_technologique.html">projet</a></p></div>
			<div id="partenaires"><p><a href="../partenaires_la_menagerie_technologique.html">partenaires</a></p></div>
			<div id="espacepro"><p><a href="../espace_pro_la_menagerie_technologique.html">espace pro</a></p></div>
			<div id="contact"><p><a href="../contact_la_menagerie_technologique.html">contact</a></p></div>
		</nav>
		<section>
			<div id="left_photo">
				<img src="../images/admin/left_photo.png" alt="Administration" />
			</div>
			<div id="form">
				<h1>Page d'administration protégée. Veuillez entrer les identifiants</h1>
				<?php
					if(isset($_GET['error']))
					{
						echo('<p style="color: red">');
						if($_GET['error'] == 0)
							echo('');
						elseif($_GET['error'] == 1)
						{
							sleep(1);
							echo('Identifiants invalides. Veuillez réessayer.');
						}
						elseif($_GET['error'] == 2)
							echo('Veuillez remplir tous les champs s\'il vous plaît. Veuillez réessayer.');
						elseif($_GET['error'] == 3)
						{
							sleep(1);
							echo('Votre compte vient d\'être supprimé.<br />Peut-être qu\'il a été supprimé par le compte maître.');
						}
						else
							echo('erreur inconnue');
						echo('</p>');
					}
				?>
				<form method="post" action="index.html">
					<p>
						<label for="mail">adresse email : </label>
						<input type="email" name="mail" id="mail" size="20" />
						<br /><br />
						<label for="mdp">mot de passe : </label>
						<input type="password" name="mdp" id="mdp" size="15" />
						<br /><br />
						<input type="submit" value="Connexion" />
					</p>
				</form>
			</div>
		</section>
		<?php include("../includes/footer.php"); ?>
	</body>
</html>
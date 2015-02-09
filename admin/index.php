<?php
	try
	{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=localhost;dbname=lablanch_menagerie', 'lablanch', 'ZOEnez94', $pdo_options);
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	
	session_start();
	if(!isset($_SESSION['mail']) || !isset($_SESSION['mdp']))
	{
		if(!isset($_POST['mail']) && !isset($_POST['mdp']))
			header('location: form.html');
		elseif(empty($_POST['mail']) || empty($_POST['mdp']))
			header('location: form.html?error=2');
		else
		{
			$req = $bdd->prepare('SELECT * FROM users WHERE mail=? AND mdp=?');
			$req->execute(array($_POST['mail'], md5(sha1($_POST['mdp']))));
			$ans = $req->fetch();
			$req->closeCursor();
			if(!$ans)
				header('location: form.html?error=1');
			else
			{
				$_SESSION['mail'] = $_POST['mail'];
				$_SESSION['mdp'] = $_POST['mdp'];
				header('location: informations.html');
			}
		}
	}
	else
	{
		$req = $bdd->prepare('SELECT * FROM users WHERE mail=? AND mdp=?');
		$req->execute(array($_SESSION['mail'], md5(sha1($_SESSION['mdp']))));
		$ans = $req->fetch();
		$req->closeCursor();
		if(!$ans)
			header('location: form.html?error=3');
		else
			header('location: informations.html');
	}
?>

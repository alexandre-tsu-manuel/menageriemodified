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
		header('location: index.html');
	else
	{
		$req = $bdd->prepare('SELECT * FROM users WHERE mail=? AND mdp=?');
		$req->execute(array($_SESSION['mail'], md5(sha1($_SESSION['mdp']))));
		$ans = $req->fetch();
		$req->closeCursor();
		if(!$ans)
			header('location: form.html?error=3');
	}
?>
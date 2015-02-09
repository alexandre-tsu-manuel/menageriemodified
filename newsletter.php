<?php
	if(!isset($_POST['mail']))
		header('location: index.html');
	else
	{
		$mail = $_POST['mail'];
		
		$footer = '------------------------------------------------------------------------
					Ceci est un message automatique. Si vous souhaitez nous répondre, répondez nous à a.manuel@hotmail.fr
					Si vous ne souhaitez plus profiter de la newsletter, rendez vous à http://menagerietechnologique.fr/newsletter.html?mail=' . $mail;

		$expediteur = 'From: Men@gerieTechnologique';

		$sujet = 'Merci !';

		$message =	'Merci de vous être inscrits à la newsletter de la ménagerie technologique.
					Si vous pensez que ce message ne vous est pas destiné, rendez vous à http://menagerietechnologique.fr/newsletter.php?mail=' . $mail . '


					' . $footer;

		mail($mail,$sujet,$message,$expediteur);
	}
?>
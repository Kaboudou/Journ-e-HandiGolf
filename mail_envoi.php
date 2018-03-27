<?php
	
	// On recupère les valeurs et on sécurise contre toutes injections
	if(isset($_POST['name'])){
		$name=htmlspecialchars($_POST['name']));
	}else{
		$name="";
	}

	if (isset($_POST['mess'])){
		$mess = htmlspecialchars($_POST['message']));
	}else{
		$mess = "";
	}

	// On recupère aussi l'adresse IP de la personne qui l'envoi, au cas où si c'est un farceur on connait son identité ;)
	$ip = $_SERVER['REMOTE_ADDR'];

	if(!empty($name) && !empty($mess)){

		// Pas besoin de headers car c'est un mail en pure texte qui sera envoyé

		$destinataire="aboudoukadim@gmail.com";
		$sujet = "Nouveau message venant du site";
		// Le \n permet de faire un retour à la ligne dans le message
		$txt= "Son nom est : $name \n
	    Son adresse ip est : $ip \n
	    Le message : $mess";

	   	mail($destinataire,$sujet,$txt);
	    echo '<p>Le mail a bien été envoyé !</p>';
	}else{
		echo '<p>Une erreur est survenue !</p>';
	}
?>
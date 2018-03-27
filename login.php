<?php
    require_once('connect-db.php');
	require_once('manager-db.php');

if (isset($_POST['login']) && isset($_POST['pwd'])&&!empty($_POST['login']) && !empty($_POST['login'])){
		$result = getAuthentification($_POST['login'],$_POST['pwd']);
		if ($result) {
			session_start();
			$_SESSION['identifiant'] = $result->id_user;
			$_SESSION['role'] = $result->role;
			header('location: ajouterunarticle.php');
		}
		else {
			header('location: authentification.php');
		}
	}
	else {
		header('location: authentification.php');
	}

?>
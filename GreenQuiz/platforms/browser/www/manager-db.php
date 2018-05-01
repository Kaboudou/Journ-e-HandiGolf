<?php
require_once("connect-db.php");

// Selectionné tous les articles présents dans la base
function getquestion($question = null){
	global $pdo;
	$query = 'SELECT * FROM Question ';

     	$prep = $pdo->prepare($query);
     	$prep->execute();
		$data[] = $prep->fetchAll();
		return json_encode($data);
     	
}
getquestion();

/*

function getArticleById($article){
	global $pdo;
	$query = 'SELECT * FROM Articles where Articles.id = :param1';
        // On donne ici le param1 de type String or Int
     	$prep = $pdo->prepare($query);
        $prep = blindValue(':param1', $article, PDO::PARAM_STR);
     	$prep->execute();
     	return $prep->fetchAll();
}

//Fonction permettant l'incription sur à l'évènement
function addInscription($email,$nom,$prenom,$age,$ville){
	global $pdo;     	
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);        
            $query = $pdo->prepare("insert into Inscription (Nom,Prenom,email,age,Ville) values (:nom,:prenom,:email,:age,:ville);");
            
            $query->execute([
                
                ':nom' => $nom,
                ':prenom' => $prenom,
                ':email' => $email,
                ':age' => $age,
                ':ville' => $ville
                
            ]);
}

//Fonction permettant l'ajout sur d'un article 
function addArticle($titre,$contenu,$image){
    	global $pdo;     	
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);        
            $query = $pdo->prepare("insert into Articles (Titre,ContenuPrincipal,ImagePrincipale) values (:titre,:contenue,:image);");
            
            $query->execute([
                
                ':titre' => $titre,
                ':contenue' => $contenu,
                ':image' => $image
               
                
    ]);
    
}
Fonction permettant la connection sur le site des utilisateurs
function getAuthentification($login,$pass){
	global $pdo;
	$query = "SELECT * FROM user WHERE identifiant=:login and motDePasse=:password";

	$prep = $pdo->prepare($query);
	$prep->bindValue(':login',$login);
	$prep->bindValue(':password',$pass);
	$prep->execute();

	if ($prep->rowCount() == 1) {
		$result = $prep->fetch();
		return $result;
	}
	else {
		return false;
	}
}*/
}*/
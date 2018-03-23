<?php


// Selectionné tous les articles présents dans la base
function getArticles($articles = null){
	global $pdo;
	$query = 'SELECT * FROM Articles ';

     	$prep = $pdo->prepare($query);
     	$prep->execute();
     	return $prep->fetchAll();
}



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
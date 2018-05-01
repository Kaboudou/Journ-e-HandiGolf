<?php 
    
    require_once("header.php");
    require_once("connect-db.php");
    require_once("manager-db.php");
if(isset($_POST['submit']) && isset($_FILES['image'])){
    // recupère les données du formulaire entrée en post
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $image = $_FILES['image'];
    $uploaddir ='img/';
    $uploadfile = $uploaddir.basename($_FILES["image"]["name"]);
    if(move_uploaded_file($_FILES["image"]["tmp_name"],$uploadfile)){
        // Donne l'adresse de l'image si elle à bien été déplacer
        $image = "img/".$_FILES["image"]["name"];
    }
 
    if($titre && $contenu && $image){
        try{
            addArticle($titre,$contenu,$image);
            }
            catch (Exception $e){
                echo "Failed: ". $e->getMessage();
            }
        ?><div class="card">
           <div class="card-body">L'article est enregistrée.
            </div>
        </div>
<?php
    }else{
        ?>
        <div class="card">
           <div class="card-body">Veuillez remplir tous les champs
            </div>
        </div>
<?php
    }
}else{
    
?>




<div class="container">
    <div class="row">
        <div class="col-lg-6">
<form METHOD="Post" enctype="multipart/form-data" >
  <div class="form-group">
    <label for="exampleInputEmail1">Titre de l'article</label>
    <input type="text" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Titre de l'article"/>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contenu</label>
    <textarea class="form-control" name="contenu"  rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Image</label>
     <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
        <p> Inserer ici :<input type="file" name="image"/></p>     
  </div>
  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
        <div class="col-lg-6"></div>
    </div>
</div>

<?php
}
    require_once("footer.php");
?>
<?php 
    
    require_once("header.php");
    require_once("connect-db.php");
    require_once("manager-db.php");
if(isset($_POST['submit'])){
   $mail =  htmlspecialchars($_POST['email']);
   $nom =  htmlspecialchars($_POST['nom']);
   $prenom =  htmlspecialchars($_POST['prenom']);
   $ville =  htmlspecialchars($_POST['ville']);
   $age = $_POST['age'];
    
    if($mail && $nom && $prenom && $ville && $age){
        try{
            addInscription($mail,$nom,$prenom,$age,$ville);
            }
            catch (Exception $e){
                echo "Failed: ". $e->getMessage();
            }
        ?><div class="card">
           <div class="card-body">L'inscription est enregistrée.
            </div>
        </div>
<?php
    }else{
        ?><div class="card">
           <div class="card-body">Veuillez remplir tout les champs
            </div>
            
            
        </div>
<button class="inscription" name="Retour" onclick="window.history.back();"></button>
<?php
    }
}else{
    
?>

<div class="container">
    <div class=" col-sm-6 col-lg-6" id="event">Inscription</div>
        <div class="col-sm-6 col-lg-6">
    <div class="row">
        
        <div class="col-lg-6">
<form METHOD="Post" >
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nom</label>
    <input type="text" name="nom" class="form-control" placeholder="Nom">
  </div>
    
    <div class="form-group">
    <label for="exampleInputPassword1">Prenom</label>
    <input type="text" name="prenom" class="form-control" placeholder="Prenom">
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Age</label>
    <input type="number" name="age" class="form-control" placeholder="Age">
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Ville</label>
    <textarea class="form-control" name="ville" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button name="submit" type="submit" class="btn btn-primary">Valider</button>
</form>
        </div>
        <div class="col-lg-6"></div>
    </div>
</div>
<?php 
}
    require_once("footer.php");
?>
<?php 
    $pageencours= "contact";
    require_once("header.php");
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
<form METHOD="Post" action="mail_envoi.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nom</label>
    <input type="text" name="nom" class="form-control" placeholder="Nom">
  </div>
    
    <div class="form-group">
    <label for="exampleInputPassword1">Sujet</label>
    <input type="text" name="sujet" class="form-control" placeholder="sujet">
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
        <div class="col-lg-6">
        
        
        
        </div>
    </div>
</div>
<?php 
    require_once("footer.php");
?>
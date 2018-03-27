<?php
    $pageencours = "actu";
    require_once("header.php");
    require_once("connect-db.php");
    require_once("manager-db.php");
    $lesArticles = getArticles();
?>


<div class="container" id="pres">
    <div class="col-sm-6 col-lg-2" id="events">Actualités</div>
            <div class="col-sm-6 col-lg-10"></div>
    
    <?php foreach($lesArticles as $valeur):?>
            <div class="row artpage">                
                <div class="col-sm-12 col-lg-4">
                    <?php echo "<img src=".$valeur->ImagePrincipale. " width=100%>" ?>    
                </div>
                
                <div class="col-sm-12 col-lg-8" >
                        <div class="col-lg-12"><h2>
                            <?php echo $valeur->Titre; ?></h2></div>
                        <div class="col-lg-12">        
                    <p>
                       <?php echo $valeur->ContenuPrincipal;?> 
                        </p>
                        </div>
<!--
                    <form method="GET" action="Article.php">
                     <?php echo "<input name=".$valeur->id." type=hidden value=".$valeur->id." />"; ?>    
                    <input type="submit" class="butt" value="En Savoir Plus"> 
                    </form>
-->
                   
                </div> 
            </div>
  <?php endforeach; ?>
    
</div>



<?php
    require_once("footer.php");
?>

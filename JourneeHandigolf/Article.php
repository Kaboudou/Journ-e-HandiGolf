<?php
    $pageencours = "actu";
    require_once("header.php");
    require_once("connect-db.php");
    require_once("manager-db.php");
    $UnArticle = getArticleById($article = $_GET["name"]); 
    var_dump($UnArticle);
?>
<?php if(isset($_GET['En Savoir Plus'])): ?>
   
<div class="container" id="pres">
<?php foreach($UnArticle as $valeur):?>
    <div class="col-sm-6 col-lg-2" id="events"><?php echo $valeur->Titre; ?></div>
   
            <div class="col-sm-6 col-lg-10"></div>
            <div class="row artpage">                
                <div class="col-sm-12 col-lg-4">
                    <?php echo "<img src=".$valeur->ImagePrincipale. " width=100%>"?>     
                </div>
                
                <div class="col-sm-12 col-lg-8" >  
                    <div class="col-sm-10 col-lg-12">
                        <h2>
                        <?php echo $valeur->Titre;?>
                        </h2>
                    </div>
                    
                    <div class="col-sm-12 col-lg-12">  
                    <p>
                       <?php echo $valeur->ContenuPrincipal;?> 
                        
                    </p>
                        </div>
                    
                    <button type="button" class="btn">En Savoir Plus</button>
                </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
</div>






<?php
    require_once("footer.php");
?>

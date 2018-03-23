    <?php 
    $pageencours = "home";
    require_once("header.php");
?>
<!--    <div class="page" id="page">-->
        <!--<ol class="breadcrumb">
            <li class="breadcrumb-item ">Home</li>
            <li class="breadcrumb-item active">pagetest</li>
        </ol>
        -->
        <div class="container" id="pres">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 slide">
                   <div id="slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid d-block w-100" src="img/photoevenement.png" alt="Bienvenue" >
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-fluid d-block w-100" src="img/evecouleur.png" alt="Bienvenue2" >
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev"><span class="carousel-control-prev-icon" area-hidden="true"></span><span class="sr-only">Previous</span>
        </a><a class="carousel-control-next" href="#slider" role="button" data-slide="next"><span class="carousel-control-next-icon" area-hidden="true"></span><span class="sr-only">Next</span>
        </a>
    </div>
                </div>
                <div class=" col-sm-0 col-md-0 col-lg-1"></div>
                <div class="col-sm-12 col-lg-5" > 
                    <div class="row">
                        <div class=" col-sm-6 col-lg-6" id="event">Événement</div>
                        <div class="col-sm-6 col-lg-6"></div>
<!--                        <div class="row">-->
                        <h1 class="col-sm-5 col-lg-8" id="collo">Colloque Handigolf</h1>
                        <div class="col-sm-5 col-lg-4" > 14 avril 2017</div>
<!--                        </div>-->
                        
                        <div class="col-lg-12">
                        
                    <p>Bienvenue sur le site de la colloque "Golf pour tous, par tous.Le golf accessible à tous" Vous pourez trouver toutes les informations concernant l'evenement qui aura lieu le 14 avril 2018 au golf national de Saint-Qunetin-en-Yveline. </p>
                        </div>
                    </div>
                    <a href="Encours.php">
                    <button type="button"  id="inscription" class=" col-sm-6 col-lg-5">INSCRIPTION</button>
                    </a> 
                    <div class="col-lg-1 col-sm-0"></div>
                    <a href="Encours.php">
                    <button type="button"  class="inscription col-sm-6 col-lg-5" >INFORMATION</button>
                    </a>
                    
                </div>
                </div>
        </div>
    <div class="container box-search" id="actus">
            <div class="row">
                <div class="col-sm-6 col-lg-2" id="events">Actualités</div>
                <div class="col-sm-6 col-lg-10"></div>
                
                    <div class="col-sm-11 col-md-11  col-lg-4  articles">
                        <img  src="img/photo%20actu1.png" alt="Golfeur" class="img-responsive">  
                        <div class="row">

                        <div class="col-lg-4 titre">
                            <p>Club de golf</p>
                        </div>
                        <div class="col-lg-4 titre">
                            
                        </div>
                        
                        <div class="col-lg-4 date">
                            <p> dd-mm-yy</p>
                            
                        </div>
                        <div class="col-lg-12">
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec fermentum urna. Phasellus augue lacus, vestibulum non viverra congue, placerat vel erat. Integer ac est ut purus tincidunt imperdiet.</p>
                            
                        </div>
                         <a href="Encours.php">
                             <button type="button"  class="col-lg-11 butt">INFORMATION</button>
                        </a>   
                        </div>
                    </div>
                
                <div class="col-sm-11 col-md-11 col-lg-4 articles ">
                        <img src="img/actu%202.png" alt="Caddie de golf">
                    <div class="row">

                        <div class="col-lg-4 titre">
                            <p>Club de golf</p>
                        </div>
                        <div class="col-lg-4 titre">
                            
                        </div>
                        <div class="col-lg-4 date">
                            <p> dd-mm-yy</p>
                            
                        </div>
                        <div class="col-lg-12">
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec fermentum urna. Phasellus augue lacus, vestibulum non viverra congue, placerat vel erat. Integer ac est ut purus tincidunt imperdiet.</p>
                            
                        </div>
                         <a href="Encours.php">
                             <button type="button"  class=" col-lg-11 butt">INFORMATION</button>
                        </a>   
                        </div>
                    </div>
                
                
                <div class="col-sm-11 col-md-11  col-lg-4 articles ">
                        <img src="img/actu%203.png" alt="Green de Golf">
                    <div class="row">

                        <div class="col-lg-4 titre">
                            <p>Club de golf</p>
                        </div>
                        <div class="col-lg-4 titre">
                            
                        </div>
                        
                        <div class="col-lg-4 date">
                            <p> dd-mm-yy</p>
                            
                        </div>
                        <div class="col-lg-12">
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec fermentum urna. Phasellus augue lacus, vestibulum non viverra congue, placerat vel erat. Integer ac est ut purus tincidunt imperdiet.</p>
                            
                        </div>
                         <a href="Encours.php">
                             <button type="button"  class="col-lg-11 butt">INFORMATION</button>
                        </a>   
                        </div>
                    </div> 
                </div>
            </div>
      
<?php 
    require_once("footer.php");
?>
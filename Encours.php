<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--
    Lien permettant de charger les ccs bootstrap et les polices Unna et Yantramanav
    -->
    <link rel="stylesheet" href='css/bootstrap.min.css' >
    <!--<link rel="stylesheet" href="css/bootstrap-grid.min.css" >
    <link rel="stylesheet" href='css/bootstrap-reboot.min.css' >-->
    <link rel="stylesheet" href="css/stylesheetV3.css?t=<?php echo time(); ?>" >
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Unna|Unna:b">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yantramanav|Yantramanav:b">
<title>Journée Handigolf</title>
</head>
<body id="encours">
<!--    Debut du menu-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light header">
<!--        ajout du logo-->
        <a class="navbar-brand" href="#"><img src="img/eighteen.png" alt="Logo journée Handigolf" width="30px">
            </a>
<!--        Bouton du menu en responsive-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
<!--        fin du bouton -->
<!--        Different onglet du menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="nav navbar-nav menu">
                <ul class="navbar-nav">
                    <li <?php if($pageencours =="home"){?>  class="nav-item active" <?php }else{?> class="nav-item"<?php } ?> >
            <a class="nav-link" href="homeV5.php">ACCEUIL<span class="sr-only">(current)</span></a>
                    </li>
                    <li <?php if($pageencours =="event"){?>  class="nav-item active" <?php }else{?> class="nav-item"<?php } ?> >
            <a class="nav-link" href="#">EVENEMENT</a>
                    </li>
                    <li <?php if($pageencours =="actu"){?> class="nav-item active" <?php }else{?> class="nav-item"<?php }?> >
            <a class="nav-link" href="Actualit%C3%A9.php">ACTUALITES</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" id="research"  href="#navbarSearch" onclick="$('#research').hide();" data-toggle="collapse" data-target="#navbarSearch" data-label-expanded="Close">RECHERCHE</a>
                    </li>
<!--                    Form de recherche hide -->
                    <div class="collapse " id="navbarSearch">

                    <form class="input-group form-inline my-2 my-lg-0">
                    <input class="form-control" type="search" data-input="quick-search" data-search-target="#page div > text" name="quick-search"placeholder="Search" aria-label="Search">
                        <span class="input-group-btn">
                    <button class="btn btn-outline-success " type="submit">Search</button></span>
                    </form>

                    </div>
<!--                    fin de la recherche -->
                </ul>
            </div>   
        </div>
<!--    fin des onglet-->
    </nav>
<!--    Fin du menu-->
<div>
    <p id="developpement">En cours de construction</p>
    </div>

<footer style="position:absolute;bottom:0">
   <div class="container">
        <div class="row">
            
            <div class="col-lg-3">
                <a href="Partenaire.php">
                    <p>Partenaires</p>
                </a>
            </div>
            <div class="col-lg-3"><a href="#">
                <p>Mentions Légales</p></a>
            </div>
            <div class="col-lg-3">
                <a href="Encours.php">
                    <p>Contact</p>
                </a>
            </div>
        </div>    
    </div>
</footer>

<!-- En cas de problème avec les fichier jquery et popper JS utiliser ces liens
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

<!--
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
   <script type="text/javascript" src="js/myscript.js"></script>
-->

</body>
</html>

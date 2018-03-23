<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--
    Lien permettant de charger les ccs bootstrap et les polices Unna et Yantramanav
    -->
    <link rel="stylesheet" href='css/bootstrap.min.css' type="text/css" >
<!--    <link rel="stylesheet" href='css/example.css' type="text/css" >-->
<!--    <link href="css/jquery.socialfeed.css" rel="stylesheet" type="text/css">-->
    <!--<link rel="stylesheet" href="css/bootstrap-grid.min.css" >
    <link rel="stylesheet" href='css/bootstrap-reboot.min.css' >-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesheetV3.css?t=<?php echo time(); ?>" type="text/css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Unna|Unna:b">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yantramanav|Yantramanav:b">
<title>Journée Handigolf</title>
</head>
<body>
<!--    Debut du menu-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light header">
<!--        ajout du logo-->
        <a class="navbar-brand" href="#"><img src="img/Fichier%202.png" alt="Logo journée HandiGolf" width="100px">
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
            <a class="nav-link" href="homeV6.php">ACCUEIL <span class="sr-only">(current)</span></a>
                    </li>
                    <li <?php if($pageencours =="event"){?>  class="nav-item active" <?php }else{?> class="nav-item"<?php } ?> >
            <a class="nav-link" href="evenement.php">EVENEMENT</a>
                    </li>
                    <li <?php if($pageencours =="actu"){?> class="nav-item active" <?php }else{?> class="nav-item"<?php }?> >
            <a class="nav-link" href="Actualit%C3%A9.php">ACTUALITES</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" id="research"  href="#navbarSearch" onclick="$('#research').hide();" data-toggle="collapse" data-target="#navbarSearch" data-label-expanded="Close">RECHERCHE
                            </a>
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
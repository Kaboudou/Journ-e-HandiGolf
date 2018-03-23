<?php
    $pageencours = "actu";
    require_once("header.php");
    
?>

<div class="container" id="pres">
    <div class="col-sm-6 col-lg-2" id="events">Actualités</div>
    <?php for($id=0;$id<3;$id++){ ?>
            <div class="col-sm-6 col-lg-10"></div>
            <div class="row artpage">                
                <div class="col-sm-12 col-lg-4">
                    <img src="img/photoevenement.png" width="100%">
                    
                </div>
                
                <div class="col-sm-12 col-lg-8" > 
                    
                        
                        <div class="col-sm-10 col-lg-12"><h2>Plus que quelques mois avant la Ryder Cup</h2></div>

                        
                        <div class="col-sm-12 col-lg-12">
                        
                    <p>
                Nous sommes à J-195 du coup d’envoi de la Ryder Cup, compétition de golf, qui fait vibrer les terrains de golf depuis plus d’un siècle.<br>
                <strong>Qu’est-ce que la Ryder Cup ?</strong><br>
                La Ryder Cup est une compétition de golf qui récompense le vainqueur d’un match opposant*
                une équipe européenne à une équipe américaine. Ces rencontres ont lieu successivement tous
                les deux ans en Amérique puis en Europe.
                En septembre prochain, c’est le Golf National de Saint-Quentin- en-Yvelines qui accueillera la
                compétition. Son panorama spectaculaire peut accueillir 80 000 spectateurs qui seront en
                mesure de profiter d’une expérience inégalée.
                En attendant de découvrir le coup d’envoi du départ, le Golf National vous ouvre ses portes le
                samedi 14 avril 2018 pour une journée « colloque sur le golf pour tous et par tous ».</p>
                            
                            
                        </div>
                    
                    
                </div>
    </div>
    <?php } ?>
</div>






<?php
    require_once("footer.php");
?>

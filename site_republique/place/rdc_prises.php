<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <title>RDC</title>
</head>

    <body>
    <div class="titre_index">
     <h1>GESTION DES BRASSAGES RESEAUX <div class="titre_page">(Site République)</div></h1>
        </div>
    
      <div class="sidenav">
       <a href="../site_republique.php"><img class="retour" src="../../img/icone_retour.png"></a>
      <center><img class="logo_site" src="../../img/logo_esic.png"></center>
       <p class="selection">Selectionnez un niveau:</p>
        
    
            
        <a href="accueil_prise.php">ACCUEIL</a>
       <a href="rdc_prises.php">RDC</a>
        <a href="bureaux_1er.php">1er ETAGE</a>
        <a href="bureaux_2eme.php">2eme ETAGE</a>
        <a href="sdr_3eme.php">3eme ETAGE</a>
       <a href="../search.php"> <img class="search" src="../../img/icone_search.png"></a>
       <a href="../add/add_prise.php"><img class="ajout_prise" src="../../img/icone_ajout.png"></a>
    </div>
       
            <h2>Selectionnez une categorie d'emplacement</h2>
        <section>
            <ul>
            <!-- Lien d'envoi vers le fichier "bureaux_rdc.php -->
           <li> <a href = "bureaux_rdc.php" class="emplacement">Bureaux</a></li>
        <?php
            session_start();

            include('../connexion/connexion_emplacement.php'); //Connexion DB à la table prise
            //Préparation des requete afin de récupérer les informations sur la salle de réunion et la salle technique relevant du RDC
            $sdr = $objetPdo->prepare('SELECT id_emplacement FROM emplacement WHERE type_emplacement LIKE "Salle de reunion" AND etage_emplacement LIKE "RDC" ');
            $st = $objetPdo->prepare('SELECT id_emplacement FROM emplacement WHERE type_emplacement LIKE "Salle technique" AND etage_emplacement LIKE "RDC" ');
            //Execution des requetes
            $executeIsOk = $sdr->execute();
            $executeIsOk2 = $st->execute();
            //Stockage des résultats dans les variable
            $emplacements= $sdr->fetchAll();
            $emplacements2= $st->fetchAll();
            //Boucle foreach pour afficher la salle de réunion "langevin" dans la liste
            foreach ($emplacements as $emplacement): 
        ?>
                
            
                <li><a href="../change/list_changesr0.php?numemplacement=<?= $emplacement['id_emplacement']?>"class="emplacement"><?= $emplacement['id_emplacement']?></a></li>
                

                
        <?php endforeach; ?> 
            
        <?php 
        //Boucle foreach pour afficher la salle serveur dans la liste
            foreach ($emplacements2 as $emplacement2): 
        ?>
                
            
                <li><a href="../change/list_changesr0.php?numemplacement=<?= $emplacement2['id_emplacement']?>" class="emplacement"><?= $emplacement2['id_emplacement']?></a></li>

                
        <?php endforeach; ?> 
            
        <br>
            </ul>
            </section>   
        
    </body>
    <!-- Developpé par Jeremy LATCHOUMANINCHETTY -->
</html>
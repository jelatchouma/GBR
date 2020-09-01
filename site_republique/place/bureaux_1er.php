<!DOCTYPE HTML>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../css/style.css">
        <title>Bureaux 1er</title>
    </head>

    <?php
        session_start();
        //Connexion DB à la emplacement
        include('../connexion/connexion_emplacement.php'); 
        //Preparation de la requête afin de selectionner toute les bureaux relevant du 1er etage
        $pdoStat = $objetPdo->prepare('SELECT id_emplacement FROM emplacement WHERE type_emplacement LIKE "Bureau" AND etage_emplacement LIKE "Etage01" ');
        //Execution de la requête
        $executeIsOk = $pdoStat->execute();
        //Stockage du résultat dans le variable "$emplacements"
        $emplacements= $pdoStat->fetchAll();
    ?>

    <body>
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
            <div class="titre_index">
            <h1>Selectionnez un bureau du 1er etage</h1>
        </div>
            <div class="galerie">
                <!-- Boucle foreach pour afficher les bureaux relevant du 1er etage dans la liste -->
                <?php foreach ($emplacements as $emplacement): ?>
                    
                        <a class="box" href="../change/list_changeb1.php?numemplacement=<?= $emplacement['id_emplacement']?>"><?= $emplacement['id_emplacement']?></a>
                    
                <?php endforeach; ?> 
            <br>
        </div>
                <a href = "../site_republique.php">Retour</a>
        
    </body>
<!-- Developpé par Jeremy LATCHOUMANINCHETTY -->
</html>
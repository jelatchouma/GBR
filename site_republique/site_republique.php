<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Site Republique</title>
</head>
<?php
        session_start();

        include('connexion/connexionDB.php'); //Connexion DB via le fichier connexion.php

        //Prepation de la requete afin de selectionner uniquement les prises ayant éléments dans la colonne "observation_prise"
        $pdoNum= $objetPdo->prepare('SELECT id_prise, etat_fonct, etat_brassage, lieu_prise1, lieu_prise2, lieu_prise3, lieu_prise4, 
        lieu_prise5, lieu_prise6, lieu_prise7, cable_connect, observation_prise FROM prise WHERE NOT observation_prise = ""');

        //Execution de la requete
        $executeIsOk = $pdoNum->execute();
        //Recuperation du résultat de la requete dans une variable
        $prises = $pdoNum->fetchAll();
    ?>

<body>

    <!-- Navigation principal -->
<div class="titre_index">

    <h1>GESTION DES BRASSAGES RESEAUX <div class="titre_page">(Site République)</div></h1>
    </div>
    
    <nav class="sidenav">
       <a href="../sites.php"><img class="retour" src="../img/icone_retour.png"></a>
      <center><img class="logo_site" src="../img/logo_esic.png"></center>
       <p class="selection">Selectionnez un niveau:</p>
        
    
            
        <a href="place/accueil_prise.php">ACCUEIL</a>
       <a href="place/rdc_prises.php">RDC</a>
        <a href="place/bureaux_1er.php">1er ETAGE</a>
        <a href="place/bureaux_2eme.php">2eme ETAGE</a>
        <a href="place/sdr_3eme.php">3eme ETAGE</a>
       <a href="search.php"> <img class="search" src="../img/icone_search.png"></a>
       <a href="add/add_prise.php"><img class="ajout_prise" src="../img/icone_ajout.png"></a>
    </nav>


    <!-- Section d'intervention nécessaire -->
    <center>
        
            <h2>Intervention(s) ou inventaire(s) nécessaire(s)</h2>
            <section>
            <table>
                <tr >
                    <th >ID</th>
                    <th>ETAT DE FONCTIONNEMENT</th>
                    <th>ETAT DE BRASSAGE</th>
                    <th>CÂBLE CONNECTE</th>
                    <th>EMPLACEMENT</th>
                    <th>OBSERVATIONS</th>
                    <th>MAJ</th>
                </tr>
                <?php foreach ($prises as $prise): ?>
                <tr>
                    <td><?= $prise['id_prise']?></td>
                    <td><?= $prise['etat_fonct'] ?></td>
                    <td><?= $prise['etat_brassage'] ?></td>
                    <td><?= $prise['cable_connect'] ?></td>
                    <td><?= $prise['lieu_prise1'] ?><?= $prise['lieu_prise2'] ?><?= $prise['lieu_prise3'] ?><?= $prise['lieu_prise4'] ?>
                        <?= $prise['lieu_prise5'] ?><?= $prise['lieu_prise6'] ?><?= $prise['lieu_prise7'] ?></td>
                    <td><?= $prise['observation_prise'] ?></td>
                    <td ><a class="maj" href="change/form_change.php?numprise=<?= $prise['id_prise'] ?>">Mettre à jour</a></td>
                </tr>
                <?php endforeach; ?>
            </table>
            </section>
            
        
    </center>
</body>
<!-- Developpé par Jeremy LATCHOUMANINCHETTY -->

</html>

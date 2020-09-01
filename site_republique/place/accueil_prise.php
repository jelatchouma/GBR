<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Prises de l'accueil</title>
</head>

<?php
        session_start();
        //Connexion DB à la table prise
        include('../connexion/connexion_prise.php'); 
        //Préparation de la requete afin de récupérer les informations sur les prises relevant de l'accueil
        $pdoStat = $objetPdo->prepare('SELECT id_prise, etat_fonct, etat_brassage, cable_connect FROM prise WHERE lieu_prise3  ="Accueil"');
        //Execution de la requete 
        $executeIsOk = $pdoStat->execute();
        //Stockage du résultat dans la variable "$prises"
        $prises = $pdoStat->fetchAll();
    ?>

<body>

    <nav class="sidenav">
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
    </nav>

    <div class="titre_index">
        <h1>GESTION DES BRASSAGES RESEAUX <div class="titre_page">(Site République)</div>
        </h1>
    </div>
    <h2>Prises de l'accueil</h2>


    <section>
       
        
        <table class="accueil">

            <!--Boucle pour afficher les prises de l'accueil dans la liste-->
            <?php foreach ($prises as $prise): ?>
            <tr>
                <!-- Selection des informations à afficher pour les prises-->
                <td><?= $prise['id_prise']?> <?= $prise['etat_fonct'] ?></td>
                <td><?= $prise['etat_brassage'] ?> <?= $prise['cable_connect'] ?></td>
                <!--Création du lien de renvoi vers le fichier "form_change.php"-->
                <td> <a href="../change/form_change.php?numprise=<?= $prise['id_prise'] ?>"  class="maj" >Modifier</a></td>
            </tr>

            <?php endforeach; ?>
            <br>
        </table>
    </section>




</body>
<!-- Developpé par Jeremy LATCHOUMANINCHETTY -->

</html>

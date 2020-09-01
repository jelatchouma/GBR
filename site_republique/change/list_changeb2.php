<!DOCTYPE HTML>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../css/style.css">
        <title>Modification de la prise</title>
    </head>

    <!-- Ce fichier php sert à lister les bureaux du 2eme etage -->
    <?php
    
    session_start();

    include('../connexion/connexion_prise.php'); //Connexion DB à la table prise

    //Préparations des requetes 
    $pdoNum= $objetPdo->prepare('SELECT id_prise, etat_fonct, etat_brassage, cable_connect, observation_prise FROM prise WHERE lieu_prise7 = :num');
    //Attribution d'une valeur au marqueur ":num"
    $pdoNum->bindValue(':num', $_GET['numemplacement'], PDO::PARAM_STR);
    //Execution de la requete
    $executeIsOk = $pdoNum->execute();
    //Stockage du résultat dans la variable "$prises"
    $prises = $pdoNum->fetchAll();

    ?>

    <body>
       <div class="titre_index">

    <h1>GESTION DES BRASSAGES RESEAUX <div class="titre_page">(Site République)</div></h1>
    </div>
    
    <nav class="sidenav">
       <a href="../place/bureaux_2eme.php"><img class="retour" src="../../img/icone_retour.png"></a>
      <center><img class="logo_site" src="../../img/logo_esic.png"></center>
       <p class="selection">Selectionnez un niveau:</p>
        
    
            
        <a href="place/accueil_prise.php">ACCUEIL</a>
       <a href="place/rdc_prises.php">RDC</a>
        <a href="place/bureaux_1er.php">1er ETAGE</a>
        <a href="place/bureaux_2eme.php">2eme ETAGE</a>
        <a href="place/sdr_3eme.php">3eme ETAGE</a>
       <a href="search.php"> <img class="search" src="../../img/icone_search.png"></a>
       <a href="add/add_prise.php"><img class="ajout_prise" src="../../img/icone_ajout.png"></a>
    </nav>
       
            <!-- Recupération de l'emplacement dans le titre de la page -->
            <h2>Prises réseau de <?= $_GET['numemplacement'] ?></h2>
            <section>
            <table>
                    <tr>
                        <th>ID</th>
                        <th>ETAT DE FONCTIONNEMENT</th>
                        <th>ETAT DE BRASSAGE</th>
                        <th>CÂBLE CONNECTE</th>
                        <th>OBSERVATIONS</th>
                        <th>MODIFICATION</th>
                    </tr>
            <!-- Boucle foreach afin d'afficher les prises de l'emplacement concerné -->
            <?php foreach ($prises as $prise): ?>
            <!-- Affichage des prises et des informations nécessaire -->
                    <tr>
                        <th><?= $prise['id_prise']?></th>
                        <th><?= $prise['etat_fonct'] ?></th>
                        <th><?= $prise['etat_brassage'] ?></th>
                        <th><?= $prise['cable_connect'] ?></th> 
                        <th><?= $prise['observation_prise'] ?></th>
                        <th><a href="form_change.php?numprise=<?= $prise['id_prise'] ?>" class="maj">Modifier</a></th> <!--Renvoi vers le formulaire de modification "form_change.php" avec récupération de l'id d'emplacement --> 
                    </tr>
                <?php endforeach; ?> 
            </table>
            </section>
            <br>
                <a href = "../place/bureaux_2eme.php">Retour</a>
       
    </body>
    <!-- Developpé par Jeremy LATCHOUMANINCHETTY -->
</html>
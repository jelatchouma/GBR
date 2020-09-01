<!DOCTYPE HTML>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../css/style.css">
        <title>Modification de la prise</title>
    </head>
    <body>
        <div class="titre_index">
     <h1>GESTION DES BRASSAGES RESEAUX <div class="titre_page">(Site République)</div></h1>
        </div>
    
      <div class="sidenav">
       <a href="../site_republique.php"><img class="retour" src="../../img/icone_retour.png"></a>
      <center><img class="logo_site" src="../../img/logo_esic.png"></center>
       <p class="selection">Selectionnez un niveau:</p>
        
    
            
        <a href="../place/accueil_prise.php">ACCUEIL</a>
       <a href="../place/rdc_prises.php">RDC</a>
        <a href="../place/bureaux_1er.php">1er ETAGE</a>
        <a href="../place/bureaux_2eme.php">2eme ETAGE</a>
        <a href="../place/sdr_3eme.php">3eme ETAGE</a>
       <a href="../search.php"> <img class="search" src="../../img/icone_search.png"></a>
       <a href="../add/add_prise.php"><img class="ajout_prise" src="../../img/icone_ajout.png"></a>
    </div>
       
        <center>
            <?php
                //Connexion à la BDD
                $objetPdo = new PDO('mysql:host=localhost;dbname=brassage_dieccte','root' ,'');
                //Préparation de la requete pour le mise à jour de la prise concerné
                $pdoStat = $objetPdo->prepare('UPDATE prise set etat_fonct=:etat_fonct, etat_brassage=:etat_brassage, lieu_prise1=:lieu_prise1, lieu_prise2=:lieu_prise2, lieu_prise3=:lieu_prise3, 
                lieu_prise4=:lieu_prise4, lieu_prise5=:lieu_prise5, lieu_prise6=:lieu_prise6, lieu_prise7=:lieu_prise7, cable_connect=:cable_connect, observation_prise=:observation_prise WHERE id_prise = :num LIMIT 1');

                //Liaison de chaque marqueur à une valeur
                $pdoStat->bindValue(':num', $_POST['numprise'], PDO::PARAM_STR);
                $pdoStat->bindValue(':etat_fonct' , $_POST['etatfonctionnement'], PDO::PARAM_STR);
                $pdoStat->bindValue(':etat_brassage' , $_POST['etatbrassage'], PDO::PARAM_STR);
                $pdoStat->bindValue(':lieu_prise1' , $_POST['lieuprise1'], PDO::PARAM_STR);
                $pdoStat->bindValue(':lieu_prise2' , $_POST['lieuprise2'], PDO::PARAM_STR);
                $pdoStat->bindValue(':lieu_prise3' , $_POST['lieuprise3'], PDO::PARAM_STR);
                $pdoStat->bindValue(':lieu_prise4' , $_POST['lieuprise4'], PDO::PARAM_STR);
                $pdoStat->bindValue(':lieu_prise5' , $_POST['lieuprise5'], PDO::PARAM_STR);
                $pdoStat->bindValue(':lieu_prise6' , $_POST['lieuprise6'], PDO::PARAM_STR);
                $pdoStat->bindValue(':lieu_prise7' , $_POST['lieuprise7'], PDO::PARAM_STR);
                $pdoStat->bindValue(':cable_connect' , $_POST['cableconnect'], PDO::PARAM_STR);
                $pdoStat->bindValue(':observation_prise' , $_POST['observationprise'], PDO::PARAM_STR);
        

                //Execution de la requete
                $executeIsOk = $pdoStat->execute();

                //Paramètrage de la condition "if"
                if($executeIsOk){
                    $message = 'La prise a été modifié.';
                }else{
                    $message = 'Echec de modification de la prise !';
                }
            ?>

            <h2>Modification de la prise</h2>
            <!--Renvoi du résultat de la requete -->
            <p class="message"><?= $message ?></p>

            
        </center>
    </body>
    <!-- Developpé par Jeremy LATCHOUMANINCHETTY -->
</html>
    
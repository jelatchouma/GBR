<!DOCTYPE HTML>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter une prise réseau</title>    
</head>

<?php
//Connexion DB 
session_start();

    include('../connexion/connexion_prise.php');

//Préparation d'insertion à la table
$pdoStat = $objetPdo->prepare("INSERT INTO prise (id_prise, etat_fonct, etat_brassage, lieu_prise1, lieu_prise2, lieu_prise3, lieu_prise4, lieu_prise5, lieu_prise6, lieu_prise7, cable_connect, observation_prise) 
VALUES(:id_prise, :etat_fonct, :etat_brassage, :lieu_prise1, :lieu_prise2, :lieu_prise3, :lieu_prise4, :lieu_prise5, :lieu_prise6, :lieu_prise7, :cable_connect, :observation_prise)");


//Liaison de chaque marqueur à une valeur
$pdoStat->bindValue(':id_prise' , $_POST['idprise'], PDO::PARAM_STR);
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

//Vérification avant renvoi
$insertIsOk = $pdoStat->execute();

//Conditions de renvoi
if($insertIsOk){
    
    $message = 'La prise a été ajouté à la base de donnée';
}

else{
    
    $message = 'Echec de l/ajout ! La prise est déjà renseignée dans la base ou une erreur est apparue dans celle-ci.';
}
  ?>

<!--titre de la page et renvoi de requête-->
<body>
  
    <center><h1>Ajout de prise réseau</h1></center>
    
    <center><p><?php echo $message; ?></p></center>
    
    <center>
        <p>
             <a href="add_prise.php">Retour</a>
        </p>
    </center>
</body>
</html>
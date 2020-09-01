<?php
//Connexion DB 
$objetPdo = new PDO('mysql:host=localhost;dbname=brassage_dieccte' , 'root','');

//Préparation d'insertion à la table
$pdoStat = $objetPdo->prepare("INSERT INTO emplacement (id_emplacement, etage_emplacement, type_emplacement) VALUES(:id_emplacement, :etage_emplacement, :type_emplacement)");

//Liaison de chaque marqueur à une valeur
$pdoStat->bindValue(':id_emplacement' , $_POST['idemplacement'], PDO::PARAM_STR);
$pdoStat->bindValue(':etage_emplacement' , $_POST['etageemplacement'], PDO::PARAM_STR);
$pdoStat->bindValue(':type_emplacement' , $_POST['typeemplacement'], PDO::PARAM_STR);
$insertIsOk = $pdoStat->execute();

if($insertIsOk){
    
    $message = 'Emplacement ajouté à la base de donnée';
}

else{
    
    $message = 'Echec de l/ajout ! Emplacement déjà existant dans la base ou une erreur est apparue dans celle-ci.';
}
  ?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un emplacement</title>
</head>

<body>

    <center>
        <h1>Ajout d'emplacement'</h1>
    </center>

    <center>
        <p><?php echo $message; ?></p>
    
    <p>
         <a href=javascript:history.go(-1)>Retour</a>
    </p>
    </center>
</body>

</html>

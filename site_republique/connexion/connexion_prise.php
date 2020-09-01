<?php

//Connexion à la BDD "brassage_dieccte"
$objetPdo = new PDO('mysql:host=localhost;dbname=brassage_dieccte','root' ,'');

//Selection de la table prise
$pdoStat = $objetPdo->prepare('SELECT * FROM prise');

?>
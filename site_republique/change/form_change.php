<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Modification de la prise</title>
</head>

<?php
    //Connexion BDD
    $objetPdo = new PDO('mysql:host=localhost;dbname=brassage_dieccte','root' ,'');

    //Préparations des requetes 
    $pdoNum = $objetPdo->prepare('SELECT * FROM prise WHERE id_prise = :num'); //recuperation de l'id de la prise à modifier
    $pdoStat = $objetPdo->prepare('SELECT id_emplacement, type_emplacement FROM emplacement WHERE type_emplacement ="Salle de reunion"');
    $pdoStat2= $objetPdo->prepare('SELECT id_emplacement, type_emplacement FROM emplacement WHERE type_emplacement ="Salle technique"');
    $pdoStat3= $objetPdo->prepare('SELECT id_emplacement, type_emplacement FROM emplacement WHERE type_emplacement ="Accueil"');
    $pdoStat4= $objetPdo->prepare('SELECT id_emplacement, type_emplacement FROM emplacement WHERE type_emplacement ="Couloir"');
    $pdoStat5= $objetPdo->prepare('SELECT id_emplacement, type_emplacement FROM emplacement WHERE type_emplacement ="Bureau" AND etage_emplacement ="RDC"');
    $pdoStat6= $objetPdo->prepare('SELECT id_emplacement, type_emplacement FROM emplacement WHERE type_emplacement ="Bureau" AND etage_emplacement ="Etage01"');
    $pdoStat7= $objetPdo->prepare('SELECT id_emplacement, type_emplacement FROM emplacement WHERE type_emplacement ="Bureau" AND etage_emplacement ="Etage02"');

    
    //Attribution de valeur
    $pdoNum->bindValue(':num', $_GET['numprise'], PDO::PARAM_STR); //attribution de valeur au paramètre :num


    //Execution de la requete
    $executechange = $pdoNum->execute();
    $executeIsOk = $pdoStat->execute(); 
    $executeIsOk2 = $pdoStat2->execute();
    $executeIsOk3 = $pdoStat3->execute();
    $executeIsOk4 = $pdoStat4->execute();
    $executeIsOk5 = $pdoStat5->execute();
    $executeIsOk6 = $pdoStat6->execute();
    $executeIsOk7 = $pdoStat7->execute();
  

    //Récupération des résultats
    $prise = $pdoNum->fetch();
    $reunions = $pdoStat->fetchAll();
    $techniques = $pdoStat2->fetchAll();
    $accueils = $pdoStat3->fetchAll();
    $couloirs = $pdoStat4->fetchAll();
    $bureaux = $pdoStat5->fetchAll();
    $bureaux1 = $pdoStat6->fetchAll();
    $bureaux2 = $pdoStat7->fetchAll();

?>

<body>
    <div class="titre_index">

        <h1>GESTION DES BRASSAGES RESEAUX <div class="titre_page">(Site République)</div>
        </h1>
    </div>

    <nav class="sidenav">
        <a href="javascript:history.back(-1)"><img class="retour" src="../../img/icone_retour.png"></a>
        <center><img class="logo_site" src="../../img/logo_esic.png"></center>
        <p class="selection">Selectionnez un niveau:</p>



        <a href="../place/accueil_prise.php">ACCUEIL</a>
        <a href="../place/rdc_prises.php">RDC</a>
        <a href="../place/bureaux_1er.php">1er ETAGE</a>
        <a href="../place/bureaux_2eme.php">2eme ETAGE</a>
        <a href="../place/sdr_3eme.php">3eme ETAGE</a>
        <a href="../search.php"> <img class="search" src="../../img/icone_search.png"></a>
        <a href="../add/add_prise.php"><img class="ajout_prise" src="../../img/icone_ajout.png"></a>
    </nav>
    <section class="local_prise">

        <form  action="change.php" method="post">

            <input type="hidden" name="numprise" value="<?= $prise['id_prise']?>">

            <h4>Modifier la prise <?php echo $prise['id_prise']?></h4>
            <h5>Localisation de la prise</h5>
            <!--Champ récupérant les informations de la colonne "lieu_prise" si celle-ci releve d'une salle de réunion-->
            
               <div id="col">
                    <label for="lieu_prise1">Salle de réunion</label>
                    <select class="select" id="lieu_prise1" type="text" name="lieuprise1">
                        <option><?= $prise['lieu_prise1']?></option>
                        <option value="">Choisir un élément</option>

                        <!--Boucle pour afficher les emplacement dans le champ déroulant-->
                        <?php foreach ($reunions as $reunion): ?>

                        <!--Définition de la variable-->
                        <option>
                            <?= $reunion['id_emplacement'] ?>
                        </option>
                        <?php endforeach; ?>

                    </select><br/>
                
                <!--Champ récupérant les informations de la colonne "lieu_prise" si celle-ci releve d'une salle technique-->

                
                    <label for="lieu_prise2">Salle technique</label>
                    <select class="select" id="lieu_prise2" type="text" name="lieuprise2">
                        <option><?= $prise['lieu_prise2']?></option>
                        <option value="">Choisir un élément</option>

                        <!--Boucle pour afficher les emplacements dans le champ déroulant-->
                        <?php foreach ($techniques as $technique): ?>

                        <!--Définition de la variable-->
                        <option>
                            <?= $technique['id_emplacement'] ?>
                        </option>
                        <?php endforeach; ?>

                    </select><br/>
                
                <!--Champ récupérant les informations de la colonne "lieu_prise" si celle-ci releve de l'accueil-->
                    <label for="lieu_prise3">Accueil</label>
                    <select class="select" id="lieu_prise3" type="text" name="lieuprise3">
                        <option><?= $prise['lieu_prise3']?></option>
                        <option value="">Choisir un élément</option>

                        <!--Boucle pour afficher les emplacements dans le champ déroulant-->
                        <?php foreach ($accueils as $accueil): ?>

                        <!--Définition de la variable-->
                        <option>
                            <?= $accueil['id_emplacement'] ?>
                        </option>
                        <?php endforeach; ?>

                    </select>
                <br/>
                <!--Champ récupérant les informations de la colonne "lieu_prise" si celle-ci releve d'un couloir'-->

               
                    <label for="lieu_prise4">Couloir</label>
                    <select class="select" id="lieu_prise4" type="text" name="lieuprise4">
                        <option><?= $prise['lieu_prise4']?></option>
                        <option value="">Choisir un élément</option>

                        <!--Boucle pour afficher les emplacements dans le champ déroulant-->
                        <?php foreach ($couloirs as $couloir): ?>

                        <!--Définition de la variable-->
                        <option>
                            <?= $couloir['id_emplacement'] ?>
                        </option>
                        <?php endforeach; ?>

                    </select>
                <br/>
                <!--Champ récupérant les informations de la colonne "lieu_prise" si celle-ci releve d'un bureau du RDC'-->

               
                    <label for="lieu_prise5">Bureaux RDC</label>
                    <select class="select" id="lieu_prise5" type="text" name="lieuprise5">
                        <option><?= $prise['lieu_prise5']?></option>
                        <option value="">Choisir un élément</option>

                        <!--Boucle pour afficher les emplacements dans le champ déroulant-->
                        <?php foreach ($bureaux as $bureau): ?>

                        <!--Définition de la variable-->
                        <option>
                            <?= $bureau['id_emplacement'] ?>
                        </option>
                        <?php endforeach; ?>

                    </select><br/>
                
                <!--Champ récupérant les informations de la colonne "lieu_prise" si celle-ci releve d'un bureau du 1er etage'-->

               
                    <label for="lieu_prise6">Bureaux 1er étage</label>
                    <select class="select" id="lieu_prise6" type="text" name="lieuprise6">
                        <option><?= $prise['lieu_prise6']?></option>
                        <option value="">Choisir un élément</option>

                        <!--Boucle pour afficher les emplacements dans le champ déroulant-->
                        <?php foreach ($bureaux1 as $bureau1): ?>

                        <!--Définition de la variable-->
                        <option>
                            <?= $bureau1['id_emplacement'] ?>
                        </option>
                        <?php endforeach; ?>

                    </select><br/>
                

                <!--Champ récupérant les informations de la colonne "lieu_prise" si celle-ci releve d'un bureau du 2eme etage'-->

                
                    <label for="lieu_prise7">Bureaux 2eme étage</label>
                    <select class="select"id="lieu_prise7" type="text" name="lieuprise7">
                        <option><?= $prise['lieu_prise7']?></option>
                        <option value="">Choisir un élément</option>

                        <!--Boucle pour afficher les emplacements dans le champ déroulant-->
                        <?php foreach ($bureaux2 as $bureau2): ?>

                        <!--Définition de la variable-->
                        <option>
                            <?= $bureau2['id_emplacement'] ?>
                        </option>
                        <?php endforeach; ?>

                    </select><br/>
                    </div>
                
            
            <!--Redirection vers création d'emplacement-->
            <h5>Si vous ne trouvez pas l'emplacement recherché : <a href="../add/add_emplacement.php" class="creer_empl">Créer l'emplacement</a> </h5>
            <h4>Informations sur la prise</h4>

            <!--Champ récupérant le nom de la prise-->
            
            <label for="id_prise">Identification de la prise </label>
                <input class="select" id="id_prise" type="text" name="idprise" value="<?= $prise['id_prise']?>" ><br/><br/>

            <!--Champ déroulant récupérant les informations sur les types de prises-->

            
                <label for="cable_connect">Type de prise </label>
                <select id="cable_connect" class="select"type="text" name="cableconnect">
                    <option><?= $prise['cable_connect']?></option>
                    <option value="RJ11">RJ11</option>
                    <option value="RJ45">RJ45</option>
                </select><br/>

           
            <!--Champ récupérant l'état de fonctionnement-->
           
                <label for="etat_fonct">État de fonctionnement </label>
                <select class="select" id="etat_fonct" type="text" name="etatfonctionnement">
                    <option><?= $prise['etat_fonct']?></option>
                    <option value="Fonctionnelle">Fonctionnelle</option>
                    <option value="NonFonctionnelle">NonFonctionnelle</option>
                </select><br/><br/>
           
            <!--Champ récupérant l'état du brassage-->
           
                <label for="etat_brassage">État du brassage </label>
                <select class="select" id="etat_brassage" type="text" name="etatbrassage">
                    <option><?= $prise['etat_brassage']?></option>
                    <option value="Brassee">Brassee</option>
                    <option value="NonBrassee">NonBrassee</option>
                </select><br/>
            
            <!--Champ récupérant les observations-->
          
                <label for="observation_prise">Observations</label>
                <input class="select" style="text-align: center" id="observation_prise" type="text" name="observationprise" placeholder="Ex: A debrasser (facultatif)" value="<?= $prise['observation_prise']?>">
                <br/>




            <!-- Bouton de modification-->
<p>
                <input class="modifier" type="submit" value="Modifier">
            </p>

        </form>
    </section>

</body>

</html>

<!DOCTYPE HTML>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/style.css">
        <title>Rechercher un élément</title>
    </head>
    <body>
    <div class="titre_index">

    <h1>GESTION DES BRASSAGES RESEAUX <div class="titre_page">(Site République)</div></h1>
    </div>
    
    <nav class="sidenav">
       <a href="site_republique.php"><img class="retour" src="../img/icone_retour.png"></a>
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


    <?php
        session_start();

        include('connexion/connexionDB.php'); //Connexion DB via le fichier connexion.php

        //Retour de requete pour la barre de recherche
        $pdoNum2= $objetPdo->query('SELECT id_prise, etat_fonct, etat_brassage, lieu_prise1, lieu_prise2, lieu_prise3, lieu_prise4,
        lieu_prise5, lieu_prise6, lieu_prise7, cable_connect FROM prise');
        
        if(isset($_GET['search']) AND !empty($_GET['search'])){
            $search = htmlspecialchars($_GET['search']);

            $pdoNum2= $objetPdo->query('SELECT id_prise, etat_fonct, etat_brassage, lieu_prise1, lieu_prise2, lieu_prise3, lieu_prise4,
            lieu_prise5, lieu_prise6, lieu_prise7, cable_connect FROM prise WHERE id_prise LIKE "'.$search.'%"');
        }
    ?>

    <!-- Barres de recherche -->
                <center>
                  
                    
                  <h2>Rechercher une prise</h2>
                        <section>
                        <form method="GET">
                            <input type="search" name="search" placeholder="Rechercher..." />
                            <input type="submit" value="Valider" />
                        </form>
                 
                    <br>
                <table>
                    <tr>
                         <th >ID</th>
                    <th>ETAT DE FONCTIONNEMENT</th>
                    <th>ETAT DE BRASSAGE</th>
                    <th>CÂBLE CONNECTE</th>
                    <th>EMPLACEMENT</th>
                    <th>MODIFIER</th>
                    </tr>
                    <?php while($p = $pdoNum2-> fetch()) { ?>
                    <tr>
                            <td><?= $p['id_prise']?></td>
                            <td><?= $p['etat_fonct'] ?></td>
                            <td><?= $p['etat_brassage'] ?></td>
                            <td><?= $p['cable_connect'] ?></td>
                            <td><?= $p['lieu_prise1'] ?><?= $p['lieu_prise2'] ?><?= $p['lieu_prise3'] ?><?= $p['lieu_prise4'] ?>
                            <?= $p['lieu_prise5'] ?><?= $p['lieu_prise6'] ?><?= $p['lieu_prise7'] ?></td>
                            <td> <a  class="maj" href="change/form_change.php?numprise=<?= $p['id_prise'] ?>">Modifier</a></td>
                        </tr>
                <?php } ?>
                </table>
                </section>
            
                
                </center>
                </body>
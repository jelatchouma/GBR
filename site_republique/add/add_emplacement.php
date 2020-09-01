<!DOCTYPE HTML>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../css/style.css">
        <title>Ajouter un emplacement</title>
    </head>


    <?php
        session_start();
        //Connexion DB à la table emplacement
        include('../connexion/connexion_emplacement.php'); 
    ?>

    <body>
       <div class="titre_index">

    <h1>GESTION DES BRASSAGES RESEAUX <div class="titre_page">(Site République)</div></h1>
    </div>
    
    <nav class="sidenav">
       <a href="../site_republique.php"><img class="retour" src="../../img/icone_retour.png"></a>
      <center><img class="logo_site" src="../../img/logo_esic.png"></center>
       <p class="selection">Selectionnez un niveau:</p>
        
    
            
        <a href="../place/accueil_prise.php">ACCUEIL</a>
       <a href="../place/rdc_prises.php">RDC</a>
        <a href="../place/bureaux_1er.php">1er ETAGE</a>
        <a href="../place/bureaux_2eme.php">2eme ETAGE</a>
        <a href="../place/sdr_3eme.php">3eme ETAGE</a>
       <a href="../../site_republique/search.php"> <img class="search" src="../../img/icone_search.png"></a>
       <a href="add_prise.php"><img class="ajout_prise" src="../../img/icone_ajout.png"></a>
    </nav>

        <section class="ajout_emplacement">
            <h4>Ajouter un emplacement</h4>
            <!--Déclaration du fichier de récupération PHP-->
            <form class="ajout" action="insert_emplacement.php" method="POST"> 
<!--Champ récupérant les informations de la colonne "type_emplacement" --> 
            <div class="form_ajout">
                <label for="type_emplacement">Type d'emplacement</label>
                <select class="select" id="type_emplacement" type="text" name="typeemplacement"> <!--Déclaration des valeurs "name" pour la liaison au fichier de récupération PHP-->
                    <option value="">Choisissez un emplacement</option>
                    <option value="Accueil">Accueil</option>
                    <option value="Bureau">Bureau</option>
                    <option value="Salle de reunion">Salle de réunion</option>
                    <option value="Salle technique">Salle technique</option>
                    <option value="Couloir">Couloir</option>
                </select>
            
<!--Champ récupérant les informations de la colonne "id_emplacement" --> 
            
                <label  for="id_emplacement">Identification de l'emplacement</label>
                <input class="select" id="id_emplacement" type="text" name="idemplacement" 
                placeholder="Ex:B009, LANGEVIN"> 
            
<!--Champ récupérant les informations de la colonne "etage_emplacement" --> 
          
                <label  for="etage_emplacement">Etage</label>
                <select class="select" id="etage_emplacement" type="text" name="etageemplacement">
                    <option value="">Choisissez une étage</option>
                    <option value="Accueil">Accueil</option>
                    <option value="RDC">RDC</option>
                    <option value="Etage01">1er étage</option>
                    <option value="Etage02">2ème étage</option>
                    <option value="Etage03">3ème étage</option>
                </select>
                </div>
                <br/>
                <br/>
            
<!--Bouton "Ajouter"-->
            
                <input type="submit" value="Ajouter">
            

            </form>
        </section>
    
</body>
<!-- Developpé par Jeremy LATCHOUMANINCHETTY -->
</html>

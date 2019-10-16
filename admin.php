<!DOCTYPE html>

<!--####################################
 Auteur : Emma Prudent
 Date : 2018
 Contexte : Prosit Exia CESI - PHP/BDD
 #######################################-->

<html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />

        <link rel="stylesheet" type="text/css" href="css/styleConnexion.css" />
        <title>GOTO Mountains</title>
    </head>

    <body>

    <!-- L'en-tête -->    
    <header>
    <h1><strong>GOTO</strong>mountains [Admin]</h1>
    </header>

    

    <!-- Le corps -->
    <div id="corps">

        <!-- Le menu -->
        <?php include("menu.php"); ?>

         <!-- Le contenu --> 
        <div id="contenu">

        <div id="wrapper" style="min-height: 50px;"><h1> Requêtes administrateur</h1></div>
        <div id="barre_boutons_admin">
            <div class="bouton_admin">  <div style="height:50px;"><img src="Images/shoesList.png" alt="Shoe" height="75" ></div>  
            Lister les articles </div>
            <div class="bouton_admin"> <div style="height:50px;"><img src="Images/shoesAdd.png" alt="Shoe" height="75" ></div>
            Ajouter un article </div>
            <div class="bouton_admin"> <div style="height:50px;"><img src="Images/shoesDel.png" alt="Shoe" height="75" ></div>
            Supprimer un article </div>
            <div class="bouton_admin"> <div style="height:50px;"><img src="Images/shoesChange.png" alt="Shoe" height="75" ></div>
            Modifier un article </div>
        </div>
        <div id="wrapper" style="min-height: 50px;">
            
         <!-- TODO : Ajouter de quoi visualiser le résultat des requêtes ou de quoi saisir des commandes en fonction des options possibles -->
            
        </div>
        </div>  
    </div>
    
    </body>

</html>
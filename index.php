<?php
    //diviser le code

    //on inclut le dossier fontions

    
    require_once "includes/functions.php";

    $titre = "Accueil";
    //on inclut le header
    include "includes/header.php";

    //on inclut la navbar    utiliser include_once pour être de n'avoir q'une seule fois le même fichier qui s'affiche
    include_once "includes/navbar.php";

    //on écrit le contenu de la page
?>
<p>contenu de la page d'accueil</p>

<?php
    require_once "includes/connect.php";




?>


<?php

    //on inclut le footer
    include "includes/footer.php"; 
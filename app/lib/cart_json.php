<?php
    session_start();
    include("../db/db_connect.php");
    include("../crud/panier_crud.php");
    
    header('Content-Type: application/json; charset=UTF-8'); 

    // Récupère le panier
        $panier = liste_panier_user($conn, $_SESSION["user"]);

    // Convertit en JSON et affiche
        echo json_encode($panier);
    
    
    
    include("../db/db_disconnect.php");
    
?>
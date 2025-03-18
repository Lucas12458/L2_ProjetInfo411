<?php


    include("../db/db_connect.php");
    include("../crud/article_crud.php");

    $articles = liste_produit($conn); // select_1_produit est une fonction de article_crud.php

    // Convertit en json
    $articles_json = json_encode($articles);

    header('Content-Type: application/json; charset=UTF-8'); 
    echo $articles_json;


?>



<?php // Recupere liste articles en PHP N'ENLEVEZ SURTOUT PAS !!!!

    // $res=mysqli_query($conn, "SELECT * FROM `Produit`");
    // while($row=mysqli_fetch_assoc($res)){

    //     //echo "<img class=\"img-product\" src=\"data:image/jpeg;base64,".base64_encode($row["image"]). "\" style=\"height:300px; width:350px;\" />";
    //     $image = base64_encode($row["image"]); 
    //     $image = $row["image"];
        
    //     // Si les images sont trop degeu utilise object-fit
    // } 
?>




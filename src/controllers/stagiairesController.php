<?php
    require_once __DIR__ . '/../../config/connexiondb.php';
    $con = connectdb();
    
    $requete = "SELECT * FROM stagiaire ORDER BY nom, prenom";
    $response = $con->query($requete);
    $lignes = $response->fetchAll();
?>

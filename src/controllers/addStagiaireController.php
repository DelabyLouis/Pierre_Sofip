<?php
    require_once __DIR__ . '/../../config/connexiondb.php';
    $con = connectdb();

    if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["age"]) && isset($_POST["date_naissance"]) && isset($_POST["email"]) && isset($_POST["ville"])) {
        $nom = strip_tags($_POST["nom"]);
        $prenom = strip_tags($_POST["prenom"]);
        $age = (int)$_POST["age"];
        $date_naissance = $_POST["date_naissance"];
        $email = strip_tags($_POST["email"]);
        $ville = strip_tags($_POST["ville"]);
        
        $req = $con->prepare("INSERT INTO stagiaire (nom, prenom, age, date_naissance, email, ville) VALUES (?, ?, ?, ?, ?, ?)");
        $req->execute([$nom, $prenom, $age, $date_naissance, $email, $ville]);
        header("location: ../../templates/stagiaires.php");
        exit();
    }
?>

<?php
    require_once __DIR__ . '/../../config/connexiondb.php';
    $con = connectdb();

    // Récupération des données du stagiaire pour pré-remplir le formulaire
    if (isset($_POST["id"]) && !isset($_POST["nom"])) {
        $id = (int)$_POST["id"];
        $req = $con->prepare("SELECT * FROM stagiaire WHERE id = ?");
        $req->execute([$id]);
        $stagiaire = $req->fetch();
    }

    // Traitement de la modification
    if (isset($_POST["id"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["age"]) && isset($_POST["date_naissance"]) && isset($_POST["email"]) && isset($_POST["ville"])) {
        $id = (int)$_POST["id"];
        $nom = strip_tags($_POST["nom"]);
        $prenom = strip_tags($_POST["prenom"]);
        $age = (int)$_POST["age"];
        $date_naissance = $_POST["date_naissance"];
        $email = strip_tags($_POST["email"]);
        $ville = strip_tags($_POST["ville"]);
        
        $req = $con->prepare("UPDATE stagiaire SET nom = ?, prenom = ?, age = ?, date_naissance = ?, email = ?, ville = ? WHERE id = ?");
        $req->execute([$nom, $prenom, $age, $date_naissance, $email, $ville, $id]);
        header("location: ../../templates/stagiaires.php");
        exit();
    }
?>

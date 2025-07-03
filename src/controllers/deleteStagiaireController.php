<?php
    require_once __DIR__ . '/../../config/connexiondb.php';
    $con = connectdb();

    if (isset($_POST["id"])) {
        $id = (int)$_POST["id"];
        $req = $con->prepare("DELETE FROM stagiaire WHERE id = ?");
        $req->execute([$id]);
        header("location: ../../templates/stagiaires.php");
        exit();
    }
?>

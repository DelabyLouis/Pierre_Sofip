<?php

    function connectdb(): PDO {
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $bdd = 'pierre_sofip';

        try {
            $con = new PDO('mysql:host=' . $server . ';dbname=' . $bdd, $user,
            $password);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        }
        catch (PDOException $error) {
            echo 'N° : ' . $error->getCode() . '<br />';
            die('Erreur : ' . $error->getMessage() . '<br />');
        }
    }
?>
<?php
$pageTitle = "Accueil";
include 'templates/partials/_header.php';
?>

<div class="row">
    <div class="col-12">
        <div class="jumbotron bg-primary text-white p-5 rounded mb-4">
            <h1 class="display-4">Gestion des stagiaires</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body text-center">
                <i class="bi bi-people-fill text-primary" style="font-size: 3rem;"></i>
                <h5 class="card-title mt-3">Liste des Stagiaires</h5>
                <a href="templates/stagiaires.php" class="btn btn-primary">
                    <i class="bi bi-eye"></i> Consulter
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body text-center">
                <i class="bi bi-person-plus-fill text-success" style="font-size: 3rem;"></i>
                <h5 class="card-title mt-3">Ajouter un Stagiaire</h5>
                <a href="templates/addStagiaire.php" class="btn btn-success">
                    <i class="bi bi-plus-circle"></i> Ajouter
                </a>
            </div>
        </div>
    </div>
    
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body text-center">
                <i class="bi bi-database-check text-info" style="font-size: 3rem;"></i>
                <h5 class="card-title mt-3">Test de Connexion</h5>
                <a href="tests/test_connexion.php" class="btn btn-info">
                    <i class="bi bi-check-circle"></i> Tester
                </a>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/partials/_footer.php'; ?>

<?php
$pageTitle = "Accueil";
include 'templates/partials/_header.php';
?>

<div class="row">
    <div class="col-12">
        <div class="jumbotron bg-primary text-white p-5 rounded mb-4">
            <h1 class="display-4">Bienvenue dans le système de gestion des stagiaires</h1>
            <p class="lead">Plateforme de gestion et suivi des stagiaires</p>
            <hr class="my-4" style="border-color: rgba(255,255,255,0.3);">
            <p>Gérez facilement vos stagiaires : ajout, modification, suppression et consultation des profils.</p>
            <a class="btn btn-light btn-lg" href="stagiaires.php" role="button">
                <i class="bi bi-people"></i> Voir tous les stagiaires
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card h-100">
            <div class="card-body text-center">
                <i class="bi bi-people-fill text-primary" style="font-size: 3rem;"></i>
                <h5 class="card-title mt-3">Liste des Stagiaires</h5>
                <p class="card-text">Consultez et gérez la liste complète de tous vos stagiaires.</p>
                <a href="stagiaires.php" class="btn btn-primary">
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
                <p class="card-text">Enregistrez un nouveau stagiaire dans le système.</p>
                <a href="ajouter.php" class="btn btn-success">
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
                <p class="card-text">Vérifiez le statut de la connexion à la base de données.</p>
                <a href="tests/test_connexion.php" class="btn btn-info">
                    <i class="bi bi-check-circle"></i> Tester
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0"><i class="bi bi-info-circle"></i> Informations du Projet</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Technologies utilisées :</h6>
                        <ul>
                            <li>PHP 8.3+</li>
                            <li>MySQL 9.1</li>
                            <li>Bootstrap 5.3</li>
                            <li>PDO pour la base de données</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h6>Fonctionnalités :</h6>
                        <ul>
                            <li>CRUD complet des stagiaires</li>
                            <li>Interface responsive</li>
                            <li>Validation des données</li>
                            <li>Test de connexion BDD</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/partials/_footer.php'; ?>

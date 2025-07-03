<?php
    $pageTitle = "Ajouter un Stagiaire";
    require_once __DIR__ . '/partials/_header.php';
?>

<div class="container mt-4">
    <h1 class="text-center mb-4">
        <i class="bi bi-person-plus-fill text-success"></i>
        Ajouter un Stagiaire
    </h1>
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <form action="../src/controllers/addStagiaireController.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nom" class="form-label">
                                    <i class="bi bi-person"></i> Nom *
                                </label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="prenom" class="form-label">
                                    <i class="bi bi-person"></i> Prénom *
                                </label>
                                <input type="text" class="form-control" id="prenom" name="prenom" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="age" class="form-label">
                                    <i class="bi bi-calendar"></i> Âge *
                                </label>
                                <input type="number" class="form-control" id="age" name="age" min="16" max="65" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="date_naissance" class="form-label">
                                    <i class="bi bi-calendar-date"></i> Date de naissance *
                                </label>
                                <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                <i class="bi bi-envelope"></i> Email *
                            </label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="ville" class="form-label">
                                <i class="bi bi-geo-alt"></i> Ville *
                            </label>
                            <input type="text" class="form-control" id="ville" name="ville" required>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-check-circle"></i> Ajouter le stagiaire
                            </button>
                            <a href="stagiaires.php" class="btn btn-secondary ms-2">
                                <i class="bi bi-arrow-left"></i> Annuler
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/partials/_footer.php'; ?>

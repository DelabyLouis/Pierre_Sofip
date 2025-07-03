<?php
    $pageTitle = "Modifier un Stagiaire";
    require_once '../src/controllers/updateStagiaireController.php';
    require_once __DIR__ . '/partials/_header.php';
?>

<div class="container mt-4">
    <h1 class="text-center mb-4">
        <i class="bi bi-pencil-square text-warning"></i>
        Modifier un Stagiaire
    </h1>
    
    <?php if (isset($stagiaire) && $stagiaire): ?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <form action="../src/controllers/updateStagiaireController.php" method="POST">
                        <input type="hidden" name="id" value="<?= $stagiaire['id'] ?>">
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nom" class="form-label">
                                    <i class="bi bi-person"></i> Nom *
                                </label>
                                <input type="text" class="form-control" id="nom" name="nom" value="<?= htmlspecialchars($stagiaire['nom']) ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="prenom" class="form-label">
                                    <i class="bi bi-person"></i> Prénom *
                                </label>
                                <input type="text" class="form-control" id="prenom" name="prenom" value="<?= htmlspecialchars($stagiaire['prenom']) ?>" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="age" class="form-label">
                                    <i class="bi bi-calendar"></i> Âge *
                                </label>
                                <input type="number" class="form-control" id="age" name="age" min="16" max="65" value="<?= $stagiaire['age'] ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="date_naissance" class="form-label">
                                    <i class="bi bi-calendar-date"></i> Date de naissance *
                                </label>
                                <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="<?= $stagiaire['date_naissance'] ?>" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label">
                                <i class="bi bi-envelope"></i> Email *
                            </label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($stagiaire['email']) ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="ville" class="form-label">
                                <i class="bi bi-geo-alt"></i> Ville *
                            </label>
                            <input type="text" class="form-control" id="ville" name="ville" value="<?= htmlspecialchars($stagiaire['ville']) ?>" required>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-warning">
                                <i class="bi bi-check-circle"></i> Modifier le stagiaire
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
    <?php else: ?>
    <div class="alert alert-danger text-center">
        <i class="bi bi-exclamation-triangle"></i>
        Stagiaire non trouvé ou erreur dans les paramètres.
        <br>
        <a href="stagiaires.php" class="btn btn-primary mt-2">
            <i class="bi bi-arrow-left"></i> Retour à la liste
        </a>
    </div>
    <?php endif; ?>
</div>

<?php require_once __DIR__ . '/partials/_footer.php'; ?>

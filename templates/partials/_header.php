<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Gestion des Stagiaires'; ?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="<?php echo $rootPath ?? ''; ?>public/css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <?php
            $rootPath = '';
            if (strpos($_SERVER['REQUEST_URI'], '/tests/') !== false) {
                $rootPath = '../';
            }
            ?>
            <a class="navbar-brand" href="<?php echo $rootPath; ?>index.php">
                <strong>📚 Gestion des Stagiaires</strong>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' && strpos($_SERVER['REQUEST_URI'], '/tests/') === false) ? 'active' : ''; ?>" 
                           href="<?php echo $rootPath; ?>index.php">
                           <i class="bi bi-house-door"></i> Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" 
                           href="<?php echo $rootPath; ?>stagiaires.php">
                           <i class="bi bi-people"></i> Liste des Stagiaires
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" 
                           href="<?php echo $rootPath; ?>ajouter.php">
                           <i class="bi bi-person-plus"></i> Ajouter un Stagiaire
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'test_connexion.php') ? 'active' : ''; ?>" 
                           href="<?php echo $rootPath; ?>tests/test_connexion.php">
                           <i class="bi bi-database-check"></i> Test BDD
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container main-content">

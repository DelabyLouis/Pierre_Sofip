<?php
    $pageTitle = "Liste des Stagiaires";
    require_once '../src/controllers/stagiairesController.php';
    require_once __DIR__ . '/partials/_header.php';
?>

<div class="container mt-4">
    <h1 class="text-center mb-4">
        <i class="bi bi-people-fill text-primary"></i>
        Liste des Stagiaires
    </h1>
    
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nom</th>
                    <th class="text-center">Prénom</th>
                    <th class="text-center">Âge</th>
                    <th class="text-center">Date de naissance</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Ville</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($lignes) && is_array($lignes)) {
                    foreach ($lignes as $ligne) {
                        echo '<tr>
                            <td class="text-center align-middle">' . $ligne['id'] . '</td>
                            <td class="text-center align-middle">' . htmlspecialchars($ligne['nom']) . '</td>
                            <td class="text-center align-middle">' . htmlspecialchars($ligne['prenom']) . '</td>
                            <td class="text-center align-middle">' . $ligne['age'] . '</td>
                            <td class="text-center align-middle">' . date('d/m/Y', strtotime($ligne['date_naissance'])) . '</td>
                            <td class="text-center align-middle">' . htmlspecialchars($ligne['email']) . '</td>
                            <td class="text-center align-middle">' . htmlspecialchars($ligne['ville']) . '</td>
                            <td class="text-center align-middle">
                                <form action="updateStagiaire.php" method="post" class="d-inline">
                                    <input type="hidden" name="id" value="' . $ligne['id'] . '">
                                    <button type="submit" class="btn btn-outline-success btn-sm me-1">
                                        <i class="bi bi-pencil"></i> Modifier
                                    </button>
                                </form>
                                <form action="../src/controllers/deleteStagiaireController.php" method="post" class="d-inline" onsubmit="return confirm(\'Êtes-vous sûr de vouloir supprimer ce stagiaire ?\')">
                                    <input type="hidden" name="id" value="' . $ligne['id'] . '">
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                        <i class="bi bi-trash"></i> Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>';
                    }
                } else {
                    echo '<tr><td colspan="8" class="text-center">Aucun stagiaire trouvé</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    
    <div class="mt-4 text-center">
        <a href="addStagiaire.php" class="btn btn-success">
            <i class="bi bi-person-plus"></i> Ajouter un stagiaire
        </a>
        <a href="../index.php" class="btn btn-secondary ms-2">
            <i class="bi bi-house"></i> Retour à l'accueil
        </a>
    </div>
</div>

<?php require_once __DIR__ . '/partials/_footer.php'; ?>

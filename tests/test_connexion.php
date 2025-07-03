<?php
$pageTitle = "Test de Connexion";
include '../templates/partials/_header.php';

date_default_timezone_set('Europe/Paris');

require_once '../config/connexiondb.php';
?>

<div class="row">
    <div class="col-12">
        <h2 class="mb-4">Test de connexion à la base de données</h2>
        
        <?php
        try {
            echo '<div class="alert alert-info">
                    <strong>🔄 Tentative de connexion...</strong><br>
                    Connexion à la base de données en cours...
                  </div>';
            
            $connexion = connectdb();
            
            if ($connexion) {
                echo '<div class="alert alert-success">
                        <h5><strong>✅ Connexion réussie !</strong></h5>
                        <p class="mb-0">Connexion établie avec succès à la base de données "pierre_sofip"</p>
                      </div>';
                
                try {
                    $stmt = $connexion->query("SELECT 1 as test");
                    $result = $stmt->fetch();
                    if ($result['test'] == 1) {
                        echo '<div class="alert alert-success">
                                <strong>✅ Test de requête réussi</strong><br>
                                La base de données répond correctement aux requêtes.
                              </div>';
                    }
                } catch (PDOException $e) {
                    echo '<div class="alert alert-warning">
                            <strong>⚠ Connexion établie mais erreur lors du test de requête</strong><br>
                            Erreur : ' . htmlspecialchars($e->getMessage()) . '
                          </div>';
                }
                
                echo '<div class="card mt-4">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">📊 Informations de connexion</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Serveur :</strong> localhost</li>
                                        <li class="list-group-item"><strong>Base de données :</strong> pierre_sofip</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Utilisateur :</strong> root</li>
                                        <li class="list-group-item"><strong>Status :</strong> <span class="badge bg-success">Connecté</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      </div>';
                
            } else {
                echo '<div class="alert alert-danger">
                        <h5><strong>❌ Échec de la connexion</strong></h5>
                        <p class="mb-0">Impossible de se connecter à la base de données.</p>
                      </div>';
            }
        } catch (Exception $e) {
            echo '<div class="alert alert-danger">
                    <h5><strong>❌ Erreur de connexion</strong></h5>
                    <p><strong>Message d\'erreur :</strong> ' . htmlspecialchars($e->getMessage()) . '</p>
                    <p><strong>Code d\'erreur :</strong> ' . $e->getCode() . '</p>
                  </div>';
            
            echo '<div class="card mt-4">
                    <div class="card-header bg-danger text-white">
                        <h5 class="mb-0">🔧 Vérifications à effectuer</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">✓ Le serveur MySQL est-il démarré ?</li>
                            <li class="list-group-item">✓ La base de données "pierre_sofip" existe-t-elle ?</li>
                            <li class="list-group-item">✓ Les identifiants (root sans mot de passe) sont-ils corrects ?</li>
                            <li class="list-group-item">✓ Les permissions sont-elles accordées à l\'utilisateur ?</li>
                        </ul>
                    </div>
                </div>';
        }
        ?>
        
        <hr class="mt-4">
        <div class="text-center text-muted">
            <small><em>Test effectué le <?php echo date('d/m/Y à H:i:s'); ?></em></small>
        </div>
    </div>
</div>

<?php include '../templates/partials/_footer.php'; ?>
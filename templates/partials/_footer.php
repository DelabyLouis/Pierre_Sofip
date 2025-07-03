    </div> <!-- Fin du container main-content -->

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <p class="mb-0">&copy; <?php echo date('Y'); ?> Pierre SOFIP - Système de Gestion des Stagiaires</p>
            <small class="text-muted">Développé avec PHP, MySQL et Bootstrap</small>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- Custom JS -->
    <script src="<?php echo $rootPath ?? ''; ?>public/js/script.js"></script>
</body>
</html>

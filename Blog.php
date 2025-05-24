<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justhire - Blog</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php include 'partials/nav.php'; ?>

    <!-- Contenu principal -->
    <main>
        <h1 class="page-title">Nos Derniers Articles</h1>

        <section class="blog-section">
            <section class="blog-container">
                <article class="blog-card">
                    <img src="images/Capture d’écran (53).png" alt="Article 1">
                    <div class="blog-content">
                        <h2>Les meilleures voitures électriques de 2025</h2>
                        <p>Découvrez les modèles électriques les plus performants pour cette année.</p>
                        <a href="article1.php" class="read-more">Lire plus →</a>
                    </div>
                </article>

                <article class="blog-card">
                    <img src="images/auto-2179220.jpg" alt="Article 2">
                    <div class="blog-content">
                        <h2>Comment choisir une voiture de location ?</h2>
                        <p>Nos conseils pour sélectionner le véhicule idéal selon vos besoins.</p>
                        <a href="article2.php" class="read-more">Lire plus →</a>
                    </div>
                </article>

                <article class="blog-card">
                    <img src="images/car-3531147.jpg" alt="Article 3">
                    <div class="blog-content">
                        <h2>Voyager en toute sécurité : nos recommandations</h2>
                        <p>Les meilleures pratiques pour une conduite sécurisée lors de vos voyages.</p>
                        <a href="article3.php" class="read-more">Lire plus →</a>
                    </div>
                </article>
            </section>

        </section>
    </main>

    <!-- Pied de page -->
    <?php include 'partials/footer.php'; ?>
</body>

</html>
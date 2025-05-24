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

    <!-- En-tête -->
    <header>
        <div class="logo"><span></span><strong>AUTO-TECH</strong></div>
        <nav>
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i> ACCUEIL</a></li>
                <li><a href="Apropos.php">A PROPOS</a></li>
                <li><a href="Vehicules.php">VÉHICULES</a></li>
                <li><a href="Blog.php" class="active">BLOG</a></li>
                <li><a href="Contact.php">CONTACT</a></li>
            </ul>
        </nav>
        <div class="actions">
            <button class="btn logout">Déconnexion</button>
        </div>
    </header>

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
    <footer>
        <p>© 2025 Justhire. Tous droits réservés.</p>
    </footer>

<style>
    body {
        padding: 5px;
        color: #333; /* Couleur de texte principale */
        line-height: 1.6;
        background-image: url(images/auto-2179220.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        transition: background-color 0.3s ease;
        height:800px;
        object-fit:cover;
    }

    footer {
        border-radius: 10px;
    }

    header {
        border-radius: 5px;
    }

    nav ul li a:hover,
    nav ul li a.active {
        color: orange;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".read-more-btn").forEach(button => {
            button.addEventListener("click", function () {
                let content = this.previousElementSibling; // Sélectionne .article-content
                if (content.style.display === "none") {
                    content.style.display = "block";
                    this.textContent = "Lire moins ←";
                } else {
                    content.style.display = "none";
                    this.textContent = "Lire plus →";
                }
            });
        });
    });
</script>

</body>

</html>
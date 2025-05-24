<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les meilleures voitures électriques de 2025</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>

    <!-- En-tête -->
    <header>
        <div class="logo"><strong>AUTO-TECH</strong></div>
        <nav>
            <ul>
                <li><a href="index.php">ACCUEIL</a></li>
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
        <h1 class="page-title">Les meilleures voitures électriques de 2025</h1>

        <section class="article-details">
            <img src="images/auto-2179220.jpg" alt="Les meilleures voitures électriques" class="article-main-img">

            <p>Les véhicules électriques évoluent rapidement et offrent de nouvelles performances en matière d’autonomie
                et de confort...</p>

            <div class="article-gallery">
                <img src="images/Capture d’écran (53).png" alt="Voiture électrique 1">
                <img src="images/car-3531147.jpg" alt="Voiture électrique 2">
                <img src="images/car-4825631.jpg" alt="Voiture électrique 3">
            </div>

            <p>Découvrez notre classement de meilleurs modèles de l’année.</p>
        </section>
    </main>

    <!-- Pied de page -->
    <footer>
        <p>© 2025 Justhire. Tous droits réservés.</p>
    </footer>

</body>

</html>

<style>
    body {
        padding: 5px;
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
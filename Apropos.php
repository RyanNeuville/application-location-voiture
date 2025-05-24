<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justhire - À Propos</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    

    <!-- En-tête -->
    <header>
        <div class="logo"><span><i class="fas fa-car"></i></span><strong>AUTO-TECH</strong></div>
        <nav>
            <ul>
                <li><a href="index.php"><i class="fas fa-home"></i> ACCUEIL</a></li>
                <li><a href="Apropos.php" class="active">A PROPOS</a></li>
                <li><a href="Vehicules.php">VEHICULES</a></li>
                <li><a href="Blog.php">BLOG</a></li>
                <li><a href="Contact.php">CONTACT</a></li>
            </ul>
        </nav>
        <div class="actions">
            
            <button class="btn logout">Déconnexion</button>
        </div>
    </header>

    <!-- Contenu principal -->
    <main>
        <h1 class="page-title" style="color:white;">À Propos de Nous</h1>
        
        <section class="about-section">
            <img src="images/logo.png" alt="À Propos de Mounir">
            <div class="about-text">
                <h2>Qui sommes-nous ?</h2>
                <p>AUTO-TECH est un service de location de voitures haut de gamme qui met en relation les utilisateurs avec le véhicule idéal pour leurs besoins. Que vous recherchiez une voiture économique pour un voyage en ville ou une voiture de luxe pour une occasion spéciale, nous avons ce qu'il vous faut.</p>
                
                <h2>Notre mission</h2>
                <p>Nous avons pour objectif d'offrir une expérience de location fluide avec des prix transparents, un large choix de véhicules et un service client exceptionnel.</p>
                
                <h2>Pourquoi nous choisir ?</h2>
                <ul>
                    <li>✅ Large sélection de véhicules</li>
                    <li>✅ Tarifs compétitifs</li>
                    <li>✅ Processus de réservation simple</li>
                    <li>✅ Support client disponible 24/7</li>
                </ul>
            </div>
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
        background: #fdfdfb; /* Fond clair */
        color: #333; /* Couleur de texte principale */
        line-height: 1.6;
        background-image: url(images/car-4825631.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        transition: background-color 0.3s ease;
        height:800px;
            padding: 5px;
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
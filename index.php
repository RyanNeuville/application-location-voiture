<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>AUTO-TECH - Contact</title>
    <link rel="stylesheet" href="styles/accueil.css">
    <link rel="stylesheet" href="font/css/all.min.css">
</head>

<body>

    <!-- En-tête -->
    <header>
        <div class="logo"><span></span><strong>AUTO-TECH</strong></div>
        <nav>
            <ul>
                <li><a href="index.php" class="active bg-gray-200 rounded-sm shadow-sm">ACCUEIL</a></li>
                <li><a href="Apropos.php">A PROPOS</a></li>
                <li><a href="Vehicules.php">VEHICULES</a></li>
                <li><a href="Blog.php">BLOG</a></li>
                <li><a href="Contact.php">CONTACT</a></li>
            </ul>
        </nav>
        <div class="actions">
        </div>
    </header>

    <!-- Contenu principal -->
    <main>
        <div class="wrapper">
            <form method="POST" action="index.php">
                <h1>Connexion</h1>
                <div class="input-box">
                    <input type="text" name="username" placeholder="Nom d'utilisateur" required>
                    <i class="fas fa-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Mot de passe" required>
                    <i class="fas fa-lock"></i>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Se souvenir de moi</label>
                </div>
                <button class="register-link">Connecter</button>
                <p>déja un compte ?<a href="inscription.php" class="l2">inscrivez-vous</a></p>
            </form>
        </div>
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
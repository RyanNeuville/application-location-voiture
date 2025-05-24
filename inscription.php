<?php
include 'config.php';  // Connexion MySQL

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim(htmlspecialchars($_POST['username']));
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Vérification que les champs sont remplis
    if (empty($username) || empty($password) || empty($confirm_password)) {
        echo "❌ Tous les champs sont obligatoires.";
        exit;
    }

    // Vérification que les mots de passe correspondent
    if ($password !== $confirm_password) {
        echo "❌ Les mots de passe ne correspondent pas.";
        exit;
    }

    // Vérification de la force du mot de passe
    if (
        strlen($password) < 8 ||
        !preg_match('/[a-z]/', $password) ||
        !preg_match('/[A-Z]/', $password) ||
        !preg_match('/[0-9]/', $password)
    ) {
        echo "❌ Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule et un chiffre.";
        exit;
    }

    // Hachage sécurisé du mot de passe
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    // Enregistrement dans la base via prepared statements
    $stmt = $conn->prepare("INSERT INTO utilisateurs (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $password_hash);

    if ($stmt->execute()) {
       header("Locaton: Accueil.html");
       exit();
    } else {
        echo "❌ Erreur : nom d'utilisateur déjà utilisé ou autre problème.";
    }

    $stmt->close();
    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mounir - Contact</title>
    <link rel="stylesheet" href="styles/accueil.css">
    <link rel="stylesheet" href="font/css/all.min.css">
</head>
<body>

    <!-- En-tête -->
    <header>
        <div class="logo"><strong>AUTO-TECH</strong></div>
        <nav>
            <ul>
                <li><a href="index.php" class="active"><i class="fas fa-home"></i> ACCUEIL</a></li>
                <li><a href="Apropos.php">A PROPOS</a></li>
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
    <div class="wrapper">
        <form method="POST" action="inscription.php">
            <h1>inscription</h1>
            <div class="input-box">
                <input name="username" type="text" placeholder="Nom d'utilisateur" required>
                <i class="fas fa-user"></i>
            </div>
            <div class="input-box">
                <input name="confirm_password" type="password" placeholder="Mot de passe" required>
             <i class="fas fa-lock"></i> 

            </div>
            <div class="input-box">
                <input name="password" type="password" placeholder="confirmer le mot de passe" required>
             <i class="fas fa-lock"></i> 
             
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Se souvenir de moi</label>
            </div>
            <button type="submit" class="register-link">S'inscrire</button>
            <p>déja un compte ?<a href="index.php" class="l2">connectez-vous</a></p>
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
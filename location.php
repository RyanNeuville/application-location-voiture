<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Location de Voiture</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<body>

    <div class="rental-form-container">
        <h2>Réserver une Voiture</h2>
        <form>
            <label for="name">Nom complet :</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Téléphone :</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="car">Choisissez une voiture :</label>
            <select id="car" name="car" required>
                <option value="">Sélectionner...</option>
                <option value="peugeot-208">Peugeot 208</option>
                <option value="renault-clio">Renault Clio</option>
                <option value="bmw-x5">BMW X5</option>
                <option value="bmw-x5">Accord</option>
            </select>

            <label for="start-date">Date de début :</label>
            <input type="date" id="start-date" name="start-date" required>

            <label for="end-date">Date de retour :</label>
            <input type="date" id="end-date" name="end-date" required>

            <label for="comments">Commentaires :</label>
            <textarea id="comments" name="comments" rows="4" placeholder="Besoin particulier ?"></textarea>

            <a href="paiement.php"><button type="submit" class="btn">Réserver maintenant</a></button>
        </form>
    </div>

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
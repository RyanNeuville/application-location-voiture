<!-- paiement.php -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paiement de la Réservation</title>
    <link rel="stylesheet" href="styles/paiement.css">
</head>

<body>
    <div class="payment-container">
        <h2>Paiement de la Réservation</h2>
        <p>Montant à payer : <strong>€250</strong></p>

        <form>
            <label for="payment-method">Choisissez un mode de paiement :</label>
            <select id="payment-method" name="payment-method" required>
                <option value="">Sélectionner...</option>
                <option value="carte">Carte Bancaire</option>
                <option value="paypal">PayPal</option>
                <option value="virement">Virement Bancaire</option>
            </select>

            <div class="payment-details" id="card-details">
                <label for="card-number">Numéro de carte :</label>
                <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456">
                <label for="expiry">Date d'expiration :</label>
                <input type="month" id="expiry" name="expiry">
                <label for="cvv">CVV :</label>
                <input type="text" id="cvv" name="cvv" placeholder="123">
            </div>

            <a href="Vehicules.php"><button type="submit" class="btn">Payer maintenant</a></button>
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
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justhire - Vehicles</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php include 'partials/nav.php'; ?>

    <main>
        <h1 class="page-title" style="color:white;"> 🚘 Vehicules 🚘</h1>

        <div class="vehicle-list">
            <div class="vehicle-card">
                <img src="images/car-3531147.jpg" alt="Honda Civic" class="v2">
                <h3>Honda - Civic</h3>
                <p>🚘 2022 | ⛽ Gasoline | 🏎 2500 km | 👥 4 places</p>
                <p>📍 New York</p>
                <p class="price">Prix de location: <strong>$99 USD/Day</strong></p>
                <a href="location.php"></a><button class="btn rent-btn">louer maintenant</button></a>
            </div>

            <div class="vehicle-card">
                <img src="images/Capture d’écran (53).png" alt="Accord Limited" class="v2">
                <h3>Accord - Limited</h3>
                <p>🚘 2004 | ⚡ Electric | 🏎 3728 km | 👥 4 places</p>
                <p>📍 Los Angeles</p>
                <p class="price">Prix de la location: <strong>$150 USD/Day</strong></p>
                <a href="location.php"><button class="btn rent-btn">louer maintenant</button></a>
            </div>

            <div class="vehicle-card">
                <img src="images/car-4825631.jpg" alt="Fusion EX">
                <h3>BUGATTI - CHIRON</h3>
                <p>🚘 2005 | ⚡ Electric | 🏎 1278 km | 👥 2 Splaces</p>
                <p>📍 Philadelphia</p>
                <p class="price">Prix de la location: <strong>$100 USD/Day</strong></p>
                <a href="location.php"></a><button class="btn rent-btn">louer maintenant</button></a>
            </div>
            <div class="vehicle-card">
                <img src="images/Capture d’écran (53).png" alt="Accord Limited" class="v2">
                <h3>Accord - Limited</h3>
                <p>🚘 2004 | ⚡ Electric | 🏎 3728 km | 👥 4 places</p>
                <p>📍 Los Angeles</p>
                <p class="price">Prix de la location: <strong>$150 USD/Day</strong></p>
                <a href="location.php"><button class="btn rent-btn">louer maintenant</button></a>
            </div>

            <div class="vehicle-card">
                <img src="images/car-4825631.jpg" alt="Fusion EX">
                <h3>BUGATTI - CHIRON</h3>
                <p>🚘 2005 | ⚡ Electric | 🏎 1278 km | 👥 2 Splaces</p>
                <p>📍 Philadelphia</p>
                <p class="price">Prix de la location: <strong>$100 USD/Day</strong></p>
                <a href="location.php"></a><button class="btn rent-btn">louer maintenant</button></a>
            </div>
            <div class="vehicle-card">
                <img src="images/car-3531147.jpg" alt="Honda Civic" class="v2">
                <h3>Honda - Civic</h3>
                <p>🚘 2022 | ⛽ Gasoline | 🏎 2500 km | 👥 4 places</p>
                <p>📍 New York</p>
                <p class="price">Prix de location: <strong>$99 USD/Day</strong></p>
                <a href="location.php"></a><button class="btn rent-btn">louer maintenant</button></a>
            </div>
            <div class="vehicle-card">
                <img src="images/car-3531147.jpg" alt="Honda Civic" class="v2">
                <h3>Honda - Civic</h3>
                <p>🚘 2022 | ⛽ Gasoline | 🏎 2500 km | 👥 4 places</p>
                <p>📍 New York</p>
                <p class="price">Prix de location: <strong>$99 USD/Day</strong></p>
                <a href="location.php"></a><button class="btn rent-btn">louer maintenant</button></a>
            </div>

            <div class="vehicle-card">
                <img src="images/Capture d’écran (53).png" alt="Accord Limited" class="v2">
                <h3>Accord - Limited</h3>
                <p>🚘 2004 | ⚡ Electric | 🏎 3728 km | 👥 4 places</p>
                <p>📍 Los Angeles</p>
                <p class="price">Prix de la location: <strong>$150 USD/Day</strong></p>
                <a href="location.php"><button class="btn rent-btn">louer maintenant</button></a>
            </div>

            <div class="vehicle-card">
                <img src="images/car-4825631.jpg" alt="Fusion EX">
                <h3>BUGATTI - CHIRON</h3>
                <p>🚘 2005 | ⚡ Electric | 🏎 1278 km | 👥 2 Splaces</p>
                <p>📍 Philadelphia</p>
                <p class="price">Prix de la location: <strong>$100 USD/Day</strong></p>
                <a href="location.php"></a><button class="btn rent-btn">louer maintenant</button></a>
            </div>
            <div class="vehicle-card">
                <img src="images/Capture d’écran (53).png" alt="Accord Limited" class="v2">
                <h3>Accord - Limited</h3>
                <p>🚘 2004 | ⚡ Electric | 🏎 3728 km | 👥 4 places</p>
                <p>📍 Los Angeles</p>
                <p class="price">Prix de la location: <strong>$150 USD/Day</strong></p>
                <a href="location.php"><button class="btn rent-btn">louer maintenant</button></a>
            </div>
        </div>
    </main>

    <!-- Pied de page -->
    <?php include 'partials/footer.php'; ?>
</body>
</html>

<style>
    body {
        background: #fdfdfb;
        color: #333;
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
</style>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment choisir une voiture de location ?</title>
    <!-- <link rel="stylesheet" href="styles/article-style.css"> -->
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php include 'partials/nav.php'; ?>
    <br><br>
    <main>
        <h1>Voyager en toute sécurité : nos recommandations</h1>
        <section class="article-container">
            <img src="images/auto-2179220.jpg" alt="Voiture de location" class="article-image">
            <div class="article-content">
                <p>La sécurité sur la route est primordiale, surtout lors de longs trajets...</p>
                <h2>1. Vérifiez votre véhicule</h2>
                <p>Avant de partir, assurez-vous que votre voiture est en bon état (freins, pneus, lumières...).</p>
                <h2>2. Respectez les règles de conduite</h2>
                <p>Adaptez votre vitesse, respectez les distances de sécurité et soyez attentif aux autres usagers.</p>
                <h2>3. Faites des pauses régulières</h2>
                <p>Conduire longtemps peut être fatigant, arrêtez-vous toutes les deux heures.</p>
            </div>
        </section>
    </main>
    <a href="Blog.php" class="back-button">explorer le Blog</a>
    <!-- Pied de page -->
    <?php include 'partials/footer.php'; ?>
</body>
</html>

<style>
    .article-container {
    width: 80%;
    margin: 20px auto;
    background: white;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.article-image {
    width: 100%;
    border-radius: 10px;
    max-height: 400px;
    object-fit: cover;
}
.back-button {
    display: block;
    width: 200px;
    margin: 20px auto;
    text-align: center;
    padding: 10px;
    background: #ff8000;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.back-button:hover {
    background: #cc6600;
}

    body {
        padding: 5px;
    }

    footer {
        border-radius: 10px;
    }
</style>
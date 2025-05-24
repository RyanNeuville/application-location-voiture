<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment choisir une voiture de location ?</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php include 'partials/nav.php'; ?>
    <br><br>
    <main>
        <h1>Comment choisir une voiture de location ?</h1>
        <section class="article-container">
            <img src="images/car-4825631.jpg" alt="Voiture de location" class="article-image">
            <div class="article-content">
                <p>Louer une voiture peut être une tâche complexe avec de nombreux facteurs à considérer...</p>
                <h2>1. Définissez vos besoins</h2>
                <p>Choisissez une voiture en fonction du nombre de passagers, du type de trajet et de votre budget.</p>
                <h2>2. Comparez les prix</h2>
                <p>Utilisez les comparateurs en ligne pour obtenir le meilleur tarif.</p>
                <h2>3. Vérifiez les assurances</h2>
                <p>Assurez-vous d'être bien couvert en cas d'accident.</p>
            </div>
        </section>
        <a href="Blog.php" class="back-button">explorer le Blog</a>
    </main>
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

    header {
        border-radius: 5px;
    }

    nav ul li a:hover,
    nav ul li a.active {
        color: orange;
    }
</style>
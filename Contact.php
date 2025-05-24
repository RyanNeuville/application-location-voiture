<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mounir - Contact</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php include 'partials/nav.php'; ?>

    <!-- Contenu principal -->
    <main>
        <h1 class="page-title">Nous Contacter</h1>

        <section class="contact-section">
            <div class="contact-info">
               <img src="images/car-4825631.jpg" alt="voiture">
            </div>

            <form class="contact-form">
                <h2>Envoyer un Message</h2>
                <input type="text" placeholder="Votre nom" required>
                <input type="email" placeholder="Votre email" required>
                <textarea placeholder="Votre message" rows="5" required></textarea>
                <button type="submit" class="btn">Envoyer</button>
            </form>
        </section>
    </main>

    <!-- Pied de page -->
    <?php include 'partials/footer.php'; ?>
</body>
</html>

<style>
    body {
        background: #fdfdfb; /* Fond clair */
        color: #333; /* Couleur de texte principale */
        line-height: 1.6;
        background-image: url(images/car-3531147.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        transition: background-color 0.3s ease;
        height:800px;
        padding: 5px;
        object-fit:cover;

    }
    .contact-section{
        background-image: url(images/car-4825631.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        transition: background-color 0.3s ease;
        padding: 5px;
        object-fit:cover;
    }
    .contact-info{
        width: 40%;
        img{
            width: 40%;
        }
    }

    footer {
        border-radius: 10px;
    }
</style>
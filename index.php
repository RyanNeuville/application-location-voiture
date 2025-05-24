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
    <nav class="flex items-center justify-between p-4 bg-white shadow-md rounded-lg">
        <div class="logo"><span></span><strong class="text-orange-500">AUTOTECH</strong></div>
        <button id="menu-toggle" class="md:hidden p-2 rounded focus:outline-none focus:ring-2 focus:ring-orange-400" aria-label="Ouvrir le menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <ul id="nav-menu" class="flex flex-col md:flex-row md:static absolute top-16 left-0 w-full md:w-auto bg-white md:bg-transparent z-50 md:z-auto shadow md:shadow-none transition-all duration-200 ease-in-out md:opacity-100 opacity-0 pointer-events-none md:pointer-events-auto">
            <li class="my-1 md:my-0 md:mx-2">
                <a href="index.php" class="block px-4 py-2 rounded-md font-semibold text-orange-600 bg-orange-100 shadow-sm md:bg-transparent md:text-gray-700 md:hover:bg-orange-100 md:hover:text-orange-600 transition active">ACCUEIL</a>
            </li>
            <li class="my-1 md:my-0 md:mx-2">
                <a href="Apropos.php" class="block px-4 py-2 rounded-md font-semibold text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition">A PROPOS</a>
            </li>
            <li class="my-1 md:my-0 md:mx-2">
                <a href="Vehicules.php" class="block px-4 py-2 rounded-md font-semibold text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition">VEHICULES</a>
            </li>
            <li class="my-1 md:my-0 md:mx-2">
                <a href="Blog.php" class="block px-4 py-2 rounded-md font-semibold text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition">BLOG</a>
            </li>
            <li class="my-1 md:my-0 md:mx-2">
                <a href="Contact.php" class="block px-4 py-2 rounded-md font-semibold text-gray-700 hover:bg-orange-100 hover:text-orange-600 transition">CONTACT</a>
            </li>
        </ul>
    </nav>
    <div class="actions">
    </div>

    <!-- Contenu principal -->
    <div class="flex items-center justify-center min-h-screen">
        <main class="">
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
    </div>

    <!-- Pied de page -->
    <footer class="footer sm:footer-horizontal bg-neutral p-10">
        <aside>
            <img src="images/logo.png" alt="" class="rounded-full w-16 h-16">
            <p>
                AUTOTECH VOTRE SERVICE DE RESERVATION.
                <br />
                &copy; GL1B-AKWA 2025
            </p>
        </aside>
        <nav>
            <h6 class="footer-title">Reseau</h6>
            <div class="grid grid-flow-col gap-4">
                <a>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                    </svg>
                </a>
                <a>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                    </svg>
                </a>
                <a>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                    </svg>
                </a>
            </div>
        </nav>
    </footer>
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const navMenu = document.getElementById('nav-menu');
        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('opacity-0');
            navMenu.classList.toggle('pointer-events-none');
        });

        function handleResize() {
            if (window.innerWidth >= 768) {
                navMenu.classList.remove('opacity-0', 'pointer-events-none');
            } else {
                navMenu.classList.add('opacity-0', 'pointer-events-none');
            }
        }
        window.addEventListener('resize', handleResize);
        window.addEventListener('DOMContentLoaded', handleResize);
    </script>
</body>

</html>

<style>
    body {
        padding: 5px;
    }

    header {
        border-radius: 5px;
    }

    nav ul li a:hover,
    nav ul li a.active {
        color: orange;
    }

    nav ul {
        transition: all 0.2s;
    }

    @media (max-width: 800px) {

        /* nav {
            position: relative;
            width: 100%;
            gap: 200px;
            float: right;
        } */

        nav ul {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 60px;
            width: 200px;
            margin: auto;
            background: #fff;
            z-index: 50;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;

            li {
                padding: 5px;
            }
        }
    }
</style>
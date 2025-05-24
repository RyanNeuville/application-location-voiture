<?php
$current = basename($_SERVER['PHP_SELF']);
?>

<!-- Navigation commune -->
<nav class="flex items-center justify-between p-6 bg-white shadow-md rounded-lg" style="padding-left:2rem;padding-right:2rem;">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <div class="logo"><span></span><strong class="text-orange-500">AUTOTECH</strong></div>
    <button id="menu-toggle" class="md:hidden p-2 rounded focus:outline-none focus:ring-2 focus:ring-orange-400" aria-label="Ouvrir le menu">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
    <ul id="nav-menu" class="flex flex-col md:flex-row md:static absolute top-16 left-0 w-full md:w-auto bg-white md:bg-transparent z-50 md:z-auto shadow md:shadow-none transition-all duration-200 ease-in-out md:opacity-100 opacity-0 pointer-events-none md:pointer-events-auto">
        <li class="my-1 md:my-0 md:mx-2">
            <a href="index.php" class="block px-4 py-2 rounded-md font-semibold transition <?php echo $current == 'index.php' ? 'text-orange-600 bg-orange-100 shadow-sm' : 'text-gray-700 md:hover:bg-orange-100 md:hover:text-orange-600'; ?> <?php if ($current == 'index.php') echo ' active'; ?>">ACCUEIL</a>
        </li>
        <li class="my-1 md:my-0 md:mx-2">
            <a href="Apropos.php" class="block px-4 py-2 rounded-md font-semibold transition <?php echo $current == 'Apropos.php' ? 'text-orange-600 bg-orange-100 shadow-sm' : 'text-gray-700 md:hover:bg-orange-100 md:hover:text-orange-600'; ?> <?php if ($current == 'Apropos.php') echo ' active'; ?>">A PROPOS</a>
        </li>
        <li class="my-1 md:my-0 md:mx-2">
            <a href="Vehicules.php" class="block px-4 py-2 rounded-md font-semibold transition <?php echo $current == 'Vehicules.php' ? 'text-orange-600 bg-orange-100 shadow-sm' : 'text-gray-700 md:hover:bg-orange-100 md:hover:text-orange-600'; ?> <?php if ($current == 'Vehicules.php') echo ' active'; ?>">VEHICULES</a>
        </li>
        <li class="my-1 md:my-0 md:mx-2">
            <a href="Blog.php" class="block px-4 py-2 rounded-md font-semibold transition <?php echo $current == 'Blog.php' ? 'text-orange-600 bg-orange-100 shadow-sm' : 'text-gray-700 md:hover:bg-orange-100 md:hover:text-orange-600'; ?> <?php if ($current == 'Blog.php') echo ' active'; ?>">BLOG</a>
        </li>
        <li class="my-1 md:my-0 md:mx-2">
            <a href="Contact.php" class="block px-4 py-2 rounded-md font-semibold transition <?php echo $current == 'Contact.php' ? 'text-orange-600 bg-orange-100 shadow-sm' : 'text-gray-700 md:hover:bg-orange-100 md:hover:text-orange-600'; ?> <?php if ($current == 'Contact.php') echo ' active'; ?>">CONTACT</a>
        </li>
    </ul>
</nav>
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const navMenu = document.getElementById('nav-menu');
    if (menuToggle && navMenu) {
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
    }
</script>
<style>
    .active {
        font-weight: bold;
        border-bottom: 2px solid orange;
    }

    nav {
        padding: 16px;
    }
</style>
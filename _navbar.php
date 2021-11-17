<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24">
                <title>Stuliday</title>
                <circle cx="12" cy="12" r="10" />
                <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
            </svg>
        </a>
        <div class="py-2 d-none d-md-inline-block">
            <?php
            if ($user) {
                include '_view-posts.php';
            ?>
                <a href="index.php">Accueil</a>
                <a href="compte.php">Mon compte</a>
                <a href="add-posts.php">Créer une annonce</a>
                <a href="my-posts.php">Mes annonces</a>
                <a href="reservation">Ma reservation</a>
                <a href="?logout">Logout</a>
            <?php } else { ?>
                <a href="sign-in.php">Login</a>

        </div>
    <?php
            } ?>
    </nav>
</header>
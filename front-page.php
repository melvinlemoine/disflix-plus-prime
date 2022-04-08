<?php get_header() ?>

<header class="header relative flex-c v-centered">

    <video class="header__video" autoplay muted loop>
        <source src="<?php bloginfo('template_url'); ?>/assets/vid/obi-wan.mp4" type="video/mp4">
    </video>

    <div class="header__content">
        <img class="header__content_logo" src="<?php bloginfo('template_url'); ?>/assets/images/obi-wan.png" alt="Show logo" />
        <p class="header__content_description fs-5 ta-justify">Pendant le règne de l'Empire, Obi-Wan Kenobi se lance dans une mission cruciale.</p>
        <div class="header__content_controls mt-10">
            <a class="header__content_controls_control header__content_controls_control--play button has-icon is-white">
                <span class="icon">
                    <i class="fa-solid fa-play"></i>
                </span>
                Lecture
            </a>
            <a class="header__content_controls_control header__content_controls_control--more button has-icon is-white">
                <span class="icon">
                    <i class="fa-solid fa-circle-info"></i>
                </span>
                Plus d'infos
            </a>
        </div>
        </p>

</header>

<main class="main">

</main>

<?php get_footer() ?>
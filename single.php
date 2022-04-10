<?php get_header() ?>

<header class="header relative flex-c v-centered">

    <a href="http://localhost/streamify" class="button has-icon header__back absolute">
        <span class="icon">
            <i class="fa-solid fa-house"></i>
        </span>
        Accueil
    </a>

    <video class="header__video" autoplay muted loop>
        <source src="<?php bloginfo('template_url'); ?>/assets/vid/mandalorian.mp4" type="video/mp4">
    </video>

    <div class="header__content">
        <img class="header__content_logo" src="<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/logo.png" alt="Show logo" />

        <div class="header__content_informations flex-r mb-5">
            <p class="header__content_informations_seasons uppercase bold">2 saisons</p>
            <span class="mh-5">·</span>
            <p class="header__content_informations_categories">Science-Fiction, Action, Aventure</p>
        </div>


        <p class="header__content_description fs-5 ta-justify">Pendant le règne de l'Empire, Obi-Wan Kenobi se lance dans une mission cruciale.</p>
        <div class="header__content_controls flex-r v-centered mt-10">
            <a class="header__content_controls_control header__content_controls_control--play button has-icon is-white disable">
                <span class="icon">
                    <i class="fa-solid fa-play"></i>
                </span>
                Lecture
            </a>
            <a class="header__content_controls_control header__content_controls_control--teaser button has-icon is-white disable">
                <!-- <span class="icon">
                    <i class="fa-solid fa-play"></i>
                </span> -->
                Bande annonce
            </a>
        </div>
        </p>

</header>

<main class="main">
    <section class="section">
        <h2 class="section__title">Saison 1</h2>
        <div class="list">
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/1')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/2')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/3')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/4')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/5')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/6')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/7')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/8')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
        </div>
    </section>

    <section class="section">
        <h2 class="section__title">Saison 2</h2>
        <div class="list">
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/9')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/10')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/11')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/12')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/13')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/14')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/15')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/16')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
        </div>
    </section>
</main>


<?php get_footer() ?>
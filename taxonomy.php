<?php get_header(); ?>

<main class="main">
    <div class="container">

        <a href="http://localhost/streamify" class="button has-icon is-white">
            <span class="icon">
                <i class="fa-solid fa-chevron-left"></i>
            </span>
            Accueil
        </a>

        <h1 class="title fs-10 mv-5">Catégorie : <b>Science-Fiction</b> </h1>

        <div class="list">
            <a class="ShowCard bg-center bg-cover bg-norepeat" href="#" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/mandalorian.jpg')">
            </a>
            <a class="ShowCard bg-center bg-cover bg-norepeat" href="#" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/tron.jpg')">
            </a>
            <a class="ShowCard bg-center bg-cover bg-norepeat" href="#" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/vaiana.jpg')">
            </a>
            <a class="ShowCard bg-center bg-cover bg-norepeat" href="#" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/avatar.jpg')">
            </a>
            <a class="ShowCard bg-center bg-cover bg-norepeat" href="#" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/strange.jpg')">
            </a>
            <a class="ShowCard bg-center bg-cover bg-norepeat" href="#" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/boba.jpg')">
            </a>
            <a class="ShowCard bg-center bg-cover bg-norepeat" href="#" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/vikings.webp')">
            </a>

        </div>
    </div>

</main>

<?php get_footer(); ?>
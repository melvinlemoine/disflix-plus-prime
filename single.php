<?php get_header() ?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/plyr.min.css">
</link>

<script>
    let player;
</script>

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
            <!-- <a class="header__content_controls_control header__content_controls_control--play button has-icon is-white disable">
                <span class="icon">
                    <i class="fa-solid fa-play"></i>
                </span>
                Lecture
            </a> -->
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
            <div class="EpisodeCard" onclick="PlayVideo('<?php bloginfo('template_url'); ?>/assets/vid/kenobi.mp4','<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/1.jpg', 'The Mandalorian', '1. Chapitre 1 : Le Mandalorien')">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/1.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </div>
            <div class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/2.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </div>
            <div class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/3.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </div>
            <div class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/4.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </div>
            <div class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/5.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </div>
            <div class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/6.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </div>
            <div class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/7.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </div>
            <div class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/8.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <h2 class="section__title">Saison 2</h2>
        <div class="list">
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/9.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/10.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/11.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/12.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/13.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/14.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/15.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
            <a class="EpisodeCard" href="#">
                <div class="EpisodeCard__thumbnail bg-cover bg-center bg-norepeat" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/the-mandalorian/episodes/16.jpg')"></div>
                <div class="EpisodeCard__content flex-c">
                    <p class="EpisodeCard__content_title">1. Chapitre 1 : Le Mandalorien (40 min)</p>
                    <p class="EpisodeCard__content_description">Un chasseur mandalorien traque une cible pour un mystérieux et fortuné client.</p>
                </div>
            </a>
        </div>
    </section>
</main>

<script>
    console.log("JS");

    let moveTimer;

    function PlayVideo(video_url, poster_url, title, episode) {
        console.log("Launch Video !");
        console.log("video_url : " + video_url);
        console.log("poster_url : " + poster_url);
        $("#body").append("<div class='Player' id='Player'></div>");
        $("#Player").append("<video class='player' id='video' class='header__video' controls data-poster='" + poster_url + "'></video>");
        $("#video").append("<source src='" + video_url + "' type='video/mp4'>");
        $("#Player").append("<script>player = new Plyr('#video', {title: 'temp',fullscreen: {enabled: true, fallback: true, iosNative: false, container: '#main'}, hideControls: false})<\/script>");
        $("#Player").append("<script>player.on('controlsshown', (event) => { $('#informations').addClass('shown');$('#informations').removeClass('hidden') });<\/script>");
        $("#Player").append("<script>player.on('controlshidden', (event) => { $('#informations').addClass('hidden');$('#informations').removeClass('shown') });<\/script>");
        $("#Player").append("<script>$('#informations').mouseenter(function(){$('#informations').addClass('shown')})<\/script>");
        $("#Player").append("<script>$('#Player').on('mousemove',function(){console.log('Im moving!');player.toggleControls(true);clearTimeout(moveTimer); moveTimer = setTimeout(function() {console.log('I stopped moving!');console.log('The mouse is not moving.');player.toggleControls(false);}, 1000) })<\/script>");
            $("#Player").append("<div class='Player__informations' id='informations' onmouseenter='showControls()'> \
        <i class='Player__informations_back fa-solid fa-arrow-left' onclick='CloseVideo()'></i> \
        <p class='Player__informations_title'>" + title + "</p>\
        <p class='Player__informations_episode'>" + episode + "</p>\
        \
        </div>");
        }

        function CloseVideo() {
            $('#Player').remove();
        }

        function showControls() {
            console.log('show controls');
            player.toggleControls(true);
        }
</script>

<script src='<?php bloginfo('template_url'); ?>/assets/js/plyr.min.js'></script>

<?php get_footer() ?>
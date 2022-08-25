<?php get_header(); ?>

<main class="main">
     <div class="container">

          <a href="http://localhost/streamify" class="button has-icon is-white">
               <span class="icon">
                    <i class="fa-solid fa-chevron-left"></i>
               </span>
               Accueil
          </a>

          <h1 class="title fs-10 mv-5">Tous les programmes</h1>

          <div class="list">
               <div class="ShowCard bg-center bg-cover bg-norepeat" href="#" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/mandalorian.jpg')">
               </div>
               <div class="ShowCard bg-center bg-cover bg-norepeat" href="#" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/tron.jpg')">
               </div>
               <div class="ShowCard bg-center bg-cover bg-norepeat" href="#" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/vaiana.jpg')">
               </div>
               <div class="ShowCard bg-center bg-cover bg-norepeat" href="#" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/avatar.jpg')">
               </div>
               <div class="ShowCard bg-center bg-cover bg-norepeat" href="#" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/strange.jpg')">
               </div>
               <div class="ShowCard bg-center bg-cover bg-norepeat" href="#" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/boba.jpg')">
               </div>
               <div class="ShowCard bg-center bg-cover bg-norepeat" href="#" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/shows/vikings.webp')">
               </div>

          </div>
     </div>

</main>

<?php get_footer(); ?>
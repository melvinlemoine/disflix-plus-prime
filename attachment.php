<?php get_header(); ?>

<main class="main">
    <h1><?php single_post_title(); ?></h1>
    <!-- <p><?php echo wp_get_attachment_url(); ?></p> -->
    <video class="header__video" controls>
        <source src="<?php echo wp_get_attachment_url(); ?>" type="video/mp4">
    </video>
</main>

<?php get_footer(); ?>
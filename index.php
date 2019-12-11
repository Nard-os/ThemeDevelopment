<?php
get_header();
?>
        <?php get_template_part('template-parts/homeFeatured') ?>
        <img src="<?php echo get_parent_theme_file_uri(); ?>/materials/images/RUPI.jpg" style="width:300px">
        <?php if ( have_posts()): ?>
            <?php while ( have_posts()): the_post(); ?>
            <h1><?php the_title()?></h1>
        <?php endwhile; ?>
        <?php endif; ?>

<?php
get_sidebar();
get_footer();
?> 
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wedding
 */

get_header();
?>
   <div class="container">
   <div class="row">
    <div class="col-sm-8">
	<div class="row1">
  <div class="column1">
    <h2>Column</h2>
    <p id="rcorners2"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
  </div>
  
  <div class="column1">
    <h2>Column</h2>
    <p id="rcorners2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
  </div>
  
  <div class="column1">
    <h2>Column</h2>
    <p id="rcorners2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
  </div>
</div>
	<div id="primary" class="content-area">
		
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		
	</div><!-- #primary -->
	</div>
	 <div class="col-sm-4">
    <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>


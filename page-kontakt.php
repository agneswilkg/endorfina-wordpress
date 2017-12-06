<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package endorfina
 */

get_header(); ?>
<div id="contact-us-form"
	<div>
		<img src="<?php echo(get_template_directory_uri()); ?>/images/contact-header.jpg" width="100%"> 
		
	<div>
		<main>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'contact' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div> <!-- #contact-us-form -->		
		
		
		<!-- start sign up section -->
		<section id="signing">
			<div id="sign-up">
				<h1>Nie czekaj i zapisz sie już teraz!</h1>
				<button>Dołącz!</button>
			</div>
		</section>
		<!-- end sign up section -->
	</div>






<?php

get_footer();
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

<!-- DISPLAYS ALL POSTS IN CATEGORY CREW -->
	<div id="category-crew">
		<img src="<?php echo(get_template_directory_uri()); ?>/images/header-kadra.jpg">
		
		<div id="join-us">
    	<h4>Dołącz do naszej szkoły tańca!</h4>
      <h1>Nie czekaj i zapisz się już teraz!</h1>
      <button>Dołącz!</button>
    </div><!-- #join-us -->
		
		<ul>
    	<?php /* start the loop */ ?>
      <?php $crew = new WP_Query('category_name=crew'); ?>
      <?php while ( $crew->have_posts() ): $crew->the_post(); ?>
       
      		<li>
         		<div>
							<h1 class="title"><?php the_title(); ?></h1>
							<?php the_content(); ?>
						</div>
          	<?php the_post_thumbnail(); ?>

          </li>
       <?php endwhile; ?>
     </ul>
 </div><!-- #our-styles -->
 
 <!-- start sign up section -->
 <section id="signing">
 		<div id="sign-up">
    	<h1>Nie czekaj i zapisz sie już teraz!</h1>
      <button>Dołącz!</button>
    </div>
 </section>
 <!-- end sign up section -->








<?php

get_footer();
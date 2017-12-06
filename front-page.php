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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            
          <div id="main-banner">
            <img src="<?php echo(get_template_directory_uri()); ?>/images/main-logo-dark.jpg" width="100%">
            <div class="join-us">
              <h4>Dołącz do naszej szkoły tańca!</h4>
              <h1>Nie czekaj i zapisz się już teraz!</h1>
              <button>Dołącz!</button>
            </div><!-- .join-us -->
          </div>
            
          <!-- start section with dance classes -->
          <section id="dance-classes">
            <div class="wrapper">
              <div id="dance-slogan">
                <p>Od baletu przez jazz po hip-hop! Nasza
                  szkoła pozwala na kreatywne łączenie różnych stylów, przez
                  co zdobędziesz wysoki poziom umiejętności w każdej dziedzinie
                  tańca.</p>
                <div id="learn-more">
                  <h5>POZNAJ</h5>
                  <h1>NASZE STYLE TAŃCA</h1>
                </div>
              </div><!-- #dance-slogan -->
              <hr class="dance-break"/>
              <hr class="bottom dance-break"/>
              <ul>
                  <?php /* start the loop */ ?>
                      <?php $dancestyles = new WP_Query('category_name=styles&posts_per_page=4'); ?>
                      <?php while ( $dancestyles->have_posts() ): $dancestyles->the_post(); ?>
                      
                          <li>
                              <?php the_post_thumbnail(); ?>
														<h1 class="title"><?php the_title(); ?></h1>
                            <p class="short-desc"> <?php echo strip_shortcodes(wp_trim_words( get_the_content(), 40 )); ?>
														</p>
                              <a href="<?php the_permalink(); ?>">Więcej</a>
                          </li>
                  <?php endwhile; ?>
                </ul>
            </div> <!-- .wrapper -->
          </section><!-- #dance-classes -->
          <!-- end section with dance classes -->


          <section id="empty-div">
            <div><p>blah</p></div>
          </section>


          <!-- start section with instructors -->
          <section id="instructors">
            <div class="wrapper">
              <h5>PROFESJONALNA</h5>
              <h1>KADRA INSTRUKTORÓW</h1>
              <hr/>
              <hr class="bottom"/>
              
              <ul>
                  <?php /* start the loop */ ?>
                  <?php $myquery = new WP_Query('category_name=crew&posts_per_page=4'); ?>
                  <?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>
                  
                      <li>
                          <?php the_post_thumbnail(); ?>
                          <h2><?php the_title(); ?></h2>
                          <p><?php echo strip_shortcodes(wp_trim_words( get_the_content(), 15 )); ?></p>
                      </li>
                  
                  <?php endwhile; ?>
               
              </ul>
              <h5 class="cloud-title">Jesteśmy dla Was!</h5>
             <?php
    					// Get the ID of a given category
    					$crew_id = get_cat_ID( 'crew' );

    					// Get the URL of this category
    					$crew_category_link = get_category_link( $crew_id );
							?>

							<!-- Print a link to this category -->
							<button><a href="<?php echo esc_url( $crew_category_link ); ?>" title="Crew">Więcej...</a>
              </button>
            </div><!-- #instructors -->
          </section><!-- #our-teachers -->
          <!-- end section with instructors -->

          <!-- start extra classes for children section -->
          <section id="kidos">
            <img src="<?php echo(get_template_directory_uri()); ?>/images/children-replacer.png">
            <div id="kidos-description">
              <h1>Warsztaty</h1>
              <h1>dla najmłodszych!</h1>
              <p>Pot dawg izzle, luctizzle dang, yippiyo et, sollicitudizzle at,
                the bizzle. Donec pharetra, nisi dizzle bling bling malesuada,
                neque pot consequat velizzle, bling bling fringilla libero
                erat ac purus. Shizzle my nizzle crocodizzle shit taciti
                sociosqu ad litora go to hizzle pizzle conubia nostra, per
                inceptizzle hymenaeos.</p>
              <button>Więcej...</button>
            </div><!-- #kidos-description -->
          </section>
          <!-- end extra classes for children section -->

          <!-- start sign up section -->
          <section id="signing">
            <div id="sign-up">
              <h1>Nie czekaj i zapisz sie już teraz!</h1>
              <button>Dołącz!</button>
            </div>
          </section>
          <!-- end sign up section -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
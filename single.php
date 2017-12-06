<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package endorfina
 */

get_header(); ?>


<div id="single-post">
<img id="single-style-header" src="<?php echo(get_template_directory_uri()); ?>/images/header-style.jpg">
<div class="wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
			<h1 id="single-title"><?php the_title(); ?></h1>
		<div id="single-ctt"><?php the_content(); ?> 
			<?php endwhile; endif; ?></div>
		
		<?php if ( $post->post_type == 'data-design' && $post->post_status == 'publish' ) {
        $attachments = get_posts( array(
            'post_type' => 'attachment',
            'posts_per_page' => -1,
            'post_parent' => $post->ID,
            'exclude'     => get_post_thumbnail_id()
        ) );
 
        if ( $attachments ) {
            foreach ( $attachments as $attachment ) {
                $class = "post-attachment mime-" . sanitize_title( $attachment->post_mime_type );
                $thumbimg = wp_get_attachment_link( $attachment->ID, 'thumbnail-size', true );
                echo '<li class="' . $class . ' data-design-thumbnail">' . $thumbimg . '</li>';
            }
             
        }
    }
?>
		
		<ul>
			<li>
				
			</li>
		</ul>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrapper -->	

	
	 <!-- start sign up section -->
 <section id="signing">
 		<div id="sign-up">
    	<h1>Nie czekaj i zapisz sie już teraz!</h1>
      <button>Dołącz!</button>
    </div>
 </section>
 <!-- end sign up section -->
<</div>
<?php
get_footer();

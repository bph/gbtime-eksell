<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
 
/**need to get the podcast info
 */ 
	$image = get_option( 'ss_podcasting_data_image', '' );
	$title = get_option( 'ss_podcasting_data_title', '' );
	$description = get_option( 'ss_podcasting_data_description', '' );
?>
 
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
		
				<img src="<?php echo esc_html( $image ); ?>" style="float:right" width="200" height="200">
				<h1 class="page-title">Podcast: <?php echo $title ?></h1>
				<p>
					<?php echo esc_html( $description ); ?>
				</p>
			
				<p><strong>Subscribe via Podcast apps or RSS</strong></p>
				<a href="http://bit.ly/2KrgJKw" title="Subscribe via Overcast">
				<img src="https://gutenbergtimes.com/wp-content/uploads/2019/11/overcast-podcast-logo-0011.png" alt="Overcast Podcast App Logo" width="70" height="70"></a>

				<a href="https://spoti.fi/2IYsOqz" title="Subscribe via Spotify">
				<img src="https://gutenbergtimes.com/wp-content/uploads/2019/11/spotify.jpg" alt="Spotify Podcast App Logo" width="70" height="70"></a>

				<a href="http://bit.ly/2xmNh1n" title="Subscribe via Google Play">
				<img src="https://gutenbergtimes.com/wp-content/uploads/2019/11/google-play-podcast-logo-001.jpg" alt="Google Play Store Logo" width="70" height="70"></a>

				<a href="http://bit.ly/2ZZiC6F" title="Subscribe via Stitcher">
				<img src="https://gutenbergtimes.com/wp-content/uploads/2019/11/stitcher-logo-podcast-001.png" alt="Podcast App Logo" width="70" height="70"></a>

				<a href="https://apple.co/2Xece9H" title="Subscribe via iTunes">
				<img src="https://gutenbergtimes.com/wp-content/uploads/2019/11/itunes-podcast-logo-001.jpg" alt="Podcast App Logo" width="70" height="70"></a>

				<a href="https://gutenbergtimes.com/podcast/feed" title="Subscribe via RSS Feed">
				<img src="
				https://gutenbergtimes.com/wp-content/uploads/2019/11/rssfeed.jpg" alt="PodcastRSS" width="70" height="70"></a>
				<p style="font-size:0.8em;"><i>Scroll to get the latest episodes</i></p>
				</div>
			
				</header><!-- .page-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content/content', 'excerpt' );

				// End the loop.
			endwhile;


			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

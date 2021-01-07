<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article>
	<div class="entry-content">
		<?php
		// выводим слайдер 
		 echo do_shortcode( '[soliloquy id="129"]' ); 
			
			$params = array (
				'posts_per_page' => 10, // количество постов на странице
				'cat' => 6,				// категория постов
				'post_type'       => 'post', // тип постов
				'paged'           => 1 // текущая страница
			);
			// запрос
				$query = new WP_Query( $params ); 
				 if ( $query->have_posts() ) : ?>
					<!-- цикл -->
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>						
					<?php endwhile; ?>
					<!-- / цикл --> 
				  <?php  else : 
				    	?>
				    	<p><?php esc_html_e( 'Нет постов по вашим критериям.' ); ?></p>
				    	<?php 
				    endif; ?>
			
					
			
	</div><!-- .entry-content -->

		<footer class="entry-footer default-max-width">
			<?php twenty_twenty_one_entry_meta_footer(); ?>
		</footer><!-- .entry-footer -->
	
</article><!-- #post-<?php// the_ID(); ?> -->

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
			$params = array (		
				'post_type'       => 'galery', // тип постов			
			);
				// запрос
				$query = new WP_Query( $params ); 
				 if ( $query->have_posts() ) : ?>
					<!-- цикл -->
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<h2><?php the_title(); ?></h2>
						<p><?php the_excerpt(); ?></p>
							<?php the_content(); ?>
						<p>Ціна полотна - <?php the_field('price'); ?></p>	
						<p>Сылка на автора <?php the_field('name'); ?></p>
						<p><a href="<?php the_field('link'); ?>"><?php the_field('link'); ?></a></p>
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
	
</article>

<?php
/**
 * The template for displaying search results pages.
 *
 * @package inspiro
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>
			<section class="short-bar" id="hero-search-results">
				<p>Resultados de búsqueda: <i><?php echo get_search_query(); ?></i></p>
			</section>
			<section id="search-results">
				<ul class="posts-list">
			<?php while ( have_posts() ) : the_post(); ?>
					<li>
						<a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>"><?php echo get_the_post_thumbnail( $post->ID, "thumbnail"); ?></a>
						<div class="details">
							<a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>"><h2><?php echo the_title(); ?></h2></a>
							<p><?php $post_type = get_post_type_object( get_post_type($post->ID)); echo $post_type->labels->singular_name; ?></p>
						</div>
					</li>
			<?php endwhile; ?>
				</ul>
			</section>

			<?php inspiro_paging_nav(); ?>

		<?php else : ?>
			<section class="short-bar" id="search-no-results">
				<h1>Nada encontrado</h1>
				<p>Lo sentimos, no encontramos nada de lo que buscaste.</p>
				<p>Prueba buscar con otra palabra clave.</p>
				<?php get_search_form(); ?>
			</section>	
		<?php endif; ?>


<?php get_footer(); ?>

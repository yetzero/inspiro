<?php get_header(); ?>

		<?php if ( have_posts() ) : ?>

		<section id="hero-proyectos" class="hero-text">
			<h1>Proyectos</h1>
			<p>Algunos proyectos en los que hemos trabajado con nuestros clientes</p>
		</section>
			<div class="gallery">
			<?php while ( have_posts() ) : the_post(); ?>
				<a class="thumbnail" href="<?php echo the_permalink(); ?>">
					<div class="img-container"><?php
						$img = get_the_post_thumbnail($post->ID,'full');
						if(!empty($img)){
							echo $img;
						}
						else {
							echo "<p>Sin imagen</p>";
						}
				?></div>
				<h2><?php echo the_title(); ?></h2>
				<?php // $types = wp_get_post_terms($post->ID,'types'); ?>
				<!-- <ul class="types">--><?php //foreach($types as $type){
					 // echo '<li>'.$type->name.'</li>';
				// } ?>
				<!--</ul>--></a>
			<?php endwhile; ?>
			<p style="clear: both;">&nbsp;</p>
			</div>

		<?php else : ?>

			<h2>No hay proyectos que mostrar</h2>
		<?php endif; ?>

<?php get_footer(); ?>

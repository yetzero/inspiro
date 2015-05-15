<?php get_header(); ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<section class="breadcrumb">
			<p>Estás en: <a href="/proyectos/" title="Todos los proyectos">Proyectos</a> > <?php echo the_title(); ?></p>
		</section>
		<section class="short-bar">
			<h1><?php echo the_title(); ?></h1>
		</section>
		<div class="project-holder">
			<div class="gallery-column">
			<?php
				$images = get_post_meta($post->ID,'wpcf-image');
				foreach($images as $image) : ?>
				
				<img src="<?php echo $image; ?>" />
					
			<?php
				endforeach;
			?>
			</div>
			<div class="project-details">
				<?php
					echo get_post_meta($post->ID,'wpcf-description',true);
				?>
				<ul class="project-details-list">
					<li><b>Cliente</b>:
					<?php 
						$cliente_id = get_post_meta($post->ID,'_wpcf_belongs_clientes_id',true);
						echo get_the_title($cliente_id);
					?>
					<li><b>Fecha</b>: <?php echo get_post_meta($post->ID,'wpcf-date',true); ?></li>
					<li><b>URL</b>: <a href="<?php echo get_post_meta($post->ID,'wpcf-url',true); ?>"><?php echo get_post_meta($post->ID,'wpcf-url',true); ?></a></li>
				</ul>
			</div>
		<p style="clear: both;">&nbsp;</p>
		</div>

			<?php // inspiro_post_nav(); ?>

			

		<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
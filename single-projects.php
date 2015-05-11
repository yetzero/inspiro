<?php get_header(); ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<div class="page-top">
			<?php echo the_post_thumbnail( 'full'); ?>
			<div class="darkener"></div>
			<div class="page-top-content">
				<h1><?php echo the_title(); ?></h1>
			</div>
		</div>
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
				<h2>Descripción del proyecto</h2>
				<?php
					echo get_post_meta($post->ID,'wpcf-description',true);
				?>
				<ul class="project-details-list">
					<li><b>Cliente</b>:
					<?php 
						$cliente_id = get_post_meta($post->ID,'_wpcf_belongs_clients_id',true);
						echo get_the_title($cliente_id);
					?>
					<li><b>Fecha</b>: <?php echo get_post_meta($post->ID,'wpcf-date',true); ?></li>
					<li><b>URL</b>: <a href="<?php echo get_post_meta($post->ID,'wpcf-url',true); ?>"><?php echo get_post_meta($post->ID,'wpcf-url',true); ?></a></li>
				</ul>
			</div>
		<p style="clear: both;">&nbsp;</p>
		</div>

			<?php inspiro_post_nav(); ?>

			

		<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
<?php get_header(); ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<div class="page-top">
			<?php echo the_post_thumbnail( 'full'); ?>
			<!--<div class="darkener"></div>-->
			<div class="page-top-content">
				<h1><?php echo the_title(); ?></h1>
			<?php
				$hero_subtitle = get_post_meta($post->ID,'hero-subtitle',true);
				if(!empty($hero_subtitle)){
					echo '<p class="hero-subtitle">'.$hero_subtitle.'</p>';
				}
				
			?>
			</div>
		</div>
		<div class="page-container">
			<?php the_content(); ?>
		</div>
			<?php
					// If comments are open or we have at least one comment, load up the comment template
if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>

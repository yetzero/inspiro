<?php

/*
Template Name: Frontpage
*/
	
get_header(); ?>

		<?php while ( have_posts() ) : the_post(); ?>
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

<?php ?>
	<section class="page-title">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</section>

	<section class="page-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'inspiro' ),
				'after'  => '</div>',
			) );
		?>
	<?php edit_post_link( __( 'Edit', 'inspiro' ), '<span class="edit-link">', '</span>' ); ?>
	</section>	
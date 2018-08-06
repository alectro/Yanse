<?php get_header(); ?>

<!-- Row for main content area -->
<div class="row">
	
	<div class="large-8 columns" id="content" role="main">
	
	<?php if ( have_posts() ) : ?>

		<h1>
			<?php
				if ( is_day() ) :
					printf( __( 'Daily Archives: %s', 'yanse' ), '<span>' . get_the_date() . '</span>' );
				elseif ( is_month() ) :
					printf( __( 'Monthly Archives: %s', 'yanse' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
				elseif ( is_year() ) :
					printf( __( 'Yearly Archives: %s', 'yanse' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
				else :
					_e( 'Archives', 'yanse' );
				endif;
			?>
		</h1>
						<nav class="header-nav">
					<?php if (function_exists('yanse_breadcrumbs')) yanse_breadcrumbs(); ?>
				</nav>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
	<?php endif; // end have_posts() check ?>
	
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('yanse_pagination') ) { yanse_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'yanse' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'yanse' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>
	
	<div class="large-4 columns">
		<?php get_sidebar(); ?>
	</div>
</div>
		
<?php get_footer(); ?>
<?php get_header(); ?>

<!-- Row for main content area -->
<div class="row">

	<div class="large-8 columns" id="content" role="main">
	
		<h2><?php _e('Search Results for', 'yanse'); ?> "<?php echo get_search_query(); ?>"</h2>
	
	<?php if ( have_posts() ) : ?>
	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'yanse' ); ?></p>
		
	<?php endif; // end have_posts() check ?>
	
	<?php /* Display navigation to next/previous pages when applicable */ ?>


	</div>
	
	<div class="large-4 columns">
		<?php get_sidebar(); ?>
	</div>
</div>
		
<?php get_footer(); ?>
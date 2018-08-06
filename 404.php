<?php get_header(); ?>

<!-- Row for main content area -->
<div class="row">

	<div class="small-12 large-12 columns" id="content" role="main">

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php _e('File Not Found', 'yanse'); ?></h1>
				<nav class="header-nav">
					<?php if (function_exists('yanse_breadcrumbs')) yanse_breadcrumbs(); ?>
				</nav>
			</header>

				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'yanse' ); ?></p>

				<?php get_search_form(); ?>
				
		</article>

	</div>
</div>
<?php get_footer(); ?>

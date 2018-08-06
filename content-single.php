<?php
/**
 * @package Yanse
 */
?>

	<div class="large-9 columns" id="content" role="main">

		<?php /* Start loop */ ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<nav class="header-nav">
					<?php if (function_exists('yanse_breadcrumbs')) yanse_breadcrumbs(); ?>
				</nav>
				<?php yanse_entry_meta(); ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'yanse'), 'after' => '</p></nav>' )); ?>
				<p class="entry-tags"><?php the_tags(); ?></p>
			</footer>
		</article>
				<?php comments_template(); ?>

	</div>

	<div class="large-3 columns">
	<?php get_sidebar(); ?>

	</div>

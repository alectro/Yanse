<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Yanse
 * @since Yanse 4.0
 */
?>

<div class="row">
	<article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
		<header class="large-12 columns">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php yanse_entry_meta(); ?>
		</header>

		<?php
		if (has_post_thumbnail()) {
		?>
			<div class="large-12 columns">
				<a href="<?php the_permalink(); ?>">
					<?php
					$thumbs = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb-small');
					$thumbm = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb-medium');
					$thumbl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumb-large');
					?>
					<img data-interchange="[<?php echo $thumbs[0]; ?>, small],[<?php echo $thumbm[0]; ?>, medium], [<?php echo $thumbl[0]; ?>, large]" >
				</a>
			</div>



		<?php } ?>
			<div class="large-12 columns">
				<?php the_excerpt(); ?>
			</div>
	</article>
</div>


<footer role="contentinfo">

	<div class="row">
		<div class="small-12 columns">
			<nav class="sub-nav" data-topbar>
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>

			</nav>
		</div>
	</div>


	<div class="row">

		<div class="small-12 large-2 columns">
			<p>&copy; <?php echo date('Y'); ?>
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>&#58; <?php bloginfo( 'description' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</p>
		</div>

		<div class="small-12 large-10 columns social">
			<ul>
				<?php if ( of_get_option('rss_url') ) { ?>
					<!-- RSS -->
	        <li>
						<a class="button" href="<?php echo of_get_option('rss_url', 'no entry'); ?>" title="<?php echo sprintf( __('Subscribe to %s feed', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-rss"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('twitter_url') ) { ?>
					<!-- Twitter -->
	        <li>
						<a class="button" href="<?php echo of_get_option('twitter_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Twitter', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
								<div class="icon-social-twitter"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('facebook_url') ) { ?>
					<!-- Facebook -->
	        <li>
						<a class="button" href="<?php echo of_get_option('facebook_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Facebook', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-facebook"></div>
						</a>
	        </li>
	       <?php } ?>

				<?php if ( of_get_option('googleplus_url') ) { ?>
					<!-- Google+ -->
	        <li>
						<a class="button" href="<?php echo of_get_option('googleplus_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Google+', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-google-plus"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('wechat_url') ) { ?>
					<!-- Weixin -->
	        <li>
						<a class="button" title="<?php echo sprintf( __('Friend %s on WeChat', 'yanse'), get_bloginfo('name') ); ?>" target="_blank" data-open="wechatModal">
							<div class="icon-social-wechat"></div>
						</a>
	        </li>
	      <?php } ?>
				<?php if ( of_get_option('weibo_url') ) { ?>
					<!-- Weibo -->
	        <li>
						<a class="button" href="<?php echo of_get_option('weibo_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Weibo', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-weibo"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('douban_url') ) { ?>
					<!-- Douban -->
	        <li>
						<a class="button" href="<?php echo of_get_option('douban_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Douban', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-douban"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('mailchimp_url') ) { ?>
					<!-- Behance -->
	      	<li>
						<a class="button" href="<?php echo of_get_option('mailchimp_url', 'no entry'); ?>" title="<?php echo sprintf( __('Subscribe to %s on MailChimp', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-mailchimp"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('linkedin_url') ) { ?>
					<!-- LinkedIn -->
	        <li>
						<a class="button" href="<?php echo of_get_option('linkedin_url', 'no entry'); ?>" title="<?php echo sprintf( __('Connect with %s on LinkedIn', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-linkedin"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('wordpress_url') ) { ?>
					<!-- WordPress -->
	        <li>
						<a class="button" href="<?php echo of_get_option('wordpress_url', 'no entry'); ?>" title="<?php echo sprintf( __('Connect with %s on WordPress', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-wordpress"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('medium_url') ) { ?>
					<!-- Medium -->
	        <li>
						<a class="button" href="<?php echo of_get_option('medium_url', 'no entry'); ?>" title="<?php echo sprintf( __('Connect with %s on Medium', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-medium"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('behance_url') ) { ?>
					<!-- Behance -->
	        <li>
						<a class="button" href="<?php echo of_get_option('behance_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Behance', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-behance"></div>
						</a>
	        </li>
	      <?php } ?>


				<?php if ( of_get_option('dribbble_url') ) { ?>
					<!-- Dribbble -->
	        <li>
						<a class="button" href="<?php echo of_get_option('dribbble_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Dribbble', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-dribbble"></div>
						</a>
	        </li>
		    <?php } ?>

				<?php if ( of_get_option('designernews_url') ) { ?>
					<!-- Designer News -->
	        <li>
						<a class="button" href="<?php echo of_get_option('designernews_url', 'no entry'); ?>" title="<?php echo sprintf( __('%s profile on Designer News', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-designernews"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('pinterest_url') ) { ?>
					<!-- Pinterest -->
	        <li>
						<a class="button" href="<?php echo of_get_option('pinterest_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Pinterest', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-pinterest"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('instagram_url') ) { ?>
					<!-- Instagram -->
	        <li>
						<a class="button" href="<?php echo of_get_option('instagram_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Instagram', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-instagram"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('flickr_url') ) { ?>
					<!-- Flickr -->
	        <li>
						<a class="button" href="<?php echo of_get_option('flickr_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Flickr', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-flickr"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('500px_url') ) { ?>
					<!-- 500px -->
	        <li>
						<a class="button" href="<?php echo of_get_option('500px_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on 500px', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-500px"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('github_url') ) { ?>
					<!-- Github -->
	        <li>
						<a class="button" href="<?php echo of_get_option('github_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Github', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-github"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('bitbucket_url') ) { ?>
					<!-- Bitbucket -->
	        <li>
						<a class="button" href="<?php echo of_get_option('bitbucket_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Bitbucket', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-bitbucket"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('stackoverflow_url') ) { ?>
					<!-- StackOverflow -->
	        <li>
						<a class="button" href="<?php echo of_get_option('stackoverflow_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on StackOverflow', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-stackoverflow"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('youtube_url') ) { ?>
					<!-- Youtube -->
	        <li>
						<a class="button" href="<?php echo of_get_option('youtube_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Youtube', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-youtube"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('vimeo_url') ) { ?>
					<!-- Vimeo -->
	        <li>
						<a class="button" href="<?php echo of_get_option('vimeo_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Vimeo', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-vimeo"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('youku_url') ) { ?>
					<!-- Youku -->
	        <li>
						<a class="button" href="<?php echo of_get_option('youku_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Youku', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-youku"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('spotify_url') ) { ?>
					<!-- Spotify -->
	        <li>
						<a class="button" href="<?php echo of_get_option('spotify_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Spotify', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-spotify"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('lastfm_url') ) { ?>
					<!-- Spotify -->
	        <li>
						<a class="button" href="<?php echo of_get_option('lastfm_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on Last.fm', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-lastfm"></div>
						</a>
	        </li>
	      <?php } ?>

				<?php if ( of_get_option('soundcloud_url') ) { ?>
					<!-- SoundCloud -->
	        <li>
						<a class="button" href="<?php echo of_get_option('soundcloud_url', 'no entry'); ?>" title="<?php echo sprintf( __('Follow %s on SoundCloud', 'yanse'), get_bloginfo('name') ); ?>" target="_blank">
							<div class="icon-social-soundcloud"></div>
						</a>
	        </li>
	      <?php } ?>

			</ul>


			<?php if ( of_get_option('wechat_url') ) { ?>
				<!-- Weixin -->
					<div class="small reveal" id="wechatModal" data-reveal data-animation-in="fade-in" data-animation-out="fade-out">
						<img src="<?php echo of_get_option('wechat_url', 'no entry'); ?>" class="float-center"/>
						<button class="close-button" data-close aria-label="Close reveal" type="button">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
			<?php } ?>

		</div><!-- .social -->


	</div>

</footer>
<?php admin_dash(); ?>
<?php wp_footer(); ?>
</body>
</html>

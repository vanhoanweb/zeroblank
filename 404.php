<?php get_header(); ?>

	<main class="content">

		<article <?php post_class('entry'); ?>>
			
			<h1 class="entry-title"><?php _e('Not Found, error 404', 'zero-blank'); ?></h1>

			<div class="entry-content">
				
				<p>The page you are looking for no longer exists. Perhaps you can return back to the site's <a href="<?php echo home_url('/'); ?>">homepage</a> and see if you can find what you are looking for. Or, you can try finding it by using the search form below.</p>

				<?php get_search_form(); ?>

				<h4><?php _e('Pages:', 'zero-blank'); ?></h4>
				<ul><?php wp_list_pages('depth=&title_li='); ?></ul>

				<h4><?php _e('Categories:', 'zero-blank'); ?></h4>
				<ul><?php wp_list_categories('orderby=name&order=ASC&show_count=1&title_li=&depth=0'); ?></ul>

				<h4><?php _e('Authors:', 'zero-blank'); ?></h4>
				<ul>
					<?php wp_list_authors(
						array(
							'show_fullname'	=> 1,
							'optioncount'	=> 1,
							'orderby'		=> 'post_count',
							'order'			=> 'DESC',
							'number'		=> 10,
							'hide_empty'	=> 0,
							'echo'			=> 1,
							'exclude_admin'	=> 0
						)
					); ?>
				</ul>

				<h4><?php _e('Monthly:', 'zero-blank'); ?></h4>
				<ul><?php wp_get_archives(array('type' => 'monthly')); ?></ul>

			</div>
			
		</article>

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
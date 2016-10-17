<?php get_header(); ?>

<main id="content" role="main">
	<header class="entry-header">
		<h1 class="entry-title"><?php _e( 'Category Archives: ', 'zb' ); ?><?php single_cat_title(); ?></h1>
		<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
	</header>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
	<?php endwhile; endif; ?>

	<?php get_template_part('pagination'); ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
    <?php get_template_part( 'partials/hero' ); ?>
		
    <?php get_template_part( 'partials/story' ); ?>

    <?php get_template_part( 'partials/popcorn' ); ?>

    <?php get_template_part( 'partials/where-to-buy' ); ?>

    <?php get_template_part( 'partials/contact' ); ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<section class="hero">
		  <div class="wrapper">
  			<?php the_content(); ?>
		  </div>
		</section>
		
		<section id="story" class="story">
		  <div class="wrapper">
		    <div class="pic-bud">
		      Pic<img src="" alt="">
		    </div>
  			<div class="content">
    			<?php the_field('buds_story'); ?>
  			</div>
		  </div>
		</section>

		<section id="popcorn" class="popcorn">
		  <div class="wrapper">
  			<?php the_field('the_popcorn'); ?>
		  </div>
		</section>

		<section id="where-to-buy" class="where-to-buy">
		  <div class="wrapper">
  			<div class="content">
    			<?php the_field('where_to_buy'); ?>
  			</div>
  			<div class="grid location-grid">
        <?php
        $args = array( 'post_type' => 'location' );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        	<div class="col-1-3">
        	  <h3><?php the_title(); ?></h3>
        		<p class="address"><?php the_field('address'); ?></p>
        		<p class="city-state"><?php echo get_field('city') . ', ' . get_field('state') . ' ' . get_field('zip'); ?></p>
        		<p><a href="<?php the_field('map_link'); ?>" target="_blank">Map</a></p>
        	</div>
        <?php endforeach; 
        wp_reset_postdata();?>
  			</div>
		  </div>
		</section>

		<section id="contact" class="contact">
		  <div class="wrapper">
  			<?php the_field('contact_us'); ?>
  			<?php echo do_shortcode( '[contact-form-7 id="16" title="Contact Us"]' ); ?>
		  </div>
		</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
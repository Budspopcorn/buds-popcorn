<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<section class="hero">
		  <div class="wrapper">
  			<?php the_content(); ?>
		  </div>
		</section>
		
		<section id="story" class="story">
	    <div class="wrapper row">
		    <div class="col-1-3 pic-bud">
		      <img src="/wp-content/themes/buds/assets/images/pic-bud.jpg" alt="Bud Cessna">
		    </div>
  			<div class="col-2-3 content">
    			<h2><?php the_field('buds_story_title'); ?></h2>
    			<div class="row">
      			<div class="col-1-2">
        			<?php the_field('buds_story_column_1'); ?>
      			</div>
      			<div class="col-1-2">
        			<?php the_field('buds_story_column_2'); ?>
      			</div>
    			</div>
  			</div>
	    </div>
		</section>

		<section id="popcorn" class="popcorn">
		  <div class="wrapper row">
		    <div class="col-1-2">
		      <img src="/wp-content/themes/buds/assets/images/popcorn.jpg" alt="Popcorn">
		    </div>
		    <div class="col-1-2">
    			<?php the_field('the_popcorn'); ?>
    			<ul class="popcorn-links">
    			  <li><a href="" data-modal="instructions">Popping Instructions</a></li>
    			  <li><a href="" data-modal="recipe">Chocolate Popcorn Recipe</a></li>
    			</ul>
		    </div>
		  </div>
		  <div id="modal" class="modal not-active">
		    <div id="instructions" class="modal-wrapper instructions">
    			<?php the_field('popping_instructions'); ?>
		    </div>
		    <div id="recipe" class="modal-wrapper recipe">
    			<?php the_field('popcorn_recipe'); ?>
		    </div>
		  </div>
		</section>

		<section id="where-to-buy" class="where-to-buy">
		  <div class="wrapper">
  			<div class="content">
    			<?php the_field('where_to_buy'); ?>
  			</div>
  			<div class="row locations">
        <?php
        $args = array( 'post_type' => 'location' );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
        	<div class="col-1-3">
        	  <h3><?php the_title(); ?></h3>
        		<p class="address"><?php the_field('address'); ?></p>
        		<p class="city-state"><?php echo get_field('city') . ', ' . get_field('state') . ' ' . get_field('zip'); ?></p>
        		<p><a href="<?php the_field('map_link'); ?>" target="_blank">View Map</a></p>
        	</div>
        <?php endforeach; 
        wp_reset_postdata();?>
  			</div>
		  </div>
		</section>

		<section id="contact" class="contact">
		  <div class="wrapper">
  			<?php the_field('contact_us'); ?>
  			<ul class="contact-links">
  			  <li><a href="">Email Us</a></li>
  			  <li><a href="">Facebook</a></li>
  			  <li><a href="">Twitter</a></li>
  			</ul>
		  </div>
		</section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
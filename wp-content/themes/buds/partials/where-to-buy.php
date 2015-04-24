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
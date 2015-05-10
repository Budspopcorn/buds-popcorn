		<section id="popcorn" class="popcorn">
		  <div class="wrapper row">
		    <div class="col-1-2 col-bag-bowl">
		      <img src="/wp-content/themes/buds/assets/images/popcorn.jpg" alt="Popcorn">
		    </div>
		    <div class="col-1-2">
    			<?php the_field('the_popcorn'); ?>
    			<ul class="popcorn-links">
    			  <li>
    			    <a href="" class="modal-trigger" data-modal-content="#modal-instructions">
    			      Popping Instructions
      			    <svg class="icon-arrow" viewBox="0 0 10 15">
                  <use xlink:href="#icon-arrow"></use>
                </svg>
              </a>
            </li>
    			  <li>
    			    <a href="" class="modal-trigger" data-modal-content="#modal-recipe">
    			      Chocolate Popcorn Recipe
      			    <svg class="icon-arrow" viewBox="0 0 10 15">
                  <use xlink:href="#icon-arrow"></use>
                </svg>
    			    </a>
            </li>
    			</ul>
		    </div>
		  </div>
		  <div id="modal" class="modal not-active">
		    <div id="modal-instructions" class="modal-wrapper modal-instructions not-active">
  		    <a href="" class="close-modal">
            <svg class="icon-close" viewBox="0 0 24 24">
              <use xlink:href="#icon-close"></use>
            </svg>
  		    </a>
		      <h3 class="modal-title"><?php the_field('popping_instructions_title'); ?></h3>
		      <div class="modal-body optiscroll">
		        <div class="optiscroll-content">
        			<?php the_field('popping_instructions'); ?>
		        </div>
		      </div>
		    </div>
		    <div id="modal-recipe" class="modal-wrapper modal-recipe not-active">
  		    <a href="" class="close-modal">
            <svg class="icon-close" viewBox="0 0 24 24">
              <use xlink:href="#icon-close"></use>
            </svg>
  		    </a>
		      <h3 class="modal-title"><?php the_field('popcorn_recipe_title'); ?></h3>
		      <div class="modal-body optiscroll">
		        <div class="optiscroll-content">
        			<?php the_field('popcorn_recipe'); ?>
		        </div>
		      </div>
		    </div>
		  </div>
		</section>
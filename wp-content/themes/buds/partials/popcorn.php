		<section id="popcorn" class="popcorn">
		  <div class="wrapper row">
		    <div class="col-1-2">
		      <img src="/wp-content/themes/buds/assets/images/popcorn.jpg" alt="Popcorn">
		    </div>
		    <div class="col-1-2">
    			<?php the_field('the_popcorn'); ?>
    			<ul class="popcorn-links">
    			  <li>
    			    <a href="" data-modal="instructions">
    			      Popping Instructions
      			    <svg class="icon-arrow" viewBox="0 0 10 15">
                  <use xlink:href="#icon-arrow"></use>
                </svg>
              </a>
            </li>
    			  <li>
    			    <a href="" data-modal="recipe">
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
		    <div id="instructions" class="modal-wrapper instructions">
    			<?php the_field('popping_instructions'); ?>
		    </div>
		    <div id="recipe" class="modal-wrapper recipe">
    			<?php the_field('popcorn_recipe'); ?>
		    </div>
		  </div>
		</section>
<?php get_header(); ?>



<!-- Video Header -->
<div class="video-header">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            <h1>Brain Zapped Video Blog</h1>
            </div>
        </div>
    </div>
 </div>
 <?php get_sidebar(); ?>
<!-- video list -->
<div class="video-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>VIDEOS</h2>
            </div>
        </div>
    </div>
</div>
<div class="video-list">
	<div class="container">
    	<div class="row">
    		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?>
	        	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	            	<div class="card-video">
	  					<?php the_post_thumbnail(); ?>
	  					<div class="container-card-video">
	                    	<h4 class="category-text"><?php the_category(', ') ?></h4>
	                      
	                        <h2><?php the_title(); ?></h2>
	                        <p><?php the_excerpt(); ?></p>
	                        <button class="button"><a href="<?php the_permalink(); ?>">play video</a></button><br>
	                        <i class="fa fa-twitter fa-2x" aria-hidden="true"></i><i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
	                    </div>
	                 </div>
	            </div>
            <?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>
</div>

<!-- pagination -->

<div class="more-button">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<button class="button-more text-center">load more videos</button>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>
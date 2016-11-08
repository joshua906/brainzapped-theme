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
                <h2>VIDEOS-<?php the_category(', ') ?></h2>
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
	  					<img src="<?php echo get_template_directory_uri(); ?>/resources/img/video-pic.jpg" alt="cardimg" style="width:100%">
	                    	<span class="vlog-format-action small"><i class="fa fa-play"></i></span>
	  					<div class="container-card-video">
	                    	<h5 class="light">TOPIC<?php the_category(); ?></h5>
	                      
	                        <h3><?php the_title(); ?></h3>
	                        <p><?php the_excerpt(); ?></p>
	                        <button class="button"><a href="<?php the_permalink(); ?>">play video</a></button>
	                    </div>
	                 </div>
	            </div>
            <?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
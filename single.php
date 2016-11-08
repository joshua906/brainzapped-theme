<?php get_header(); ?>


<!-- video above post-->
<div class="iframe-video">
	<div class="container-single">
    	<div class="row">
        	<div class="col-sm-12 embed-responsive embed-responsive-16by9">
            	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PDoyJYwGEuU"></iframe>
            </div>
        </div>
     </div>
</div>
<!-- video post -->
<div class="video-post">
	<div class="container-single">
    	<div class="row">
        	<div class="col-sm-12">
            	<div class="">
                	<p>CATEGORY: <?php the_category(); ?></p>
                    <p><em><?php the_author(); ?></em></p> | <p><em><?php the_date(); ?></em></p>
                    <h1><?php the_title(); ?></h1> 
                </div>
                    <p><?php the_excerpt(); ?></p>
                    <p>© 2016 Brain Zapped, LLC. All Rights Reserved.
Unauthorized copying is a violation of applicable laws.</p>
            </div>
        </div>
    </div>
</div>
<!-- back button -->
<div class="more-button">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<button class="button-more text-center">&#8592;back to videos</button>
            </div>
        </div>
    </div>
</div>
<!-- latest videos-->

<!--<div class="just-added">
	<div class="container-single">
    <div class="row">
   	  <div class="col-md-12">
        	<h3>LATEST VIDEOS</h3>
        </div>
    </div>
    </div>
    <div class="container-single">
    	<div class="row">

    <?php query_posts('posts_per_page=2'); ?>
         <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-xs-12 col-sm-4 col-md-4">
            	<div class="card">
                	<div class="bw pic">
  						        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/resources/img/girl-blue-blue.jpg" alt="cardimg" style="width:100%"></a>
                    	<span class="vlog-format-action small"><i class="fa fa-play"></i></span>
                    </div>
  					<div class="container-card">
                        <p class="category-text"><?php the_category(); ?></p>
                        <h3><a href="#"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                    <button class="button"><a href="<?php the_permalink(); ?>">play video</a></button>
  					</div>
				</div>
        </div>
             <?php endwhile; ?> 
    <?php wp_reset_query(); ?>
        </div>
    </div>
</div>-->
<?php get_footer(); ?>
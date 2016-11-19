<?php get_header(); ?>

<!-- video above post-->
<div class="iframe-video">
	<div class="container-single">
    	<div class="row">
        	<div class="col-sm-12 embed-responsive embed-responsive-16by9">
            	<?php the_post_thumbnail(); ?>
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
            <?php if ( have_posts() ): ?>
                <?php while ( have_posts() ) : the_post(); 
                    wpb_set_post_views(get_the_ID());

                ?>
                
                	<h2 class="category-text"> <?php the_category(','); ?></h2>
                    <p><em>Posted By: <?php the_author(); ?> | <?php the_date(); ?></em></p>
                    <h1><?php the_title(); ?></h1> 
                </div>
                    <p><?php the_content(); ?></p>
                    <p>© 2016 Brain Zapped, LLC. All Rights Reserved.
Unauthorized copying is a violation of applicable laws.</p>
                        
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- share the post area -->
    <div class="container-single">
     <div class="banner  bg-secondary">
        <div class="clear-fix banner_wrap banner-content">
            <div class="row">
                <div class="col-md-6">
                    <h5>Share this post:</h5>
                </div>
                <div class="col-md-6 text-right">
                    <i class="fa fa-twitter" aria-hidden="true"></i><i class="fa fa-facebook" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
    </div>
<!-- back button -->
<div class="more-button">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
                <a href="<?php echo get_template_directory_uri(); ?>/bzs/wordpress/videos"><button class="button-more text-center">&#8592;back to videos</button></a>
            </div>
        </div>
    </div>
</div>
<!-- latest videos-->

<div class="just-added">
    <div class="container-single">
    <div class="row">
      <div class="col-md-12">
            <h3>MORE VIDEOS</h3>
        </div>
    </div>
    </div>
    <div class="container-single">
        <div class="row" id="ms-container">

    <?php query_posts('posts_per_page=4'); ?>
         <?php while ( have_posts() ) : the_post(); ?>
        <div class="ms-item col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="card">
                    <div class="bw pic">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        <!--<span class="vlog-format-action small"><i class="fa fa-play"></i></span>-->
                    </div>
                    <div class="container-card">
                        <p class="category-text-small"><?php the_category( ','); ?></p>
                        <h5><a href="#"><?php the_title(); ?></a></h5>
                        <!--<p><?php echo wp_trim_words( get_the_content(), 7, '...' ); ?></p>-->
                    <button class="button"><a href="<?php the_permalink(); ?>">play video</a></button><br>
                    <i class="fa fa-twitter" aria-hidden="true"></i><i class="fa fa-facebook" aria-hidden="true"></i>
                    </div>
                </div>
        </div>
             <?php endwhile; ?> 
    <?php wp_reset_query(); ?>
        </div>
    </div>
</div>
<div class="more-button">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <button class="button-more text-center">&#8592;back to videos</button>
            </div>
        </div>
    </div>
</div>
 <script>
        
        jQuery(window).load(function() {
        
      // MASSONRY Without jquery
      var container = document.querySelector('#ms-container');
      var msnry = new Masonry( container, {
        itemSelector: '.ms-item-small',
        columnWidth: '.ms-item-small',                
      });  
      
        });

      
    </script>
<?php get_footer(); ?>
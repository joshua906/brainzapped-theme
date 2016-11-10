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

<div class="just-added">
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
        <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="card">
                    <div class="bw pic">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        <!--<span class="vlog-format-action small"><i class="fa fa-play"></i></span>-->
                    </div>
                    <div class="container-card">
                        <p class="category-text"><?php the_category( ','); ?></p>
                        <h2><a href="#"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?></p>
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
<?php get_footer(); ?>
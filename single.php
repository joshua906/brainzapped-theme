<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Brainzapped
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

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
                    <a href="https://twitter.com/share?
  url=brainzapped.com
  related=twitterapi%2Ctwitter&
  text=custom%20share%20text"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="https://www.facebook.com/video.php?v={id}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
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
                <a href="<?php echo get_page_link(8); ?>"><button class="button-more text-center">&#8592;back to videos</button></a>
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
                        <h4><a href="#"><?php the_title(); ?></a></h4>
                        <!--<p><?php echo wp_trim_words( get_the_content(), 7, '...' ); ?></p>-->
                    <a href="<?php the_permalink(); ?>"><button class="button">play video</button></a><br>
                    <a href="https://twitter.com/share?
  url=brainzapped.com
  related=twitterapi%2Ctwitter&
  text=custom%20share%20text"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="https://www.facebook.com/video.php?v={id}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
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
                <a href="<?php echo get_page_link(8); ?>"><button class="button-more text-center">&#8592;back to videos</button></a>
            </div>
        </div>
    </div>
</div>
 <script>
        
        jQuery(window).load(function() {
        
      // MASSONRY Without jquery
      var container = document.querySelector('#ms-container');
      var msnry = new Masonry( container, {
        itemSelector: '.ms-item',
        columnWidth: '.ms-item',                
      });  
      
        });

      
    </script>
<?php get_footer(); ?>
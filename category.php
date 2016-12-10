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



<!-- Video Header -->
<div class="video-header">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            <h1>Videos</h1>
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
                <h2>VIDEOS- "<?php the_category(', ') ?>" </h2>
            </div>
        </div>
    </div>
</div>
<div class="video-list">
	<div class="container">
    	<div class="row" id="ms-container">
    		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?>
	        	<div class="ms-item col-xs-12 col-sm-6 col-md-6 col-lg-6">
	            	<div class="card-video">
	  					     <?php the_post_thumbnail(); ?>
	  					<div class="container-card-video">
	                    	<h5 class="category-text"><?php the_category(','); ?></h5>
	                      
	                        <h3><?php the_title(); ?></h3>
	                        <p><?php the_excerpt(); ?></p>
	                         <a href="<?php the_permalink(); ?>"><button class="button">play video</button></a><br>
                            <i class="fa fa-twitter fa-2x" aria-hidden="true"></i><i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
	                    </div>
	                 </div>
	            </div>
            <?php endwhile; ?>
			<?php endif; ?>
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
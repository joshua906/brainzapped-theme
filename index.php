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
            <h1>VIDEOS</h1>
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
                <h2></h2>
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
                      <div class="bw pic">
	  					        <?php the_post_thumbnail(); ?>
                      </div>
	  					        <div class="container-card-video">
	                    	<h4 class="category-text"><?php the_category(', ') ?></h4>
	                      
	                        <h4><?php the_title(); ?></h4>
	                        <p><?php the_excerpt(); ?></p>
	                        <a href="<?php the_permalink(); ?>"><button class="button">play video</button></a><br>
	                                           <a href="https://twitter.com/share?
                              url=brainzapped.com
                              related=twitterapi%2Ctwitter&
                                text=custom%20share%20text"><i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.facebook.com/video.php?v={id}">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
	                    </div>
	                 </div>
	            </div>
	           
            <?php endwhile; 

            ?>
			<?php endif; 

			?>
        </div>
    </div>
</div>

<!-- pagination -->



<div class="">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<?php wpbeginner_numeric_posts_nav(); ?>
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


 /*var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}*/
    </script>

<?php get_footer(); ?>
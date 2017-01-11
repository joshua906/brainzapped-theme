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
?>
<!-- categories -->
<div class="categories">
	<div class="container">

                  
     <div class="banner  bg-secondary">
        <div class="clear-fix banner_wrap banner-content">
    			<div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <?php if ( is_active_sidebar( 'sidebar-1' ) ) {?>
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>  
                        <?php } else { ?>
                  
                    <div id="sidebar" class="category-layout">
                			
                            <?php the_category(', ') ?>
                        
                    </div>
                   
                   <?php } ?>
                   </div>
            </div>
        	</div>
   		</div>
 	</div>
</div>

<!-- categories -->
<div class="categories">
	<div class="container">
     <div class="banner  bg-secondary">
        <div class="clear-fix banner_wrap banner-content">
    			<div class="row">
                  <?php if ( is_active_sidebar( 'sidebar-1' ) ) {?>
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>  
                        <?php } else { ?>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div id="sidebar" class="category-layout">
                			
                            <?php the_category(', ') ?>
                        
                    </div>
                   </div>
                   <?php } ?>
            </div>
        	</div>
   		</div>
 	</div>
</div>

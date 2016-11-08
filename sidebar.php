<!-- categories -->
<div class="categories">
	<div class="container">
          <div class="banner  bg-secondary">
              <div class="clear-fix banner_wrap banner-content">
    			<div class="row">
        			<div class="col-xs-12 col-sm-6 col-md-6">
                  <?php if ( is_active_sidebar( 'sidebar-1' ) ) {?>
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>  
                        <?php } else { ?>
                    <ul id="sidebar" class="category-layout">
                			<li><i class="fa fa-caret-right" aria-hidden="true"></i>
                            <?php the_category(', ') ?>
                      </li>
                     </ul>
                    <?php } ?>
                   </div>
               <div class="col-xs-12 col-sm-6 col-md-6">
                    <h4>PLAYLIST</h4>
                    <ul class="category-layout">
            			<li><i class="fa fa-caret-right" aria-hidden="true"></i>If I knew then what I know now</li>
                     </ul>
            		</div>    
        		</div>
   			</div>
 		</div>
	</div>
</div>
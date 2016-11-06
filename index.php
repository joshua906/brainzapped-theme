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
<!-- categories -->
<div class="categories">
	<div class="container">
          <div class="banner  bg-secondary">
              <div class="clear-fix banner_wrap banner-content">
    			<div class="row">
        			<div class="col-xs-12 col-sm-6 col-md-6">
        			<h4>CATEGORIES</h4>
                    <ul class="category-layout">
            			<li><i class="fa fa-caret-right" aria-hidden="true"></i>If I knew then what I know now</li>
                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>If I knew then what I know now</li>
                     </ul>
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
<!-- video list -->
<div class="video-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>VIDEOS</h2>
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
	                        <button class="button">play video</button>
	                    </div>
	                 </div>
	            </div>
            <?php endwhile; ?>
			<?php endif; ?>

            <!--<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            	<div class="card-video">
  					<img src="resources/img/girl-blue-large.jpg" alt="cardimg" style="width:100%">
  					<div class="container-card-video">
						<h5 class="light">TOPIC If I KNEW THEN WHAT I KNOW NOW</h5>
                   
                        <h3>Advice For High School Freshman</h3>
                        <p>Efficiently maintain extensible web services with inexpensive leadership skills. Quickly...</p>
                        <button class="button">play video</button>
                    </div>
                 </div>
            </div>
        </div>
    </div>
   </div>
  <div class="video-list">
    <div class="container">
    	<div class="row">
        	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            	<div class="card-video">
  					<img src="resources/img/video-pic.jpg" alt="cardimg" style="width:100%">
  					<div class="container-card-video">
                    	<h5>If I KNEW THEN WHAT I KNOW NOW</h5>
                        <p><em>January 2016 | Posted By Admin</em></p>
                        <h2>Advice For High School Freshman</h2>
                        <p>Efficiently maintain extensible web services with inexpensive leadership skills. Quickly aggregate performance based customer service whereas...</p>
                        <button class="button">play video</button>
                    </div>
                 </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            	<div class="card-video">
  					<img src="resources/img/video-pic.jpg" alt="cardimg" style="width:100%">
  					<div class="container-card-video">
                    	<h5>If I KNEW THEN WHAT I KNOW NOW</h5>
                        <p><em>January 2016 | Posted By Admin</em></p>
                        <h2>Advice For High School Freshman</h2>
                        <p>Efficiently maintain extensible web services with inexpensive leadership skills. Quickly aggregate performance based customer service whereas...</p>
                        <button class="button">play video</button>
                    </div>
                 </div>
            </div>-->
        </div>
    </div>
</div>

<!-- pagination -->

<div class="more-button">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<button class="button-more text-center">load more videos<br> &#8595;</button>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>
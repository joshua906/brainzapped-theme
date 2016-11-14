<?php get_header(); ?>

<!-- hero video -->

<div class="hero">
<div class="header-container">
	<div class="video-container">
   	  <video preload="true" autoplay loop volume="0" poster="Inbox-Zero.jpg">
        	<source src="<?php echo get_template_directory_uri(); ?>/video/Cheer-up.mp4" type="video/mp4">
            <source src="<?php echo get_template_directory_uri(); ?>/video/.webm" type="video/webm">
          <source src="<?php echo get_template_directory_uri(); ?>/video/.ogv" type="video/ogg">
      </video>
      <h1></h1>
      <span class="type-it"></span>
    </div>
</div>
</div>
<!-- about section-->

<div class="about">
	<div class="container">
    	<div class="row">
        	<div class="col-xs-12 col-sm-6 col-m-7 col-lg-7">
            	<div class="">
                <div class="">
            		<h4>Welcome to <br><span class="headline">Brain Zapped!</span></h4>
                	<p>Get Brain Zapped! We create educational, inspiring, and entertaining videos for kids, ages 6 to 99. Get zapped with info about everything from science to school life, to just  being awesome. We want to help you be the best you, you can be! </p>
                	<p>Our Brain Zapped Science series is designed with educators and students in mind. Each video is crafted to address curriculum standards while infusing a fun burst of knowledge into the ol' noggin. Educators can use them to kickstart topics or just get BRAIN ZAPPED for the fun of it. </p>
                </div>
                </div>
            </div>
              <div class="col-xs-12 col-sm-6 col-m-5 col-lg-5">
            	<div class="">
                	<div class="">
                    <h1>What teachers have to say</h1>
						<p>Completely re-engineer go forward platforms and fully tested process improvements. Professionally mesh quality synergy via diverse potentialities. Competently benchmarkEfficiently maintain extensible web services with inexpensive ....</p>
                        <p><em>john Doe</em></p>

</div>     
                        
                </div>
          </div>
      </div>
  </div>
</div>
</div>


<!-- Latest videos -->
<div class="just-added">
	<div class="container">
    <div class="row">
   	  <div class="col-md-12">
        	<h3>LATEST VIDEOS</h3>
        </div>
    </div>
    </div>
    <div class="container">
    	<div class="row">

    <?php query_posts('posts_per_page=3'); ?>
         <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-xs-12 col-sm-4 col-md-4">
            	<div class="card">
                	<div class="bw pic">
  						        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    	<!--<span class="vlog-format-action small"><i class="fa fa-play"></i></span>-->
                    </div>
  					<div class="container-card">
                        <p class="category-text"><?php the_category( ','); ?></p>
                        <h2><a href="#"><?php the_title(); ?></a></h2>
                        <p><?php echo wp_trim_words( get_the_content(), 12, '...' ); ?></p>
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
            	<button class="button-more text-center">view all videos &#8594;</button>
            </div>
        </div>
    </div>
</div>


<!-- most watched -->
<div class="most-watched">
	<div class="container">
        <div class="row">
        	<div class="col-md-12">
            	<h3>MOST WATCHED</h3>
            </div>
        </div>
  </div>
    <div class="container">
    	<div class="row">
       <?php $popularpost = new WP_Query( array( 'posts_per_page' => 6, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) ); while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
        	<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="container-card-most">
            	<div class="row">
                	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    	<div class="most-watched-img">
                        	<?php the_post_thumbnail(); ?>
                             
                        </div>
                    </div>
                
                    <div class="col-xs-6 col-sm-6 col-m-6 col-lg-6">
                    	<div class="content">
                    	<p class="category-text-small"><?php the_category(', ') ?></p>
                        <h4><?php the_title(); ?> </h4>
                        <!--<p><em><?php the_author(); ?></em></p>-->
                      </div>
                        
                  </div>
              </div>
              </div>
            </div>
              <?php endwhile; ?>
        </div>
      </div>
</div>
<div class="more-button">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <button class="button-more text-center">view all videos &#8594;</button>
            </div>
        </div>
    </div>
</div>

<!-- playlist-Name of playlist-->
<div class="playlist">
<div class="container">
	<div class="row">
    	<div class="col-md-12">
        	<h3>PlAYLIST- "NAME OF PLAYLIST"</h3>
        </div>
    </div>
</div>
	<div class="container">
    	<div class="row">

       <?php query_posts('category_name=brain-zapped'); ?>
        <?php while ( have_posts() ) : the_post(); ?>

        	<div class="col-xs-6 col-sm-3 col-md-3">
            	<div class="card-playlist">
  					 <?php the_post_thumbnail(); ?>
  					<div class="container-card-playlist">
                    <p><em><?php the_date(); ?></em></p>
						<h5><?php the_title(); ?></h5>
                      <p><?php echo wp_trim_words( get_the_content(), 6, '...' ); ?></p>
  					</div>
				</div>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
</div>

<div class="more-button">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <button class="button-more text-center">view all videos &#8594;</button>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
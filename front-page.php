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
            	<div class="banner  bg-secondary">
                <div class="clear-fix banner_wrap banner-content">
            		<h1>Welcome to <span class="purple">Brain</span> <span class="green">Zapped</span> </h1>
                	<p>Get Brain Zapped! We create educational, inspiring, and entertaining videos for kids, ages 6 to 99. Get zapped with info about everything from science to school life, to just  being awesome. We want to help you be the best you, you can be! </p>
                	<p>Our Brain Zapped Science series is designed with educators and students in mind. Each video is crafted to address curriculum standards while infusing a fun burst of knowledge into the ol' noggin. Educators can use them to kickstart topics or just get BRAIN ZAPPED for the fun of it. </p>
                </div>
                </div>
            </div>
              <div class="col-xs-12 col-sm-6 col-m-5 col-lg-5">
            	<div class="banner bg-secondary">
                	<div class=" banner_wrap banner-content">
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
  						        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/resources/img/girl-blue-blue.jpg" alt="cardimg" style="width:100%"></a>
                    	<span class="vlog-format-action small"><i class="fa fa-play"></i></span>
                    </div>
  					<div class="container-card">
                        <p class="category-text"><?php the_category(); ?></p>
                        <h3><a href="#"><?php the_title(); ?></a></h3>
                        <p><?php the_excerpt(); ?></p>
                    <button class="button"><a href="<?php the_permalink(); ?>">play video</a></button>
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
        	<div class="col-xs-12 col-sm-6 col-md-6">
            <div class="container-card-most">
            	<div class="row">
                	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    	<div class="most-watched-img">
                        	<img src="<?php echo get_template_directory_uri(); ?>/resources/img/guy-red.jpg">
                             
                        </div>
                    </div>
                
                    <div class="col-xs-6 col-sm-6 col-m-6 col-lg-6">
                    	<div class="content">
                    	<h6><?php the_category(', ') ?></h6>
                        <h4><?php the_title(); ?> </h4>
                        <p><em><?php the_author(); ?></em></p>
                      </div>
                        
                  </div>
              </div>
              </div>
            </div>
              <?php endwhile; ?>
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
        	<div class="col-xs-6 col-sm-3 col-md-3">
            	<div class="card-playlist">
  					<img src="<?php echo get_template_directory_uri(); ?>/resources/img/nebula.jpg" alt="cardimg" style="width:100%">
  					<div class="container-card-playlist">
                    <p><em>January 22,2017</em></p>
						<h5>Dealing with peer pressure</h5>
                      <p>We know being a freshman in high school...</p>
  					</div>
				</div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
            	<div class="card-playlist">
  					<img src="<?php echo get_template_directory_uri(); ?>/resources/img/nebula.jpg" alt="cardimg" style="width:100%">
  					<div class="container-card-playlist">
                    <p><em>January 22,2017</em></p>
						<h5>Dealing with peer pressure</h5>
                        <p>We know being a freshman in high school...</p>
  					</div>
				</div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
            	<div class="card-playlist">
  					<img src="<?php echo get_template_directory_uri(); ?>/resources/img/nebula.jpg" alt="cardimg" style="width:100%">
  					<div class="container-card-playlist">
                    <p><em>January 22,2017</em></p>
						<h5 class="element">Dealing with peer pressure</h5>
                        <p>We know being a freshman in high school...</p>
  					</div>
				</div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
            	<div class="card-playlist">
  					<img src="<?php echo get_template_directory_uri(); ?>/resources/img/nebula.jpg" alt="cardimg" style="width:100%">
  					<div class="container-card-playlist">
                    <p><em>January 22,2017</em></p>
						<h5>Dealing with peer pressure</h5>
                        <p>We know being a freshman in high school...</p>
  					</div>
				</div>
            </div>
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
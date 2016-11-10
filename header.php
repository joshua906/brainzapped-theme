<!Doctype html>
<head>
<meta charset="utf-8">
<title>Bz</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- fonts and styles -->
<link href="https://fonts.googleapis.com/css?family=Raleway:300,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat: 400,700" rel="stylesheet">
 <link href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css' />
 <?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" 
 <script src="<?php echo get_template_directory_uri(); ?>/resources/scripts/bz.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/4.2.3/typeit.min.js"></script>

</head>
<!--preloader-->
<body class="loaded">
    <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
    </div>
<!-- Navigation -->
<div class="float-panel data-top="0" data-scroll="300" ">
  <div class="navbar navbar-inverse navbar-fixed-top main-navigation" role="navigation">
      <div class="container">
          <div class="navbar-header col-md-3 col-sm-3">
              <div class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </div>
                <a class="navbar-brand" href=""><img src="<?php echo get_template_directory_uri(); ?>/resources/img/bzlogo.png" alt=""/></a>
          </div>
          <div class="collapse navbar-collapse">

            <?php 

             $defaults = array(
                  'container' => 'ul',
                  'theme_location' => 'primary-menu',
                  'menu_class' => 'nav navbar-nav pull-right'
                );
                
                wp_nav_menu( $defaults );

                ?>


              <!-- <ul class="nav navbar-nav pull-right col-lg-6 col-md-7 col-sm-9 col-xs-12">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="videos.html">Videos</a></li>
                  <li><a href="products.html">Products</a></li>
                  <li><a href="contact.html">Contact</a></li>  
              </ul>  -->         
          </div>
                                <!--/.nav-collapse -->
      </div>
  </div>
</div>   

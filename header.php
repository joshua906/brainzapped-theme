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

<!Doctype html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<title>Brain Zapped</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<!-- Latest compiled and minified CSS -->

<!--<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >-->


<link href="https://fonts.googleapis.com/css?family=Raleway:300,500" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat: 400,700" rel="stylesheet">
<link href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css' />
<?php wp_head(); ?>

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->


<!-- jQuery library -->
<!-- Latest compiled JavaScript -->
<!--<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.1/masonry.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/4.2.3/typeit.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/resources/scripts/bz.js"></script>-->

</head>
<!--preloader-->
<body <?php body_class(); ?> >




<!-- Navigation -->
<div class="float-panel" data-top="0" data-scroll="300" >
  <div class="navbar navbar-inverse navbar-fixed-top main-navigation" role="navigation">
      <div class="container">
          <div class="navbar-header col-md-3 col-sm-3">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/resources/img/bzlogo.png" alt=""/></a>
          </div>
          <div class="navbar-collapse collapse">

            <?php 

             $defaults = array(
                  'container' => 'ul',
                  'theme_location' => 'primary-menu',
                  'menu_class' => 'nav navbar-nav'
                );
                
                wp_nav_menu( $defaults );

                ?>


               <!--<ul class="nav navbar-nav pull-right col-lg-6 col-md-7 col-sm-9 col-xs-12">
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

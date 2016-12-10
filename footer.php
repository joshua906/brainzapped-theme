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



<!-- footer -->
<div class="footer">
	<div class="container">
    	<div class="row">
        	<div class="col-xs-12 col-sm-4 col-md-4">
            	<h3>Brain Zapped 2016</h3>
                <p><a href="<?php echo get_page_link(89); ?>">Privacy and terms of use</a></p>
                
                <h3>Contact</h3>
                <p>email: example@yahoo.com</p>
                <p>phone: 555-5555</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h3>Overview</h3>
                <ul>
                	<li><p><a href="<?php echo get_template_directory_uri(); ?>/front-page">Home</a></p></li>
                    <li><p><a href="<?php echo get_page_link(8); ?>">Videos</a></p></li>
                    <li><p><a href="<?php echo get_page_link(68); ?>">Products</a></p></li>
                    <li><p><a href="<?php echo get_page_link(39); ?>">Contact</a></p></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                
            </div>
        </div>
    </div>
</div>

<script>
  $('.type-it').typeIt({
    strings: ['Headline Text will go here', 'And anything else we want to add!']
  }); 
    
</script>

 <!--<script>
        
        jQuery(window).load(function() {
        
      // MASSONRY Without jquery
      var container = document.querySelector('#ms-container');
      var msnry = new Masonry( container, {
        itemSelector: '.ms-item',
        columnWidth: '.ms-item',                
      });  
      
        });

      
    </script>-->

 <?php wp_footer(); ?>

</body>
</html>

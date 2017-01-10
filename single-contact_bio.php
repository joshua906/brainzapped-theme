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

<div class="contact-header">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<h1>Contact</h1>
            </div>
        </div>
    </div>
</div>
<!-- bio-->
<!--<div class="bio">
	<div class="container">
    	<div class="row">

        <?php while ( have_posts() ) : the_post(); 


                 $bio = get_field('bio_title');
                 $pone = get_field('p_one');
                 $ptwo = get_field('p_two');
                 $pthree = get_field('p_three');
                 $pfour = get_field('p_four');
                 $pfive = get_field('p_five');
                 $psix = get_field('p_six');

        ?>

        	<div class="col-md-12">
              	<h1><?php echo $bio; ?></h1>
            </div>
        </div>
    </div>
    <div class="container">
    	<div class="row">
        	<div class="col-md-6">
              	<p><?php echo $pone; ?></p>
                <p><?php echo $ptwo; ?></p>
                <p><?php echo $pthree; ?></p>
            </div>
            <div class="col-md-6">
              	<p><?php echo $pfour; ?></p>
                <p><?php echo $pfive; ?></p>
                <p><?php echo $psix; ?></p>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>-->
<!-- Contact form-->
<div class="contact">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<h2>Contact Form</h2>
            </div>
        </div>
    </div>
	<div class="container">
    	<div class="row">
        	<div class="col-md-6">
            	<form action="mailto:joshuamatthews906@yahoo.com" method="post" enctype="text/plain">
                	<input type="text" name="Name" placeholder="name" required><br>
                    <input type="text" name="company" placeholder="company" required><br>
                    <textarea type="text" name="comments" placeholder="comments" required></textarea><br>
                    <input type="submit" value="send">
                </form>
            </div>
            <div class="col-md-6">
            	<h4>Email</h4>
                <p>brainzappedtv@gmail.com</p>
                <h4>Phone</h4>
                <p>214-284-3456</p>
                <h4>Address</h4>
                <p> 6951 Virginia Pkwy, #322<br> Mailbox 13 <br>McKinney, TX 75071</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
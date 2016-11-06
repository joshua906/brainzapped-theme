



<?php get_header(); ?>

<div class="contact-header">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<h1>Contact George Garcia</h1>
            </div>
        </div>
    </div>
</div>
<!-- bio-->
<div class="bio">
	<div class="container">
    	<div class="row">

        <?php while ( have_posts() ) : the_post(); 


                 $bio = get_field('bio_title');
                 $pone = get_field('p_one');
                 $ptwo = get_field('p_two');
                 $pthree = get_field('p_three');

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
            </div>
            <div class="col-md-6">
              	<p><?php echo $pthree; ?></p>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
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
                <p>example@hots.com</p>
                <h4>Phone</h4>
                <p>555-555-5555</p>
                <h4>Address</h4>
                <p>2000 Fairview way<br>McKinney, TX 75070</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
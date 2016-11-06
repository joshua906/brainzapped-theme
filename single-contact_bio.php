



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
              	<h1>The man behind the work</h1>
            </div>
        </div>
    </div>
    <div class="container">
    	<div class="row">
        	<div class="col-md-6">
              	<p>Eliud George Garcia was born in Harlingen, TX and raised in San Benito, TX.  After graduating from the University of Texas at Austin’s renowned Radio/TV/Film school in 1991, George began his career as a Director of Photography at a couple of production companies in the Dallas area</p>
                <p>George has shot everything from corporate videos to segments for Oprah, VH1, MTV, the USA Network and others.  Later, he tackled the jobs of producer, director, writer, and editor and fell in love with the creative process.  In 2000, George decided to go out on his own and form EGG Entertainment, Inc. where he provides production services to corporate entities, broadcast networks, and independents.</p>
            </div>
            <div class="col-md-6">
              	<p>George has always dabbled in the world of children and family entertainment, writing short stories and coming up with potential ideas for movies, but it was in late 2003 when George decided it was time to put up or shut up.  He had a concept for a kids show and he needed to find the right talent to do it.  Along came Selena Gomez, a rising talent, who, fortunately, attended George’s audition for his show.  Then came Lewis Parry, a new-comer who George thought would be perfect to play along side Selena.  In 2006, after many trials and tribulations, George finally completed his production.  The result was “Brain Zapped”, a film about a mysterious library, a book-lover and all around super-girl and her best friend.  Brain Zapped is an Official selection of the 2006 KIDS FIRST! Film and Video festival.  Screening dates to come.</p>
            </div>
        </div>
    </div>
</div>
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
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

<div class="product-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Brain Zapped Products & Reviews</h1>
            </div>
        </div>
    </div>
</div>

<!--Product Intro-->
<div class="product-intro">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
       
      </div>
    </div>
  </div>
</div>
<!-- slide show for products -->
<div class="">
<div class="slideshow-container">

  <div class="mySlides ">
    
    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/white-background.jpg" style="width:100%">
        <div class="text">
        <h4>REVIEWS</h4>
        <h3>Crisp, Eyecatching Videography, Fast paced action, and solid information combine to <br>make this a WINNER!</h3>
        <p>-School Library Journal Starred Review</p>
    </div>
  </div>

  <div class="mySlides ">
    
    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/white-background.jpg" style="width:100%">
    <div class="text">    
        <h4>REVIEWS</h4>    
        <h3>"...Very active, visually appealing, and the actors were children their own age. <br>So they could really relate..."</h3>
        <p>-Peggy Baechle</p>
        </div>
  </div>

    <div class="mySlides ">
    
    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/white-background.jpg" style="width:100%">
    <div class="text">    
        <h4>REVIEWS</h4>    
        <h3>&#9733;&#9733;&#9733;&#9734;<br>"An appealing program."</h3>
        <p>-Video Librarian Recommended</p>
        </div>
  </div>

  <div class="mySlides ">
   
    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/white-background.jpg" style="width:100%">
    <div class="text">
        <h4>REVIEWS</h4>
        <h3>"It engaged them, it gave them great content in the perfect <br>length of time."</h3>
        <p>-Kass Bates</p>
    </div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>
</div>
<!-- Product -->
<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
             <?php while ( have_posts() ) : the_post(); 


                 $title = get_field('product_title');
                 $release = get_field('release_date');
                 $grade = get_field('grade_level');
                 $description = get_field('product_description');
                 $length = get_field('length');
                 $price = get_field('price');
                 $introp = get_field('intro_p');
                 $image1 = get_field('image_1');

        ?>
                <div class="product-picture">
                
                    <img src="<?php echo $image1; ?>"/> 
                
                </div>
          </div>

            <div class="col-xs-12 col-sm-6 col-md-6">

                <h2><?php echo $title; ?></h2>
                <p><em><?php echo $release; ?></em></p>
                <p><b><?php echo $grade; ?></b></p>
                <p><?php echo $introp; ?></p>
                <p><?php echo $description; ?></p>
                <p><?php echo $length; ?></p>
                <p><?php echo $price; ?></p>
                <a href="https://www.paypal.com/webapps/shoppingcart?mid=4762361249188239098570421483665521&xclick_params=Y21kJTNkX2NhcnQlMjZidXNpbmVzcyUzZFVBOVU5R1lNV01FRkclMjZpdGVtX25hbWUlM2RCcmFpbiUyNTIwWmFwcGVkJTI1MjBTY2llbmNlJTI1MjBWb2x1bWUlMjUyME9uZSUyNTIwRFZEJTI2aXRlbV9udW1iZXIlM2RCWiUyNTIwU2NpZW5jZSUyNTIwVm9sdW1lJTI1MjBPbmUlMjZhbW91bnQlM2QxNSUyZTAwJTI2Y3VycmVuY3lfY29kZSUzZFVTRCUyNmxjJTNkVVMlMjZidXR0b25fc3VidHlwZSUzZHByb2R1Y3RzJTI2bm9fbm90ZSUzZDAlMjZjbiUzZEFkZCUyNTIwc3BlY2lhbCUyNTIwaW5zdHJ1Y3Rpb25zJTI1MjB0byUyNTIwdGhlJTI1MjBzZWxsZXIlMjZub19zaGlwcGluZyUzZDIlMjZybSUzZDElMjZyZXR1cm4lM2RodHRwJTI1M2ElMmYlMmZ3d3clMmVicmFpbnphcHBlZCUyZWNvbSUyNmNhbmNlbF9yZXR1cm4lM2RodHRwJTI1M2ElMmYlMmZ3d3clMmVicmFpbnphcHBlZCUyZWNvbSUyNnRheF9yYXRlJTNkMCUyZTAwMCUyNndlaWdodF91bml0JTNkbGJzJTI2YWRkJTNkMSUyNmJuJTNkUFAlMmRTaG9wQ2FydEJGJTI1M2FidG5fY2FydF9MRyUyZWdpZiUyNTNhSG9zdGVkJTI2aW50ZXJuYWxfaXNfaG9zdGVkX2J1dHRvbiUzZHRydWUlMjZjaGFyc2V0JTNkVVRGJTJkOCUyNnZpc2l0b3JfaWQlM2Q2MTI0OTE4ODIzOTA5ODU3MDQyJTI2bWVyY2hhbnRfZW1haWwlM2RlZ2dlbnRlcnRhaW5tZW50JTQwc2JjZ2xvYmFsJTJlbmV0JTI2YnVzaW5lc3NfbmFtZSUzZEJyYWluJTIwWmFwcGVkJTJjJTIwTExDJTI2bWVyY2hhbnRfaWQlM2RVQTlVOUdZTVdNRUZHJTI2bmV3X2NhcnQlM2R0cnVlJTI2d2FfdHlwZSUzZFNob3BwaW5nQ2FydCUyNmhvc3RlZF9idXR0b25faWQlM2QzQ1FRVTVINEdNMzhMJTI2JTI2U0hJUFBJTkdfQU5EX1RBWCUzZDElMjY&flowlogging_id=15108c16a7c2e#/checkout/shoppingCart"><button class="button">PURCHASE</button></a>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<script>
    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>
<?php get_footer(); ?>
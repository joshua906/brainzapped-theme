<?php get_header(); ?>

<div class="product-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Brain Zapped Products & Reviews</h1>
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
                <p><?php echo $description; ?></p>
                <p><?php echo $length; ?></p>
                <p><?php echo $price; ?></p>
                <button class="button">PURCHASE</button>
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
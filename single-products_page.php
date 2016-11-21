<?php get_header(); ?>

<div class="product-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Brain Zapped Products</h1>
            </div>
        </div>
    </div>
</div>
<!-- slide show for products -->
<div class="jumbotron">
<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="https://images.pexels.com/photos/132945/pexels-photo-132945.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" style="width:100%; background-size: cover; ">
  <div class="text">
  <h2>headline text here</h2>
        <p>this is the messeage for the headline text</p>
        </div>
</div>

<div class="mySlides fade">
  
  <img src="https://images.pexels.com/photos/51953/mother-daughter-love-sunset-51953.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" style="width:100%">
  <div class="text">
        <h2>headline text here</h2>
        <p>this is the messeage for the headline text</p>
  </div>
</div>

<div class="mySlides fade">
  <img src="https://images.pexels.com/photos/132945/pexels-photo-132945.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" style="width:100%">
  <div class="text">
  <h2>headline text here</h2>
        <p>this is the messeage for the headline text</p>
        </div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

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

<?php get_footer(); ?>
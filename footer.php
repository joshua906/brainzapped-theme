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

 <?php wp_footer(); ?>

</body>
</html>

<!--product thumbnails slider-->
<?php $products=get_option('spa_theme_options');?>


	  <div id="main" role="main">
      <section class="slider" style="padding:0px;">
        <div class="flexslider carousel product_manage">
          <ul class="slides" id="flex_new">
                 <li>
				   <?php 	if($products['product1_image']!='')  ?>
			      
	            
  	    	       <img src="<?php echo $products['product1_image']; ?>"  alt="Spa Featture" class="product_flex_img" />
				
				<h4><a href="#"><?php  echo $products['product1_title']; ?></a></h4>
			
  	    		</li>
				
  	    		<li>
  	    	      <?php 	if($products['product2_image']!='')  ?>
			      <img src="<?php echo $products['product2_image']; ?>"  alt="Spa Featture" class="product_flex_img" />
	          
				<h4><a href="#"><?php  echo $products['product2_title']; ?></a></h4>
			      
  	    		</li>
				
  	    		<li>
  	    	  <?php 	if($products['product3_image']!='')  ?>
			      <img src="<?php echo $products['product3_image']; ?>"  alt="Spa Featture" class="product_flex_img" />
	            
				<h4><a href="#"><?php  echo $products['product3_title']; ?></a></h4>
				
  	    		</li>
				
  	    		<li>
  	    	    <?php 	if($products['product4_image']!='')  ?>
			      <img src="<?php echo $products['product4_image']; ?>"  alt="Spa Featture" class="product_flex_img" />
	            
				<h4><a href="#"><?php  echo $products['product4_title']; ?></a></h4>
			
  	    		</li>
				
                <li>
  	    	    <?php 	if($products['product5_image']!='')  ?>
			      <img src="<?php echo $products['product5_image']; ?>"  alt="Spa Featture" class="product_flex_img" />
	          
				<h4><a href="#"><?php  echo $products['product5_title']; ?></a></h4>
			
  	    		</li>
  	    		
          </ul>
        </div>
      </section>
    </div>	

    <!--end of product thumbnails slider-->
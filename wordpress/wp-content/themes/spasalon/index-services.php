 <?php $service_data=get_option('spa_theme_options');
    // print_r($service_data);
 ?> 
  <div class="container">	  
      <div class="row">
          
        <div class="span4 service">
          <div class="thumbnail">
		  
		   	 <?php 	if($service_data['service1_image']!='')  ?>
			       
				
				<img src="<?php bloginfo('url'); ?>/../images/oak-park-athletes.png"  alt="Oak Park Athletes" class="services-thumbnail" />
	
         <h4 class="services-title"><a href="oak-park-athletes">Oak Park Athletes</a></h4>	
		 <div class="services-paragraph">
		 <p><?php echo $service_data['service1_content']?> </p>
		  </div>
        </div>
        </div>
		
		
         <div class="span4 service">
          <div class="thumbnail">
		  
		   	 <?php 	if($service_data['service2_image']!='')  ?>
			       
				
				<img src="<?php bloginfo('url'); ?>/../images/meet-the-coaches.png"  alt="Meet The Coaches" class="services-thumbnail" />
	
			
         <h4 class="services-title"><a href="meet-the-coaches">Meet The Coaches</a></h4>
		 <div class="services-paragraph">
		 <p><?php echo $service_data['service2_content']?> </p>
		  </div>
        </div>
        </div>
		
	    <div class="span4 service">
          <div class="thumbnail">
		  
		   	 <?php 	if($service_data['service3_image']!='')  ?>
			       
				
				<img src="<?php bloginfo('url'); ?>/../images/oak-park-coaches.png"  alt="Oak Park Coaches" class="services-thumbnail" />
			
         <h4 class="services-title"><a href="oak-park-coaches">Oak Park Coaches</a></h4>
		 <div class="services-paragraph">
		 <p><?php echo $service_data['service3_content']?> </p>
		  </div>
        </div>
        </div>
   <!-- close of spa services section -->
 

		  
</div>	
</div>		   
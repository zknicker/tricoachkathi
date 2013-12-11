<?php 
	add_action( 'after_setup_theme', 'spa_the_theme_setup' );
//if (!function_exists('spa_the_theme_setup')):

function spa_the_theme_setup() /*function declear*/
{
	 $template_uri=get_template_directory_uri();
	load_theme_textdomain( 'sis_spa', get_template_directory() . '/languages' );

	$spa_theme_options=array(
								 //home page setting option
							
								   'line_one' =>__('Our','sis_spa'),
								   'line_two'=>__('Refreshed','sis_spa'),
								 'description'=>__('Donec justo odio, lobortis eget congue sed, rutrum sit amet mauris. Curabitur sed lectus nulla.
             Curabitur sed lectus nulla.lobortis eget congue sed, rutrum sit amet mauris. Curabitur sed 
             lectus nulla rutrum sit amet mauris','sis_spa'),
								  'call_us'=>'963 6063 526',
							  	 'home_feature'=> $template_uri.'/images/default/home_banner.jpg',
							   
								 'first_thumb_image'=>$template_uri.'/images/default/home_thumb.jpg',
								 'second_thumb_image'=>$template_uri.'/images/default/home_thumb.jpg',
								 'third_thumb_image'=>$template_uri.'/images/default/home_thumb.jpg',
								 
								 'service1_title'=>__('Spa Treatment','sis_spa'),
								 'service1_image'=>$template_uri.'/images/default/home_service_thumb.jpg',
								 'service1_content'=>__('Pellentesque habitant morbi tristique senectus 
                                                      et netus et malesuada fames ac turpis egestas 
                                                    In in massa urna, vitae vestibulum orci. yoursb
                                                     Maecenas quis est sed mauris...','sis_spa'),
													 
								 'service2_title'=>__('Detox Treatment','sis_spa'),
								 'service2_image'=>$template_uri.'/images/default/home_service_thumb.jpg',
								 'service2_content'=>__('Pellentesque habitant morbi tristique senectus 
                                                      et netus et malesuada fames ac turpis egestas 
                                                    In in massa urna, vitae vestibulum orci. yoursb
                                                     Maecenas quis est sed mauris...','sis_spa'),
								 'service3_title'=>__('Facial Treatment','sis_spa'),
								 'service3_image'=>$template_uri.'/images/default/home_service_thumb.jpg',
								 'service3_content'=>__('Pellentesque habitant morbi tristique senectus 
                                                      et netus et malesuada fames ac turpis egestas 
                                                    In in massa urna, vitae vestibulum orci. yoursb
                                                     Maecenas quis est sed mauris...','sis_spa'),
								  'service4_title'=>__('Other Treatment','sis_spa'),
								 'service4_image'=>$template_uri.'/images/default/home_service_thumb.jpg',
								 'service4_content'=>__('Pellentesque habitant morbi tristique senectus 
                                                      et netus et malesuada fames ac turpis egestas 
                                                    In in massa urna, vitae vestibulum orci. yoursb
                                                     Maecenas quis est sed mauris...','sis_spa'),					 
								 
								   
								  'product1_title'=>__('Product 1','sis_spa'),
								  'product1_image'=>$template_uri.'/images/default/home_product_thumb.jpg',
								  
								  'product2_title'=>__('Product 2','sis_spa'),
								  'product2_image'=>$template_uri.'/images/default/home_product_thumb.jpg',
								  
								  'product3_title'=>__('Product 3','sis_spa'),
								  'product3_image'=>$template_uri.'/images/default/home_product_thumb.jpg',
								  
								  'product4_title'=>__('Product 4','sis_spa'),
								  'product4_image'=>$template_uri.'/images/default/home_product_thumb.jpg',
								  
								  'product5_title'=>__('Product 5','sis_spa'),
								  'product5_image'=>$template_uri.'/images/default/home_product_thumb.jpg',
								   
							
									
								'footer_tagline' => __('Copyright 2013. All Rights Reserved by ','sis_spa'),
								'upload_image'=>'',
								'height'=>'60',
								'width'=>'250',
								'upload_image_favicon'=>'',
					            
								'tagline_title'=>__('Treatment we are offering','sis_spa'),
							'tagline_contents'=>__('In commodo pulvinar metus, id tristique massa ultrices at. Nulla auctor turpis ut mi pulvinar eu accumsan risus sagittis. Mauris nunc ligula, ullamcorper vitae accumsan eu, 
congue in nulla. Cras hendrerit mi quis nisi semper in sodales nisl faucibus. Sed quis quam eu ante ornare hendrerit.','sis_spa'),
							'product_title'=>__('Spasalon Our product rang','sis_spa'),
							'product_contents'=>__('A SpaSalon Produc Heading Title In commodo pulvinar metus, id tristique massa ultrices at. Nulla auctor turpis ut mi pulvinar eu accumsan risus sagittis. Mauris nunc ligula, ullamcorper vitae accumsan eu, congue in nulla. Cras hendrerit mi quis nisi semper in sodales nisl faucibus. Sed quis quam eu ante ornare hendrerit. ','sis_spa'), 
							'spa_home_Title'=>array(	'home_title_px' => '42',
															'home_font_family' => 'MarketingScript',
															'home_font_style' => 'Normal',
															
														  ),
							'spa_product_Title'=>array(	'product_title_px' => '42',
													     'product_font_family' => 'MarketingScript',
														 'product_font_style' => 'Normal',
														
														  ),						  
							'spa_menu_typography'=>array(	'navigation_px' => '13',
																	'color_navigation' =>'#72797b',
																	'font_family_navigation' =>'Raleway-Medium',
																	'font_style_navigation' => 'Normal'
																),
							'spa_post_title_typography'=>array(	'post_title_px' => '24',
																		'color_post_title' => '#353C3F',
																		'font_family_post_title' => 'roboto',
																		'font_style_post_title' => 'Normal'
																	 ),
								'spa_post_entry_typography'=>array(	'post_entry_px' => '13',
																		'color_post_entry' => '#989495',
																		'font_family_post_entry' => 'roboto',
																		'font_style_post_entry' => 'Normal'
																	 ),
								'spa_post_meta_typography'=>array(	'post_meta_px' => '13',
																		'color_post_meta' => '#9a9a9a',
																		'font_family_post_meta' => 'roboto',
																		'font_style_post_meta' => 'Normal'
																	 ),
		                        'spa_sidebar_widget_titles'=>array(	'sidebar_widget_titles_px' => '18',
																		'color_sidebar_widget_titles' => '#4A4849',
																		'font_family_sidebar_widget_titles' => 'roboto',
																		'font_style_sidebar_widget_titles' => 'Normal'
																	 ),	
	);
add_option('spa_theme_options',$spa_theme_options); 
   
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );

add_editor_style();
register_nav_menus(
    array( 'header-menu' => __('Header Menu','sis_spa'),
	       'footer-menu' => __('Footer Menu','sis_spa')
	     )
  );

}
?>
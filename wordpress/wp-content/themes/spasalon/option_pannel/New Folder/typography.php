<?php

/* variables declaration*/

$current_options=get_option('spa_theme_options');

if(isset($_POST['spa_typography_save'])){
if($_POST['spa_typography_save'] == 1) {
if(!empty($_POST)) {
/*nonce field implement in gernal setting*/
if ( empty($_POST) || !wp_verify_nonce($_POST['spa_typography_nonce_customization'],'spa_customization_nonce_typography') )
{
   print 'Sorry, your nonce did not verify.';
   exit;
}
else
{
//below code for style menus
$current_options['spa_menu_typography']['navigation_px']=sanitize_text_field($_POST['navigation_px']);
$current_options['spa_menu_typography']['color_navigation']=sanitize_text_field($_POST['color_navigation']);
$current_options['spa_menu_typography']['font_family_navigation']=sanitize_text_field($_POST['font_family_navigation']);
$current_options['spa_menu_typography']['font_style_navigation']=sanitize_text_field($_POST['font_style_navigation']);

/*below code for post_title */
$current_options['spa_post_title_typography']['post_title_px']=sanitize_text_field($_POST['post_title_px']);
$current_options['spa_post_title_typography']['color_post_title']=sanitize_text_field($_POST['color_post_title']);
$current_options['spa_post_title_typography']['font_family_post_title']=sanitize_text_field($_POST['font_family_post_title']);
$current_options['spa_post_title_typography']['font_style_post_title']=sanitize_text_field($_POST['font_style_post_title']);

/*below code for post_entry */
$current_options['spa_post_entry_typography']['post_entry_px']=sanitize_text_field($_POST['post_entry_px']);
$current_options['spa_post_entry_typography']['color_post_entry']=sanitize_text_field($_POST['color_post_entry']);
$current_options['spa_post_entry_typography']['font_family_post_entry']=sanitize_text_field($_POST['font_family_post_entry']);
$current_options['spa_post_entry_typography']['font_style_post_entry']=sanitize_text_field($_POST['font_style_post_entry']);

/*below code for post_meta */
$current_options['spa_post_meta_typography']['post_meta_px']=sanitize_text_field($_POST['post_meta_px']);
$current_options['spa_post_meta_typography']['color_post_meta']=sanitize_text_field($_POST['color_post_meta']);
$current_options['spa_post_meta_typography']['font_family_post_meta']=sanitize_text_field($_POST['font_family_post_meta']);
$current_options['spa_post_meta_typography']['font_style_post_meta']=sanitize_text_field($_POST['font_style_post_meta']);

/*below code for sidebar_widget_titles */
$current_options['spa_sidebar_widget_titles']['sidebar_widget_titles_px']=sanitize_text_field($_POST['sidebar_widget_titles_px']);
$current_options['spa_sidebar_widget_titles']['color_sidebar_widget_titles']=sanitize_text_field($_POST['color_sidebar_widget_titles']);
$current_options['spa_sidebar_widget_titles']['font_family_sidebar_widget_titles']=sanitize_text_field($_POST['font_family_sidebar_widget_titles']);
$current_options['spa_sidebar_widget_titles']['font_style_sidebar_widget_titles']=sanitize_text_field($_POST['font_style_sidebar_widget_titles']);

/*below code for footer_widget_titles */
$current_options['spa_font_style_footer_widget_titles']['footer_widget_titles_px']=sanitize_text_field($_POST['footer_widget_titles_px']);
$current_options['spa_font_style_footer_widget_titles']['color_footer_widget_titles']=sanitize_text_field($_POST['color_footer_widget_titles']);
$current_options['spa_font_style_footer_widget_titles']['font_family_footer_widget_titles']=sanitize_text_field($_POST['font_family_footer_widget_titles']);
$current_options['spa_font_style_footer_widget_titles']['font_style_footer_widget_titles']=sanitize_text_field($_POST['font_style_footer_widget_titles']);
update_option('spa_theme_options' , $current_options);
}/*finish nonce field*/
}
} 
}//end of if $_POST['spa_typography_save'] 
?>
<div class="block ui-tabs-panel ui-widget-content ui-corner-bottom" id="option_typography" aria-labelledby="ui-id-2" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">

 <form method="post" action = "" style="width:751px;" id="spa_typography_form">
	<!--nonce check form-->
 <?php wp_nonce_field('spa_customization_nonce_typography','spa_typography_nonce_customization'); ?>
<!--end nonce-->

<!--code for Menu Style-->
<div class="option option-checbox">
<span class="option_tab_title"><?php _e('Typography','sis_spa');?></span>
    <h3><?php _e('Style Menus','sis_spa');?></h3>

</div>

<div class="option option-background-upload">
   <div class="section">
        <div class="element">
		 
          <?php $navigation_px = $current_options['spa_menu_typography']['navigation_px']; ?>
           
					<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 0px; width: 180px;">			
                	<select name="navigation_px" id="pxselect_navigation" class="select" >
								<?php 
								for ($i = 9; $i <= 100; $i++) { 
								?>
<option value="<?php echo $i; ?>" <?php if ( $navigation_px == $i ) echo selected($navigation_px, $i ); ?> name=""><?php echo $i; ?></option>
							   <?php } ?>
							   </select>
					</div>	
<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 10px; width: 180px;">
       <select  id="main_navigation" onchange="return change_navigation()" class="select">
                                  <option value="px"><?php _e('px','sis_spa');?></option>
                                </select>
     </div>     
              
<?php $font_family_navigation = $current_options['spa_menu_typography']['font_family_navigation']; ?>								
<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 0px; width: 180px;">							
<select id="" name="font_family_navigation" class="select">
<option  value="Raleway-Medium" <?php selected($font_family_navigation, 'Raleway-Medium' ); ?>>Raleway-Medium</option>
<option value="Arial, sans-serif" <?php selected($font_family_navigation, 'Arial, sans-serif' ); ?>>Arial</option>
<option value="Georgia, serif" <?php selected($font_family_navigation, 'Georgia, serif' ); ?>>Georgia</option><option value="Times New Roman, serif" <?php selected($font_family_navigation, 'Times New Roman, serif' ); ?>>Times New Roman</option>
<option value="Tahoma, Geneva, Verdana, sans-serif" <?php selected($font_family_navigation, 'Tahoma, Geneva, Verdana, sans-serif' ); ?>>Tahoma</option>
<option value="Palatino, Palatino Linotype, serif" <?php selected($font_family_navigation, 'Palatino, Palatino Linotype, serif' ); ?>>Palatino</option>
<option value="Helvetica Neue, Helvetica, sans-serif" <?php selected($font_family_navigation, 'Helvetica Neue, Helvetica, sans-serif' ); ?>>Helvetica*</option><option value="Calibri, Candara, Segoe, Optima, sans-serif" <?php selected($font_family_navigation, 'Calibri, Candara, Segoe, Optima, sans-serif' ); ?>>Calibri*</option><option value="Myriad Pro, Myriad, sans-serif" <?php selected($font_family_navigation, 'Myriad Pro, Myriad, sans-serif' ); ?>>Myriad Pro*</option><option value="Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif" <?php selected($font_family_navigation, 'Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif' ); ?>>Lucida</option><option value="Arial Black, sans-serif" <?php selected($font_family_navigation, 'Arial Black, sans-serif' ); ?>>Arial Black</option><option value="Gill Sans, Gill Sans MT, Calibri, sans-serif" <?php selected($font_family_navigation, 'Gill Sans, Gill Sans MT, Calibri, sans-serif' ); ?>>Gill Sans*</option><option value="Geneva, Tahoma, Verdana, sans-serif" <?php selected($font_family_navigation, 'Geneva, Tahoma, Verdana, sans-serif' ); ?>>Geneva*</option><option value="Impact, Charcoal, sans-serif" <?php selected($font_family_navigation, 'Impact, Charcoal, sans-serif' ); ?>>Impact</option><option value="Courier, Courier New, monospace" <?php selected($font_family_navigation, 'Courier, Courier New, monospace' ); ?>>Courier</option><option value="Abel" <?php selected($font_family_navigation, 'Abel' ); ?>>Abel</option><option value="Abril Fatface" <?php selected($font_family_navigation, 'Abril Fatface' ); ?>>Abril Fatface</option><option value="Aclonica" <?php selected($font_family_navigation, 'Aclonica' ); ?>>Aclonica</option><option value="Actor" <?php selected($font_family_navigation, 'Actor' ); ?>>Actor</option><option value="Adamina" <?php selected($font_family_navigation, 'Adamina' ); ?>>Adamina</option><option value="Aldrich" <?php selected($font_family_navigation, 'Aldrich' ); ?>>Aldrich</option><option value="Alice" <?php selected($font_family_navigation, 'Alice' ); ?>>Alice</option><option value="Alike" <?php selected($font_family_navigation, 'Alike' ); ?>>Alike</option><option value="Alike Angular" <?php selected($font_family_navigation, 'Alike Angular' ); ?>>Alike Angular</option><option value="Allan" <?php selected($font_family_navigation, 'Allan' ); ?>>Allan</option><option value="Allerta" <?php selected($font_family_navigation, 'Allerta' ); ?>>Allerta</option><option value="Allerta Stencil" <?php selected($font_family_navigation, 'Allerta Stencil' ); ?>>Allerta Stencil</option><option value="Amaranth" <?php selected($font_family_navigation, 'Amaranth' ); ?>>Amaranth</option><option value="Amatic SC" <?php selected($font_family_navigation, 'Amatic SC' ); ?>>Amatic SC</option><option value="Andada" <?php selected($font_family_navigation, 'Andada' ); ?>>Andada</option><option value="Andika" <?php selected($font_family_navigation, 'Andika' ); ?>>Andika</option><option value="Annie Use Your Telescope" <?php selected($font_family_navigation, 'Annie Use Your Telescope' ); ?>>Annie Use Your Telescope</option><option value="Anonymous Pro" <?php selected($font_family_navigation, 'Anonymous Pro' ); ?>>Anonymous Pro</option><option value="Antic" <?php selected($font_family_navigation, 'Antic' ); ?>>Antic</option><option value="Anton" <?php selected($font_family_navigation, 'Anton' ); ?>>Anton</option><option value="Architects Daughter" <?php selected($font_family_navigation, 'Architects Daughter' ); ?>>Architects Daughter</option><option value="Arimo" <?php selected($font_family_navigation, 'Arimo' ); ?>>Arimo</option><option value="Artifika" <?php selected($font_family_navigation, 'Artifika' ); ?>>Artifika</option><option value=
"Arvo" <?php selected($font_family_navigation, 'Arvo' ); ?>>Arvo</option><option value="Asset" <?php selected($font_family_navigation, 'Asset' ); ?>>Asset</option><option value="Astloch" <?php selected($font_family_navigation, 'Astloch' ); ?>>Astloch</option><option value="Atomic Age" <?php selected($font_family_navigation, 'Atomic Age' ); ?>>Atomic Age</option><option value="Aubrey" <?php selected($font_family_navigation, 'Aubrey' ); ?>>Aubrey</option><option value="Bangers" <?php selected($font_family_navigation, 'Bangers' ); ?>>Bangers</option><option value="Bentham" <?php selected($font_family_navigation, 'Bentham' ); ?>>Bentham</option><option value="Bevan" <?php selected($font_family_navigation, 'Bevan' ); ?>>Bevan</option><option value="Bigshot One" <?php selected($font_family_navigation, 'Bigshot One' ); ?>>Bigshot One</option><option value="Black Ops One" <?php selected($font_family_navigation, 'Black Ops One' ); ?>>Black Ops One</option><option value="Bowlby One" <?php selected($font_family_navigation, 'Bowlby One' ); ?>>Bowlby One</option><option value="Bowlby One SC" <?php selected($font_family_navigation, 'Bowlby One SC' ); ?>>Bowlby One SC</option><option value="Brawler" <?php selected($font_family_navigation, 'Brawler' ); ?>>Brawler</option><option value="Butcherman Caps" <?php selected($font_family_navigation, 'Butcherman Caps' ); ?>>Butcherman Caps</option><option value="Cabin" <?php selected($font_family_navigation, 'Cabin' ); ?>>Cabin</option><option value="Cabin Sketch" <?php selected($font_family_navigation, 'Cabin Sketch' ); ?>>Cabin Sketch</option><option value="Cabin Sketch" <?php selected($font_family_navigation, 'Cabin Sketch' ); ?>>Cabin Sketch</option><option value="Calligraffitti" <?php selected($font_family_navigation, 'Calligraffitti' ); ?>>Calligraffitti</option><option value="Candal" <?php selected($font_family_navigation, 'Candal' ); ?>>Candal</option><option value="Cantarell" <?php selected($font_family_navigation, 'Cantarell' ); ?>>Cantarell</option><option value="Cardo" <?php selected($font_family_navigation, 'Cardo' ); ?>>Cardo</option><option value="Carme" <?php selected($font_family_navigation, 'Carme' ); ?>>Carme</option><option value="Carter One" <?php selected($font_family_navigation, 'Carter One' ); ?>>Carter One</option><option value="Caudex" <?php selected($font_family_navigation, 'Caudex' ); ?>>Caudex</option><option value="Cedarville Cursive" <?php selected($font_family_navigation, 'Cedarville Cursive' ); ?>>Cedarville Cursive</option><option value="Changa One" <?php selected($font_family_navigation, 'Changa One' ); ?>>Changa One</option><option value="Cherry Cream Soda" <?php selected($font_family_navigation, 'Cherry Cream Soda' ); ?>>Cherry Cream Soda</option><option value="Chewy" <?php selected($font_family_navigation, 'Chewy' ); ?>>Chewy</option><option value="Chivo" <?php selected($font_family_navigation, 'Chivo' ); ?>>Chivo</option><option value="Coda" <?php selected($font_family_navigation, 'Coda' ); ?>>Coda</option><option value="Comfortaa" <?php selected($font_family_navigation, 'Comfortaa' ); ?>>Comfortaa</option><option value="Coming Soon" <?php selected($font_family_navigation, 'Coming Soon' ); ?>>Coming Soon</option><option value="Contrail One" <?php selected($font_family_navigation, 'Contrail One' ); ?>>Contrail One</option><option value="Copse" <?php selected($font_family_navigation, 'Copse' ); ?>>Copse</option><option value="Corben" <?php selected($font_family_navigation, 'Corben' ); ?>>Corben</option><option value="Corben" <?php selected($font_family_navigation, 'Corben' ); ?>>Corben</option><option value="Cousine" <?php selected($font_family_navigation, 'Cousine' ); ?>>Cousine</option><option value="Coustard" <?php selected($font_family_navigation, 'Coustard' ); ?>>Coustard</option><option value="Covered By Your Grace" <?php selected($font_family_navigation, 'Covered By Your Grace' ); ?>>Covered By Your Grace</option><option value="Crafty Girls" <?php selected($font_family_navigation, 'Crafty Girls' ); ?>>Crafty Girls</option><option value="Creepster Caps" <?php selected($font_family_navigation, 'Creepster Caps' ); ?>>Creepster Caps</option><option value="Crimson Text" <?php selected($font_family_navigation, 'Crimson Text' ); ?>>Crimson Text</option><option value="Crushed" <?php selected($font_family_navigation, 'Crushed' ); ?>>Crushed</option><option value="Cuprum" <?php selected($font_family_navigation, 'Cuprum' ); ?>>Cuprum</option><option value="Damion" <?php selected($font_family_navigation, 'Damion' ); ?>>Damion</option><option value="Dancing Script" <?php selected($font_family_navigation, 'Dancing Script' ); ?>>Dancing Script</option><option value="Dawning of a New Day" <?php selected($font_family_navigation, 'Dawning of a New Day' ); ?>>Dawning of a New Day</option><option value="Days One" <?php selected($font_family_navigation, 'Days One' ); ?>>Days One</option><option value="Delius" <?php selected($font_family_navigation, 'Delius' ); ?>>Delius</option><option value="Delius Swash Caps" <?php selected($font_family_navigation, 'Delius Swash Caps' ); ?>>Delius Swash Caps</option><option value="Delius Unicase" <?php selected($font_family_navigation, 'Delius Unicase' ); ?>>Delius Unicase</option><option value="Didact Gothic" <?php selected($font_family_navigation, 'Didact Gothic' ); ?>>Didact Gothic</option><option value="Dorsa" <?php selected($font_family_navigation, 'Dorsa' ); ?>>Dorsa</option><option value="Droid Sans" <?php selected($font_family_navigation, 'Droid Sans' ); ?>>Droid Sans</option><option value="Droid Sans Mono" <?php selected($font_family_navigation, 'Droid Sans Mono' ); ?>>Droid Sans Mono</option><option value="Droid Serif" <?php selected($font_family_navigation, 'Droid Serif' ); ?>>Droid Serif</option><option value="EB Garamond" <?php selected($font_family_navigation, 'EB Garamond' ); ?>>EB Garamond</option><option value="Eater Caps" <?php selected($font_family_navigation, 'Eater Caps' ); ?>>Eater Caps</option><option value="Expletus Sans" <?php selected($font_family_navigation, 'Expletus Sans' ); ?>>Expletus Sans</option><option value="Fanwood Text" <?php selected($font_family_navigation, 'Fanwood Text' ); ?>>Fanwood Text</option><option value="Federant" <?php selected($font_family_navigation, 'Federant' ); ?>>Federant</option><option value="Federo" <?php selected($font_family_navigation, 'Federo' ); ?>>Federo</option><option value="Fontdiner Swanky" <?php selected($font_family_navigation, 'Fontdiner Swanky' ); ?>>Fontdiner Swanky</option><option value="Forum" <?php selected($font_family_navigation, 'Forum' ); ?>>Forum</option><option value="Francois One" <?php selected($font_family_navigation, 'Francois One' ); ?>>Francois One</option><option value="Gentium Book Basic" <?php selected($font_family_navigation, 'Gentium Book Basic' ); ?>>Gentium Book Basic</option><option value="Geo" <?php selected($font_family_navigation, 'Geo' ); ?>>Geo</option><option value="Geostar" <?php selected($font_family_navigation, 'Geostar' ); ?>>Geostar</option><option value="Geostar Fill" <?php selected($font_family_navigation, 'Geostar Fill' ); ?>>Geostar Fill</option><option value="Give You Glory" <?php selected($font_family_navigation, 'Give You Glory' ); ?>>Give You Glory</option><option value="Gloria Hallelujah" <?php selected($font_family_navigation, 'Gloria Hallelujah' ); ?>>Gloria Hallelujah</option><option value="Goblin One" <?php selected($font_family_navigation, 'Goblin One' ); ?>>Goblin One</option><option value="Gochi Hand" <?php selected($font_family_navigation, 'Gochi Hand' ); ?>>Gochi Hand</option><option value="Goudy Bookletter 1911" <?php selected($font_family_navigation, 'Goudy Bookletter 1911' ); ?>>Goudy Bookletter 1911</option><option value="Gravitas One" <?php selected($font_family_navigation, 'Gravitas One' ); ?>>Gravitas One</option><option value="Gruppo" <?php selected($font_family_navigation, 'Gruppo' ); ?>>Gruppo</option><option value="Hammersmith One" <?php selected($font_family_navigation, 'Hammersmith One' ); ?>>Hammersmith One</option><option value="Holtwood One SC" <?php selected($font_family_navigation, 'Holtwood One SC' ); ?>>Holtwood One SC</option><option value="Homemade Apple" <?php selected($font_family_navigation, 'Homemade Apple' ); ?>>Homemade Apple</option><option value="IM Fell DW Pica" <?php selected($font_family_navigation, 'IM Fell DW Pica' ); ?>>IM Fell DW Pica</option><option value="IM Fell English" <?php selected($font_family_navigation, 'IM Fell English' ); ?>>IM Fell English</option><option value="IM Fell English SC" <?php selected($font_family_navigation, 'IM Fell English SC' ); ?>>IM Fell English SC</option><option value="Inconsolata" <?php selected($font_family_navigation, 'Inconsolata' ); ?>>Inconsolata</option><option value="Indie Flower" <?php selected($font_family_navigation, 'Indie Flower' ); ?>>Indie Flower</option><option value="Irish Grover" <?php selected($font_family_navigation, 'Irish Grover' ); ?>>Irish Grover</option><option value="Irish Growler" <?php selected($font_family_navigation, 'Irish Growler' ); ?>>Irish Growler</option><option value="Istok Web" <?php selected($font_family_navigation, 'Istok Web' ); ?>>Istok Web</option><option value="Jockey One" <?php selected($font_family_navigation, 'Jockey One' ); ?>>Jockey One</option><option value="Josefin Sans" <?php selected($font_family_navigation, 'Josefin Sans' ); ?>>Josefin Sans</option><option value="Josefin Slab" <?php selected($font_family_navigation, 'Josefin Slab' ); ?>>Josefin Slab</option><option value="Judson" <?php selected($font_family_navigation, 'Judson' ); ?>>Judson</option><option value="Julee" <?php selected($font_family_navigation, 'Julee' ); ?>>Julee</option><option value="Jura" <?php selected($font_family_navigation, 'Jura' ); ?>>Jura</option><option value="Just Another Hand" <?php selected($font_family_navigation, 'Just Another Hand' ); ?>>Just Another Hand</option><option value="Just Me Again Down Here" <?php selected($font_family_navigation, 'Just Me Again Down Here' ); ?>>Just Me Again Down Here</option><option value="Kameron" <?php selected($font_family_navigation, 'Kameron' ); ?>>Kameron</option><option value="Kelly Slab" <?php selected($font_family_navigation, 'Kelly Slab' ); ?>>Kelly Slab</option><option value="Kenia" <?php selected($font_family_navigation, 'Kenia' ); ?>>Kenia</option><option value="Kranky" <?php selected($font_family_navigation, 'Kranky' ); ?>>Kranky</option><option value="Kreon" <?php selected($font_family_navigation, 'Kreon' ); ?>>Kreon</option><option value="Kristi" <?php selected($font_family_navigation, 'Kristi' ); ?>>Kristi</option><option value="La Belle Aurore" <?php selected($font_family_navigation, 'La Belle Aurore' ); ?>>La Belle Aurore</option><option value="Lato" <?php selected($font_family_navigation, 'Lato' ); ?>>Lato</option><option value="League Script" <?php selected($font_family_navigation, 'League Script' ); ?>>League Script</option><option value="Leckerli One" <?php selected($font_family_navigation, 'Leckerli One' ); ?>>Leckerli One</option><option value="Lekton" <?php selected($font_family_navigation, 'Lekton' ); ?>>Lekton</option><option value="Limelight" <?php selected($font_family_navigation, 'Limelight' ); ?>>Limelight</option><option value="Linden Hill" <?php selected($font_family_navigation, 'Linden Hill' ); ?>>Linden Hill</option><option value="Lobster" <?php selected($font_family_navigation, 'Lobster' ); ?>>Lobster</option><option value="Lobster Two" <?php selected($font_family_navigation, 'Lobster Two' ); ?>>Lobster Two</option><option value="Lora" <?php selected($font_family_navigation, 'Lora' ); ?>>Lora</option><option value="Love Ya Like A Sister" <?php selected($font_family_navigation, 'Love Ya Like A Sister' ); ?>>Love Ya Like A Sister</option><option value="Loved by the King" <?php selected($font_family_navigation, 'Loved by the King' ); ?>>Loved by the King</option><option value="Luckiest Guy" <?php selected($font_family_navigation, 'Luckiest Guy' ); ?>>Luckiest Guy</option><option value="Maiden Orange" <?php selected($font_family_navigation, 'Maiden Orange' ); ?>>Maiden Orange</option>
</select>
</div>

<?php $font_style_navigation = $current_options['spa_menu_typography']['font_style_navigation']; ?>	
<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 10px; width: 180px;">
<select id="" name="font_style_navigation" class="select"><option value="normal" <?php selected($font_style_navigation, 'normal' ); ?>>Normal</option><option value="italic" <?php selected($font_style_navigation, 'italic' ); ?>>Italic</option></select>
</div>								



  <br /><div class="form-item" >
  <input  type="text"  class="colorwell" name="color_navigation" value="<?php  echo $current_options['spa_menu_typography']['color_navigation']; ?>" />
  </div>
<div id="picker_navigation" style="z-index: 100; background:#eee; border:1px solid #ccc; position:absolute; display:none;"></div>
            
            
       </div>
      </div>
	  
</div>


<!--code for post title-->
<div class="option option-checbox">
    <h3><?php _e('Post Title','sis_spa');?></h3>

</div>

<div class="option option-background-upload">
   <div class="section">
        <div class="element">
             	
				 <?php $post_title_px = $current_options['spa_post_title_typography']['post_title_px'];?>	
				<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 0px; width: 180px;">	
                <select name="post_title_px" id="pxselect_post_title" class="select">
								<?php 
								for ($i = 9; $i <= 100; $i++) { 
								?>
<option value="<?php echo $i; ?>" <?php if ( $post_title_px == $i ) echo selected($post_title_px, $i ); ?> name=""><?php echo $i; ?></option>
							   <?php } ?>
							   </select>
							   
              </div>
			 
				<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 10px; width: 180px;">
							<select id="main_post_title" onchange="return change_post_title()" class="select">
                                <option value="px"><?php _e('px','sis_spa');?></option>
                                <!-- <option value="em">em</option>-->
                            </select>	
				</div>
              
            <?php $font_family_post_title = $current_options['spa_post_title_typography']['font_family_post_title']; ?>							   
							   
		<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 0px; width: 180px;">			
<select  name="font_family_post_title" class="select">
<option value="roboto" <?php selected($font_family_post_title, 'roboto' ); ?>>roboto</option>
<option value="Arial, sans-serif" <?php selected($font_family_post_title, 'Arial, sans-serif' ); ?>>Arial</option>
<option  value="Verdana, Geneva, sans-serif" <?php selected($font_family_post_title, 'Verdana, Geneva, sans-serif' ); ?>>Verdana</option><option value="Trebuchet MS, Tahoma, sans-serif" <?php selected($font_family_post_title, 'Trebuchet MS, Tahoma, sans-serif' ); ?>>Trebuchet</option><option value="Georgia, serif" <?php selected($font_family_post_title, 'Georgia, serif' ); ?>>Georgia</option><option value="Times New Roman, serif" <?php selected($font_family_post_title, 'Times New Roman, serif' ); ?>>Times New Roman</option><option value="Tahoma, Geneva, Verdana, sans-serif" <?php selected($font_family_post_title, 'Tahoma, Geneva, Verdana, sans-serif' ); ?>>Tahoma</option><option value="Palatino, Palatino Linotype, serif" <?php selected($font_family_post_title, 'Palatino, Palatino Linotype, serif' ); ?>>Palatino</option><option value="Helvetica Neue, Helvetica, sans-serif" <?php selected($font_family_post_title, 'Helvetica Neue, Helvetica, sans-serif' ); ?>>Helvetica*</option><option value="Calibri, Candara, Segoe, Optima, sans-serif" <?php selected($font_family_post_title, 'Calibri, Candara, Segoe, Optima, sans-serif' ); ?>>Calibri*</option><option value="Myriad Pro, Myriad, sans-serif" <?php selected($font_family_post_title, 'Myriad Pro, Myriad, sans-serif' ); ?>>Myriad Pro*</option><option value="Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif" <?php selected($font_family_post_title, 'Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif' ); ?>>Lucida</option><option value="Arial Black, sans-serif" <?php selected($font_family_post_title, 'Arial Black, sans-serif' ); ?>>Arial Black</option><option value="Gill Sans, Gill Sans MT, Calibri, sans-serif" <?php selected($font_family_post_title, 'Gill Sans, Gill Sans MT, Calibri, sans-serif' ); ?>>Gill Sans*</option><option value="Geneva, Tahoma, Verdana, sans-serif" <?php selected($font_family_post_title, 'Geneva, Tahoma, Verdana, sans-serif' ); ?>>Geneva*</option><option value="Impact, Charcoal, sans-serif" <?php selected($font_family_post_title, 'Impact, Charcoal, sans-serif' ); ?>>Impact</option><option value="Courier, Courier New, monospace" <?php selected($font_family_post_title, 'Courier, Courier New, monospace' ); ?>>Courier</option><option value="Abel" <?php selected($font_family_post_title, 'Abel' ); ?>>Abel</option><option value="Abril Fatface" <?php selected($font_family_post_title, 'Abril Fatface' ); ?>>Abril Fatface</option><option value="Aclonica" <?php selected($font_family_post_title, 'Aclonica' ); ?>>Aclonica</option><option value="Actor" <?php selected($font_family_post_title, 'Actor' ); ?>>Actor</option><option value="Adamina" <?php selected($font_family_post_title, 'Adamina' ); ?>>Adamina</option><option value="Aldrich" <?php selected($font_family_post_title, 'Aldrich' ); ?>>Aldrich</option><option value="Alice" <?php selected($font_family_post_title, 'Alice' ); ?>>Alice</option><option value="Alike" <?php selected($font_family_post_title, 'Alike' ); ?>>Alike</option><option value="Alike Angular" <?php selected($font_family_post_title, 'Alike Angular' ); ?>>Alike Angular</option><option value="Allan" <?php selected($font_family_post_title, 'Allan' ); ?>>Allan</option><option value="Allerta" <?php selected($font_family_post_title, 'Allerta' ); ?>>Allerta</option><option value="Allerta Stencil" <?php selected($font_family_post_title, 'Allerta Stencil' ); ?>>Allerta Stencil</option><option value="Amaranth" <?php selected($font_family_post_title, 'Amaranth' ); ?>>Amaranth</option><option value="Amatic SC" <?php selected($font_family_post_title, 'Amatic SC' ); ?>>Amatic SC</option><option value="Andada" <?php selected($font_family_post_title, 'Andada' ); ?>>Andada</option><option value="Andika" <?php selected($font_family_post_title, 'Andika' ); ?>>Andika</option><option value="Annie Use Your Telescope" <?php selected($font_family_post_title, 'Annie Use Your Telescope' ); ?>>Annie Use Your Telescope</option><option value="Anonymous Pro" <?php selected($font_family_post_title, 'Anonymous Pro' ); ?>>Anonymous Pro</option><option value="Antic" <?php selected($font_family_post_title, 'Antic' ); ?>>Antic</option><option value="Anton" <?php selected($font_family_post_title, 'Anton' ); ?>>Anton</option><option value="Architects Daughter" <?php selected($font_family_post_title, 'Architects Daughter' ); ?>>Architects Daughter</option><option value="Arimo" <?php selected($font_family_post_title, 'Arimo' ); ?>>Arimo</option><option value="Artifika" <?php selected($font_family_post_title, 'Artifika' ); ?>>Artifika</option><option value=
"Arvo" <?php selected($font_family_post_title, 'Arvo' ); ?>>Arvo</option><option value="Asset" <?php selected($font_family_post_title, 'Asset' ); ?>>Asset</option><option value="Astloch" <?php selected($font_family_post_title, 'Astloch' ); ?>>Astloch</option><option value="Atomic Age" <?php selected($font_family_post_title, 'Atomic Age' ); ?>>Atomic Age</option><option value="Aubrey" <?php selected($font_family_post_title, 'Aubrey' ); ?>>Aubrey</option><option value="Bangers" <?php selected($font_family_post_title, 'Bangers' ); ?>>Bangers</option><option value="Bentham" <?php selected($font_family_post_title, 'Bentham' ); ?>>Bentham</option><option value="Bevan" <?php selected($font_family_post_title, 'Bevan' ); ?>>Bevan</option><option value="Bigshot One" <?php selected($font_family_post_title, 'Bigshot One' ); ?>>Bigshot One</option><option value="Black Ops One" <?php selected($font_family_post_title, 'Black Ops One' ); ?>>Black Ops One</option><option value="Bowlby One" <?php selected($font_family_post_title, 'Bowlby One' ); ?>>Bowlby One</option><option value="Bowlby One SC" <?php selected($font_family_post_title, 'Bowlby One SC' ); ?>>Bowlby One SC</option><option value="Brawler" <?php selected($font_family_post_title, 'Brawler' ); ?>>Brawler</option><option value="Butcherman Caps" <?php selected($font_family_post_title, 'Butcherman Caps' ); ?>>Butcherman Caps</option><option value="Cabin" <?php selected($font_family_post_title, 'Cabin' ); ?>>Cabin</option><option value="Cabin Sketch" <?php selected($font_family_post_title, 'Cabin Sketch' ); ?>>Cabin Sketch</option><option value="Cabin Sketch" <?php selected($font_family_post_title, 'Cabin Sketch' ); ?>>Cabin Sketch</option><option value="Calligraffitti" <?php selected($font_family_post_title, 'Calligraffitti' ); ?>>Calligraffitti</option><option value="Candal" <?php selected($font_family_post_title, 'Candal' ); ?>>Candal</option><option value="Cantarell" <?php selected($font_family_post_title, 'Cantarell' ); ?>>Cantarell</option><option value="Cardo" <?php selected($font_family_post_title, 'Cardo' ); ?>>Cardo</option><option value="Carme" <?php selected($font_family_post_title, 'Carme' ); ?>>Carme</option><option value="Carter One" <?php selected($font_family_post_title, 'Carter One' ); ?>>Carter One</option><option value="Caudex" <?php selected($font_family_post_title, 'Caudex' ); ?>>Caudex</option><option value="Cedarville Cursive" <?php selected($font_family_post_title, 'Cedarville Cursive' ); ?>>Cedarville Cursive</option><option value="Changa One" <?php selected($font_family_post_title, 'Changa One' ); ?>>Changa One</option><option value="Cherry Cream Soda" <?php selected($font_family_post_title, 'Cherry Cream Soda' ); ?>>Cherry Cream Soda</option><option value="Chewy" <?php selected($font_family_post_title, 'Chewy' ); ?>>Chewy</option><option value="Chivo" <?php selected($font_family_post_title, 'Chivo' ); ?>>Chivo</option><option value="Coda" <?php selected($font_family_post_title, 'Coda' ); ?>>Coda</option><option value="Comfortaa" <?php selected($font_family_post_title, 'Comfortaa' ); ?>>Comfortaa</option><option value="Coming Soon" <?php selected($font_family_post_title, 'Coming Soon' ); ?>>Coming Soon</option><option value="Contrail One" <?php selected($font_family_post_title, 'Contrail One' ); ?>>Contrail One</option><option value="Copse" <?php selected($font_family_post_title, 'Copse' ); ?>>Copse</option><option value="Corben" <?php selected($font_family_post_title, 'Corben' ); ?>>Corben</option><option value="Corben" <?php selected($font_family_post_title, 'Corben' ); ?>>Corben</option><option value="Cousine" <?php selected($font_family_post_title, 'Cousine' ); ?>>Cousine</option><option value="Coustard" <?php selected($font_family_post_title, 'Coustard' ); ?>>Coustard</option><option value="Covered By Your Grace" <?php selected($font_family_post_title, 'Covered By Your Grace' ); ?>>Covered By Your Grace</option><option value="Crafty Girls" <?php selected($font_family_post_title, 'Crafty Girls' ); ?>>Crafty Girls</option><option value="Creepster Caps" <?php selected($font_family_post_title, 'Creepster Caps' ); ?>>Creepster Caps</option><option value="Crimson Text" <?php selected($font_family_post_title, 'Crimson Text' ); ?>>Crimson Text</option><option value="Crushed" <?php selected($font_family_post_title, 'Crushed' ); ?>>Crushed</option><option value="Cuprum" <?php selected($font_family_post_title, 'Cuprum' ); ?>>Cuprum</option><option value="Damion" <?php selected($font_family_post_title, 'Damion' ); ?>>Damion</option><option value="Dancing Script" <?php selected($font_family_post_title, 'Dancing Script' ); ?>>Dancing Script</option><option value="Dawning of a New Day" <?php selected($font_family_post_title, 'Dawning of a New Day' ); ?>>Dawning of a New Day</option><option value="Days One" <?php selected($font_family_post_title, 'Days One' ); ?>>Days One</option><option value="Delius" <?php selected($font_family_post_title, 'Delius' ); ?>>Delius</option><option value="Delius Swash Caps" <?php selected($font_family_post_title, 'Delius Swash Caps' ); ?>>Delius Swash Caps</option><option value="Delius Unicase" <?php selected($font_family_post_title, 'Delius Unicase' ); ?>>Delius Unicase</option><option value="Didact Gothic" <?php selected($font_family_post_title, 'Didact Gothic' ); ?>>Didact Gothic</option><option value="Dorsa" <?php selected($font_family_post_title, 'Dorsa' ); ?>>Dorsa</option><option value="Droid Sans" <?php selected($font_family_post_title, 'Droid Sans' ); ?>>Droid Sans</option><option value="Droid Sans Mono" <?php selected($font_family_post_title, 'Droid Sans Mono' ); ?>>Droid Sans Mono</option><option value="Droid Serif" <?php selected($font_family_post_title, 'Droid Serif' ); ?>>Droid Serif</option><option value="EB Garamond" <?php selected($font_family_post_title, 'EB Garamond' ); ?>>EB Garamond</option><option value="Eater Caps" <?php selected($font_family_post_title, 'Eater Caps' ); ?>>Eater Caps</option><option value="Expletus Sans" <?php selected($font_family_post_title, 'Expletus Sans' ); ?>>Expletus Sans</option><option value="Fanwood Text" <?php selected($font_family_post_title, 'Fanwood Text' ); ?>>Fanwood Text</option><option value="Federant" <?php selected($font_family_post_title, 'Federant' ); ?>>Federant</option><option value="Federo" <?php selected($font_family_post_title, 'Federo' ); ?>>Federo</option><option value="Fontdiner Swanky" <?php selected($font_family_post_title, 'Fontdiner Swanky' ); ?>>Fontdiner Swanky</option><option value="Forum" <?php selected($font_family_post_title, 'Forum' ); ?>>Forum</option><option value="Francois One" <?php selected($font_family_post_title, 'Francois One' ); ?>>Francois One</option><option value="Gentium Book Basic" <?php selected($font_family_post_title, 'Gentium Book Basic' ); ?>>Gentium Book Basic</option><option value="Geo" <?php selected($font_family_post_title, 'Geo' ); ?>>Geo</option><option value="Geostar" <?php selected($font_family_post_title, 'Geostar' ); ?>>Geostar</option><option value="Geostar Fill" <?php selected($font_family_post_title, 'Geostar Fill' ); ?>>Geostar Fill</option><option value="Give You Glory" <?php selected($font_family_post_title, 'Give You Glory' ); ?>>Give You Glory</option><option value="Gloria Hallelujah" <?php selected($font_family_post_title, 'Gloria Hallelujah' ); ?>>Gloria Hallelujah</option><option value="Goblin One" <?php selected($font_family_post_title, 'Goblin One' ); ?>>Goblin One</option><option value="Gochi Hand" <?php selected($font_family_post_title, 'Gochi Hand' ); ?>>Gochi Hand</option><option value="Goudy Bookletter 1911" <?php selected($font_family_post_title, 'Goudy Bookletter 1911' ); ?>>Goudy Bookletter 1911</option><option value="Gravitas One" <?php selected($font_family_post_title, 'Gravitas One' ); ?>>Gravitas One</option><option value="Gruppo" <?php selected($font_family_post_title, 'Gruppo' ); ?>>Gruppo</option><option value="Hammersmith One" <?php selected($font_family_post_title, 'Hammersmith One' ); ?>>Hammersmith One</option><option value="Holtwood One SC" <?php selected($font_family_post_title, 'Holtwood One SC' ); ?>>Holtwood One SC</option><option value="Homemade Apple" <?php selected($font_family_post_title, 'Homemade Apple' ); ?>>Homemade Apple</option><option value="IM Fell DW Pica" <?php selected($font_family_post_title, 'IM Fell DW Pica' ); ?>>IM Fell DW Pica</option><option value="IM Fell English" <?php selected($font_family_post_title, 'IM Fell English' ); ?>>IM Fell English</option><option value="IM Fell English SC" <?php selected($font_family_post_title, 'IM Fell English SC' ); ?>>IM Fell English SC</option><option value="Inconsolata" <?php selected($font_family_post_title, 'Inconsolata' ); ?>>Inconsolata</option><option value="Indie Flower" <?php selected($font_family_post_title, 'Indie Flower' ); ?>>Indie Flower</option><option value="Irish Grover" <?php selected($font_family_post_title, 'Irish Grover' ); ?>>Irish Grover</option><option value="Irish Growler" <?php selected($font_family_post_title, 'Irish Growler' ); ?>>Irish Growler</option><option value="Istok Web" <?php selected($font_family_post_title, 'Istok Web' ); ?>>Istok Web</option><option value="Jockey One" <?php selected($font_family_post_title, 'Jockey One' ); ?>>Jockey One</option><option value="Josefin Sans" <?php selected($font_family_post_title, 'Josefin Sans' ); ?>>Josefin Sans</option><option value="Josefin Slab" <?php selected($font_family_post_title, 'Josefin Slab' ); ?>>Josefin Slab</option><option value="Judson" <?php selected($font_family_post_title, 'Judson' ); ?>>Judson</option><option value="Julee" <?php selected($font_family_post_title, 'Julee' ); ?>>Julee</option><option value="Jura" <?php selected($font_family_post_title, 'Jura' ); ?>>Jura</option><option value="Just Another Hand" <?php selected($font_family_post_title, 'Just Another Hand' ); ?>>Just Another Hand</option><option value="Just Me Again Down Here" <?php selected($font_family_post_title, 'Just Me Again Down Here' ); ?>>Just Me Again Down Here</option><option value="Kameron" <?php selected($font_family_post_title, 'Kameron' ); ?>>Kameron</option><option value="Kelly Slab" <?php selected($font_family_post_title, 'Kelly Slab' ); ?>>Kelly Slab</option><option value="Kenia" <?php selected($font_family_post_title, 'Kenia' ); ?>>Kenia</option><option value="Kranky" <?php selected($font_family_post_title, 'Kranky' ); ?>>Kranky</option><option value="Kreon" <?php selected($font_family_post_title, 'Kreon' ); ?>>Kreon</option><option value="Kristi" <?php selected($font_family_post_title, 'Kristi' ); ?>>Kristi</option><option value="La Belle Aurore" <?php selected($font_family_post_title, 'La Belle Aurore' ); ?>>La Belle Aurore</option><option value="Lato" <?php selected($font_family_post_title, 'Lato' ); ?>>Lato</option><option value="League Script" <?php selected($font_family_post_title, 'League Script' ); ?>>League Script</option><option value="Leckerli One" <?php selected($font_family_post_title, 'Leckerli One' ); ?>>Leckerli One</option><option value="Lekton" <?php selected($font_family_post_title, 'Lekton' ); ?>>Lekton</option><option value="Limelight" <?php selected($font_family_post_title, 'Limelight' ); ?>>Limelight</option><option value="Linden Hill" <?php selected($font_family_post_title, 'Linden Hill' ); ?>>Linden Hill</option><option value="Lobster" <?php selected($font_family_post_title, 'Lobster' ); ?>>Lobster</option><option value="Lobster Two" <?php selected($font_family_post_title, 'Lobster Two' ); ?>>Lobster Two</option><option value="Lora" <?php selected($font_family_post_title, 'Lora' ); ?>>Lora</option><option value="Love Ya Like A Sister" <?php selected($font_family_post_title, 'Love Ya Like A Sister' ); ?>>Love Ya Like A Sister</option><option value="Loved by the King" <?php selected($font_family_post_title, 'Loved by the King' ); ?>>Loved by the King</option><option value="Luckiest Guy" <?php selected($font_family_post_title, 'Luckiest Guy' ); ?>>Luckiest Guy</option><option value="Maiden Orange" <?php selected($font_family_post_title, 'Maiden Orange' ); ?>>Maiden Orange</option>
</select>
</div>

<?php $font_style_post_title = $current_options['spa_post_title_typography']['font_style_post_title'];  ?>	
<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 10px; width: 180px;">
<select id="" name="font_style_post_title" class="select"><option value="normal" <?php selected($font_style_post_title, 'normal' ); ?>>Normal</option><option value="italic" <?php selected($font_style_post_title, 'italic' ); ?>>Italic</option>
</select>								
</div>							

	


		  <div class="form-item">
		  <input type="text"  class="colorwell" name="color_post_title" value="<?php  echo $current_options['spa_post_title_typography']['color_post_title'];  ?>" />
		  </div>
		  <div id="picker_post_title" style="z-index: 100; background:#eee; border:1px solid #ccc; position:absolute; display:none;">
		  </div>  
       </div>
      </div>
</div>

             
<!--code for post Excerpt -->

<div class="option option-checbox">
    <h3><?php _e('Post Excerpt','sis_spa');?></h3>

</div>

<div class="option option-background-upload">
   <div class="section">
        <div class="element">
		 <?php $post_entry_px = $current_options['spa_post_entry_typography']['post_entry_px']; ?>
                             <div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 0px; width: 180px;">
								<select name="post_entry_px" id="pxselect_post_entry" class="select">
								<?php 
								for ($i = 9; $i <= 50; $i++) { 
								?>
<option value="<?php echo $i; ?>" <?php if ( $post_entry_px == $i ) echo selected($post_entry_px, $i ); ?> name=""><?php echo $i; ?></option>
							   <?php } ?>
							   </select>
							</div>   
							
 
							   <div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 10px; width: 180px;">
                               <select  id="main_post_entry" onchange="return change_post_entry()" class="select">
                                  <option value="px"><?php _e('px','sis_spa');?></option>
                              
                                </select>						
							   </div>

<?php $font_family_post_entry = $current_options['spa_post_entry_typography']['font_family_post_entry']; ?>							   		
	<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 0px; width: 180px;">							
<select id="" name="font_family_post_entry" class="select">
<option value="roboto" <?php selected($font_family_post_entry, 'roboto' ); ?>>roboto</option>
<option value="Arial, sans-serif" <?php selected($font_family_post_entry, 'Arial, sans-serif' ); ?>>Arial</option>
<option  value="Verdana, Geneva, sans-serif" <?php selected($font_family_post_entry, 'Verdana, Geneva, sans-serif' ); ?>>Verdana</option><option value="Trebuchet MS, Tahoma, sans-serif" <?php selected($font_family_post_entry, 'Trebuchet MS, Tahoma, sans-serif' ); ?>>Trebuchet</option><option value="Georgia, serif" <?php selected($font_family_post_entry, 'Georgia, serif' ); ?>>Georgia</option><option value="Times New Roman, serif" <?php selected($font_family_post_entry, 'Times New Roman, serif' ); ?>>Times New Roman</option><option value="Tahoma, Geneva, Verdana, sans-serif" <?php selected($font_family_post_entry, 'Tahoma, Geneva, Verdana, sans-serif' ); ?>>Tahoma</option><option value="Palatino, Palatino Linotype, serif" <?php selected($font_family_post_entry, 'Palatino, Palatino Linotype, serif' ); ?>>Palatino</option><option value="Helvetica Neue, Helvetica, sans-serif" <?php selected($font_family_post_entry, 'Helvetica Neue, Helvetica, sans-serif' ); ?>>Helvetica*</option><option value="Calibri, Candara, Segoe, Optima, sans-serif" <?php selected($font_family_post_entry, 'Calibri, Candara, Segoe, Optima, sans-serif' ); ?>>Calibri*</option><option value="Myriad Pro, Myriad, sans-serif" <?php selected($font_family_post_entry, 'Myriad Pro, Myriad, sans-serif' ); ?>>Myriad Pro*</option><option value="Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif" <?php selected($font_family_post_entry, 'Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif' ); ?>>Lucida</option><option value="Arial Black, sans-serif" <?php selected($font_family_post_entry, 'Arial Black, sans-serif' ); ?>>Arial Black</option><option value="Gill Sans, Gill Sans MT, Calibri, sans-serif" <?php selected($font_family_post_entry, 'Gill Sans, Gill Sans MT, Calibri, sans-serif' ); ?>>Gill Sans*</option><option value="Geneva, Tahoma, Verdana, sans-serif" <?php selected($font_family_post_entry, 'Geneva, Tahoma, Verdana, sans-serif' ); ?>>Geneva*</option><option value="Impact, Charcoal, sans-serif" <?php selected($font_family_post_entry, 'Impact, Charcoal, sans-serif' ); ?>>Impact</option><option value="Courier, Courier New, monospace" <?php selected($font_family_post_entry, 'Courier, Courier New, monospace' ); ?>>Courier</option><option value="Abel" <?php selected($font_family_post_entry, 'Abel' ); ?>>Abel</option><option value="Abril Fatface" <?php selected($font_family_post_entry, 'Abril Fatface' ); ?>>Abril Fatface</option><option value="Aclonica" <?php selected($font_family_post_entry, 'Aclonica' ); ?>>Aclonica</option><option value="Actor" <?php selected($font_family_post_entry, 'Actor' ); ?>>Actor</option><option value="Adamina" <?php selected($font_family_post_entry, 'Adamina' ); ?>>Adamina</option><option value="Aldrich" <?php selected($font_family_post_entry, 'Aldrich' ); ?>>Aldrich</option><option value="Alice" <?php selected($font_family_post_entry, 'Alice' ); ?>>Alice</option><option value="Alike" <?php selected($font_family_post_entry, 'Alike' ); ?>>Alike</option><option value="Alike Angular" <?php selected($font_family_post_entry, 'Alike Angular' ); ?>>Alike Angular</option><option value="Allan" <?php selected($font_family_post_entry, 'Allan' ); ?>>Allan</option><option value="Allerta" <?php selected($font_family_post_entry, 'Allerta' ); ?>>Allerta</option><option value="Allerta Stencil" <?php selected($font_family_post_entry, 'Allerta Stencil' ); ?>>Allerta Stencil</option><option value="Amaranth" <?php selected($font_family_post_entry, 'Amaranth' ); ?>>Amaranth</option><option value="Amatic SC" <?php selected($font_family_post_entry, 'Amatic SC' ); ?>>Amatic SC</option><option value="Andada" <?php selected($font_family_post_entry, 'Andada' ); ?>>Andada</option><option value="Andika" <?php selected($font_family_post_entry, 'Andika' ); ?>>Andika</option><option value="Annie Use Your Telescope" <?php selected($font_family_post_entry, 'Annie Use Your Telescope' ); ?>>Annie Use Your Telescope</option><option value="Anonymous Pro" <?php selected($font_family_post_entry, 'Anonymous Pro' ); ?>>Anonymous Pro</option><option value="Antic" <?php selected($font_family_post_entry, 'Antic' ); ?>>Antic</option><option value="Anton" <?php selected($font_family_post_entry, 'Anton' ); ?>>Anton</option><option value="Architects Daughter" <?php selected($font_family_post_entry, 'Architects Daughter' ); ?>>Architects Daughter</option><option value="Arimo" <?php selected($font_family_post_entry, 'Arimo' ); ?>>Arimo</option><option value="Artifika" <?php selected($font_family_post_entry, 'Artifika' ); ?>>Artifika</option><option value=
"Arvo" <?php selected($font_family_post_entry, 'Arvo' ); ?>>Arvo</option><option value="Asset" <?php selected($font_family_post_entry, 'Asset' ); ?>>Asset</option><option value="Astloch" <?php selected($font_family_post_entry, 'Astloch' ); ?>>Astloch</option><option value="Atomic Age" <?php selected($font_family_post_entry, 'Atomic Age' ); ?>>Atomic Age</option><option value="Aubrey" <?php selected($font_family_post_entry, 'Aubrey' ); ?>>Aubrey</option><option value="Bangers" <?php selected($font_family_post_entry, 'Bangers' ); ?>>Bangers</option><option value="Bentham" <?php selected($font_family_post_entry, 'Bentham' ); ?>>Bentham</option><option value="Bevan" <?php selected($font_family_post_entry, 'Bevan' ); ?>>Bevan</option><option value="Bigshot One" <?php selected($font_family_post_entry, 'Bigshot One' ); ?>>Bigshot One</option><option value="Black Ops One" <?php selected($font_family_post_entry, 'Black Ops One' ); ?>>Black Ops One</option><option value="Bowlby One" <?php selected($font_family_post_entry, 'Bowlby One' ); ?>>Bowlby One</option><option value="Bowlby One SC" <?php selected($font_family_post_entry, 'Bowlby One SC' ); ?>>Bowlby One SC</option><option value="Brawler" <?php selected($font_family_post_entry, 'Brawler' ); ?>>Brawler</option><option value="Butcherman Caps" <?php selected($font_family_post_entry, 'Butcherman Caps' ); ?>>Butcherman Caps</option><option value="Cabin" <?php selected($font_family_post_entry, 'Cabin' ); ?>>Cabin</option><option value="Cabin Sketch" <?php selected($font_family_post_entry, 'Cabin Sketch' ); ?>>Cabin Sketch</option><option value="Cabin Sketch" <?php selected($font_family_post_entry, 'Cabin Sketch' ); ?>>Cabin Sketch</option><option value="Calligraffitti" <?php selected($font_family_post_entry, 'Calligraffitti' ); ?>>Calligraffitti</option><option value="Candal" <?php selected($font_family_post_entry, 'Candal' ); ?>>Candal</option><option value="Cantarell" <?php selected($font_family_post_entry, 'Cantarell' ); ?>>Cantarell</option><option value="Cardo" <?php selected($font_family_post_entry, 'Cardo' ); ?>>Cardo</option><option value="Carme" <?php selected($font_family_post_entry, 'Carme' ); ?>>Carme</option><option value="Carter One" <?php selected($font_family_post_entry, 'Carter One' ); ?>>Carter One</option><option value="Caudex" <?php selected($font_family_post_entry, 'Caudex' ); ?>>Caudex</option><option value="Cedarville Cursive" <?php selected($font_family_post_entry, 'Cedarville Cursive' ); ?>>Cedarville Cursive</option><option value="Changa One" <?php selected($font_family_post_entry, 'Changa One' ); ?>>Changa One</option><option value="Cherry Cream Soda" <?php selected($font_family_post_entry, 'Cherry Cream Soda' ); ?>>Cherry Cream Soda</option><option value="Chewy" <?php selected($font_family_post_entry, 'Chewy' ); ?>>Chewy</option><option value="Chivo" <?php selected($font_family_post_entry, 'Chivo' ); ?>>Chivo</option><option value="Coda" <?php selected($font_family_post_entry, 'Coda' ); ?>>Coda</option><option value="Comfortaa" <?php selected($font_family_post_entry, 'Comfortaa' ); ?>>Comfortaa</option><option value="Coming Soon" <?php selected($font_family_post_entry, 'Coming Soon' ); ?>>Coming Soon</option><option value="Contrail One" <?php selected($font_family_post_entry, 'Contrail One' ); ?>>Contrail One</option><option value="Copse" <?php selected($font_family_post_entry, 'Copse' ); ?>>Copse</option><option value="Corben" <?php selected($font_family_post_entry, 'Corben' ); ?>>Corben</option><option value="Corben" <?php selected($font_family_post_entry, 'Corben' ); ?>>Corben</option><option value="Cousine" <?php selected($font_family_post_entry, 'Cousine' ); ?>>Cousine</option><option value="Coustard" <?php selected($font_family_post_entry, 'Coustard' ); ?>>Coustard</option><option value="Covered By Your Grace" <?php selected($font_family_post_entry, 'Covered By Your Grace' ); ?>>Covered By Your Grace</option><option value="Crafty Girls" <?php selected($font_family_post_entry, 'Crafty Girls' ); ?>>Crafty Girls</option><option value="Creepster Caps" <?php selected($font_family_post_entry, 'Creepster Caps' ); ?>>Creepster Caps</option><option value="Crimson Text" <?php selected($font_family_post_entry, 'Crimson Text' ); ?>>Crimson Text</option><option value="Crushed" <?php selected($font_family_post_entry, 'Crushed' ); ?>>Crushed</option><option value="Cuprum" <?php selected($font_family_post_entry, 'Cuprum' ); ?>>Cuprum</option><option value="Damion" <?php selected($font_family_post_entry, 'Damion' ); ?>>Damion</option><option value="Dancing Script" <?php selected($font_family_post_entry, 'Dancing Script' ); ?>>Dancing Script</option><option value="Dawning of a New Day" <?php selected($font_family_post_entry, 'Dawning of a New Day' ); ?>>Dawning of a New Day</option><option value="Days One" <?php selected($font_family_post_entry, 'Days One' ); ?>>Days One</option><option value="Delius" <?php selected($font_family_post_entry, 'Delius' ); ?>>Delius</option><option value="Delius Swash Caps" <?php selected($font_family_post_entry, 'Delius Swash Caps' ); ?>>Delius Swash Caps</option><option value="Delius Unicase" <?php selected($font_family_post_entry, 'Delius Unicase' ); ?>>Delius Unicase</option><option value="Didact Gothic" <?php selected($font_family_post_entry, 'Didact Gothic' ); ?>>Didact Gothic</option><option value="Dorsa" <?php selected($font_family_post_entry, 'Dorsa' ); ?>>Dorsa</option><option value="Droid Sans" <?php selected($font_family_post_entry, 'Droid Sans' ); ?>>Droid Sans</option><option value="Droid Sans Mono" <?php selected($font_family_post_entry, 'Droid Sans Mono' ); ?>>Droid Sans Mono</option><option value="Droid Serif" <?php selected($font_family_post_entry, 'Droid Serif' ); ?>>Droid Serif</option><option value="EB Garamond" <?php selected($font_family_post_entry, 'EB Garamond' ); ?>>EB Garamond</option><option value="Eater Caps" <?php selected($font_family_post_entry, 'Eater Caps' ); ?>>Eater Caps</option><option value="Expletus Sans" <?php selected($font_family_post_entry, 'Expletus Sans' ); ?>>Expletus Sans</option><option value="Fanwood Text" <?php selected($font_family_post_entry, 'Fanwood Text' ); ?>>Fanwood Text</option><option value="Federant" <?php selected($font_family_post_entry, 'Federant' ); ?>>Federant</option><option value="Federo" <?php selected($font_family_post_entry, 'Federo' ); ?>>Federo</option><option value="Fontdiner Swanky" <?php selected($font_family_post_entry, 'Fontdiner Swanky' ); ?>>Fontdiner Swanky</option><option value="Forum" <?php selected($font_family_post_entry, 'Forum' ); ?>>Forum</option><option value="Francois One" <?php selected($font_family_post_entry, 'Francois One' ); ?>>Francois One</option><option value="Gentium Book Basic" <?php selected($font_family_post_entry, 'Gentium Book Basic' ); ?>>Gentium Book Basic</option><option value="Geo" <?php selected($font_family_post_entry, 'Geo' ); ?>>Geo</option><option value="Geostar" <?php selected($font_family_post_entry, 'Geostar' ); ?>>Geostar</option><option value="Geostar Fill" <?php selected($font_family_post_entry, 'Geostar Fill' ); ?>>Geostar Fill</option><option value="Give You Glory" <?php selected($font_family_post_entry, 'Give You Glory' ); ?>>Give You Glory</option><option value="Gloria Hallelujah" <?php selected($font_family_post_entry, 'Gloria Hallelujah' ); ?>>Gloria Hallelujah</option><option value="Goblin One" <?php selected($font_family_post_entry, 'Goblin One' ); ?>>Goblin One</option><option value="Gochi Hand" <?php selected($font_family_post_entry, 'Gochi Hand' ); ?>>Gochi Hand</option><option value="Goudy Bookletter 1911" <?php selected($font_family_post_entry, 'Goudy Bookletter 1911' ); ?>>Goudy Bookletter 1911</option><option value="Gravitas One" <?php selected($font_family_post_entry, 'Gravitas One' ); ?>>Gravitas One</option><option value="Gruppo" <?php selected($font_family_post_entry, 'Gruppo' ); ?>>Gruppo</option><option value="Hammersmith One" <?php selected($font_family_post_entry, 'Hammersmith One' ); ?>>Hammersmith One</option><option value="Holtwood One SC" <?php selected($font_family_post_entry, 'Holtwood One SC' ); ?>>Holtwood One SC</option><option value="Homemade Apple" <?php selected($font_family_post_entry, 'Homemade Apple' ); ?>>Homemade Apple</option><option value="IM Fell DW Pica" <?php selected($font_family_post_entry, 'IM Fell DW Pica' ); ?>>IM Fell DW Pica</option><option value="IM Fell English" <?php selected($font_family_post_entry, 'IM Fell English' ); ?>>IM Fell English</option><option value="IM Fell English SC" <?php selected($font_family_post_entry, 'IM Fell English SC' ); ?>>IM Fell English SC</option><option value="Inconsolata" <?php selected($font_family_post_entry, 'Inconsolata' ); ?>>Inconsolata</option><option value="Indie Flower" <?php selected($font_family_post_entry, 'Indie Flower' ); ?>>Indie Flower</option><option value="Irish Grover" <?php selected($font_family_post_entry, 'Irish Grover' ); ?>>Irish Grover</option><option value="Irish Growler" <?php selected($font_family_post_entry, 'Irish Growler' ); ?>>Irish Growler</option><option value="Istok Web" <?php selected($font_family_post_entry, 'Istok Web' ); ?>>Istok Web</option><option value="Jockey One" <?php selected($font_family_post_entry, 'Jockey One' ); ?>>Jockey One</option><option value="Josefin Sans" <?php selected($font_family_post_entry, 'Josefin Sans' ); ?>>Josefin Sans</option><option value="Josefin Slab" <?php selected($font_family_post_entry, 'Josefin Slab' ); ?>>Josefin Slab</option><option value="Judson" <?php selected($font_family_post_entry, 'Judson' ); ?>>Judson</option><option value="Julee" <?php selected($font_family_post_entry, 'Julee' ); ?>>Julee</option><option value="Jura" <?php selected($font_family_post_entry, 'Jura' ); ?>>Jura</option><option value="Just Another Hand" <?php selected($font_family_post_entry, 'Just Another Hand' ); ?>>Just Another Hand</option><option value="Just Me Again Down Here" <?php selected($font_family_post_entry, 'Just Me Again Down Here' ); ?>>Just Me Again Down Here</option><option value="Kameron" <?php selected($font_family_post_entry, 'Kameron' ); ?>>Kameron</option><option value="Kelly Slab" <?php selected($font_family_post_entry, 'Kelly Slab' ); ?>>Kelly Slab</option><option value="Kenia" <?php selected($font_family_post_entry, 'Kenia' ); ?>>Kenia</option><option value="Kranky" <?php selected($font_family_post_entry, 'Kranky' ); ?>>Kranky</option><option value="Kreon" <?php selected($font_family_post_entry, 'Kreon' ); ?>>Kreon</option><option value="Kristi" <?php selected($font_family_post_entry, 'Kristi' ); ?>>Kristi</option><option value="La Belle Aurore" <?php selected($font_family_post_entry, 'La Belle Aurore' ); ?>>La Belle Aurore</option><option value="Lato" <?php selected($font_family_post_entry, 'Lato' ); ?>>Lato</option><option value="League Script" <?php selected($font_family_post_entry, 'League Script' ); ?>>League Script</option><option value="Leckerli One" <?php selected($font_family_post_entry, 'Leckerli One' ); ?>>Leckerli One</option><option value="Lekton" <?php selected($font_family_post_entry, 'Lekton' ); ?>>Lekton</option><option value="Limelight" <?php selected($font_family_post_entry, 'Limelight' ); ?>>Limelight</option><option value="Linden Hill" <?php selected($font_family_post_entry, 'Linden Hill' ); ?>>Linden Hill</option><option value="Lobster" <?php selected($font_family_post_entry, 'Lobster' ); ?>>Lobster</option><option value="Lobster Two" <?php selected($font_family_post_entry, 'Lobster Two' ); ?>>Lobster Two</option><option value="Lora" <?php selected($font_family_post_entry, 'Lora' ); ?>>Lora</option><option value="Love Ya Like A Sister" <?php selected($font_family_post_entry, 'Love Ya Like A Sister' ); ?>>Love Ya Like A Sister</option><option value="Loved by the King" <?php selected($font_family_post_entry, 'Loved by the King' ); ?>>Loved by the King</option><option value="Luckiest Guy" <?php selected($font_family_post_entry, 'Luckiest Guy' ); ?>>Luckiest Guy</option><option value="Maiden Orange" <?php selected($font_family_post_entry, 'Maiden Orange' ); ?>>Maiden Orange</option>
</select>
</div>

<?php $font_style_post_entry = $current_options['spa_post_entry_typography']['font_style_post_entry']; ?>
<div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 10px; width: 180px;">
<select id="" name="font_style_post_entry" class="select"><option value="normal" <?php selected($font_style_post_entry, 'normal' ); ?>>Normal</option><option  value="italic"  <?php selected($font_style_post_entry, 'italic' ); ?>>Italic</option></select>								
</div>							
							
 

  <div class="form-item"><input type="text"  class="colorwell" name="color_post_entry" value="<?php echo $current_options['spa_post_entry_typography']['color_post_entry']; ?>" /></div>
<div id="picker_post_entry" style="z-index: 100; background:#eee; border:1px solid #ccc; position:absolute; display:none;"></div>
            
            
       </div>
      </div>
</div>



<!--code for post meta -->
<div class="option option-checbox">
    <h3><?php _("Post Meta",'sis_spa');?></h3>

</div>

<div class="option option-background-upload">
   <div class="section">
        <div class="element">
          
<?php $post_meta_px = $current_options['spa_post_meta_typography']['post_meta_px'];  ?>
                                <div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 0px; width: 180px;">								
								<select name="post_meta_px" id="pxselect_post_meta" class="select">
								<?php 
								for ($i = 9; $i <= 100; $i++) { 
								?>
<option value="<?php echo $i; ?>" <?php if ( $post_meta_px == $i ) echo selected($post_meta_px, $i ); ?> name=""><?php echo $i; ?></option>
							   <?php } ?>
							   </select>
							   </div>
							
							
							  <div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 10px; width: 180px;">  
                               <select  id="main_post_meta" onchange="return change_post_meta()" class="select">
                                  <option value="px"><?php _e('px','sis_spa');?></option>
                                </select>
                              </div>

<?php $font_family_post_meta =$current_options['spa_post_meta_typography']['font_family_post_meta'];  ?>							   

 <div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 0px; width: 180px;">								
<select  name="font_family_post_meta" class="select">
<option value="roboto" <?php selected($font_family_post_meta, 'roboto' ); ?>>roboto</option>
<option value="Arial, sans-serif" <?php selected($font_family_post_meta, 'Arial, sans-serif' ); ?>>Arial</option>
<option  value="Verdana, Geneva, sans-serif" <?php selected($font_family_post_meta, 'Verdana, Geneva, sans-serif' ); ?>>Verdana</option>
<option value="Trebuchet MS, Tahoma, sans-serif" <?php selected($font_family_post_meta, 'Trebuchet MS, Tahoma, sans-serif' ); ?>>Trebuchet</option>
<option value="Georgia, serif" <?php selected($font_family_post_meta, 'Georgia, serif' ); ?>>Georgia</option>
<option value="Times New Roman, serif" <?php selected($font_family_post_meta, 'Times New Roman, serif' ); ?>>Times New Roman</option>
<option value="Tahoma, Geneva, Verdana, sans-serif" <?php selected($font_family_post_meta, 'Tahoma, Geneva, Verdana, sans-serif' ); ?>>Tahoma</option>
<option value="Palatino Linotype" <?php selected($font_family_post_meta, 'Palatino Linotype' ); ?>>Palatino</option>
<option value="Helvetica Neue, Helvetica, sans-serif" <?php selected($font_family_post_meta, 'Helvetica Neue, Helvetica, sans-serif' ); ?>>Helvetica*</option>
<option value="Calibri, Candara, Segoe, Optima, sans-serif" <?php selected($font_family_post_meta, 'Calibri, Candara, Segoe, Optima, sans-serif' ); ?>>Calibri*</option>
<option value="Myriad Pro, Myriad, sans-serif" <?php selected($font_family_post_meta, 'Myriad Pro, Myriad, sans-serif' ); ?>>Myriad Pro*</option>
<option value="Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif" <?php selected($font_family_post_meta, 'Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif' ); ?>>Lucida</option>
<option value="Arial Black, sans-serif" <?php selected($font_family_post_meta, 'Arial Black, sans-serif' ); ?>>Arial Black</option>
<option value="Gill Sans, Gill Sans MT, Calibri, sans-serif" <?php selected($font_family_post_meta, 'Gill Sans, Gill Sans MT, Calibri, sans-serif' ); ?>>Gill Sans*</option>
<option value="Geneva, Tahoma, Verdana, sans-serif" <?php selected($font_family_post_meta, 'Geneva, Tahoma, Verdana, sans-serif' ); ?>>Geneva*</option>
<option value="Impact, Charcoal, sans-serif" <?php selected($font_family_post_meta, 'Impact, Charcoal, sans-serif' ); ?>>Impact</option>
<option value="Courier, Courier New, monospace" <?php selected($font_family_post_meta, 'Courier, Courier New, monospace' ); ?>>Courier</option>
<option value="Abel" <?php selected($font_family_post_meta, 'Abel' ); ?>>Abel</option>
<option value="Abril Fatface" <?php selected($font_family_post_meta, 'Abril Fatface' ); ?>>Abril Fatface</option>
<option value="Aclonica" <?php selected($font_family_post_meta, 'Aclonica' ); ?>>Aclonica</option>
<option value="Actor" <?php selected($font_family_post_meta, 'Actor' ); ?>>Actor</option>
<option value="Adamina" <?php selected($font_family_post_meta, 'Adamina' ); ?>>Adamina</option>
<option value="Aldrich" <?php selected($font_family_post_meta, 'Aldrich' ); ?>>Aldrich</option>
<option value="Alice" <?php selected($font_family_post_meta, 'Alice' ); ?>>Alice</option>
<option value="Alike" <?php selected($font_family_post_meta, 'Alike' ); ?>>Alike</option>
<option value="Alike Angular" <?php selected($font_family_post_meta, 'Alike Angular' ); ?>>Alike Angular</option>
<option value="Allan" <?php selected($font_family_post_meta, 'Allan' ); ?>>Allan</option>
<option value="Allerta" <?php selected($font_family_post_meta, 'Allerta' ); ?>>Allerta</option>
<option value="Allerta Stencil" <?php selected($font_family_post_meta, 'Allerta Stencil' ); ?>>Allerta Stencil</option>
<option value="Amaranth" <?php selected($font_family_post_meta, 'Amaranth' ); ?>>Amaranth</option>
<option value="Amatic SC" <?php selected($font_family_post_meta, 'Amatic SC' ); ?>>Amatic SC</option>
<option value="Andada" <?php selected($font_family_post_meta, 'Andada' ); ?>>Andada</option>
<option value="Andika" <?php selected($font_family_post_meta, 'Andika' ); ?>>Andika</option>
<option value="Annie Use Your Telescope" <?php selected($font_family_post_meta, 'Annie Use Your Telescope' ); ?>>Annie Use Your Telescope</option>
<option value="Anonymous Pro" <?php selected($font_family_post_meta, 'Anonymous Pro' ); ?>>Anonymous Pro</option>
<option value="Antic" <?php selected($font_family_post_meta, 'Antic' ); ?>>Antic</option>
<option value="Anton" <?php selected($font_family_post_meta, 'Anton' ); ?>>Anton</option>
<option value="Architects Daughter" <?php selected($font_family_post_meta, 'Architects Daughter' ); ?>>Architects Daughter</option>
<option value="Arimo" <?php selected($font_family_post_meta, 'Arimo' ); ?>>Arimo</option>
<option value="Artifika" <?php selected($font_family_post_meta, 'Artifika' ); ?>>Artifika</option>
<option value="Arvo" <?php selected($font_family_post_meta, 'Arvo' ); ?>>Arvo</option>
<option value="Asset" <?php selected($font_family_post_meta, 'Asset' ); ?>>Asset</option>
<option value="Astloch" <?php selected($font_family_post_meta, 'Astloch' ); ?>>Astloch</option>
<option value="Atomic Age" <?php selected($font_family_post_meta, 'Atomic Age' ); ?>>Atomic Age</option>
<option value="Aubrey" <?php selected($font_family_post_meta, 'Aubrey' ); ?>>Aubrey</option>
<option value="Bangers" <?php selected($font_family_post_meta, 'Bangers' ); ?>>Bangers</option>
<option value="Bentham" <?php selected($font_family_post_meta, 'Bentham' ); ?>>Bentham</option>
<option value="Bevan" <?php selected($font_family_post_meta, 'Bevan' ); ?>>Bevan</option>
<option value="Bigshot One" <?php selected($font_family_post_meta, 'Bigshot One' ); ?>>Bigshot One</option>
<option value="Black Ops One" <?php selected($font_family_post_meta, 'Black Ops One' ); ?>>Black Ops One</option>
<option value="Bowlby One" <?php selected($font_family_post_meta, 'Bowlby One' ); ?>>Bowlby One</option>
<option value="Bowlby One SC" <?php selected($font_family_post_meta, 'Bowlby One SC' ); ?>>Bowlby One SC</option>
<option value="Brawler" <?php selected($font_family_post_meta, 'Brawler' ); ?>>Brawler</option>
<option value="Butcherman Caps" <?php selected($font_family_post_meta, 'Butcherman Caps' ); ?>>Butcherman Caps</option>
<option value="Cabin" <?php selected($font_family_post_meta, 'Cabin' ); ?>>Cabin</option>
<option value="Cabin Sketch" <?php selected($font_family_post_meta, 'Cabin Sketch' ); ?>>Cabin Sketch</option>
<option value="Cabin Sketch" <?php selected($font_family_post_meta, 'Cabin Sketch' ); ?>>Cabin Sketch</option>
<option value="Calligraffitti" <?php selected($font_family_post_meta, 'Calligraffitti' ); ?>>Calligraffitti</option>
<option value="Candal" <?php selected($font_family_post_meta, 'Candal' ); ?>>Candal</option>
<option value="Cantarell" <?php selected($font_family_post_meta, 'Cantarell' ); ?>>Cantarell</option>
<option value="Cardo" <?php selected($font_family_post_meta, 'Cardo' ); ?>>Cardo</option>
<option value="Carme" <?php selected($font_family_post_meta, 'Carme' ); ?>>Carme</option>
<option value="Carter One" <?php selected($font_family_post_meta, 'Carter One' ); ?>>Carter One</option>
<option value="Caudex" <?php selected($font_family_post_meta, 'Caudex' ); ?>>Caudex</option>
<option value="Cedarville Cursive" <?php selected($font_family_post_meta, 'Cedarville Cursive' ); ?>>Cedarville Cursive</option>
<option value="Changa One" <?php selected($font_family_post_meta, 'Changa One' ); ?>>Changa One</option>
<option value="Cherry Cream Soda" <?php selected($font_family_post_meta, 'Cherry Cream Soda' ); ?>>Cherry Cream Soda</option>
<option value="Chewy" <?php selected($font_family_post_meta, 'Chewy' ); ?>>Chewy</option>
<option value="Chivo" <?php selected($font_family_post_meta, 'Chivo' ); ?>>Chivo</option>
<option value="Coda" <?php selected($font_family_post_meta, 'Coda' ); ?>>Coda</option>
<option value="Comfortaa" <?php selected($font_family_post_meta, 'Comfortaa' ); ?>>Comfortaa</option>
<option value="Coming Soon" <?php selected($font_family_post_meta, 'Coming Soon' ); ?>>Coming Soon</option>
<option value="Contrail One" <?php selected($font_family_post_meta, 'Contrail One' ); ?>>Contrail One</option>
<option value="Copse" <?php selected($font_family_post_meta, 'Copse' ); ?>>Copse</option>
<option value="Corben" <?php selected($font_family_post_meta, 'Corben' ); ?>>Corben</option>
<option value="Corben" <?php selected($font_family_post_meta, 'Corben' ); ?>>Corben</option>
<option value="Cousine" <?php selected($font_family_post_meta, 'Cousine' ); ?>>Cousine</option>
<option value="Coustard" <?php selected($font_family_post_meta, 'Coustard' ); ?>>Coustard</option>
<option value="Covered By Your Grace" <?php selected($font_family_post_meta, 'Covered By Your Grace' ); ?>>Covered By Your Grace</option>
<option value="Crafty Girls" <?php selected($font_family_post_meta, 'Crafty Girls' ); ?>>Crafty Girls</option>
<option value="Creepster Caps" <?php selected($font_family_post_meta, 'Creepster Caps' ); ?>>Creepster Caps</option>
<option value="Crimson Text" <?php selected($font_family_post_meta, 'Crimson Text' ); ?>>Crimson Text</option>
<option value="Crushed" <?php selected($font_family_post_meta, 'Crushed' ); ?>>Crushed</option>
<option value="Cuprum" <?php selected($font_family_post_meta, 'Cuprum' ); ?>>Cuprum</option>
<option value="Damion" <?php selected($font_family_post_meta, 'Damion' ); ?>>Damion</option>
<option value="Dancing Script" <?php selected($font_family_post_meta, 'Dancing Script' ); ?>>Dancing Script</option>
<option value="Dawning of a New Day" <?php selected($font_family_post_meta, 'Dawning of a New Day' ); ?>>Dawning of a New Day</option>
<option value="Days One" <?php selected($font_family_post_meta, 'Days One' ); ?>>Days One</option>
<option value="Delius" <?php selected($font_family_post_meta, 'Delius' ); ?>>Delius</option>
<option value="Delius Swash Caps" <?php selected($font_family_post_meta, 'Delius Swash Caps' ); ?>>Delius Swash Caps</option>
<option value="Delius Unicase" <?php selected($font_family_post_meta, 'Delius Unicase' ); ?>>Delius Unicase</option>
<option value="Didact Gothic" <?php selected($font_family_post_meta, 'Didact Gothic' ); ?>>Didact Gothic</option>
<option value="Dorsa" <?php selected($font_family_post_meta, 'Dorsa' ); ?>>Dorsa</option>
<option value="Droid Sans" <?php selected($font_family_post_meta, 'Droid Sans' ); ?>>Droid Sans</option>
<option value="Droid Sans Mono" <?php selected($font_family_post_meta, 'Droid Sans Mono' ); ?>>Droid Sans Mono</option>
<option value="Droid Serif" <?php selected($font_family_post_meta, 'Droid Serif' ); ?>>Droid Serif</option>
<option value="EB Garamond" <?php selected($font_family_post_meta, 'EB Garamond' ); ?>>EB Garamond</option>
<option value="Eater Caps" <?php selected($font_family_post_meta, 'Eater Caps' ); ?>>Eater Caps</option>
<option value="Expletus Sans" <?php selected($font_family_post_meta, 'Expletus Sans' ); ?>>Expletus Sans</option>
<option value="Fanwood Text" <?php selected($font_family_post_meta, 'Fanwood Text' ); ?>>Fanwood Text</option>
<option value="Federant" <?php selected($font_family_post_meta, 'Federant' ); ?>>Federant</option>
<option value="Federo" <?php selected($font_family_post_meta, 'Federo' ); ?>>Federo</option>
<option value="Fontdiner Swanky" <?php selected($font_family_post_meta, 'Fontdiner Swanky' ); ?>>Fontdiner Swanky</option>
<option value="Forum" <?php selected($font_family_post_meta, 'Forum' ); ?>>Forum</option>
<option value="Francois One" <?php selected($font_family_post_meta, 'Francois One' ); ?>>Francois One</option>
<option value="Gentium Book Basic" <?php selected($font_family_post_meta, 'Gentium Book Basic' ); ?>>Gentium Book Basic</option>
<option value="Geo" <?php selected($font_family_post_meta, 'Geo' ); ?>>Geo</option>
<option value="Geostar" <?php selected($font_family_post_meta, 'Geostar' ); ?>>Geostar</option>
<option value="Geostar Fill" <?php selected($font_family_post_meta, 'Geostar Fill' ); ?>>Geostar Fill</option>
<option value="Give You Glory" <?php selected($font_family_post_meta, 'Give You Glory' ); ?>>Give You Glory</option>
<option value="Gloria Hallelujah" <?php selected($font_family_post_meta, 'Gloria Hallelujah' ); ?>>Gloria Hallelujah</option>
<option value="Goblin One" <?php selected($font_family_post_meta, 'Goblin One' ); ?>>Goblin One</option>
<option value="Gochi Hand" <?php selected($font_family_post_meta, 'Gochi Hand' ); ?>>Gochi Hand</option>
option value="Goudy Bookletter 1911" <?php selected($font_family_post_meta, 'Goudy Bookletter 1911' ); ?>>Goudy Bookletter 1911</option>
<option value="Gravitas One" <?php selected($font_family_post_meta, 'Gravitas One' ); ?>>Gravitas One</option>
<option value="Gruppo" <?php selected($font_family_post_meta, 'Gruppo' ); ?>>Gruppo</option>
<option value="Hammersmith One" <?php selected($font_family_post_meta, 'Hammersmith One' ); ?>>Hammersmith One</option>
<option value="Holtwood One SC" <?php selected($font_family_post_meta, 'Holtwood One SC' ); ?>>Holtwood One SC</option>
<option value="Homemade Apple" <?php selected($font_family_post_meta, 'Homemade Apple' ); ?>>Homemade Apple</option>
<option value="IM Fell DW Pica" <?php selected($font_family_post_meta, 'IM Fell DW Pica' ); ?>>IM Fell DW Pica</option>
<option value="IM Fell English" <?php selected($font_family_post_meta, 'IM Fell English' ); ?>>IM Fell English</option>
<option value="IM Fell English SC" <?php selected($font_family_post_meta, 'IM Fell English SC' ); ?>>IM Fell English SC</option>
<option value="Inconsolata" <?php selected($font_family_post_meta, 'Inconsolata' ); ?>>Inconsolata</option>
<option value="Indie Flower" <?php selected($font_family_post_meta, 'Indie Flower' ); ?>>Indie Flower</option>
<option value="Irish Grover" <?php selected($font_family_post_meta, 'Irish Grover' ); ?>>Irish Grover</option>
<option value="Irish Growler" <?php selected($font_family_post_meta, 'Irish Growler' ); ?>>Irish Growler</option>
<option value="Istok Web" <?php selected($font_family_post_meta, 'Istok Web' ); ?>>Istok Web</option>
<option value="Jockey One" <?php selected($font_family_post_meta, 'Jockey One' ); ?>>Jockey One</option>
<option value="Josefin Sans" <?php selected($font_family_post_meta, 'Josefin Sans' ); ?>>Josefin Sans</option>
<option value="Josefin Slab" <?php selected($font_family_post_meta, 'Josefin Slab' ); ?>>Josefin Slab</option>
<option value="Judson" <?php selected($font_family_post_meta, 'Judson' ); ?>>Judson</option>
<option value="Julee" <?php selected($font_family_post_meta, 'Julee' ); ?>>Julee</option>
<option value="Jura" <?php selected($font_family_post_meta, 'Jura' ); ?>>Jura</option>
<option value="Just Another Hand" <?php selected($font_family_post_meta, 'Just Another Hand' ); ?>>Just Another Hand</option>
<option value="Just Me Again Down Here" <?php selected($font_family_post_meta, 'Just Me Again Down Here' ); ?>>Just Me Again Down Here</option>
<option value="Kameron" <?php selected($font_family_post_meta, 'Kameron' ); ?>>Kameron</option>
<option value="Kelly Slab" <?php selected($font_family_post_meta, 'Kelly Slab' ); ?>>Kelly Slab</option>
<option value="Kenia" <?php selected($font_family_post_meta, 'Kenia' ); ?>>Kenia</option>
<option value="Kranky" <?php selected($font_family_post_meta, 'Kranky' ); ?>>Kranky</option>
<option value="Kreon" <?php selected($font_family_post_meta, 'Kreon' ); ?>>Kreon</option>
<option value="Kristi" <?php selected($font_family_post_meta, 'Kristi' ); ?>>Kristi</option>
<option value="La Belle Aurore" <?php selected($font_family_post_meta, 'La Belle Aurore' ); ?>>La Belle Aurore</option>
<option value="Lato" <?php selected($font_family_post_meta, 'Lato' ); ?>>Lato</option>
<option value="League Script" <?php selected($font_family_post_meta, 'League Script' ); ?>>League Script</option>
<option value="Leckerli One" <?php selected($font_family_post_meta, 'Leckerli One' ); ?>>Leckerli One</option>
<option value="Lekton" <?php selected($font_family_post_meta, 'Lekton' ); ?>>Lekton</option>
<option value="Limelight" <?php selected($font_family_post_meta, 'Limelight' ); ?>>Limelight</option>
<option value="Linden Hill, serif" <?php selected($font_family_post_meta, 'Linden Hill, serif' ); ?>>Linden Hill</option>
<option value="Lobster" <?php selected($font_family_post_meta, 'Lobster' ); ?>>Lobster</option>
<option value="Lobster Two" <?php selected($font_family_post_meta, 'Lobster Two' ); ?>>Lobster Two</option>
<option value="Lora" <?php selected($font_family_post_meta, 'Lora' ); ?>>Lora</option>
<option value="Love Ya Like A Sister" <?php selected($font_family_post_meta, 'Love Ya Like A Sister' ); ?>>Love Ya Like A Sister</option>
<option value="Loved by the King" <?php selected($font_family_post_meta, 'Loved by the King' ); ?>>Loved by the King</option>
<option value="Luckiest Guy" <?php selected($font_family_post_meta, 'Luckiest Guy' ); ?>>Luckiest Guy</option>
<option value="Maiden Orange" <?php selected($font_family_post_meta, 'Maiden Orange' ); ?>>Maiden Orange</option>
</select>
</div>

<?php $font_style_post_meta = $current_options['spa_post_meta_typography']['font_style_post_meta']; ?>
 <div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 10px; width: 180px;">
<select id="" name="font_style_post_meta" class="select"><option value="normal" <?php selected($font_style_post_meta, 'normal' ); ?>>Normal</option><option  value="italic"  <?php selected($font_style_post_meta, 'italic' ); ?>>Italic</option></select>								
</div>

 <div class="form-item"><input type="text"  class="colorwell" name="color_post_meta" value="<?php echo$current_options['spa_post_meta_typography']['color_post_meta'];?>" /></div>
<div id="picker_post_meta" style="z-index: 100; background:#eee; border:1px solid #ccc; position:absolute; display:none;"></div>
            
            
       </div>
      </div>
</div>


<!--code for sidebar widget title-->
<div class="option option-checbox">
    <h3><?php _e('Sidebar Widgte Title','sis_spa');?></h3>

</div>

<div class="option option-background-upload">
   <div class="section">
        <div class="element">
                                <?php $sidebar_widget_titles_px =$current_options['spa_sidebar_widget_titles']['sidebar_widget_titles_px'];  ?>
           	                   <div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 0px; width: 180px;">
								<select name="sidebar_widget_titles_px" id="pxselect_sidebar_widget_titles"  class="select">
								<?php 
								for ($i = 9; $i <= 100; $i++) { 
								?>
<option value="<?php echo $i; ?>" <?php if ( $sidebar_widget_titles_px == $i ) echo selected($sidebar_widget_titles_px, $i ); ?> name=""><?php echo $i; ?></option>
							   <?php } ?>
							   </select>
						    </div>
						
							 <div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 10px; width: 180px;">
                               <select  id="main_sidebar_widget_titles" onchange="return change_sidebar_widget_titles()" class="select">
                                  <option value="px"><?php _e('px','sis_spa');?></option>
                                  <!--<option value="em">em</option>-->
                                </select>
							   </div>  
				
<?php $font_family_sidebar_widget_titles = $current_options['spa_sidebar_widget_titles']['font_family_sidebar_widget_titles'];?>							   
	 <div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 0px; width: 180px;">							
<select id=""  name="font_family_sidebar_widget_titles" class="select">
<option value="Roboto" <?php selected($font_family_sidebar_widget_titles, 'roboto' ); ?>>Roboto</option>
<option value="Arial, sans-serif" <?php selected($font_family_sidebar_widget_titles, 'Arial, sans-serif' ); ?>>Arial</option>

<option  value="Verdana, Geneva, sans-serif" <?php selected($font_family_sidebar_widget_titles, 'Verdana, Geneva, sans-serif' ); ?>>Verdana</option><option value="Trebuchet MS, Tahoma, sans-serif" <?php selected($font_family_sidebar_widget_titles, 'Trebuchet MS, Tahoma, sans-serif' ); ?>>Trebuchet</option><option value="Georgia, serif" <?php selected($font_family_sidebar_widget_titles, 'Georgia, serif' ); ?>>Georgia</option><option value="Times New Roman, serif" <?php selected($font_family_sidebar_widget_titles, 'Times New Roman, serif' ); ?>>Times New Roman</option><option value="Tahoma, Geneva, Verdana, sans-serif" <?php selected($font_family_sidebar_widget_titles, 'Tahoma, Geneva, Verdana, sans-serif' ); ?>>Tahoma</option><option value="Palatino, Palatino Linotype, serif" <?php selected($font_family_sidebar_widget_titles, 'Palatino, Palatino Linotype, serif' ); ?>>Palatino</option><option value="Helvetica Neue, Helvetica, sans-serif" <?php selected($font_family_sidebar_widget_titles, 'Helvetica Neue, Helvetica, sans-serif' ); ?>>Helvetica*</option><option value="Calibri, Candara, Segoe, Optima, sans-serif" <?php selected($font_family_sidebar_widget_titles, 'Calibri, Candara, Segoe, Optima, sans-serif' ); ?>>Calibri*</option><option value="Myriad Pro, Myriad, sans-serif" <?php selected($font_family_sidebar_widget_titles, 'Myriad Pro, Myriad, sans-serif' ); ?>>Myriad Pro*</option><option value="Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif" <?php selected($font_family_sidebar_widget_titles, 'Lucida Grande, Lucida Sans Unicode, Lucida Sans, sans-serif' ); ?>>Lucida</option><option value="Arial Black, sans-serif" <?php selected($font_family_sidebar_widget_titles, 'Arial Black, sans-serif' ); ?>>Arial Black</option><option value="Gill Sans, Gill Sans MT, Calibri, sans-serif" <?php selected($font_family_sidebar_widget_titles, 'Gill Sans, Gill Sans MT, Calibri, sans-serif' ); ?>>Gill Sans*</option><option value="Geneva, Tahoma, Verdana, sans-serif" <?php selected($font_family_sidebar_widget_titles, 'Geneva, Tahoma, Verdana, sans-serif' ); ?>>Geneva*</option><option value="Impact, Charcoal, sans-serif" <?php selected($font_family_sidebar_widget_titles, 'Impact, Charcoal, sans-serif' ); ?>>Impact</option><option value="Courier, Courier New, monospace" <?php selected($font_family_sidebar_widget_titles, 'Courier, Courier New, monospace' ); ?>>Courier</option><option value="Abel" <?php selected($font_family_sidebar_widget_titles, 'Abel' ); ?>>Abel</option><option value="Abril Fatface" <?php selected($font_family_sidebar_widget_titles, 'Abril Fatface' ); ?>>Abril Fatface</option><option value="Aclonica" <?php selected($font_family_sidebar_widget_titles, 'Aclonica' ); ?>>Aclonica</option><option value="Actor" <?php selected($font_family_sidebar_widget_titles, 'Actor' ); ?>>Actor</option><option value="Adamina" <?php selected($font_family_sidebar_widget_titles, 'Adamina' ); ?>>Adamina</option><option value="Aldrich" <?php selected($font_family_sidebar_widget_titles, 'Aldrich' ); ?>>Aldrich</option><option value="Alice" <?php selected($font_family_sidebar_widget_titles, 'Alice' ); ?>>Alice</option><option value="Alike" <?php selected($font_family_sidebar_widget_titles, 'Alike' ); ?>>Alike</option><option value="Alike Angular" <?php selected($font_family_sidebar_widget_titles, 'Alike Angular' ); ?>>Alike Angular</option><option value="Allan" <?php selected($font_family_sidebar_widget_titles, 'Allan' ); ?>>Allan</option><option value="Allerta" <?php selected($font_family_sidebar_widget_titles, 'Allerta' ); ?>>Allerta</option><option value="Allerta Stencil" <?php selected($font_family_sidebar_widget_titles, 'Allerta Stencil' ); ?>>Allerta Stencil</option><option value="Amaranth" <?php selected($font_family_sidebar_widget_titles, 'Amaranth' ); ?>>Amaranth</option><option value="Amatic SC" <?php selected($font_family_sidebar_widget_titles, 'Amatic SC' ); ?>>Amatic SC</option><option value="Andada" <?php selected($font_family_sidebar_widget_titles, 'Andada' ); ?>>Andada</option><option value="Andika" <?php selected($font_family_sidebar_widget_titles, 'Andika' ); ?>>Andika</option><option value="Annie Use Your Telescope" <?php selected($font_family_sidebar_widget_titles, 'Annie Use Your Telescope' ); ?>>Annie Use Your Telescope</option><option value="Anonymous Pro" <?php selected($font_family_sidebar_widget_titles, 'Anonymous Pro' ); ?>>Anonymous Pro</option><option value="Antic" <?php selected($font_family_sidebar_widget_titles, 'Antic' ); ?>>Antic</option><option value="Anton" <?php selected($font_family_sidebar_widget_titles, 'Anton' ); ?>>Anton</option><option value="Architects Daughter" <?php selected($font_family_sidebar_widget_titles, 'Architects Daughter' ); ?>>Architects Daughter</option><option value="Arimo" <?php selected($font_family_sidebar_widget_titles, 'Arimo' ); ?>>Arimo</option><option value="Artifika" <?php selected($font_family_sidebar_widget_titles, 'Artifika' ); ?>>Artifika</option><option value=
"Arvo" <?php selected($font_family_sidebar_widget_titles, 'Arvo' ); ?>>Arvo</option><option value="Asset" <?php selected($font_family_sidebar_widget_titles, 'Asset' ); ?>>Asset</option><option value="Astloch" <?php selected($font_family_sidebar_widget_titles, 'Astloch' ); ?>>Astloch</option><option value="Atomic Age" <?php selected($font_family_sidebar_widget_titles, 'Atomic Age' ); ?>>Atomic Age</option><option value="Aubrey" <?php selected($font_family_sidebar_widget_titles, 'Aubrey' ); ?>>Aubrey</option><option value="Bangers" <?php selected($font_family_sidebar_widget_titles, 'Bangers' ); ?>>Bangers</option><option value="Bentham" <?php selected($font_family_sidebar_widget_titles, 'Bentham' ); ?>>Bentham</option><option value="Bevan" <?php selected($font_family_sidebar_widget_titles, 'Bevan' ); ?>>Bevan</option><option value="Bigshot One" <?php selected($font_family_sidebar_widget_titles, 'Bigshot One' ); ?>>Bigshot One</option><option value="Black Ops One" <?php selected($font_family_sidebar_widget_titles, 'Black Ops One' ); ?>>Black Ops One</option><option value="Bowlby One" <?php selected($font_family_sidebar_widget_titles, 'Bowlby One' ); ?>>Bowlby One</option><option value="Bowlby One SC" <?php selected($font_family_sidebar_widget_titles, 'Bowlby One SC' ); ?>>Bowlby One SC</option><option value="Brawler" <?php selected($font_family_sidebar_widget_titles, 'Brawler' ); ?>>Brawler</option><option value="Butcherman Caps" <?php selected($font_family_sidebar_widget_titles, 'Butcherman Caps' ); ?>>Butcherman Caps</option><option value="Cabin" <?php selected($font_family_sidebar_widget_titles, 'Cabin' ); ?>>Cabin</option><option value="Cabin Sketch" <?php selected($font_family_sidebar_widget_titles, 'Cabin Sketch' ); ?>>Cabin Sketch</option><option value="Cabin Sketch" <?php selected($font_family_sidebar_widget_titles, 'Cabin Sketch' ); ?>>Cabin Sketch</option><option value="Calligraffitti" <?php selected($font_family_sidebar_widget_titles, 'Calligraffitti' ); ?>>Calligraffitti</option><option value="Candal" <?php selected($font_family_sidebar_widget_titles, 'Candal' ); ?>>Candal</option><option value="Cantarell" <?php selected($font_family_sidebar_widget_titles, 'Cantarell' ); ?>>Cantarell</option><option value="Cardo" <?php selected($font_family_sidebar_widget_titles, 'Cardo' ); ?>>Cardo</option><option value="Carme" <?php selected($font_family_sidebar_widget_titles, 'Carme' ); ?>>Carme</option><option value="Carter One" <?php selected($font_family_sidebar_widget_titles, 'Carter One' ); ?>>Carter One</option><option value="Caudex" <?php selected($font_family_sidebar_widget_titles, 'Caudex' ); ?>>Caudex</option><option value="Cedarville Cursive" <?php selected($font_family_sidebar_widget_titles, 'Cedarville Cursive' ); ?>>Cedarville Cursive</option><option value="Changa One" <?php selected($font_family_sidebar_widget_titles, 'Changa One' ); ?>>Changa One</option><option value="Cherry Cream Soda" <?php selected($font_family_sidebar_widget_titles, 'Cherry Cream Soda' ); ?>>Cherry Cream Soda</option><option value="Chewy" <?php selected($font_family_sidebar_widget_titles, 'Chewy' ); ?>>Chewy</option><option value="Chivo" <?php selected($font_family_sidebar_widget_titles, 'Chivo' ); ?>>Chivo</option><option value="Coda" <?php selected($font_family_sidebar_widget_titles, 'Coda' ); ?>>Coda</option><option value="Comfortaa" <?php selected($font_family_sidebar_widget_titles, 'Comfortaa' ); ?>>Comfortaa</option><option value="Coming Soon" <?php selected($font_family_sidebar_widget_titles, 'Coming Soon' ); ?>>Coming Soon</option><option value="Contrail One" <?php selected($font_family_sidebar_widget_titles, 'Contrail One' ); ?>>Contrail One</option><option value="Copse" <?php selected($font_family_sidebar_widget_titles, 'Copse' ); ?>>Copse</option><option value="Corben" <?php selected($font_family_sidebar_widget_titles, 'Corben' ); ?>>Corben</option><option value="Corben" <?php selected($font_family_sidebar_widget_titles, 'Corben' ); ?>>Corben</option><option value="Cousine" <?php selected($font_family_sidebar_widget_titles, 'Cousine' ); ?>>Cousine</option><option value="Coustard" <?php selected($font_family_sidebar_widget_titles, 'Coustard' ); ?>>Coustard</option><option value="Covered By Your Grace" <?php selected($font_family_sidebar_widget_titles, 'Covered By Your Grace' ); ?>>Covered By Your Grace</option><option value="Crafty Girls" <?php selected($font_family_sidebar_widget_titles, 'Crafty Girls' ); ?>>Crafty Girls</option><option value="Creepster Caps" <?php selected($font_family_sidebar_widget_titles, 'Creepster Caps' ); ?>>Creepster Caps</option><option value="Crimson Text" <?php selected($font_family_sidebar_widget_titles, 'Crimson Text' ); ?>>Crimson Text</option><option value="Crushed" <?php selected($font_family_sidebar_widget_titles, 'Crushed' ); ?>>Crushed</option><option value="Cuprum" <?php selected($font_family_sidebar_widget_titles, 'Cuprum' ); ?>>Cuprum</option><option value="Damion" <?php selected($font_family_sidebar_widget_titles, 'Damion' ); ?>>Damion</option><option value="Dancing Script" <?php selected($font_family_sidebar_widget_titles, 'Dancing Script' ); ?>>Dancing Script</option><option value="Dawning of a New Day" <?php selected($font_family_sidebar_widget_titles, 'Dawning of a New Day' ); ?>>Dawning of a New Day</option><option value="Days One" <?php selected($font_family_sidebar_widget_titles, 'Days One' ); ?>>Days One</option><option value="Delius" <?php selected($font_family_sidebar_widget_titles, 'Delius' ); ?>>Delius</option><option value="Delius Swash Caps" <?php selected($font_family_sidebar_widget_titles, 'Delius Swash Caps' ); ?>>Delius Swash Caps</option><option value="Delius Unicase" <?php selected($font_family_sidebar_widget_titles, 'Delius Unicase' ); ?>>Delius Unicase</option><option value="Didact Gothic" <?php selected($font_family_sidebar_widget_titles, 'Didact Gothic' ); ?>>Didact Gothic</option><option value="Dorsa" <?php selected($font_family_sidebar_widget_titles, 'Dorsa' ); ?>>Dorsa</option><option value="Droid Sans" <?php selected($font_family_sidebar_widget_titles, 'Droid Sans' ); ?>>Droid Sans</option><option value="Droid Sans Mono" <?php selected($font_family_sidebar_widget_titles, 'Droid Sans Mono' ); ?>>Droid Sans Mono</option><option value="Droid Serif" <?php selected($font_family_sidebar_widget_titles, 'Droid Serif' ); ?>>Droid Serif</option><option value="EB Garamond" <?php selected($font_family_sidebar_widget_titles, 'EB Garamond' ); ?>>EB Garamond</option><option value="Eater Caps" <?php selected($font_family_sidebar_widget_titles, 'Eater Caps' ); ?>>Eater Caps</option><option value="Expletus Sans" <?php selected($font_family_sidebar_widget_titles, 'Expletus Sans' ); ?>>Expletus Sans</option><option value="Fanwood Text" <?php selected($font_family_sidebar_widget_titles, 'Fanwood Text' ); ?>>Fanwood Text</option><option value="Federant" <?php selected($font_family_sidebar_widget_titles, 'Federant' ); ?>>Federant</option><option value="Federo" <?php selected($font_family_sidebar_widget_titles, 'Federo' ); ?>>Federo</option><option value="Fontdiner Swanky" <?php selected($font_family_sidebar_widget_titles, 'Fontdiner Swanky' ); ?>>Fontdiner Swanky</option><option value="Forum" <?php selected($font_family_sidebar_widget_titles, 'Forum' ); ?>>Forum</option><option value="Francois One" <?php selected($font_family_sidebar_widget_titles, 'Francois One' ); ?>>Francois One</option><option value="Gentium Book Basic" <?php selected($font_family_sidebar_widget_titles, 'Gentium Book Basic' ); ?>>Gentium Book Basic</option><option value="Geo" <?php selected($font_family_sidebar_widget_titles, 'Geo' ); ?>>Geo</option><option value="Geostar" <?php selected($font_family_sidebar_widget_titles, 'Geostar' ); ?>>Geostar</option><option value="Geostar Fill" <?php selected($font_family_sidebar_widget_titles, 'Geostar Fill' ); ?>>Geostar Fill</option><option value="Give You Glory" <?php selected($font_family_sidebar_widget_titles, 'Give You Glory' ); ?>>Give You Glory</option><option value="Gloria Hallelujah" <?php selected($font_family_sidebar_widget_titles, 'Gloria Hallelujah' ); ?>>Gloria Hallelujah</option><option value="Goblin One" <?php selected($font_family_sidebar_widget_titles, 'Goblin One' ); ?>>Goblin One</option><option value="Gochi Hand" <?php selected($font_family_sidebar_widget_titles, 'Gochi Hand' ); ?>>Gochi Hand</option><option value="Goudy Bookletter 1911" <?php selected($font_family_sidebar_widget_titles, 'Goudy Bookletter 1911' ); ?>>Goudy Bookletter 1911</option><option value="Gravitas One" <?php selected($font_family_sidebar_widget_titles, 'Gravitas One' ); ?>>Gravitas One</option><option value="Gruppo" <?php selected($font_family_sidebar_widget_titles, 'Gruppo' ); ?>>Gruppo</option><option value="Hammersmith One" <?php selected($font_family_sidebar_widget_titles, 'Hammersmith One' ); ?>>Hammersmith One</option><option value="Holtwood One SC" <?php selected($font_family_sidebar_widget_titles, 'Holtwood One SC' ); ?>>Holtwood One SC</option><option value="Homemade Apple" <?php selected($font_family_sidebar_widget_titles, 'Homemade Apple' ); ?>>Homemade Apple</option><option value="IM Fell DW Pica" <?php selected($font_family_sidebar_widget_titles, 'IM Fell DW Pica' ); ?>>IM Fell DW Pica</option><option value="IM Fell English" <?php selected($font_family_sidebar_widget_titles, 'IM Fell English' ); ?>>IM Fell English</option><option value="IM Fell English SC" <?php selected($font_family_sidebar_widget_titles, 'IM Fell English SC' ); ?>>IM Fell English SC</option><option value="Inconsolata" <?php selected($font_family_sidebar_widget_titles, 'Inconsolata' ); ?>>Inconsolata</option><option value="Indie Flower" <?php selected($font_family_sidebar_widget_titles, 'Indie Flower' ); ?>>Indie Flower</option><option value="Irish Grover" <?php selected($font_family_sidebar_widget_titles, 'Irish Grover' ); ?>>Irish Grover</option><option value="Irish Growler" <?php selected($font_family_sidebar_widget_titles, 'Irish Growler' ); ?>>Irish Growler</option><option value="Istok Web" <?php selected($font_family_sidebar_widget_titles, 'Istok Web' ); ?>>Istok Web</option><option value="Jockey One" <?php selected($font_family_sidebar_widget_titles, 'Jockey One' ); ?>>Jockey One</option><option value="Josefin Sans" <?php selected($font_family_sidebar_widget_titles, 'Josefin Sans' ); ?>>Josefin Sans</option><option value="Josefin Slab" <?php selected($font_family_sidebar_widget_titles, 'Josefin Slab' ); ?>>Josefin Slab</option><option value="Judson" <?php selected($font_family_sidebar_widget_titles, 'Judson' ); ?>>Judson</option><option value="Julee" <?php selected($font_family_sidebar_widget_titles, 'Julee' ); ?>>Julee</option><option value="Jura" <?php selected($font_family_sidebar_widget_titles, 'Jura' ); ?>>Jura</option><option value="Just Another Hand" <?php selected($font_family_sidebar_widget_titles, 'Just Another Hand' ); ?>>Just Another Hand</option><option value="Just Me Again Down Here" <?php selected($font_family_sidebar_widget_titles, 'Just Me Again Down Here' ); ?>>Just Me Again Down Here</option><option value="Kameron" <?php selected($font_family_sidebar_widget_titles, 'Kameron' ); ?>>Kameron</option><option value="Kelly Slab" <?php selected($font_family_sidebar_widget_titles, 'Kelly Slab' ); ?>>Kelly Slab</option><option value="Kenia" <?php selected($font_family_sidebar_widget_titles, 'Kenia' ); ?>>Kenia</option><option value="Kranky" <?php selected($font_family_sidebar_widget_titles, 'Kranky' ); ?>>Kranky</option><option value="Kreon" <?php selected($font_family_sidebar_widget_titles, 'Kreon' ); ?>>Kreon</option><option value="Kristi" <?php selected($font_family_sidebar_widget_titles, 'Kristi' ); ?>>Kristi</option><option value="La Belle Aurore" <?php selected($font_family_sidebar_widget_titles, 'La Belle Aurore' ); ?>>La Belle Aurore</option><option value="Lato" <?php selected($font_family_sidebar_widget_titles, 'Lato' ); ?>>Lato</option><option value="League Script" <?php selected($font_family_sidebar_widget_titles, 'League Script' ); ?>>League Script</option><option value="Leckerli One" <?php selected($font_family_sidebar_widget_titles, 'Leckerli One' ); ?>>Leckerli One</option><option value="Lekton" <?php selected($font_family_sidebar_widget_titles, 'Lekton' ); ?>>Lekton</option><option value="Limelight" <?php selected($font_family_sidebar_widget_titles, 'Limelight' ); ?>>Limelight</option><option value="Linden Hill" <?php selected($font_family_sidebar_widget_titles, 'Linden Hill' ); ?>>Linden Hill</option><option value="Lobster" <?php selected($font_family_sidebar_widget_titles, 'Lobster' ); ?>>Lobster</option><option value="Lobster Two" <?php selected($font_family_sidebar_widget_titles, 'Lobster Two' ); ?>>Lobster Two</option><option value="Lora" <?php selected($font_family_sidebar_widget_titles, 'Lora' ); ?>>Lora</option><option value="Love Ya Like A Sister" <?php selected($font_family_sidebar_widget_titles, 'Love Ya Like A Sister' ); ?>>Love Ya Like A Sister</option><option value="Loved by the King" <?php selected($font_family_sidebar_widget_titles, 'Loved by the King' ); ?>>Loved by the King</option><option value="Luckiest Guy" <?php selected($font_family_sidebar_widget_titles, 'Luckiest Guy' ); ?>>Luckiest Guy</option><option value="Maiden Orange" <?php selected($font_family_sidebar_widget_titles, 'Maiden Orange' ); ?>>Maiden Orange</option>
</select>
</div>

				
<?php $font_style_sidebar_widget_titles = $current_options['spa_sidebar_widget_titles']['font_style_sidebar_widget_titles'];?>	
 <div class="select_wrapper background-attachment" style="margin: 0px 0px 0px 10px; width: 180px;">
<select id="" name="font_style_sidebar_widget_titles" class="select">
<option value="normal" <?php selected($font_style_sidebar_widget_titles, 'normal' ); ?>>Normal</option>
<option value="italic" <?php selected($font_style_sidebar_widget_titles, 'italic' ); ?>>Italic</option>

</select>								
</div>							
							
 

  <div class="form-item"><input type="text"  class="colorwell" name="color_sidebar_widget_titles" value="<?php  echo $current_options['spa_sidebar_widget_titles']['color_sidebar_widget_titles'];  ?>" /></div>
<div id="picker_sidebar_widget_titles" style="z-index: 100; background:#eee; border:1px solid #ccc; position:absolute; display:none;"></div>
            
            
       </div>
      </div>
</div>
<!--endinf of  sidebar widget title-->
<input type="hidden" value="1" id="spa_typography_save" name="spa_typography_save"> 
						    <!--<input type="hidden" value="1" id="typography_restore" name="typography_restore">--> 
<input type="button" class="button-framework save-options"   value= "<?php _e('Save Changes', 'spa');?>" onclick="datasave_typography()"/>									
<input type="button" class="button-framework reset"  value="<?php _e('Restore Defaults','spa');?>" onclick="reset_data_typography()" />
<div id="success_message" style="display:none;width:150px;padding-left:100px;"><?php _e('Data Reset Successfully','sis_spa');?></div>
<div id="success_message_save" style="display:none;width:300px;padding-left:150px;" ><?php _e('Data Save Successfully','sis_spa');?></div>
</form>
</div>
<style>
#success_message_save{
   display: none;
   margin: 15px 8px 0px 1px;
   padding: 13px 0px 15px 52px;
   background: url("/images/icon_check.png") left no-repeat #5f5f5f;
   /*opacity:0.5;
   filter:alpha(opacity=50);*/
   background-position: 15px 15px;
   border: solid 1px #F22853;
   -webkit-border-radius: 15px;
   -moz-border-radius: 15px;
   border-radius: 15px;
   width: 220px;
   font-size: 20px;
   color: #ffffff;
   position: absolute;
   left: 500px;
   bottom: 20px;
   
}		
#success_message {
   display: none;
   margin: 15px 8px 0px 1px;
   padding: 13px 0px 15px 52px;
   background: url("images/icon_check.png") left no-repeat #5f5f5f;

   background-position: 15px 15px;
   border: solid 1px #F22853;
   -webkit-border-radius: 15px;
   -moz-border-radius: 15px;
   border-radius: 15px;
   width: 220px;
   font-size: 20px;
   color: #ffffff;
   position: absolute;
   left: 500px;
   bottom: 20px;
   
}
</style>

<?php
if(isset($_POST['spa_typography_save'])){
$spa_typography_save = $_POST['spa_typography_save'];

if($spa_typography_save == 2) { 
$current_options=get_option('spa_theme_options');
//below code for restoreing style menus
$current_options['spa_menu_typography']['navigation_px']='14';
$current_options['spa_menu_typography']['color_navigation']='#CACACA';
$current_options['spa_menu_typography']['font_family_navigation']='Arial';
$current_options['spa_menu_typography']['font_style_navigation']='Normal';

/*below code for restore post_title */
$current_options['spa_post_title_typography']['post_title_px']='18';
$current_options['spa_post_title_typography']['color_post_title']='#303030';
$current_options['spa_post_title_typography']['font_family_post_title']='Arial';
$current_options['spa_post_title_typography']['font_style_post_title']='Normal';

/*below code for post_entry */
$current_options['spa_post_entry_typography']['post_entry_px']='12';
$current_options['spa_post_entry_typography']['color_post_entry']='#303030';
$current_options['spa_post_entry_typography']['font_family_post_entry']='Arial';
$current_options['spa_post_entry_typography']['font_style_post_entry']='Normal';

/*below code for post_meta */
$current_options['spa_post_meta_typography']['post_meta_px']='12';
$current_options['spa_post_meta_typography']['color_post_meta']='#676767';
$current_options['spa_post_meta_typography']['font_family_post_meta']='Arial';
$current_options['spa_post_meta_typography']['font_style_post_meta']='Normal';

/*below code for sidebar_widget_titles */
$current_options['spa_sidebar_widget_titles']['sidebar_widget_titles_px']='15';
$current_options['spa_sidebar_widget_titles']['color_sidebar_widget_titles']='222222';
$current_options['spa_sidebar_widget_titles']['font_family_sidebar_widget_titles']='Arial';
$current_options['spa_sidebar_widget_titles']['font_style_sidebar_widget_titles']='Normal';

/*below code for footer_widget_titles */
$current_options['spa_font_style_footer_widget_titles']['footer_widget_titles_px']='15';
$current_options['spa_font_style_footer_widget_titles']['color_footer_widget_titles']='#b1b1b1';
$current_options['spa_font_style_footer_widget_titles']['font_family_footer_widget_titles']='Arial';
$current_options['spa_font_style_footer_widget_titles']['font_style_footer_widget_titles']='Italic';
update_option('spa_theme_options' , $current_options);

} //end of if $_POST['typography']
}


?>	
		




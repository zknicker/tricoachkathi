<?php
/**
	Template Name: Featured Home
*/
if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
    // Custom content markup goes here

 get_header(); $current_options=get_option('spa_theme_options');
get_template_part('index', 'slider') ;
?>
<div class="container">
	  <div class="individual-coaching-services">
      <h1 class="home_tagline"><a href="#">Coaching Services We Provide</a></h1>
      <p><?php echo $current_options['tagline_contents']; ?> </p>
    </div>
</div>
<?php get_template_part('index', 'services')?>	 

<?php get_footer();
}?>
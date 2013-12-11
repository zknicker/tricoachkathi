<?php
/*
Template Name: Page With Category Posts
*/
?>
<?php do_action( '__before_main_wrapper' ); ##hooks the header with get_header ?>
<?php tc__f('rec' , __FILE__ , __FUNCTION__ ); ?>
<div id="main-wrapper" class="container">
    <?php do_action( '__before_main_container' ); ##hooks the featured page (priority 10) and breadcrumb (priority 20)...and whatever you need! ?>
    <div class="container" role="main">
        <div class="row">
            <?php do_action( '__sidebar' , 'left' ); ?>
            <div id="content" class="narrowcolumn">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post" id="post-<?php the_ID(); ?>">
                    <div class="entry">
                        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

                        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

                    </div>
                </div>
                <?php endwhile; endif; ?>

                <?php $temp_query = $wp_query; ?>
                <?php query_posts("cat=3&showposts=10"); ?>

                <?php while (have_posts()) : the_post(); ?>
                    <div class="post" id="post-<?php the_ID(); ?>">

                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                        <div class="entry">
                        <?php the_content('Read more &raquo;'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>

                <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
            </div>
            <?php do_action( '__sidebar' , 'right' ); ?>
        </div><!--.row -->
    </div><!-- .container role: main -->
    <?php do_action( '__after_main_container' ); ?>
</div><!--#main-wrapper"-->
<?php do_action( '__after_main_wrapper' );##hooks the footer with get_get_footer ?>
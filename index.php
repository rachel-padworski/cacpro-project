
<!-- begin content -->
<div id="content" role="main" <?php post_class(); ?>>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    				
    <?php get_header(); ?>
		<?php the_content(); ?>
    <?php get_footer(); ?>
    <?php endwhile; else:?>
	<?php endif; ?>					
</div> 


<!-- end #content -->

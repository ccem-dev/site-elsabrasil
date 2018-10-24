<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package elsatheme
 */

get_header();
?>


<div id="primary" class="site-content">
<div id="content" role="main">
 
<?php while ( have_posts() ) : the_post(); ?>
                 
<h1 class="entry-title"><?php the_title(); ?></h1>
 
<div class="entry-content">
 
<?php the_content(); ?>
 

</div><!-- .entry-content -->
 
<?php endwhile; // end of the loop. ?>
 
</div><!-- #content -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
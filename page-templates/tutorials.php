<?php
/**
 *
 * Template Name: Tutorials
 *
 * This template is used for the subpages of the Trust.RizePoint.com site. 
 *
 * @link https://trust.rizepoint.com
 *
 * @package WordPress
 * @subpackage T.A.R.S
 * @since T.A.R.S 1.0
 */
get_header(); ?>

<div class="container body-content">

	<?php while (have_posts()) : the_post(); ?>
		<?php the_content('[...]'); ?> 
	<?php endwhile; ?>

</div><!-- body-content -->


<?php get_footer(); ?>
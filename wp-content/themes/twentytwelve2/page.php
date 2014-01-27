<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php //while ( have_posts() ) : the_post(); ?>
				<?php // get_template_part( 'content', 'page' ); ?>
				<?php //comments_template( '', true ); ?>
			<?php //endwhile; // end of the loop. ?>
			<?php 
				var_dump(get_category(2));
			?>
			<?php $posts = get_posts( "category=2&numberposts=2" ); ?>
			<?php if( $posts ) : ?>
			<ul><?php foreach( $posts as $post ) : setup_postdata($post ); ?>
				<li>
					<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</li>
			<?php endforeach; ?>
			</ul>
			<?php endif; ?>
			
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WPEX Starter Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<header class="single-header clr">
				<h1 class="single-title"><?php the_title(); ?></h1>
			</header><!-- .single-header -->

			<article class="single-content clr">
				<?php the_content(); ?>
			</article><!-- .single-content -->

			<?php the_post_navigation(); ?>

			<?php if ( comments_open() || get_comments_number() ) : ?>

				<?php comments_template(); ?>
				
			<?php endif; ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

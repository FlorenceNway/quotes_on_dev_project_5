<?php
/**
 * The template for displaying archive page.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<?php if ( have_posts() ) : ?>
			
				<?php
					the_archive_title( '<h1 class="archive-title">', '</h1>' );
				?>

		<main id="main" class="site-main archives" role="main">

			<!-- .page-header -->
		
			<div>
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php
						get_template_part( 'template-parts/content' );
					?>
					
				<?php endwhile; ?>
			</div>

		
				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

		</main><!-- #main -->

			<?php qod_numbered_pagination(); ?>
	</div><!-- #primary -->


<?php get_footer(); ?>

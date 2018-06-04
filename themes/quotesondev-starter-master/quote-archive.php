<?php
/**
 * // Template Name: Archive Template
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<h1 class="archive-title">Archives</h1>
		<main id="main" class="site-main" role="main">
		
		<section>
		<div class="authors">
			<h2>Quote Authors</h2>
			<ul>
			    <?php
			    				     
				    $myposts = get_posts( array( 'posts_per_page' => -1 ) );
				      
				    if ( $myposts ) :
				        foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php
				        endforeach; 
				        wp_reset_postdata();
				    endif;
			    ?>
			</ul>
		</div>

		<div class="categories">
			
			<h2>Categories</h2>
			<ul>
			<?php  echo wp_list_categories('title_li='); ?>
			</ul>
		</div>

		<div class="tags">
			<h2>Tags</h2>
			<?php
				echo wp_tag_cloud( array(
	                   'smallest' => 1.25,
	                   'largest' => 1.25,
	                   'unit' => 'rem',
	                   'format' => 'list'
                    )); 
			 ?>
		</div>


		</section>	

		</main><!-- #main -->

		<?php qod_numbered_pagination(); ?>
	</div><!-- #primary -->



<?php get_footer(); ?>

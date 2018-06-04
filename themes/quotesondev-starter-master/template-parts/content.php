<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<?php $source = get_post_meta( get_the_ID(), '_qod_quote_source', true );
$source_url = get_post_meta( get_the_ID(), '_qod_quote_source_url', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">
        <?php the_content(); ?>
    </div><!-- .entry-content -->

    <div class="entry-meta">
        <?php the_title( '<span class="entry-title">&mdash; ', '</span>' ); ?>

        <?php if ( $source && $source_url ) : ?>
            <span class="source">, <a href="<?php echo $source_url; ?>"><?php echo $source; ?></a></span><br><br>
        <?php elseif ( $source ) : ?>
            <span class="source">, <?php echo $source; ?></span><br><br>
        <?php else : ?>
            <span class="source"></span>
            <br><br>
        <?php endif; ?>
    </div><!-- .entry-meta -->

<!-- #post-## -->

<?php if ( is_home() || is_single() ) : ?>
	<div class="show-me-btn">
    <button type="button" id="new-quote-button">Show Me Another!</button>
	</div>
<?php endif; ?>



	
	
</article><!-- #post-## -->

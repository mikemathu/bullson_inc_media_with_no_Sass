Blog content dot php
<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bullson_Media
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <header class="entry-header">
        
            <?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;

            if ( 'post' === get_post_type() ) :
                ?>
                <div class="entry-meta">
                    <?php
                    // bullson_inc_media_posted_on();
                    // bullson_inc_media_posted_by();

                    $fname = get_the_author_meta('first_name');
                    $lname = get_the_author_meta('last_name');

                    echo  'Posted By '.$fname .' '. $lname .' on '. get_the_date('l jS F, Y'); 

                    // echo get_the_date();
                    ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->
        
        <?php bullson_inc_media_post_thumbnail(); ?>

        <div class="entry-content">
            <?php
            
            the_content(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bullson_inc_media' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                )
            );

            wp_link_pages(
                array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bullson_inc_media' ),
                    'after'  => '</div>',
                )
            );
            ?>
        </div><!-- .entry-content -->
        <?php $tags = get_the_tags(); ?>

            <?php foreach($tags as $tag): ?>
                <a href="<?php echo get_tag_link($tag->term_id); ?>">
                    <?php echo $tag->name; ?>
                </a>
            <?php endforeach; ?>



            <?php 
                $categories = get_the_category();
                    foreach($categories as $cat): ?>

                    <a href="<?php echo get_category_link($cat->trrm_id) ?>">
                        <?php echo $cat->name; ?>
                    </a>
                    <?php endforeach; ?>
            
      
    </div>

	<!-- <footer //class="entry-footer"> -->
		<?php //bullson_inc_media_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

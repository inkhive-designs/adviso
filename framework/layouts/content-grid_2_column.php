<?php
/**
 * @package Adviso
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-6 col-sm-6 grid_2_column grid'); ?>>

    <div class="featured-thumb col-md-12 col-sm-12">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('adviso-pop-thumb', array(  'alt' => trim(strip_tags( $post->post_title )))); ?></a>
        <?php else: ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute() ?>"><img src="<?php echo get_template_directory_uri()."/assets/images/placeholder2.jpg"; ?>" alt="<?php the_title(); ?>"></a>
        <?php endif; ?>
    </div><!--.featured-thumb-->

    <div class="out-thumb col-md-12 col-sm-12">
        <header class="entry-header">
            <h3 class="entry-title title-font"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
        </header><!-- .entry-header -->

        <div class="postedon"><?php adviso_posted_on(); ?></div>
        <span class="entry-excerpt"><?php echo substr(get_the_excerpt(),0,200).(get_the_excerpt() ? "..." : "" ); ?></span>
        <span class="readmore"><a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','adviso'); ?></a></span>
    </div><!--.out-thumb-->



</article><!-- #post-## -->
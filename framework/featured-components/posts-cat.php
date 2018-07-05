<?php if(get_theme_mod('adviso_featposts_cat_enable') =='enable' && is_front_page()): ?>
    <div class="featposts-cat container-fluid container">
        <div class="section-title">
            <span>
                <?php echo esc_html(get_theme_mod('adviso_featcat_title', __('Featured Category Area','adviso'))); ?>
            </span>
        </div>

        <?php for( $i=1; $i<=3; $i++ ) : ?>
            <div class="item col-md-4 col-sm-4 col-xs-12">
                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"></a>
                <div class="item-container">
                    <?php $catname = get_cat_name(esc_html(get_theme_mod('adviso_featposts_category_'.$i)));
                    if ($catname !='' ) :
                        $catname = get_cat_name(esc_html(get_theme_mod('adviso_featposts_category_'.$i)));
                    $catid = array(esc_html(get_theme_mod('adviso_featposts_category_'.$i)));
                    $category_link = get_category_link(get_theme_mod('adviso_featposts_category_'.$i));
                    $showposts = 1;
                    $args=array(
                            'category__in' => $catid,
                        'showposts' => $showposts,
                        'orderby' => 'post_date',
                        'post_status' => 'publish',
                    );
                    $the_query = new WP_Query ( $args );
                    if($the_query->have_posts()) :
                        while ($the_query -> have_posts()) :
                            $the_query -> the_post(); ?>
                            <div class="featured-thumb">
                                <a href="<?php echo esc_url( $category_link ); ?>"><?php the_post_thumbnail();?></a>
                            </div>
                            <div class="out-thumb">
                                <h3><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $catname; ?></a></h3>
                            </div>
                        <?php endwhile;
                        endif;
                        /* Restore original Post Data */
                        wp_reset_postdata();endif; ?>
                </div>
            </div>
        <?php endfor; ?>

    </div>
<?php endif; ?>
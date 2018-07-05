<?php if ( get_theme_mod('adviso_product_triangle_enable') == 'enable' && is_front_page() ): ?>
    <?php if (get_theme_mod('adviso_product_triangle_title') !='') : ?>

    <div class="section-title title-font">
        <span><?php echo esc_html( get_theme_mod('adviso_product_triangle_title',__('Most Selling','adviso')) ); ?></span>
    </div>
    <?php endif; ?>

    <div class="triangles">
    <div class="triangle-container">
        <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 4,
            'tax_query' => array(
                array(
                    'taxonomy'      => 'product_cat',
                    'terms'         => esc_html( get_theme_mod('adviso_product_triangle_cat' ) ),
                    'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                )
            )
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) :
            $loop->the_post();
            global $product;

            ?>
            <div class="item-wrapper col-md-3 col-sm-6 col-sm-12">
                <div class="item">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="skew" title="<?php the_title_attribute() ?>"><?php the_post_thumbnail('adviso-sq-thumb', array(  'alt' => trim(strip_tags( $post->post_title )))); ?></a>
                    <?php else: ?>
                        <a href="<?php the_permalink(); ?>" class="skew" title="<?php the_title_attribute() ?>"><img src="<?php echo get_template_directory_uri()."/assets/images/placeholder.png"; ?>" alt="<?php the_title(); ?>"></a>
                    <?php endif; ?>
                    <div class="skew">
                        <div class="posted-on">
                            <span class="price"><?php echo $product->get_price_html(); ?></span>
                            <h3><?php the_title(); ?></h3>
                        </div>
                    </div>
                </div>
            </div><!--.featured-thumb-->

        <?php
        endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>
<?php endif; ?>
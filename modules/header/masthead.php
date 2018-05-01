<header id="masthead" class="site-header">
    <div id="top-bar">
        <div class="container">
            <div class="site-branding col-md-4 col-sm-4 col-xs-12">
                <?php if ( has_custom_logo() ) : ?>
                    <div class="adviso-logo">
                        <div id="site-logo">
                            <?php the_custom_logo(); ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div id="text-title-desc">
                    <h1 class="site-title title-font">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                    </h1>
                    <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                </div>
            </div><!-- .site-branding -->

            <div class="menu-wrapper col-md-8 col-sm-8 col-xs-12">
                <!-- Menu -->
                <?php get_template_part('modules/navigation/menu', 'primary'); ?>
            </div>
        </div>
    </div>
    <div class="mobile-menu">
        <?php get_template_part('modules/navigation/menu','mobile'); ?>
    </div>
    <div id="social-icons">
        <?php get_template_part('modules/social/social', 'fa'); ?>
    </div>
</header><!-- #masthead -->
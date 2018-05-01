<?php
/*
 * @package adviso, Copyright InkHive, rohitink.com
 * This file contains Custom Theme Related Functions.
 */
/*
* @package madhat, Copyright InkHive, rohitink.com
* This file contains Custom Theme Related Functions.
*/
//Import Admin Modules
require get_template_directory() . '/framework/admin_modules/register_styles.php';
require get_template_directory() . '/framework/admin_modules/register_widgets.php';
require get_template_directory() . '/framework/admin_modules/theme_setup.php';
require get_template_directory() . '/framework/admin_modules/admin_styles.php';
require get_template_directory() . '/framework/admin_modules/admin_scripts.php';
require get_template_directory() . '/framework/admin_modules/nav_walkers.php';

/*
 * Pagination Function. Implements core paginate_links function.
 */
function adviso_pagination() {
    global $wp_query;
    $big = 12345678;
    $page_format = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array'
    ) );
    if( is_array($page_format) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div class="pagination"><div><ul>';
        echo '<li><span>'. $paged . ' of ' . $wp_query->max_num_pages .'</span></li>';
        foreach ( $page_format as $page ) {
            echo "<li>$page</li>";
        }
        echo '</ul></div></div>';
    }
}

/*
** Function to check if Sidebar is enabled on Current Page 
*/

function adviso_load_sidebar() {
    $load_sidebar = true;
    if ( get_theme_mod('adviso_disable_sidebar') == 'disable' ) :
        $load_sidebar = false;
    elseif( get_theme_mod('adviso_disable_sidebar_home') == 'disable' && is_home() )	:
        $load_sidebar = false;
    elseif( get_theme_mod('adviso_disable_sidebar_front') == 'disable' && e() ) :
        $load_sidebar = false;
    endif;

    return  $load_sidebar;
}


/*
** Add Body Class
*/
function adviso_body_class( $classes ) {

    $sidebar_class_name =  adviso_load_sidebar() ? "sidebar-enabled" : "sidebar-disabled" ;
    return array_merge( $classes, array( $sidebar_class_name ) );
}
add_filter( 'body_class', 'adviso_body_class' );



/*
**	Determining Sidebar and Primary Width
*/
function adviso_primary_class() {
    $sw = get_theme_mod('adviso_sidebar_width',4);
    $class = "col-md-".(12-$sw);

    if ( !adviso_load_sidebar() )
        $class = "col-md-12";

    echo $class;
}
add_action('adviso_primary-width', 'adviso_primary_class');


function adviso_secondary_class() {
    $sw = get_theme_mod('adviso_sidebar_width',4);
    $class = "col-md-".$sw;

    echo $class;
}
add_action('adviso_secondary-width', 'adviso_secondary_class');

/*
** Function to Get Theme Layout 
*/
function adviso_get_blog_layout(){
    $ldir = 'framework/layouts/content';
    if (get_theme_mod('adviso_blog_layout') ) :
        get_template_part( $ldir , get_theme_mod('adviso_blog_layout') );
    else :
        get_template_part( $ldir ,'grid');
    endif;
}
add_action('adviso_blog_layout', 'adviso_get_blog_layout');

/*
** Function to Set Main Class
*/
function adviso_get_main_class(){

    $layout = get_theme_mod('adviso_blog_layout');
    if (strpos($layout,'adviso') !== false) {
        echo 'adviso-main';
    }
}
add_action('adviso_main-class', 'adviso_get_main_class');



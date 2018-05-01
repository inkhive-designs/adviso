<?php
/*
** Template to Render Social Icons on Top Bar
*/

for ($i = 1; $i < 8; $i++) : 
	$social = esc_html(get_theme_mod('adviso_social_'.$i));
	if ( ($social != 'none') && ($social != '') ) : ?>
	    <ul>
            <li>
                <a class="hvr-sweep-to-bottom" href="<?php echo esc_url( get_theme_mod('adviso_social_url'.$i) ); ?>">
                    <i class="fa fa-fw fa-<?php echo $social; ?>"></i>
                </a>
            </li>
        </ul>
	<?php endif;

endfor; ?>
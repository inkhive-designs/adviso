jQuery(document).ready( function() {
    //Mobile Menu
    jQuery('.menu-link').bigSlide({
        menu: '#menu',
        easyClose: true,
        side: 'right',
    });

    /*
Carousel Post Offers
 */
    jQuery('.owl-carousel').owlCarousel({
        items: 4,
        margin: 1,
        loop: true,
        dots: true,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            400 : {
                items : 1,
            },
            // breakpoint from 768 up
            768 : {
                items: 2,
            },
            991 : {
                items: 4,
            }
        }
    });

    /*
Carousel Product Offers
*/
    jQuery('.owl-carousel').owlCarousel({
        items: 1,
        margin: 1,
        loop: true,
        dots: false,
        nav: true,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            400 : {
                items : 1,
            },
            // breakpoint from 768 up
            768 : {
                items: 2,
            },
            991 : {
                items: 4,
            }
        }
    });
});



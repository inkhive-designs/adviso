!function($){wp.customize("blogname",function(i){i.bind(function(i){$(".site-title a").text(i)})}),wp.customize("blogdescription",function(i){i.bind(function(i){$(".site-description").text(i)})}),wp.customize("adviso_header_text",function(i){i.bind(function(i){$(".header-text").text(i)})}),wp.customize("header_textcolor",function(i){i.bind(function(i){"blank"===i?($("#text-title-desc").css({clip:"rect(1px, 1px, 1px, 1px)",position:"absolute"}),$("body").addClass("title-tagline-hidden")):($("#text-title-desc").css({clip:"auto",position:"relative"}),$(".site-branding a").css({color:i}),$("body").removeClass("title-tagline-hidden"))})}),wp.customize("adviso_header_desccolor",function(i){i.bind(function(i){jQuery("h2.site-description").css("color",i)})}),wp.customize("adviso_top_bar_color",function(i){i.bind(function(i){jQuery("body.home ul.menu > li:not(.current-menu-item):not(.current_page_item):not(.current_page_ancestor) > a, body.home #adviso-search #search-icon, body.home #contact-info, #top-cart, #top-cart a").css("color",i)})}),wp.customize("adviso_social_1",function(i){i.bind(function(i){var o="fa fa-fw fa-"+i;jQuery("#social-icons").find("i:eq(0)").attr("class",o)})}),wp.customize("adviso_social_2",function(i){i.bind(function(i){var o="fa fa-fw fa-"+i;jQuery("#social-icons").find("i:eq(1)").attr("class",o)})}),wp.customize("adviso_social_3",function(i){i.bind(function(i){var o="fa fa-fw fa-"+i;jQuery("#social-icons").find("i:eq(2)").attr("class",o)})}),wp.customize("adviso_social_4",function(i){i.bind(function(i){var o="fa fa-fw fa-"+i;jQuery("#social-icons").find("i:eq(3)").attr("class",o)})}),wp.customize("adviso_social_5",function(i){i.bind(function(i){var o="fa fa-fw fa-"+i;jQuery("#social-icons").find("i:eq(4)").attr("class",o)})}),wp.customize("adviso_social_6",function(i){i.bind(function(i){var o="fa fa-fw fa-"+i;jQuery("#social-icons").find("i:eq(5)").attr("class",o)})}),wp.customize("adviso_social_7",function(i){i.bind(function(i){var o="fa fa-fw fa-"+i;jQuery("#social-icons").find("i:eq(6)").attr("class",o)})}),wp.customize("adviso_sidebar_width",function(i){i.bind(function(i){var o=i/12*100;jQuery("#secondary").css("width",o+"%"),jQuery("#primary").css("width",100-o+"%")})}),wp.customize("adviso_blog_sidebar_layout",function(i){i.bind(function(i){"sidebarleft"==i?jQuery("body.blog #primary").css("float","right"):jQuery("body.blog #primary").css("float","left")})})}(jQuery);
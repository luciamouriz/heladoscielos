jQuery(document).ready(function($) {

/*------------------------------------------------
            DECLARATIONS
------------------------------------------------*/

    var scroll = $(window).scrollTop();  
    var scrollup = $('.backtotop');
    var menu_toggle = $('.menu-toggle');
    var nav_menu = $('.main-navigation ul.nav-menu');
    var featured_slider = $('.featured-slider-wrapper');
    var about_slider      = $('.about-slider');
    var project_slider    = $('.project-slider');
    var testimonial_slider    = $('.testimonial-slider');
    var posts_height = $('.blog-posts-wrapper article .post-item');
    var masonry_gallery = $('.grid');

/*------------------------------------------------
            BACK TO TOP
------------------------------------------------*/

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            scrollup.css({bottom:"25px"});
        } 
        else {
            scrollup.css({bottom:"-100px"});
        }
    });

    scrollup.click(function() {
        $('html, body').animate({scrollTop: '0px'}, 800);
        return false;
    });

/*------------------------------------------------
            MAIN NAVIGATION
------------------------------------------------*/

   
    menu_toggle.click(function(){
        $(this).toggleClass('active');
        nav_menu.slideToggle();
    });

    $('.main-navigation .nav-menu .menu-item-has-children > a').after( $('<button class="dropdown-toggle"><i class="fa fa-angle-down"></i></button>') );

    $('button.dropdown-toggle').click(function() {
        $(this).toggleClass('active');
       $(this).parent().find('.sub-menu').first().slideToggle();
    });

     $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('.menu-sticky #masthead').addClass('nav-shrink'); 
        }
        else {
            $('.menu-sticky #masthead').removeClass('nav-shrink');
        }
    });

     if( $(window).width() < 1024 ) {
         $('#primary-menu').find("li").last().bind( 'keydown', function(e) {
            if( e.which === 9 ) {
                e.preventDefault();
                $('#masthead').find('.menu-toggle').focus();
            }
        });
        $('#primary-menu').find("li").last('button:not(.active)').bind( 'keydown', function(e) {
            if( e.which === 9 ) {
                e.preventDefault();
                $('#masthead').find('.menu-toggle').focus();
            }
        });
    }
    else {
        $( '#primary-menu > li:last-child' ).unbind('keydown');
    }
    $(window).resize(function() {
        if( $(window).width() < 1024 ) {
             $('#primary-menu').find("li").last().bind( 'keydown', function(e) {
                if( e.which === 9 ) {
                    e.preventDefault();
                    $('#masthead').find('.menu-toggle').focus();
                }
            });
            $('#primary-menu').find("li").last('button:not(.active)').bind( 'keydown', function(e) {
                if( e.which === 9 ) {
                    e.preventDefault();
                    $('#masthead').find('.menu-toggle').focus();
                }
            });
        }
        else {
            $( '#primary-menu > li:last-child' ).unbind('keydown');
        }
    });
    $('#masthead .menu-toggle').on('keydown', function (e) {
    var tabKey = e.keyCode === 9;
    var shiftKey = e.shiftKey;
    if( $('#masthead .menu-toggle').hasClass('active') ) {
        if ( shiftKey && tabKey ) {
            e.preventDefault();
            nav_menu.slideUp();
            $('#masthead .menu-toggle').removeClass('active');
        };
    }
}); 

/*------------------------------------------------
            SLICK SLIDER
------------------------------------------------*/

    featured_slider.slick({
        responsive: [
    {
        breakpoint: 992,
        settings: {
            slidesToShow: 1
        }
    },
    {
        breakpoint: 767,
        settings: {
            slidesToShow: 1,
            arrows: false
        }
    }
    ]
    });

    about_slider.slick({
        responsive: [
    {
        breakpoint: 992,
        settings: {
            slidesToShow: 2
        }
    },
    {
        breakpoint: 767,
        settings: {
            slidesToShow: 1,
            arrows: false
        }
    }
    ]
    });
    
    project_slider.slick({
    responsive: [
    {
    breakpoint: 992,
        settings: {
            slidesToShow: 2,
            arrows: false,
            dots: false
        }
    },
    {
        breakpoint: 767,
            settings: {
            slidesToShow: 1,
            arrows: false
        }
    }
    ]
    });

    testimonial_slider.slick({
    responsive: [
    {
    breakpoint: 992,
        settings: {
            slidesToShow: 2,
            arrows: false,
            dots: false
        }
    },
    {
        breakpoint: 767,
            settings: {
            slidesToShow: 1,
            arrows: false
        }
    }
    ]
    });
/*------------------------------------------------
            MATCH HEIGHT
------------------------------------------------*/

    $('.single #primary .navigation a').matchHeight();
    $('#mustread .entry-container').matchHeight();
    $('#tips .entry-container').matchHeight();
    $('#featured  .entry-container').matchHeight();
    $('#popular  .entry-container').matchHeight();

/*------------------------------------------------
            MASONRY GALLERY
------------------------------------------------*/
    
    masonry_gallery.imagesLoaded( function() {
        masonry_gallery.packery({
            itemSelector: '.grid-item'
        });
    });

/*------------------------------------------------
                END JQUERY
------------------------------------------------*/

});
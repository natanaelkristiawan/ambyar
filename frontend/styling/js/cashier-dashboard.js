$(document).ready(function() {

    // -- MODAL

    // Trigger Modal Search
    $('.fn-toggle-m-search').click(function() {
        var target = $('#fn-search-wrapper');
        var nav = $('.main-navigation');
        var html = $('body');

        // Show Module Search
        target.addClass('is-active');

        // Lock Scroll Body
        html.css({ overflow: 'hidden' });

        // Animate Main Navigation Components
        nav.addClass('is-search-on');

        // Automatically Focus to Seach Input
        setTimeout(function() {
            $('.c-search-bar').find('input').focus();
        }, 100);

        if($('.fn-m-notification-dropdown.is-expanded').length) {
            $('.fn-toggle-m-notification').removeClass('is-active');
            $('.fn-m-notification-dropdown').removeClass('is-expanded');
        }
    });

    // Close Modal Search
    $('.fn-toggle-close-m-search').click(function() {
        var target = $('#fn-search-wrapper');
        var nav = $('.main-navigation');
        var html = $('body');

        // Hide Module Search
        target.removeClass('is-active');

        // Release Scroll Body
        html.css({ overflow: 'auto' });

        // Animate Main Navigation Components
        nav.removeClass('is-search-on');
    });
    // End Trigger Modal Search

    // -- END MODAL

    // -- NAV TABS
    $('.fn-nav-tabs .nav-item .nav-link:not(:first)').addClass('inactive');
    $('.fn-content-tabs .tab-panel').hide();
    $('.fn-content-tabs .tab-panel:first').show();
        
    $('.fn-nav-tabs .nav-item .nav-link').click(function(){
        var t = $(this).attr('id');
        if ( $(this).hasClass('inactive') ) {
            $('.fn-nav-tabs .nav-item .nav-link').addClass('inactive');           
            $(this).removeClass('inactive');

            $('.fn-content-tabs .tab-panel').hide();
            //$('#'+ t + 'C').fadeIn('slow');
            $('#'+ t + '-c').fadeIn('slow');
        }
    });
    // -- END NAV TABS

    console.log('#' + 't');

});


window.addEventListener('load', function () {

    // SVG
    $(function () {
        jQuery('img.svg').each(function () {
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function (data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if (typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if (typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass + ' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Check if the viewport is set, else we gonna set it if we can.
                if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                    $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                }

                // Replace image with new SVG
                $img.replaceWith($svg);

            }, 'xml');

        });
    });

    // Remove preloader element
    $('.fn-preloader').fadeOut();
    $('body').removeClass('preloader-site');

    // Add Padding Bottom on Order Detail Page
    if ( $('.fn-btn-helper').length ) {
        $('.c-end-screen-payment-detail:last').css({
            paddingBottom: $('.fn-btn-helper').outerHeight(true) + 30
        });
    } else {
        $('.c-end-screen-payment-detail:last').css({
            paddingBottom: 30
        });
    }

    // Form Login Eye Password
    $('body').on('click', '.fn-toggle-eye', function() {
        if( $(this).hasClass('off') ) {
            $(this).find('.feather.feather-eye-off').replaceWith(feather.icons['eye'].toSvg({ 'width': 16, 'height': 16 }));
            $(this).removeClass('off');
            $(this).siblings('.c-input').attr('type', 'text');
        } else {
            $(this).find('.feather.feather-eye').replaceWith(feather.icons['eye-off'].toSvg({ 'width': 16, 'height': 16 }));
            $(this).addClass('off');
            $(this).siblings('.c-input').attr('type', 'password');
        }
    });

    // Notification Dropdown
    $('body').on('click', '.fn-toggle-m-notification, .fn-m-notification-dropdown + .sandbox', function() {
        var target = $('.fn-m-notification-dropdown');
        var maxHeight = $(window).outerHeight(true) - $('.main-navigation').outerHeight(true) - 30;
        var html = $('body');

        $('.fn-toggle-m-notification').toggleClass('is-active');

        if(target.hasClass('is-expanded')) {
            target.removeClass('is-expanded');
            html.css({ overflow: 'auto' });
        } else {
            target.addClass('is-expanded');
            html.css({ overflow: 'hidden' });
            if(target.outerHeight(true) > maxHeight ) {
                target.css({
                    height: $(window).outerHeight(true) - $('.main-navigation').outerHeight(true) - 120
                });    
            } else {
                target.css({
                    height: 'auto'
                })
            }
        }
    });

    // Button Close Message
    $('body').on('click', '.fn-message-close', function(e) {
        e.preventDefault();
        $(this).parents('.c-message').remove();
    });

    // Button Back To Top
    $(window).scroll(function() {
        var scrollTop = $('.fn-force-to-top');
        var topPos = $(this).scrollTop();

        if ( topPos > 300 ) {
            $(scrollTop).css({ opacity: 1 });
        } else {
            $(scrollTop).css({ opacity: 0 });
        }
    });
    $('body').on('click', '.fn-force-to-top', function() {        
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    // Feathericons
    feather.replace();

});

$(document).ready(function () {
    // Global variables

    // Close modal if button close modal & modal overlay is clicked
    $('.fn-toggle-close-modal, .modal-overlay .sandbox').on('click', function (event) {
        event.preventDefault();
        var Modal = $(this).parents('.modal-overlay');
        var html = $('body');

        // Hide Modal
        Modal.removeClass('is-active');

        // Conditions :: Modal Checkout Delivery Location
        Modal.removeClass('is-select-on-map');

        // Release Scroll Body
        html.css({ overflow: 'auto' });
    });

    // Close modal if ESC key is pressed
    $(document).on('keydown', function (e) {
        var Modal = $(this).parents('.modal-overlay');
        var html = $('body');

        if (e.keyCode == 27) {
            if ($('.modal-overlay').hasClass('is-active')) {
                // Hide Modal
                $(this).find('.modal-overlay.is-active').removeClass('is-active is-select-on-map');

                // Release Scroll Body
                html.css({ overflow: 'auto' });
            }
        }
    });

    // MODAL

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

    // Trigger Modal Store Location
    $('.fn-toggle-store-location').click(function() {
        var target = $('#fn-store-location-wrapper');
        var html = $('body');

        // Show Module Search
        target.addClass('is-active');

        // Lock Scroll Body
        html.css({ overflow: 'hidden' });

        $('#fn-store-location-wrapper .panel-map').css({
            height: $(window).outerHeight(true)
        });
    });

    // Test Animation. dont include this script
    $('.fn-test').click(function() {
        $('.location-detail').toggleClass('is-loading');
    });
    // end


    // Trigger Modal Product Detail
    $('.fn-toggle-product-detail').click(function(e) {
        e.preventDefault();
        var target = $('#fn-modal-product-detail-wrapper');
        var html = $('body');

        // Show Module Search
        target.addClass('is-active');

        // Lock Scroll Body
        html.css({ overflow: 'hidden' });
    });

    // Trigger Modal Product Detail
    $('.fn-toggle-share-group').click(function(e) {
        e.preventDefault();
        var target = $('#fn-modal-share-social-media-wrapper');
        var html = $('body');

        // Show Module Search
        target.addClass('is-active');

        // Lock Scroll Body
        html.css({ overflow: 'hidden' });
    });


    // END MODAL

    // Trigger Delivery Location Menu
    $('.fn-toggle-delivery-location').click(function() {
        $(this).parents('.c-delivery-location').toggleClass('is-expanded');
    })
    // End Trigger Delivery Location Menu

    // Smooth Scroll to Product List Category
    $(document).on('click', 'a[href^="#"].fn-product-cat-scroller', function(e) {
        var id = $(this).attr('href');
        var offsetTop = $('.main-navigation').outerHeight(true) + 15;

        var $id = $(id);
        if ( $id.length === 0 ) {
            return;
        }

        e.preventDefault();
                
        var pos = $id.offset().top - offsetTop;

        $('body, html').animate({ scrollTop: pos }, 1000);
    });

    // Show Product Category Menu if Reach First Product Item List
    $(window).scroll(function() {
        if ( $('.fn-product-list-offset').length ) {

            var target = $('#product-cat-id-01').offset().top;

            if ( $(window).scrollTop() >= target ) {
                $('.fn-product-list-offset').addClass('is-expanded')                
            } else {
                $('.fn-product-list-offset').removeClass('is-expanded')
                $('.fn-product-cat-val').selectric('close');
            }

        }
    });

    // Product Note
    $(function() {
        var target = $('.fn-max-length-typing #note-textarea');
        var maxlength = 200;
        var textCount = $('.fn-max-length-typing .fn-count');
        var textMaxCount = $('.fn-max-length-typing .fn-count-max');

        target.on('propertychange input', function(e) {
            e.preventDefault();

            textMaxCount.text(maxlength);
            var textLength = $(this).val().length;
            $(this).val($(this).val().substring(0, maxlength));
            textLength = $(this).val().length;
            var remain = maxlength - parseInt(textLength);
            textCount.text(remain);

            // Change Button Submit State if Message Length > 1
            if( textLength >= 1 ) {
                target.siblings().find('.fn-btn-submit').prop('disabled', false);
            } else {
                target.siblings().find('.fn-btn-submit').prop('disabled', true);
            }

        });

        // Remove Message if Button Close is Clicked
        $('#fn-product-note-wrapper .fn-toggle-close-modal').click(function() {
            target.val('');
        });

        // Replace Button Add Note
        target.siblings().find('.fn-btn-submit').click(function(e) {
            e.preventDefault();

            // Close Modal 
            $(this).parents('#fn-product-note-wrapper').removeClass('is-active')

            // Store Message Value
            var noteId = $(this).parents('#fn-product-note-wrapper').attr('note-for');
            var storeTarget = $('.c-product-list[product-id=' + noteId + ']').find('.fn-note-message');
            storeTarget.each(function() {
                storeTarget.val(target.val());
            });

            // Change Button Add Note to Noted
            if( storeTarget.val().length >= 1 ) {
                $('.c-product-list[product-id=' + noteId + ']').find('.fn-toggle-m-product-note').removeClass('btn-accent').addClass('btn-positive');
                $('.c-product-list[product-id=' + noteId + ']').find('.fn-toggle-m-product-note span').text('Noted');
                $('.c-product-list[product-id=' + noteId + ']').find('.fn-toggle-m-product-note svg.feather.feather-edit').replaceWith(feather.icons['check-circle'].toSvg({ 'width': 16, 'height': 16 }));
            }

            // Reset Message Value
            target.val('');
        });

        // Button Clear Note
        target.siblings().find('.fn-btn-clear').click(function(e) {
            e.preventDefault();

            // Close Modal 
            $(this).parents('#fn-product-note-wrapper').removeClass('is-active')

            // Store Message Value
            var noteId = $(this).parents('#fn-product-note-wrapper').attr('note-for');
            var storeTarget = $('.c-product-list[product-id=' + noteId + ']').find('.fn-note-message');
            storeTarget.each(function() {
                storeTarget.val('');
            });

            // Reset Button State
            target.siblings().find('.fn-btn-clear').addClass('is-hidden');
            target.siblings().find('.fn-btn-clear').prop('disabled', true);
            $('.c-product-list[product-id=' + noteId + ']').find('.fn-toggle-m-product-note').removeClass('btn-positive').addClass('btn-accent');
            $('.c-product-list[product-id=' + noteId + ']').find('.fn-toggle-m-product-note span').text('Add note');
            $('.c-product-list[product-id=' + noteId + ']').find('.fn-toggle-m-product-note svg.feather.feather-check-circle').replaceWith(feather.icons['edit'].toSvg({ 'width': 16, 'height': 16 }));

            // Reset Message Value
            target.val('');
        });        
        
    });

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

    // Autonumeric
    $('.fn-price').autoNumeric('init', {
        aSep: '.',
        aDec: ',',
        mDec: 0
    })

    // Remove preloader element
    $('.fn-preloader').fadeOut();
    $('body').removeClass('preloader-site');

    // Fn Swiper :: Header Banner
    var moduleBannerHeader = new Swiper('.fn-m-header-banner', {
        spaceBetween: 15,
        preloadImages: false,
        lazy: {
            // loadPrevNext: true,
            preloaderClass: 'header-banner-preloader'
        },
        pagination: {
            el: '.swiper-pagination'
        }
    });
    // End Fn Swiper :: Header Banner

    // Fn Swiper :: Product Category Slider
    var moduleProductCategorySlider = new Swiper('.fn-m-product-category-slider', {
        spaceBetween: 15,
        slidesPerView: 'auto',
        freeMode: true,
        freeModeMinimumVelocity: 0.1
    });
    // End Fn Swiper :: Product Category Slider

    // Check Global Product Quantity
    function checkGlobalQty() {
        var productList = $('.c-product-list[product-id] .btn-action')
        var qtySource = productList.find('input');
        var sumQty = 0;
        var arrProduct = {}

        qtySource.each(function() {
            var name = $(this).parents('.c-product-list').attr('product-id')
            arrProduct[name] = Number($(this).val())
        });
        
        $.each(arrProduct,function(sum){
            sumQty += arrProduct[sum]
        })

        // Show Button Checkout if Global Product Quantity > 1
        if ( sumQty > 0 ) {
            $('.fn-product-list-group:last').css({
                paddingBottom: $('.fn-btn-checkout').outerHeight(true)
            });
            $('.fn-btn-checkout').removeClass('is-hidden')
        } else if ( sumQty === 0 ) {
            $('.fn-product-list-group:last').css({
                paddingBottom: 0
            });            
            $('.fn-btn-checkout').addClass('is-hidden')            
        }

        if ( sumQty > 1 ) {
            $('.fn-btn-checkout .fn-total-qty').siblings().text('Items');
        } else {
            $('.fn-btn-checkout .fn-total-qty').siblings().text('Item');
        }

        // Calculate Global Quantity Product
        $('.fn-btn-checkout .fn-total-qty').text(sumQty);

    }

    // Adding Product Quantity
    $(function () {

        $('.fn-toggle-btn-qty').click(function(e) {
            var productId = $(this).parents('.c-product-list').attr('product-id');
            var subTotalValue = $('.c-product-list[product-id=' + productId + '] .fn-sub-total-value');
            var totalPrice = 0;            
            var arrPrice = {};
            var arrTotalPrice = {};

            e.preventDefault()
            
            $('.c-product-list[product-id=' + productId + ']').each(function() {
                // Hide Button Add
                $(this).find('.fn-toggle-btn-qty').addClass('is-hidden');

                // Show Button Add Note
                $(this).find('.btn-accent').addClass('is-visible');

                // Show Button Quantity
                $(this).find('.btn-product-qty').addClass('is-visible');

                // Get Price per Quantity
                var getPrice = $(this).find('.fn-price').autoNumeric('get');

                if( $('.c-product-list[product-id=' + productId + '] .btn-product-qty').hasClass('is-visible') ) {
                    // Set Product Quantity to 1 For First Add
                    $('.c-product-list[product-id=' + productId + '] .btn-product-qty input').val(1);
    
                    // Get Quantity Value
                    var newVal = $('.c-product-list[product-id=' + productId + '] .btn-product-qty input').val();
                }

                // Get Subtotal Price per Product
                var subTotalPrice = newVal * getPrice
                subTotalValue.val(subTotalPrice);

            });            
            
            // Calculate Subtotal Price Per Product
            subTotalValue.each(function() {
                var name = $(this).parents('.c-product-list').attr('product-id')
                arrPrice[name] = Number($(this).val());
            });
            
            $.each(arrPrice,function(sum){
                var subTotalPrice = 0;
                subTotalPrice += arrPrice[sum];
            });

            // Calculate Subtotal Price All Product
            $('.c-product-list .fn-sub-total-value').each(function() {
                var name = $(this).parents('.c-product-list').attr('product-id');
                arrTotalPrice[name] = Number($(this).val());
            });

            $.each(arrTotalPrice,function(sum){
                totalPrice += arrTotalPrice[sum];
            });
            
            // Convert Subtotal Price to AutoNumeric
            $('.fn-price.fn-est-price').autoNumeric('set', totalPrice);
            
            checkGlobalQty();

        });

        // Toggle Module Product Note
        $('.fn-toggle-m-product-note').click(function(e) {
            var productId = $(this).parents('.c-product-list').attr('product-id');
            var productValue = $('.c-product-list[product-id=' + productId + '] .btn-product-qty input').val();

            e.preventDefault();

            if ( productValue >= 1 ) {
                $('#fn-product-note-wrapper').addClass('is-active');
                
                setTimeout(function() {
                    // Automatically Focus to Textarea
                    $('#fn-product-note-wrapper').find('#note-textarea').focus();
                }, 100);

                // Add Product Id to Note Product
                //var productId = $(this).parents('.c-product-list').attr('product-id');
                $('#fn-product-note-wrapper').attr('note-for', productId);

                var productNote = $(this).parents('.c-product-list').find('.fn-note-message').val();
                $('#fn-product-note-wrapper[note-for=' + productId + '] #note-textarea').val(productNote);

                // Check State Value Product Note Message
                if ( $('.c-product-list[product-id=' + productId + '] .fn-note-message').val().length >= 1 ) {
                    $('#fn-product-note-wrapper[note-for=' + productId + '] .fn-btn-clear').removeClass('is-hidden');
                    $('#fn-product-note-wrapper[note-for=' + productId + '] .fn-btn-clear').prop('disabled', false);
                } else if ( $('.c-product-list[product-id=' + productId + '] .fn-note-message').val().length == 0 ) {
                    // Restore Textarea Value
                    var target = $('.fn-max-length-typing #note-textarea');
                    var maxlength = 200;
                    var textCount = $('.fn-max-length-typing .fn-count');
                    var textMaxCount = $('.fn-max-length-typing .fn-count-max');
                    target.val('');
                    textCount.text(maxlength);
                    textMaxCount.text(maxlength);

                    // Hide Button Clear Note & change state
                    $('#fn-product-note-wrapper[note-for=' + productId + '] .fn-btn-clear').addClass('is-hidden');
                    $('#fn-product-note-wrapper[note-for=' + productId + '] .fn-btn-clear').prop('disabled', true);

                    // Reset Button Submit Note
                    $('#fn-product-note-wrapper[note-for=' + productId + '] .fn-btn-submit').removeClass('is-hidden');
                    $('#fn-product-note-wrapper[note-for=' + productId + '] .fn-btn-submit').prop('disabled', true);

                }
            }
        })


        $('.c-product-list .btn-product-qty').append('<div class="inc fn-product-qty">+</div><div class="dec fn-product-qty">-</div>');
        
        $(".c-product-list[product-id] .fn-product-qty").on("click", function () {
            var productId = $(this).parents('.c-product-list').attr('product-id');
            var $button = $('.c-product-list[product-id=' + productId + '] .fn-product-qty');
            var oldValue = $('.c-product-list[product-id=' + productId + '] .btn-product-qty input').val();
            var subTotalValue = $('.c-product-list[product-id=' + productId + '] .fn-sub-total-value');
            var totalPrice = 0;
            var arrPrice = {};
            var arrTotalPrice = {};            

            $(this).each(function() {
                if ($(this).text() == "+") {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 1) {
                        newVal = parseFloat(oldValue) - 1;
                    } else {
                        // Reset Product Quantity to 0
                        newVal = 0;
                        // Hide Button Quantity
                        $button.parent().removeClass('is-visible');

                        // Show Button Add Product
                        $button.parents('.btn-action').find('.fn-toggle-btn-qty').removeClass('is-hidden');

                        // Revert Module Product Note Button to Default
                        var buttonNote = $button.parents('.btn-action').find('.fn-toggle-m-product-note');
                        if ( buttonNote.hasClass('btn-accent') ) {
                            buttonNote.removeClass('is-visible');
                        } else if ( buttonNote.hasClass('btn-positive') ) {
                            buttonNote.removeClass('is-visible btn-positive');
                            buttonNote.addClass('btn-accent');
                            buttonNote.siblings('.fn-note-message').val('');
                            buttonNote.find('span').text('Add note');
                            buttonNote.find('svg.feather.feather-check-circle').replaceWith(feather.icons['edit'].toSvg({ 'width': 16, 'height': 16 }));            
                        }
                    }
                }

                // Get Quantity Value
                $button.parent().find("input").val(newVal);

                // Get Price per Quantity
                var getPrice = $button.parents('.btn-action').siblings('.fn-price').autoNumeric('get');

                // Get Subtotal Price per Product
                var subTotalPrice = newVal * getPrice
                subTotalValue.val(subTotalPrice);

                // Calculate Subtotal Price Per Product
                subTotalValue.each(function() {
                    var name = $(this).parents('.c-product-list').attr('product-id')
                    arrPrice[name] = Number($(this).val());
                });
                
                $.each(arrPrice,function(sum){
                    subTotalPrice += arrPrice[sum];
                });

                // Calculate Subtotal Price All Product
                $('.c-product-list .fn-sub-total-value').each(function() {
                    var name = $(this).parents('.c-product-list').attr('product-id');
                    arrTotalPrice[name] = Number($(this).val());
                });

                $.each(arrTotalPrice,function(sum){
                    totalPrice += arrTotalPrice[sum];
                });
                
            });
            
            // Convert Subtotal Price to AutoNumeric
            $('.fn-price.fn-est-price').autoNumeric('set', totalPrice);
            
            checkGlobalQty();
        });


    });
    // End Adding Product Quantity

    // Selectric
    if ( $('select').length ) {
        // Global Select
        $('select').selectric({
            arrowButtonMarkup: '<div class="button"><i class="icn" data-feather="chevron-down"></i></div>',
            disableOnMobile: false,
            nativeOnMobile: false,
            responsive: true
        });

        // Custom Product Category Menu Item Builder
        $('select.fn-product-cat-val').selectric({
            optionsItemBuilder: function(itemData, element, index) {
                //return element.val().length ? '<span class="value">' + element.val() + '</span>' + itemData.text : itemData.text;
                return element.val().length ? '<a href="#product-cat-id-0' + (index + 1) + '" class="c-link fn-product-cat-scroller">'+ itemData.text + '<span class="value">' + element.val() + '</span>' + '</a>' : itemData.text;
            },
            maxHeight: 400
        });
    }

    // Trigger Scroll Product Category Menu to Product List Item
    $('.fn-product-list-offset .selectric-scroll ul li a').click(function(e) {
        var id = $(this).attr('href');
        var offsetTop = $('.main-navigation').outerHeight(true) + 15;
        var $id = $(id);

        if ( $id.length === 0 ) {
            return;
        }

        e.preventDefault();
                
        var pos = $id.offset().top - offsetTop;

        $('body, html').animate({ scrollTop: pos }, 1000);
    });

    // Change Product Category Menu List On Offset Of Product List item
    $(function() {
        var targetPoint = $('.fn-product-list-group');
        var offsetTop = $('.main-navigation').outerHeight(true) + 30;

        targetPoint.waypoint({
            handler: function(direction) {
                if (direction === 'down') {
                    var title = this.element.getAttribute('data-title');
                    var id = this.element.getAttribute('id');
                    var label = $('#product-cat-menu .selectric-wrapper ul li a[href^="#' + id + '"]');
                    $('#product-cat-menu .selectric-wrapper span.label').text(title);
                    $('#product-cat-menu .selectric-wrapper ul li').removeClass('highlighted selected');                    
                    label.parent().addClass('selected');
                }
            },
            offset: function() {
                return offsetTop;
            }
        });

        targetPoint.waypoint({
            handler: function(direction) {
                if (direction === 'up') {
                    var title = this.element.getAttribute('data-title');
                    var id = this.element.getAttribute('id');
                    var label = $('#product-cat-menu .selectric-wrapper ul li a[href^="#' + id + '"]');
                    $('#product-cat-menu .selectric-wrapper span.label').text(title);
                    $('#product-cat-menu .selectric-wrapper ul li').removeClass('highlighted selected');                    
                    label.parent().addClass('selected');
                }
            },
            offset: function() {
                return -this.element.clientHeight + ($(window).height()/2);
            }
        });
    });

    // Check Global Qty
    checkGlobalQty();

    // Feathericons
    feather.replace();

});

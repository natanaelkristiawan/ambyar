$(document).ready(function() {

    // COMPONENT DELIVERY LOCATION

        // Input Add Note Delivery Location
        $(function() {
            var $deliveryInput = $('.fn-checkout-add-note-location');

            $deliveryInput.on('propertychange input', function(e) {
                e.preventDefault();

                var textLength = $(this).val().length;
                textLength = $(this).val().length;

                // Display Icon X if Input Value >= 1
                if( textLength >= 1 ) {
                    $(this).siblings('.feather-x').addClass('is-visible');
                } else {
                    $(this).siblings('.feather-x').removeClass('is-visible');
                }
            });

            // Clear Note if Icon Close Is Clicked
            $deliveryInput.siblings('.feather-x').click(function() {
                var textLength = $($deliveryInput).val().length;

                $deliveryInput.siblings('.feather-x').removeClass('is-visible');
                $deliveryInput.val('');
            });
        });

    // COMPONENT DELIVERY LOCATION

    

    // MODAL

        // Triger Modal Checkout Delivery Location :: Option Panel
        $('.fn-toggle-modal-checkout-delivery-location').click(function() {
            var target = $('#fn-modal-checkout-delivery-location-wrapper');
            var html = $('body');

            // Show Module Search
            target.addClass('is-active');

            // Lock Scroll Body
            html.css({ overflow: 'hidden' });
        });

        // Trigger Modal Checkout Delivery Location :: Panel Map
        $('.fn-toggle-checkout-delivery-location-map').click(function() {
            var target = $('#fn-modal-checkout-delivery-location-wrapper.is-active');

            // Toggle Class Modal
            target.addClass('is-select-on-map');

            // Change Text
            target.find('.panel-heading h6').text('Select on map');
        });

        // Back to Modal Checkout Delivery Location :: Option Panel
        $('.fn-toggle-close-select-on-map').click(function() {
            var target = $('#fn-modal-checkout-delivery-location-wrapper.is-active.is-select-on-map');

            // Toggle Class Modal
            target.removeClass('is-select-on-map');

            // Change Text
            target.find('.panel-heading h6').text('Select delivery location');
        });

        // Trigger Modal Checkout Pormo List
        $('.fn-toggle-modal-checkout-promo-list').click(function() {
            var target = $('#fn-modal-checkout-promo-list-wrapper');
            var html = $('body');

            // Show Component Modal
            target.addClass('is-active');

            // Lock Scroll Body
            html.css({ overflow: 'hidden' });
        });

        // Close Modal Checkout Pormo List Via Button / Link Use Code
        $('.fn-select-promo-code').click(function(e) {
            e.preventDefault();
            
            var Modal = $(this).parents('.modal-overlay');
            var html = $('body');
    
            // Hide Component Modal
            Modal.removeClass('is-active');
        
            // Release Scroll Body
            html.css({ overflow: 'auto' });
        })


        // Trigger Modal Checkout Payment Method
        $('.fn-toggle-modal-checkout-payment-method-list').click(function() {
            var target = $('#fn-modal-checkout-payment-method-wrapper');
            var html = $('body');

            // Show Component Modal
            target.addClass('is-active');

            // Lock Scroll Body
            html.css({ overflow: 'hidden' });
        });

        // Close Modal Checkout Payment Method Via Button / Link Select Payment Method
        $('.fn-select-payment-method').click(function(e) {
            e.preventDefault();
            
            var Modal = $(this).parents('.modal-overlay');
            var html = $('body');
    
            // Hide Component Modal
            Modal.removeClass('is-active');
        
            // Release Scroll Body
            html.css({ overflow: 'auto' });
        });


    // MODAL



    // ORDER ITEM :: COMPONENT PRODUCT LIST
    $(function () {

        // Delete Component Product List if Quantity Product = 0
        $("#form-product-checkout .c-product-list[product-id] .fn-product-qty.dec").on("click", function (e) {
            e.preventDefault();

            if ( $(this).siblings('input').val() < 1 ) {
                $(this).parents('.c-product-list[product-id]').remove();
            }
        });

    });
        

    // END ORDER ITEM :: COMPONENT PRODUCT LIST

});

window.addEventListener('load', function () {

    // Add Padding Bottom on Checkout Page
    if ( $('.fn-btn-order').length ) {
        $('.c-checkout-payment-detail').css({
            paddingBottom: $('.fn-btn-order').outerHeight(true) + 30
        });
    }


});
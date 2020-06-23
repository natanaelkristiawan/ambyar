$(document).ready(function() {

    // Countdown init
    $(function() {
        if ( $('.fn-countdown').length ) {
            var oneHour = new Date().getTime() + 3.6e+6;
            $('.fn-countdown').countdown(oneHour, {elapse: true})
            .on('update.countdown', function(event) {
                if (event.elapsed) {
                    // End
                } else {
                    $(this).html(event.strftime('<div class="panel"><h3 class="heading primary">%H<span class="dot">:</span></h3><span class="small-2 secondary">Hours</span></div><div class="panel"><h3 class="heading primary">%M<span class="dot">:</span></h3><span class="small-2 secondary">Minutes</span></div><div class="panel"><h3 class="heading primary">%S</h3><span class="small-2 secondary">Seconds</span></div>'));
                }
            });
        }
    });

    // Clipboard Copy Text
    new ClipboardJS('.fn-copy-text');
    var clipboard = new ClipboardJS('.fn-copy-text');
    clipboard.on('success', function(e) {
        // Show Notification
        var notification = $('.fn-notification-bar');
        notification.addClass('is-expanded');

        // Timeout To Hide Notification
        setTimeout(function() {
            notification.removeClass('is-expanded');
        }, 2000);

        e.clearSelection();
    });

    // Close Notification Bar
    $('.fn-close-notification').click(function(e) {
        $(this).removeClass('is-expanded');
    });

});

window.addEventListener('load', function () {

    // Add Padding Bottom on Checkout Page
    if ( $('.fn-btn-helper').length ) {
        $('.c-end-screen-payment-detail:last').css({
            paddingBottom: $('.fn-btn-helper').outerHeight(true) + 30
        });
    } else {
        $('.c-end-screen-payment-detail:last').css({
            paddingBottom: 30
        });
    }


});
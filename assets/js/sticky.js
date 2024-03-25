(function($) {

    $.fn.stickify = function (options) {

        var $selector = this;

        // Set default options
        var defaultOptions = {
            position: 'top',
            animationDuration: '0.4',
            reverse: false,
            width: '100%',
            zIndex: '9999'
        };

        var opts = $.extend({}, defaultOptions, options);

        // Hide element on scroll down
        var isScroll;
        var lastScrollTop = 0;
        var index = 5;
        var elementHeight = $selector.outerHeight();

        $(window).scroll(function(event){
            isScroll = true;
        });

        setInterval(function() {
            if (isScroll && opts.reverse === true) {
                hasScrolled();
                isScroll = false;
            } else {
                fixedHeader();
            }
        }, 250);

        function fixedHeader() {

            var scroll = $(window).scrollTop();

            if (scroll >= 100) $selector
                .css('position', 'fixed')
                .css(opts.position, '0')
                .css('width', opts.width)
                .css('z-index', opts.zIndex)
        }

        function hasScrolled() {
            var scrollTop = $(this).scrollTop();

            // Make sure to scroll more than index
            if(Math.abs(lastScrollTop - scrollTop) <= index)
                return;

            if (scrollTop > lastScrollTop && scrollTop > elementHeight){
                // Scroll Down
                $selector
                    .css('position', 'fixed')
                    .css(opts.position, '0')
                    .css('transition', opts.position + ' ' + opts.animationDuration + 's ease-in-out')
                    .css(opts.position, '-1000px')
                    .css('width', opts.width)
                    .css('z-index', opts.zIndex)

            } else {
                // Scroll Up
                if(scrollTop + $(window).height() < $(document).height()) {
                    $selector
                        .css(opts.position, '-1000px')
                        .css('transition', opts.position + ' ' + opts.animationDuration + 's ease-in-out')
                        .css(opts.position, '0')
                        .css('width', opts.width)
                        .css('z-index', opts.zIndex)
                }
            }

            lastScrollTop = scrollTop;
        }

        return this;

    };

})(jQuery);
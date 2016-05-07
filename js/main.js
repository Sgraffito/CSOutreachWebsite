/**
 * Created by npy on 4/28/16.
 */

//window.onload(doSomething());


(function($){
    // your code
    $(document).ready(function(){
        //alert("hello");
    });

    function equalizeHeights(selector) {

        var heights = new Array();

        var test = document.getElementsByClassName(selector);
        $(test).each(function () {
            console.log($(this).height());

            $(this).css('min-height', '0px');
            $(this).css('max-height', 'none');
            $(this).css('height', 'auto');

            heights.push($(this).height());
        });

        console.log(heights);

        // Get max height
        var maxHeight = 0;
        $(test).each(function () {
            if ($(this).height() > maxHeight) {
                maxHeight = $(this).height();
            }
        });

        console.log("max height: " + maxHeight);

        // Set height of panels to max height
        $(test).each(function () {
            $(this).css('height', maxHeight + 'px');
        });

        // Loop to get all element heights
        // $(test).each(function() {
        //     //console.log("max: " + $(this).height);
        //     // Need to let sizes be whatever they want so no overflow on resize
        //
        //
        //     // Then add size (no units) to array
        //     heights.push($(this).height());
        // });

        // Find max height of all elements
        //var max = Math.max.apply( Math, heights );

        // console.log("max" + max);
        // // Set all heights to max height
        // $(selector).each(function() {
        //     $(this).css('height', max + 'px');
        // });
    }

    $(window).load(function() {

        // Fix heights on page load
        equalizeHeights("content-block");

        // Fix heights on window resize
        $(window).resize(function() {

            // Needs to be a timeout function so it doesn't fire every ms of resize
            setTimeout(function() {
                equalizeHeights("content-block");
            }, 120);
        });
    });

})(jQuery);
(function($) {
    // codes
    $(window).on("load", function() { /*...*/ });
})(jQuery);
jQuery(document).ready(function($){

    $('.img-thumbnail').hover(function() {
        $(this).attr('src', 'static/images/personalPhoto.jpg');
    },function () {
        $(this).attr('src', 'static/images/avatar.jpg');
    });

});
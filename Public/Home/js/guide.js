define(['jquery','lightbox','masonry','imagesloaded'],
function () {
    return {
        init:function(){
           /* $('.l_menu li').click(function(){
                $(this).addClass('on').siblings().removeClass('on');
            })*/

        },
        loadMasonry:function(){
            $(function(){
                var $container = $('#masonry_box');
                $container.imagesLoaded( function(){
                    $container.masonry({
                        itemSelector : '.masonry_item',
                        gutterWidth : 20,
                        isAnimated: true
                    });
                });
            });
        }
    }
});
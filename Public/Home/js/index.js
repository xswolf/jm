define(['jquery', 'fullpage','lazyload'],
    function ($) {
        return {
           init:function(){
               setTimeout(function(){
                   $('.am1_1').show().addClass('bounceInLeft');
                   setTimeout(function(){
                       $('.am1_2').show().addClass('bounceInLeft');
                   },800);
               },800);
               $('#dowebok').fullpage({
                   afterLoad: function(anchorLink, index){
                       if(index == 2){
                           setTimeout(function(){
                               $('.v2 .txt_box').show().addClass('fadeInDown');
                               setTimeout(function(){
                                   $('.am2_2').show().addClass('bounceInLeft');
                                   setTimeout(function(){
                                       $('.am2_3').show().addClass('bounceInLeft');
                                       setTimeout(function(){
                                           $('.am2_4').show().addClass('bounceInLeft');
                                       },800);
                                   },800);
                               },800);
                           },800);
                       }
                       if(index == 3){
                           setTimeout(function(){
                               $('.v3 .txt_box').show().addClass('fadeInDown');
                               setTimeout(function(){
                                   $('.am3_1').show().addClass('fadeIn');
                                   setTimeout(function(){
                                       $('.am3_2').show().addClass('fadeIn');
                                       setTimeout(function(){
                                           $('.am3_3').show().addClass('fadeIn');
                                       },800);
                                   },800);
                               },800);
                           },800);
                       }
                       if(index == 4){
                            $('#gonext').hide();
                       }
                   }
               });
               $('img.list').lazyload();
               $(document).on('click', '#gonext', function(){
                   $.fn.fullpage.moveSectionDown();
               });
           }
       }
});



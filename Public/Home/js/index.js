define(['jquery', 'fullpage'],
    function ($) {
        return {
           init:function(){
               $('#gonext').show();
               setTimeout(function(){
                   $('.v1 .txt_box').show().addClass('fadeInDown');
                   setTimeout(function(){
                       $('.am1_1').show().addClass('bounceInLeft');
                       setTimeout(function(){
                           $('.am1_2').show().addClass('bounceInLeft');
                           setTimeout(function(){
                               $('.am1_3').show().addClass('fadeIn');
                           },800);
                       },800);
                   },800);
               },100);
               $('#dowebok').fullpage({
                   afterRender:function(){
                        $('.section').eq(1).show();
                        $('.section').eq(2).show();
                        $('.section').eq(3).show();
                   },
                   afterLoad: function(anchorLink, index){
                       if(index == 1){
                          setTimeout(function(){
                              $('div[data-bglazy]').each(function(){
                                    $(this).css('backgroundImage','url('+$(this).data('bglazy')+')');
                              });
                              $('img[data-lazy]').each(function(){
                                    $(this).attr('src',$(this).data('lazy'));
                              })
                          },500)
                       }
                       if(index == 2){
                           $('#gonext').show();
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
                           },100);
                       }
                       if(index == 3){
                           $('#gonext').show();
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
                           },100);
                       }
                       if(index == 4){
                            $('#gonext').hide();
                       }
                   }
               });
               $(document).on('click', '#gonext', function(){
                   $.fn.fullpage.moveSectionDown();
               });
           }
       }
});




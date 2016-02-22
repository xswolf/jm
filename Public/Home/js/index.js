define(['fullpage','excoloSlider'],
    function () {
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
                           },300);
                       },300);
                   },300);
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
                                       },300);
                                   },300);
                               },300);
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
                                       },300);
                                   },300);
                               },300);
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
           },
            loadImgSlider:function(){
                $(function(){
                    $("#slider_1").excoloSlider();
                })
            },
            loadMenu:function(){
                $('.menu__item').click(function(){
                    var li = $(this).index()+1;
                    $(this).addClass('menu__item--current').siblings().removeClass('menu__item--current');
                    $('#slider_'+li).show().siblings('div').hide();
                    if($('#slider_'+li).attr('data-load') != '1'){
                        $("#slider_"+li).excoloSlider();
                        $("#slider_"+li).attr('data-load','1');
                    }

                })
            },
            anchor:function(){
                $(function(){
                    var tar = getUrlParam('tar');
                    switch(tar){
                        case 'hj':
                                $('html,body').animate({ scrollTop: $('#Ceres').offset().top}, 'slow');
                                $('.item1>a').trigger('click');
                            break;
                        case 'ss':
                                $('html,body').animate({ scrollTop: $('#Ceres').offset().top}, 'slow');
                                $('.item2>a').trigger('click');
                            break;
                        case 'fw':
                                $('html,body').animate({ scrollTop: $('#Ceres').offset().top}, 'slow');
                                $('.item3>a').trigger('click');
                            break;
                    }
                });
            },
            headerMenu:function(){
                $('.nav_a').each(function(){
                    $(this).click(function(){
                        $(this).next('.nav_option').toggle();
                    })
                })
            }
       }
});





/**
 * Created by Administrator on 2016/2/3.
 */
require.config({
    urlArgs: "bust=" + (new Date()).getTime(), // 清除缓存
    baseUrl: '/Public/Home/js',
    paths: {
        jquery: 'plugin/jquery/jquery_1.8.3.min',
        fullpage: 'plugin/jquery/jquery.fullpage.min',
        excoloSlider: 'plugin/jquery/jquery.excoloSlider.min',
        adapt: 'plugin/jquery/adapt.min'
    }
});

define(['index'],
    function (index) {
            index.init();
            index.loadImgSlider();
            index.loadMenu();
    });






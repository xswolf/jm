/**
 * Created by Administrator on 2016/2/3.
 */
require.config({
    urlArgs: "bust=" + (new Date()).getTime(), // 清除缓存
    baseUrl: '/Public/Home/js',
    paths: {
        jquery: 'plugin/jquery/jquery_min',
        fullpage: 'plugin/jquery/jquery.fullpage.min',
        lazyload: 'plugin/jquery/jquery.lazyload.min'
    }
});

define(['index'],
    function (index) {
            index.init();
    });




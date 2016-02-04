/**
 * Created by Administrator on 2016/2/3.
 */
require.config({
    urlArgs: "bust=" + (new Date()).getTime(), // 清除缓存
    baseUrl: 'Public/Home',
    paths: {
        jquery: 'js/plugin/jquery/jquery_min',
        fullpage: 'js/plugin/jquery/jquery.fullpage.min',
        index: 'js/index'
    }
});

define(['index'],
    function (index) {
            index.init();
    });
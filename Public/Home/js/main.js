/**
 * Created by Administrator on 2016/2/3.
 */
require.config({
    urlArgs: "bust=" + (new Date()).getTime(), // 清除缓存
    baseUrl: '/Public/Home/js',
    paths: {
        jquery: 'jquery',
        fullpage: 'plugin/jquery/jquery.fullpage.min',
        excoloSlider: 'plugin/jquery/jquery.excoloSlider',
        adapt: 'plugin/jquery/adapt.min'
    }
});





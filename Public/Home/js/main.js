/**
 * Created by Administrator on 2016/2/3.
 */
require.config({
    urlArgs: "bust=" + (new Date()).getTime(), // 清除缓存
    baseUrl: '/Public/js',
    paths: {
        jquery: 'plugin/jquery/jquery_min'
    }
});


requirejs(['jquery',  'comm'],
    function   ($, comm) {
        console.log(comm)
    });
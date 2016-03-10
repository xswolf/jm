function GetQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null)return unescape(r[2]);
    return null;
}
/**
 * 时间戳转日期
 * @param unix
 * @returns {string|*}
 */
function unix_to_datetime(unix) {
    var timestr = new Date(parseInt(unix) * 1000);
    var y = timestr.getFullYear();
    var m = timestr.getMonth() + 1;
    var d = timestr.getDate();
    return y + '-' + add0(m) + '-' + add0(d);
}
function add0(m) {
    return m < 10 ? '0' + m : m
}


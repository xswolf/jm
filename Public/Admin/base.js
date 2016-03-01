/**
 * Created by Administrator on 2016/2/14.
 */
$(".btn_del").click(function () {
    var obj = $(this);
// 四个选项都是可选参数
    Modal.alert(
        {
            msg: '内容',
            title: '标题',
            btnok: '确定',
            btncl: '取消'
        });

// 如需增加回调函数，后面直接加 .on( function(e){} );
// 点击“确定” e: true
// 点击“取消” e: false
    Modal.confirm(
        {
            msg: "是否删除？"
        })
        .on(function (e) {
            if (e) {
                var url = obj.data('url');
                location.href = url;
            }
        }, "json");
})


$(function () {
    // 消息提示
    var message_cookie = $.cookie('message');
    if (message_cookie != null && message_cookie !== undefined)    message_cookie = JSON.parse(message_cookie);
    if (message_cookie != '' && message_cookie != undefined && message_cookie != 'null') {
        var _class = message_cookie.status == 1 ? 'alert-success' : 'alert-danger';
        $("." + _class).text(message_cookie.message).show();
        var success_hide = function () {
            $("." + _class).hide()
        }
        setTimeout(success_hide, 3000);
        $.cookie('message' , null);
    }
})

//文件上传
$("#file-4").fileinput({
    initialPreview: [

        "<img src='"+$("#file-4").attr('value')+"' class='file-preview-image' />"

    ]
});
$('#file-4').on('fileuploaded', function(event, file, previewId, index, reader) {
    if(file.response.status) {
        layer.msg(file.response.info);
        $('#file-4-value').attr({value:file.response.imgurl});
        $('#file-4-fileurl').attr({value:file.response.fileurl});
    } else {
        layer.msg(file.response.info);
    }

});

//文章提交验证
$('.news-submit').click(function() {
    var form = $(document.savenews);
    var name = $('input[name="title"]',form);
    var description = $('input[name="description"]',form);
    var news_icon_url = $('input[name="news_icon_url"]',form);
    var content=UE.getEditor('content').getContent(); //取得纯文本

    if($.trim(name.val()) == '') {
        layer.msg('标题不能为空');
        return false;
    }
    if($.trim(description.val()) == '') {
        layer.msg('描述不能为空');
        return false;
    }
    if($.trim(news_icon_url.val()) == '') {
        layer.msg('请上传图片');
        return false;
    }
    if(content == '') {
        layer.msg('内容不能为空');
        return false;
    }

    form.submit();
});

//图片提交验证
$('.images-submit').click(function() {
    var form = $(document.saveImages);
    var name = $('input[name="name"]',form);
    var img = $('input[name="img"]',form);
    var fileurl = $('input[name="fileurl"]',form);

    if($.trim(name.val()) == '') {
        layer.msg('标题不能为空');
        return false;
    }
    if($.trim(img.val()) == '') {
        layer.msg('请上传图片');
        return false;
    }

    form.submit();
});
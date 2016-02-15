/**
 * Created by Administrator on 2016/2/14.
 */
$(".btn_del").click(function(){
var obj = $(this);
// 四个选项都是可选参数
    Modal.alert(
        {
            msg: '内容',
            title: '标题',
            btnok: '确定',
            btncl:'取消'
        });

// 如需增加回调函数，后面直接加 .on( function(e){} );
// 点击“确定” e: true
// 点击“取消” e: false
    Modal.confirm(
        {
            msg: "是否删除角色？"
        })
        .on( function (e) {
            if(e) {
                var url = obj.data('url');
                var table = obj.data('table');
                $.post(url,{table:table},
                    function(data){
                        if(data) {
                            alert('删除成功！');
                            obj.parent().prev().text('删除');
                        } else {
                            alert('删除失败！');
                        }
                    });
            }
        },"json");
})

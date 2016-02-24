/**
 * Created by Administrator on 2016/2/23.
 */
function costli(i) {
    if(i == 1){
        $('#cost_li1').css({ color: "#996c33", background: "#fffbf5" });
        $('#cost_li2').css({ color: "white", background: "#b38850" });
        $('#cost_li3').css({ color: "white", background: "#b38850" });
        $('#cost_li4').css({ color: "white", background: "#b38850" });
        $("#cost_p1").html("当前位置：热门咨询");
    } else if(i == 2) {
        $('#cost_li1').css({ color: "white", background: "#b38850" });
        $('#cost_li2').css({ color: "#996c33", background: "#fffbf5" });
        $('#cost_li3').css({ color: "white", background: "#b38850" });
        $('#cost_li4').css({ color: "white", background: "#b38850" });
        $("#cost_p1").html("当前位置：赴美费用");
    } else if(i == 3) {
        $('#cost_li1').css({ color: "white", background: "#b38850" });
        $('#cost_li2').css({ color: "white", background: "#b38850" });
        $('#cost_li3').css({ color: "#996c33", background: "#fffbf5" });
        $('#cost_li4').css({ color: "white", background: "#b38850" });
        $("#cost_p1").html("当前位置：赴美准备");
    } else if(i == 4) {
        $('#cost_li1').css({ color: "white", background: "#b38850" });
        $('#cost_li2').css({ color: "white", background: "#b38850" });
        $('#cost_li3').css({ color: "white", background: "#b38850" });
        $('#cost_li4').css({ color: "#996c33", background: "#fffbf5" });
        $("#cost_p1").html("当前位置：赴美攻略");
    }
    //$('#cost_li1').attr({css:"background-color: #fffbf5"});
}
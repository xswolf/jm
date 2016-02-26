define(
    function () {
        return {
            hdrInit: function () {
                $(".sprite_menu").on("click", function (e) {
                    $(this).toggleClass('white').next().toggle();
                    $(document).one("click", function () {
                        $("#phone_box,#menu_box").hide();
                        $('.sprite_phone,.sprite_menu').removeClass('white');
                    });
                    e.stopPropagation();
                });
                $(".sprite_phone").on("click", function (e) {
                    $(this).toggleClass('white').next().toggle();
                    $(document).one("click", function () {
                        $("#phone_box,#menu_box").hide();
                        $('.sprite_phone,.sprite_menu').removeClass('white');
                    });
                    e.stopPropagation();
                });
                $("#phone_box,#menu_box").on("click", function (e) {
                    e.stopPropagation();
                });
            },
            index: function () {
                $('#dowebok').fullpage({
                    afterRender: function () {
                        $('.section').eq(1).show();
                        $('.section').eq(2).show();
                        $('.section').eq(3).show();
                    },
                    afterLoad: function (anchorLink, index) {
                        if (index == 1) {

                        }
                        if (index == 2) {

                        }
                        if (index == 3) {

                        }
                        if (index == 4) {
//                                $('#gonext').hide();
                        }
                    }
                });
            }
        }
    });

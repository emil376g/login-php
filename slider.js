    $(document).ready(function () {
        $(".slider").width($(".sliderImg").width() * 6);
        $(".sliderImg").width($(".slider").width() / 6);
        var imgSize = -$(".sliderImg").width();
        var curImageLeft = 0;
        var curImg = 1;
        $(".slider").css("display", "flex")
        $(".slider").css("margin-left", imgSize)
        $(".arrowRight").on("click", function () {
            curImg++;
            var curImageRight = -$(".sliderImg").width() * curImg;
            $(".slider").animate({
                marginLeft: curImageRight
            });
            if (curImg >= 5) {
                curImg = 1;
                curImageRight = -$(".sliderImg").width() * curImg;
                $(".slider").animate({
                    marginLeft: curImageRight
                }, 0)
            }
        })
        $(".arrowLeft").on("click", function () {
            curImg--;
            curImageLeft = -$(".sliderImg").width() * curImg;
            $(".slider").animate({
                marginLeft: curImageLeft
            })
            if (curImg <= 0) {
                curImg = 4;
                curImageLeft = -$(".sliderImg").width() * curImg;
                $(".slider").animate({
                    marginLeft: curImageLeft
                }, 0)
            }
        })
        $(window).resize(function () {
            $(".slider").width($(window).width() * 6);
            $(".sliderImg").width($(".slider").width() / 6);
            var imgSize = -$(".sliderImg").width();
            var curImageLeft = 0;
            var curImg = 1;
            $(".slider").css("display", "flex")
            $(".slider").css("margin-left", imgSize)
            $(".arrowRight").on("click", function () {
                curImg++;
                var curImageRight = -$(".sliderImg").width() * curImg;
                $(".slider").animate({
                    marginLeft: curImageRight
                });
                if (curImg >= 5) {
                    curImg = 1;
                    curImageRight = -$(".sliderImg").width() * curImg;
                    $(".slider").animate({
                        marginLeft: curImageRight
                    }, 0)
                }
            })
            $(".arrowLeft").on("click", function () {
                curImg--;
                curImageLeft = -$(".sliderImg").width() * curImg;
                $(".slider").animate({
                    marginLeft: curImageLeft
                })
                if (curImg <= 0) {
                    curImg = 4;
                    curImageLeft = -$(".sliderImg").width() * curImg;
                    $(".slider").animate({
                        marginLeft: curImageLeft
                    }, 0)
                }
            })
        })
        $(".NavItem").on("click", function () {
            $(".activ").removeClass("activ");
            $(this).addClass("activ")
        });
        console.log;
        ($("body").width());
        if ($(window).width() < 700) {
            $(".navBar").css("display", "inline-block")
            $(".navBar").hide();
            $(".fa-bars").show();
            $(".fa-bars").on("click", function () {
                if ($(".navBar").css("display") == "none") {
                    $(".navBar").show();
                }
                else {
                    $(".navBar").hide();
                }
            })
        }
    })
//右侧固定客服
$(".kefu-box2 ul li").each(function(){ 
    var _this = this
    $(this).find("a").hover(function () {
        $(_this).find("span").stop(true, true).show();
        $(_this).find("span em").stop(true, true).animate({right: "0"},200);
    },function() {
        $(_this).find("span").stop(true, true).hide();
        $(_this).find("span em").css({ "right": "10px"});
    });
});

$(".gotop").hover(function () {
    $(this).find("span ").stop(true, true).show();
    $(this).find("span em").stop(true, true).animate({right: "0"},200);
},function() {
    $(this).find("span").stop(true, true).hide();
    $(this).find("span em").css({ "right": "10px"});
});
$(".gotop").click(function(){
    $('body,html').animate({scrollTop:0},300);
});



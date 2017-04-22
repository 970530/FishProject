//图片缩放方法
function ImgPosInitMobs(obj, type) {
    var img = $(obj);
    if (typeof obj.naturalWidth != "undefined") {
        var realWidth = obj.naturalWidth;
        var realHeight = obj.naturalHeight;
         var standwidth=$(obj).parent().parent().width();
         var standheight=$(obj).parent().parent().height();
        if (type == 2) {
            if (realWidth/realHeight > standwidth/standheight) {
                var realWidth1 =standwidth;
                var realHeight1=standwidth * realHeight / realWidth;
            }else {
                var realHeight1=standheight;
                var realWidth1=standheight * realWidth / realHeight;
            }
            img.width(realWidth1);
            img.height(realHeight1);
        }
        img.css("margin-top", -(realHeight1 - standheight) / 2);
        img.css("margin-left", -(realWidth1 - standwidth) / 2);
    }else {
        var imageobj = new Image();
        imageobj.onload = function () {
            var realWidth = imageobj.width;
            var realHeight = imageobj.height;
            var standwidth=$(obj).parent().parent().width();
             var standheight=$(obj).parent().parent().height();
            if (type == 2) {
                if (realWidth > realHeight) {
                    var realWidth1 =standwidth;
                    var realHeight1=standwidth * realHeight / realWidth;
                }else {
                    var realHeight1=standheight;
                    var realWidth1=standheight * realWidth / realHeight;
                }
            }
            img.width(realWidth1);
            img.height(realHeight1);
            img.css("margin-top", -(realHeight1 - standheight) / 2);
            img.css("margin-left", -(realWidth1- standwidth) / 2);
        }
        imageobj.src = obj.src;
    }
}
//资讯二维码
$(document).on('mouseover','.weixin',function(){
    $(".show-wx",this).animate({top: '-340px'}, 300)
});
$(document).on('mouseout','.weixin',function(){
    $(".show-wx",this).animate({top: '-610px'}, 0);
});
//个人二维码
$(document).on('mouseover','.weixin2',function(){
    $(".show-wx",this).animate({right: '185px',top:'20px'}, 300);
});
$(document).on('mouseout','.weixin2',function(){
    $(".show-wx",this).animate({top: '-182px'}, 0);
});

$(".top-select ul .item").hover(function() {
    $(this).find(".show-list").show();
    $(this).find(".angle i").removeClass('fa-angle-down').addClass('fa-angle-up');
}, function() {
    $(this).find(".show-list").hide();
    $(this).find(".angle i").removeClass('fa-angle-up').addClass('fa-angle-down');
});
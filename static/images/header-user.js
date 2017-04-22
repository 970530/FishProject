$(function() {
	getuserinfo();
	$("#model-li").hover(function() {
		$("#model-li .navlist").show();
	}, function() {
		$("#model-li .navlist").hide();
	});
	$("#quick-upload").hover(function() {
		$("#quick-upload .upload-ul").show();
	}, function() {
		$("#quick-upload .upload-ul").hide();
	});

	$("#public-header .top-nav li").click(function(event) {
		$("#public-header .top-nav li").removeClass('active');
		$(this).addClass('active');
		$("#searchbox-type").val($("#public-header .top-nav li").index(this));
	});

	$("#searchbox-submit").click(function(event) {
		var keywords = $("#searchbox-keywords").val();
		var type = 0;
		type = $("#select-sub").val();
		// if (keywords == "") {
		// 	layer.msg("请输入关键词");
		// 	return;
		// }
		$.getJSON('http://data.justeasy.cn/search.cgi?callback=?', {
			type: type,
			keywords: keywords
		}, function(data, textStatus) {
			if (data && data.status == 200) {
				location = data.location;
			}
		});
	});
	
	browsercheck();

	$(document).keydown(function(event){
		var code=event.which;
		var keywords = $("#searchbox-keywords").val();
		if(keywords && code==13 && $("#searchbox-keywords").is(":focus")){
			$("#searchbox-submit").click();
		}
	})
	

})

function getuserinfo(){
	$.getJSON('http://data.justeasy.cn/open/index/getLoginInfo.cgi?callback=?', function(json, textStatus) {
		if (json && json.status == 200) {
			var data = json.info;
			$("#nologin").remove();
			$("#haslogin").show();
			$("#msgbox").show();
			$("#managecenter").show();
			if (data.msgnum > 0) {
				$("#msgnum").text(data.msgnum);
			} else {
				$("#msgnum").hide();
			}
			$("#nickname").text(data.nickname ? data.nickname : data.username);
			var avatar = data.avatar;
			if (avatar == "" || avatar == null || avatar == "null") {
				avatar = 'http://res1.justeasy.cn/images/defaulthead.jpg';
			}
			if (avatar.indexOf("http://") >= 0 || avatar.indexOf("https://") >= 0) {
				avatar = avatar;
			} else {
				avatar = "http://big.justeasy.cn/avatar/" + avatar;
			}
			$("#user-box-avatar").attr("src", avatar);
			$("#user-box-userid").text("建E号：" + data.id);
			var isyear = data.isyear;
			if (isyear == "1") {
				isyear = "年会员";
			} else {
				isyear = "普通会员";
			}
			$("#user-box-vip").html(isyear);
			$("#user-box-point").text(Number(data.point).toFixed(2));
			$("#user-box-rmb").text(Number(data.rmb).toFixed(2));
			$("#user-box-xrb").text(Number(data.xrb).toFixed(2));
			$("#user-box-coin").text(data.ecoin);
			var openid =data.openid.replace(/(^\s*)|(\s*$)/g, "")
			if(openid == "" || openid == null || openid == "null"){
				$(".doted-red").show();
			}
		} else {
			$("#nologin").show();
		}
	});
}
function layerLogin(obj,type) {
	$.ajax({
		url:"http://data.justeasy.cn/login.php",
		type:"POST",
		dataType:'jsonp',
		data:{obj:obj,type:type,},
		success:function(data, textStatus){
			lf = layer.open({type: 1, title:false, area: ['430px', '440px'], content: data.message, 'skin':'yourclass'});
			
		}
	})	
}
function layerAdvise(type) {
	$.ajax({
		url:"http://data.justeasy.cn/advise.php",
		type:"POST",
		dataType:'jsonp',
		data:{type:type},
		success:function(data, textStatus){
			lf = layer.open({type: 1, title:'问题建议', area: ['480px', '500px'], content: data.message, 'skin':'layui-custom'});
		}
	})	
}
function browsercheck(){
	var browserInfo = {browser:"", version: ""};
    var ua = navigator.userAgent.toLowerCase();
    if (window.ActiveXObject) {
        browserInfo.browser = "IE";
        browserInfo.version = ua.match(/msie ([\d.]+)/)[1];
        if(browserInfo.version <= 8){
            alert('您的ie浏览器版本过低，建议使用chorme浏览器或升级到最新的IE版本');
        }
    }
}
	
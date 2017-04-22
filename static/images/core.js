var JIANE = window.JIANE || {};
JIANE.cookie = {
	set: function(name, value, domain, path, hour) {
		var expire = new Date;
		if (hour) {
			var today = new Date;

			expire.setTime(today.getTime() + 36E5 * hour);
		}
		document.cookie = name + "=" + encodeURIComponent(escape(value)) + "; " + (hour ? "expires=" + expire.toGMTString() + "; " : "") + (path ? "path=" + path + "; " : "path=/; ") + (domain ? "domain=" + domain + ";" : "");
		return true;
	},
	get: function(name) {
		var r = new RegExp("(?:^|;+|\\s+)" + name + "=([^;]*)");
		var m = document.cookie.match(r);
		return decodeURIComponent(!m ? "" : m[1]);
	},
	del: function(name, domain, path) {
		document.cookie = name + "=; expires=Mon, 26 Jul 1997 05:00:00 GMT; " + (path ? "path=" + path + "; " : "path=/; ") + (domain ? "domain=" + domain + ";" : "");
	}
};

JIANE.urls = {
	'user': 'http://reg.justeasy.cn/',
	'api': 'http://data.justeasy.cn/',
	'tushuo': 'http://pic.justeasy.cn/',
	'www': 'http://www.justeasy.cn/',
	'smallimg': 'http://small.justeasy.cn/',
	'bigimg': 'http://big.justeasy.cn/',
	'avatar': 'http://big.justeasy.cn/avatar/'
}

function checkEmail(strEmail) {
	var emailReg = /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/;
	return emailReg.test(strEmail);
}

function checkPhone(strPhone) {
	var phoneReg = /^[1][3,4,5,7,8][0-9]{9}$/;
	return phoneReg.test(strPhone);
}

function checkQQ(strQQ) {
	var QQReg = /^[1-9]\d{4,12}$/;
	return QQReg.test(strQQ);
}

function checkPassword(pwd) {
	var result = new Object();
	result.result = true;
	if (!pwd) {
		result.result = false;
		result.tips = "请输入密码";
		return result;
	}
	if (pwd.length < 6 || pwd.length > 20) {
		result.result = false;
		result.tips = "请输入6-20位字母和数字的组合";
		return result;
	}
	//全数字
	if (/^[0-9]{6,20}$/.exec(pwd)) {
		result.result = false;
		result.tips = "请使用字母和数字组合";
		return result;
	}
	//全字母
	if (/^[a-zA-Z]{6,20}$/.exec(pwd)) {
		result.result = false;
		result.tips = "请使用字母和数字组合";
		return result;
	}
	//非字母或者数字
	if (!/^[a-zA-Z0-9]{6,20}$/.exec(pwd)) {
		result.result = false;
		result.tips = "请使用字母和数字组合";
		return result;
	}

	return result;
}

function getQueryStringByName(name) {
	var result = location.search.match(new RegExp("[\?\&]" + name + "=([^\&]+)", "i"));
	if (result == null || result.length < 1) {
		return "";
	}
	return result[1];
}

function G(name) {
	return getQueryStringByName(name);
}

function timeDiff(time) {
	if (!time) return;
	time = time.replace(/-/g, '/');
	var otime = (new Date(time)).getTime();
	if (!otime) return;
	var now = new Date().getTime();
	var diff = (now - otime) / 1000;
	var chunks = [
		[31536000, '年'],
		[2592000, '个月'],
		[604800, '周'],
		[86400, '天'],
		[3600, '小时'],
		[60, '分钟'],
		[1, '秒']
	];
	var num = 0,
		since = "";
	for (var i = 0; i < chunks.length; i++) {
		if (diff > chunks[i][0]) {
			num = Math.floor(diff / chunks[i][0]);
			since += num + chunks[i][1];
			diff = parseInt(diff - chunks[i][0] * num);
			break;
		}
	}
	if (since == "") return "刚刚";
	return since + "前";
}

function getHead($url) {
	if (!$url) {
		return "http://res1.justeasy.cn/images/defaulthead.jpg";
	}
	if ($url.indexOf("http://") >= 0 || $url.indexOf("https://") >= 0) {
		return $url;
	} else {
		return JIANE.urls.avatar + $url;
	}
}


function isURL(url) {
	var strRegex = "^((https|http)://)?[0-9a-zA-Z-]+\.?\\w*?\.\\w{2,5}(:[0-9]{1,6})?";
	var re = new RegExp(strRegex);
	if (re.test(url)) {
		return true;
	} else {
		return false;
	}
}

function loadTushuoZan() {
	var id = JIANE.cookie.get("userZan");
	if (id != "" && id != undefined) {
		var ids = id.split('.');
		var obj = $(".am-btn-img");
		$.each(ids, function(index, val) {
			$.each(obj, function(i, v) {
				var workid = $(v).attr('id') != undefined ? $(v).attr('id') : $(v).parent().attr('id');
				if (workid == val) {
					$(v).find('.fa-thumbs-o-up').addClass('red');
				}
			});
		});
	}
}


function checkLogin() {
	var uid = JIANE.cookie.get('uid');
	var username = JIANE.cookie.get('username');
	if (uid == "" || username == "") {
		$(".alertCol .newDiv").show();
		layer.open({
			type: 1,
			title: false,
			closeBtn: 1,
			area: ['600px'],
			fix: true,
			shadeClose: true,
			content: $('#loginBox')
		})
		return false;
	}
	return true;
}

function synLogin() {
	$.getJSON(JIANE.urls.api + 'open/index/synlogin.cgi?callback=?', function(json, textStatus) {});
}

function getUserCollection() {
	$.ajax({
			url: JIANE.urls.tushuo + 'getcollection.php',
			type: 'get'
		})
		.done(function(data) {
			if (data && data.status == 200) {
				var option = "";
				$.each(data.list, function(index, val) {
					option += "<option value='" + val.id + "'>" + val.name + "</option>"
				});
				$('#collectionid').html(option);
				$('#collectionid').trigger('chosen:updated')
				if ($(".newGetInput").length == 0) {
					var createHTML = '<div class="newGetInput"><input type="text" class="getIptNames" id="collectionname" placeholder="图集名称"><input type="text" class="getIptBiaoQ" id="tags" placeholder="标签1#标签2"><span class="CkaddTj" id="btn_create_coll">创建</span></div>';
				};
				$('.chosen-results').after(createHTML);

			}
		})
}

function insertText(obj, str) {
	obj = document.getElementById(obj);
	if (document.selection) {
		var sel = document.selection.createRange();
		sel.text = str;
	} else if (typeof obj.selectionStart === 'number' && typeof obj.selectionEnd === 'number') {
		var startPos = obj.selectionStart,
			endPos = obj.selectionEnd,
			cursorPos = startPos,
			tmpStr = obj.value;
		obj.value = tmpStr.substring(0, startPos) + str + tmpStr.substring(endPos, tmpStr.length);
		cursorPos += str.length;
		obj.selectionStart = obj.selectionEnd = cursorPos;
	} else {
		obj.value += str;
	}
}


Array.prototype.unique = function() {
	this.sort();
	var re = [this[0]];
	for (var i = 1; i < this.length; i++) {
		if (this[i] !== re[re.length - 1]) {
			re.push(this[i]);
		}
	}
	return re;
}

function replaceEm(html) {
	if (html == "" || html == undefined) return;
	var _html = html;
	var pattern = new RegExp("\\[em:[\\s\\S]*?:\\]", "g");
	var emarr = html.match(pattern);
	if (emarr != null) {
		emarr = emarr.unique();
		for (var i = 0; i < emarr.length; i++) {
			var emnum = emarr[i].split(':')[1];
			var empattern = new RegExp("\\[em:" + emnum + ":\\]", "g");
			_html = _html.replace(empattern, '<img src="/public/img/face/' + emnum + '.gif">');
		}
	}
	return _html;
}

function checkFriendship() {
	$.ajax({
			url: '/designer/follows',
			type: 'get',
			dataType: 'json',
			data: {}
		})
		.done(function(data) {
			if (data && data.status == 200) {
				$.each(data.list, function(index, val) {
					 $.each($(".follow"), function(k, v) {
					 	 if(val.fid==$(v).attr("data"))
					 	 {
					 	 	$(v).removeClass('follow').addClass('unfollow').text("取消关注");
					 	 }
					 });
				});
			}
			$(".follow,.unfollow").show();
		})
}


function follow(fid) {
	$.ajax({
			url: '/designer/follow',
			type: 'get',
			dataType: 'json',
			data: {
				fid: fid
			}
		})
		.done(function(data) {
			if (data && data.status == 200) {
				layer.msg("关注成功！");
				$(".follow[data='"+fid+"']").removeClass('follow').addClass('unfollow').text("取消关注");
			} else if (data.status == -201) {
				layer.msg("<a style='color:#fff' href='"+JIANE.urls.user+"user/login/index.php?backurl="+decodeURIComponent(location.toString())+"'>请 <span style='color:#f70; text-decoration:underline'>登 录</span></a>",{
					time: 0,
					shade: false,
					closeBtn:true
				});
			} else {
				layer.msg("关注失败！");
			}
		})
}

function unfollow(fid) {
	$.ajax({
			url: '/designer/unfollow',
			type: 'get',
			dataType: 'json',
			data: {
				fid: fid
			}
		})
		.done(function(data) {
			if (data && data.status == 200) {
				layer.msg("取消关注成功！");
				$(".unfollow[data='"+fid+"']").removeClass('unfollow').addClass('follow').html("关注");
			} else if (data.status == -201) {
				layer.msg("<a style='color:#fff' href='"+JIANE.urls.user+"user/login/index.php?backurl="+decodeURIComponent(location.toString())+"'>请 <span style='color:#f70; text-decoration:underline'>登 录</span></a>",{
					time: 0,
					shade: false,
					closeBtn:true
				});
			} else {
				layer.msg("取消关注失败！");
			}
		})
}

$(function() {
	synLogin();
	try {
		$('#collectionid').chosen({
			width: '320'
		});
	} catch (err) {}

	$(".gotop .gotop-div").hover(function() {
		$(this).find('.other').show();
	}, function() {
		$(this).find('.other').hide();
	});

	$(".lists-name").each(function(i) {
		$(".lists-name").eq(i).click(function() {
			$(".lists-name").removeClass("active");
			$(this).addClass("active");
			$(".keywords").hide();
			$(".keywords").eq(i).show();
		});
	});

	$("#btn_top_search").click(function() {
		var currIndex = 0;
		$(".lists .lists-name").each(function(index, el) {
			var classname = $(this).attr('class');
			if (classname.indexOf('active') >= 0) {
				currIndex = index;
			}
		});
		var url = SearchURL[currIndex];
		$("#action_url").val(url);
		$("#top_search_form").submit();
	})

	$(document).on("keyup", function(e) {
		var code = e.which;
		if (code == 13 && $("#keyword").is(":focus")) {
			$("#btn_top_search").click();
		}
		if (code == 13 && $("#keywords").is(":focus")) {
			$("#btn_search").click();
		}
		return false;
	})

	$('textarea[name=neirong]').keyup(function(i) {
		l = ($(this).attr('id'));
		var note_cnt = $('textarea[name=neirong]').val();
		if (note_cnt.length > l) {
			note_cnt = note_cnt.substring(0, l);
			$('textarea[name=neirong]').val(note_cnt);
		}
		$('.textNums span').text(note_cnt.length);
	});

	$(".left-img").each(function(i) {
		var img = $(this);
		$("<img/>").attr("src", $(img).attr("src")).load(function() {
			var realWidth = this.width;
			var realHeight = this.height;
			if ((realWidth / realHeight) >= (490 / 330)) {
				$(".left-img").eq(i).height(330);
				$(".left-img").eq(i).css("margin-left", -(($(".left-img").eq(i).width() - 490) / 2) + "px");
			} else {
				$(".left-img").eq(i).width(490);
				$(".left-img").eq(i).css("margin-top", -(($(".left-img").eq(i).height() - 330) / 2) + "px");
			}
		});
	});
	$(".right1").each(function(i) {
		var img = $(this);
		$("<img/>").attr("src", $(img).attr("src")).load(function() {
			var realWidth = this.width;
			var realHeight = this.height;
			if ((realWidth / realHeight) >= (460 / 160)) {
				$(".right1").eq(i).height(160);
				$(".right1").eq(i).css("margin-left", -(($(".right1").eq(i).width() - 460) / 2) + "px");
			} else {
				$(".right1").eq(i).width(460);
				$(".right1").eq(i).css("margin-top", -(($(".right1").eq(i).height() - 160) / 2) + "px");
			}
		});
	});
	$(".right2").each(function(i) {
		var img = $(this);
		$("<img/>").attr("src", $(img).attr("src")).load(function() {
			var realWidth = this.width;
			var realHeight = this.height;
			if ((realWidth / realHeight) >= (225 / 160)) {
				$(".right2").eq(i).height(160);
				$(".right2").eq(i).css("margin-left", -(($(".right2").eq(i).width() - 225) / 2) + "px");
			} else {
				$(".right2").eq(i).width(225);
				$(".right2").eq(i).css("margin-top", -(($(".right2").eq(i).height() - 160) / 2) + "px");
			}
		});
	});
	// 咨询列表截图
	$(".list-img a img").each(function(i) {
		var img = $(this);
		$("<img/>").attr("src", $(img).attr("src")).load(function() {
			var realWidth = this.width;
			var realHeight = this.height;
			if ((realWidth / realHeight) >= (240 / 150)) {
				$(".list-img a img").eq(i).height(150);
				$(".list-img a img").eq(i).css("margin-left", -(($(".list-img a img").eq(i).width() - 240) / 2) + "px");
			} else {
				$(".list-img a img").eq(i).width(240);
				$(".list-img a img").eq(i).css("margin-top", -(($(".list-img a img").eq(i).height() - 150) / 2) + "px");
			}
		});
	});


	$("#btn_login").on("click", function() {
		var username = $("#username").val();
		var password = $("#password").val();
		if (username == "") {
			layer.msg("请输入用户名！");
			return;
		}
		if (password == "") {
			layer.msg("请输入密码！");
			return;
		}
		$.ajax({
				url: "/home/user/userlogin",
				type: 'post',
				dataType: 'json',
				data: {
					username: username,
					password: password
				},
			})
			.done(function(data) {
				if (data && data.status == 200) {
					location = location;
				} else {
					alert(data.msg);
				}
			})
			.fail(function() {
				layer.msg("网络异常");
			})

	});

});
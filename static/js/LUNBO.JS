			/*重新设置banner宽度*/
			$(".banner").css({
				width: 1920 * $(".banner img").length
			});
			/*记录播放索引值*/
			var x = 0;
			
			function lunbo() { //定义function动作，方便使用轮播
				if(x < $(".banner img").length - 1) //如果x小于最后一张图片的编号(第一张是0)
				{
					x = x + 1
				} //x每隔一段时间加1
				else { //如果x大于最后一张图片的编号了
					$(".banner").animate({marginLeft: -960}, 0) //marginleft=0，也就是显示第一张图片
					x = 1 //此时x=1
				}
				$(".banner").animate({marginLeft:-960 - 1920 * x}, 2000);
				//给点添加类
				$(".banner_dian li").removeClass("currentLi");
				if(x == $(".banner img").length - 1) {
					$(".banner_dian li").eq(0).addClass("currentLi");
				} else {
					$(".banner_dian li").eq(x).addClass("currentLi");
				}

			}

			var run = setInterval(lunbo, 4000) //启动计时器run，顺便定义名字，停止计时器是要用

			$(".banner").hover( //鼠标经过banner时
				function() {
					clearInterval(run) //计时器停止
				},
				function() { //离开时(逗号后面什么都不用写)
					run = setInterval(lunbo, 4000) //运行计时器
				}
			)

			$(".btn_left").click( //点击左边按钮，可以看上一张
				function() {
					$(".banner").stop() //如果图片正好卡在一半的时候，使后半张图片完全显示出来
					if(x > 0) //如果不是第一张图片
					{
						x = x - 1
					} else { //如果是第一张图片
						$(".banner").animate({
								marginLeft: -960 - 1920 * ($(".banner img").length - 1)
							}, 0) //瞬移到最后一张图片(最后一张图片和第一张是一样的)
						x = $(".banner img").length - 2 //x=倒数第二张图片的编号
					}
					$(".banner").animate({
						marginLeft: -960 - 1920 * x
					}, 1000);
					$(".banner_dian li").removeClass("currentLi");
					if(x == $(".banner img").length - 1) {
						$(".banner_dian li").eq(0).addClass("currentLi");
					} else {
						$(".banner_dian li").eq(x).addClass("currentLi");
					}
					clearInterval(run) //停止计时器
				}
			)

			$(".btn_right").click( //点击右边按钮，可以看下一张
				function() {
					$(".banner").stop()
					if(x < $(".banner img").length - 1) //如果不是最后一张图片
					{
						x = x + 1
					} else { //如果是最后一章图片
						$(".banner").animate({
								marginLeft: -960
							}, 0) //瞬移到第一张图片，和最后一张一样
						x = 1
					}
					$(".banner").animate({marginLeft: -960 - 1920 * x}, 1000);
					$(".banner_dian li").removeClass("currentLi");
					if(x == $(".banner img").length - 1) {
						$(".banner_dian li").eq(0).addClass("currentLi");
					} else {
						$(".banner_dian li").eq(x).addClass("currentLi");
					}
					clearInterval(run)
				}
			)

			//鼠标经过小方点
			$(".banner_dian li").hover(function() {
				clearInterval(run);
				n = $(".banner_dian li").index(this);
				$(".banner").stop().animate({
					marginLeft: (-960 - 1920 * n)
				}, 1000);
				$(".banner_dian li").removeClass("currentLi");
				$(this).addClass("currentLi");
			}, function() {
				run = setInterval(lunbo, 2000)
			});
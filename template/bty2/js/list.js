var page = 1;
 	var tag = 0 ;
	$(function(){
		list();
		$(window).scroll(function(){
		　　var scrollTop = $(this).scrollTop();
		　　var scrollHeight = $(document).height();
		　　var windowHeight = $(this).height();
		　　if(scrollTop + windowHeight == scrollHeight){
		　　　　list();
		　　}
		});
	})
	function list(){
		alert_notice("加载中...",'success','bottom',500);
		$.post('/pictures',{
			'act':'list',
			'tag':tag,
			'page':page
		},function(res){
			if (res.length==0) {
				alert_notice("没有更多了",'default','bottom');
			}else{
				var html = '';
				for(var i=0 ; i<res.length;i++){
					var p = res[i];
					html+='<li>'+
					   '<div style="margin:10px; border:none">'+
						' <a target="_blank" href="/tour/'+p.view_uuid+'"><div style=" overflow:hidden;width:260px;height:220px;margin:0 auto;"><img class="imgli" src="'+p.thumb_path+'" alt="'+p.name+'" width="300px" height="220px"></div></a>'+
						 '<div class="card-heading title">'+
						'	<div class="col-md-9 col-xs-8 of_hide padding0">'+
						'		<strong class="text-primary">'+p.name+'</strong> '+
						'	</div>'+
						'	<div class="col-md-3 col-xs-4 of_hide padding0" style="background:url(/template/bty2/images/icon/yanjing.png) no-repeat;">'+
						'		<div class="pull-right text-danger">'+p.browsing_num+'</div>'+
						'	</div>'+
						' </div>'+
					 ' </div>'+
					' </li>';
				}
				page++;
				$("#pictures_content").append(html);
			}
			
		},'json');
	}
	function list_by_tag(_tag,obj){
		page=1;
		tag = _tag;
		$("#pictures_content").html("");
		list();
		$(".channel .active").removeClass("active");
		$(obj).addClass("active");
	}
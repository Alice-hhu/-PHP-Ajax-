$(function(){

	
// 4 个图片自适应宽高
	// img1 的高度
	var imgH1 = $("#actImg01").height();
	// console.log(imgH1);
	// div1 的高度
	$(".acts1").height(imgH1);
	// div2 div3 div4 的高度
	var divH2 = imgH1/2;
	$(".acts2").height(divH2);
	// img2 的高度
	var imgH2 = $("#actImg02").height();
	$("#actImg02").css("margin-top",-imgH2/3);
// 浏览器缩放时 4 个图片自适应宽高
	$(window).resize(function(){
		var imgH1 = $("#actImg01").height();
		$(".acts1").height(imgH1);
		var divH2 = imgH1/2;
		$(".acts2").height(divH2);
		var imgH2 = $("#actImg02").height();
		$("#actImg02").css("margin-top",-imgH2/3);
		// 手机端屏幕自适应，隐藏多余的入住机构信息
		// 需要写在resize事件外以保证手机端打开即适应
		// 此处但是开发过程中又必须调整屏幕，有需要在事件内也写一次
		if ($(document).width() < 768) {
			$(".compHidden").css("display","none");
		}else{
			$(".compHidden").css("display","block");
		}
	});
// 4 个图片动画效果
	$(".imgChange").hover(function() {
		// stop() 方法停止当前正在运行的动画。——如果不stop的话，鼠标不断移入移出动画不能停止，会一直自动执行直到达到移入移出的次数位置
		$(this).find("img").stop().animate({
			left:"-100%"
			}, 2000);
	}, function() {
		$(this).find("img").stop().animate({
			left:"0"
			}, 2000);
	});
	// 使用.class进行动画
	/*$(".imgChange").hover(function() {
		$(this).find('img').addClass('imgOver');
		$(this).find('img').removeClass('imgOut');
	}, function() {
		$(this).find('img').addClass('imgOut');
		$(this).find('img').removeClass('imgOver');
	});*/



// 街区新闻
	$.post("php/topicList.php",{table:"news"},function(data){
		for(var index=data.data.length-1; index>=data.data.length-6;index--){
			if (index == data.data.length-1) {
				var firstNews=$("<div><a href='newsList.html?table=news&id="+data.data[index].id+"'>"+data.data[index].title+"</a></div><div class='text-overflow'>"+data.data[index].content+"</div>");
				$("#firstNews").append(firstNews);
			}	
			var newsList=$("<li><a href='newsList.html?table=news&id="+data.data[index].id+"'>"+data.data[index].title+"</a></li>");
			$("#newsList").append(newsList);
		}
	},"json");

// 入驻机构
	$.post("php/topicList.php",{table:"company"},function(data){
		for(var index=data.data.length-1; index>=data.data.length-9;index--){
			if (index>=data.data.length-3) {
				var company=$("<div class='col-xs-12 col-md-4'><img src='../admin/logic/"+data.data[index].imgPath+"' class='img-circle'><div class='companyText'><div class='companyName'><a href='company.html?table=company&id="+data.data[index].id+"'>"+data.data[index].title+"</a></div><div>"+data.data[index].content+"</div></div></div>");
				$("#companyRow").append(company);
			}else{
				var company=$("<div class='col-xs-12 col-md-4 compHidden'><img src='../admin/logic/"+data.data[index].imgPath+"' class='img-circle'><div class='companyText'><div class='companyName'><a href='company.html?table=company&id="+data.data[index].id+"'>"+data.data[index].title+"</a></div><div>"+data.data[index].content+"</div></div></div>");
				$("#companyRow").append(company);
			}
		}
		// 页面加载时，对需要隐藏的类加样式
		if ($(document).width() < 768) {
			$(".compHidden").css("display","none");
		}else{
			$(".compHidden").css("display","block");
		}
	},"json");

// 街区活动
	$.post("php/topicList.php",{table:"activity"},function(data){
		var actId = 1;
		for(var index=data.data.length-1; index>=data.data.length-4;index--){
			var activity=$("<a href='activity.html?table=activity&id="+data.data[index].id+"'>"+data.data[index].title+" >></a>");
			$("#act"+actId).append(activity);
			actId++;
		}
	},"json");


















});
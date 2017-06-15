$(function(){
  // 手机端自适应
  if ($(document).width() < 768) {
    $("#navLeft").css("display","none");
  }else{
    $("#navLeft").css("display","block");
  }
  $(window).resize(function(){
    if ($(document).width() < 768) {
      $("#navLeft").css("display","none");
    }else{
      $("#navLeft").css("display","block");
    }
  });

  // 页面请求数据显示
  var tableName = "company";// 表名个性化，以下都是共用
        // 获取当前页面的url
        var thisURL = document.URL; 
        // 获取url中的请求参数
        var urlParam = thisURL.split('?')[1]; 
        if (urlParam) { // 如果有请求参数，则是请求topic详情
          var tableName= urlParam.split("=")[1].split("&")[0];
          var topicID = urlParam.split("=")[2];
          $.post("php/topicDetail.php",{table:tableName,id:topicID},function(data){
            for(var index in data.data){
              var topicNow = $("<li class='list-group-item'><h3 class='text-center'>"+data.data[index].title+"</h3><hr><div class='text-center'><span class='glyphicon glyphicon-calendar'></span> "+data.data[index].date+"</div><div class='listContent'><div>"+data.data[index].content+"</div></div></li>");
              $("#listUl").html(topicNow);
            }
          },"json");
        } else{ // 如果没有请求参数，则是请求topic列表
          $.post("php/topicList.php",{table:tableName},function(data){
            for(var index in data.data){
              var topicList = $("<li class='list-group-item'><a href='newsList.html?table="+tableName+"&id="+data.data[index].id+"'>"+data.data[index].title+"</a><div class='listContent'><img src='../admin/logic/"+data.data[index].imgPath+"' class='listImg'>"+data.data[index].content+"</div><div class='topicDate'><span class='glyphicon glyphicon-calendar'></span> "+data.data[index].date+"</div></li>");
              $("#topicList").after(topicList);
            }
          },"json");
        }
});
<?php
	// 校验数据是否是通过页面提交，如果不是，强制跳转到页面
	// header("Content-type: text/html; charset=utf-8");
	// if (!isset($_POST["submit"])) {
	// 	header("Location:../page/newsAdd.html");
	// }
	// 获取表单提交数据
// 设置时区问题
	date_default_timezone_set("PRC");
	$tableName = $_POST["table"];
	$id = $_POST["id"];
	$title = $_POST["title"];
	$imgPath = "upload/".time().$_FILES["img"]["name"];
	move_uploaded_file($_FILES["img"]["tmp_name"],$imgPath);
	$content = $_POST["content"];
	$date = date("Y-m-d");

	// 连接数据库
	include "../util/mysqlConn.php";

	// 插入数据
	if ($tableName != "activity") {
		if ($_FILES["img"]["name"] == null) { // 如果没有重新上传图片，就不修改图片
			$sql = 	"update 
					{$tableName} 
				set 
					title='{$title}',content='{$content}',date='{$date}' 
				where 
					id = {$id}";
		}else{
			$sql = 	"update 
					{$tableName} 
				set 
					title='{$title}',imgPath='{$imgPath}',content='{$content}',date='{$date}' 
				where 
					id = {$id}";
		}
	}else{
		$sql = 	"update 
					{$tableName} 
				set 
					title='{$title}',content='{$content}',date='{$date}' 
				where 
					id = {$id}";
	}
	
	$flag = mysqli_query($conn,$sql);
	if ($flag) {
		echo "数据修改成功";
		// 断连数据库
		mysqli_close($conn);
		// 跳转到列表界面
		echo "<script>alert('修改成功');location.href='../page/list.php?table={$tableName}';</script>";
	}else{
		echo "数据修改失败：".mysqli_error($conn);
		// 断连数据库
		mysqli_close($conn);
		// 刷新当前页
		echo "<script>alert('修改失败');history.go(-1);</script>";
	}
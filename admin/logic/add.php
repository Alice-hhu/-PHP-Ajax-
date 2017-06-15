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
	$title = $_POST["title"];
// 图片上传
	/*	move_uploaded_file(filename, destination)
			filename  文件在服务器上的临时路径和文件名称
			destination 需要将文件拷贝到或移动到的路径和名称
	*/
	$imgPath = "upload/".time().$_FILES["img"]["name"];
	move_uploaded_file($_FILES["img"]["tmp_name"],$imgPath);
	$content = $_POST["content"];
	$date = date("Y-m-d");
	// print_r($date);

	// 连接数据库
	include "../util/mysqlConn.php";

	// 插入数据
	if ($tableName != "activity") {
		$sql = "insert into 
				{$tableName} 
			values (
				null,'{$title}','{$imgPath}','{$content}','{$date}')";
	}else{
		$sql = "insert into 
				{$tableName} 
			values (
				null,'{$title}','{$content}','{$date}')";
	}
	
	$flag = mysqli_query($conn,$sql);
	if ($flag) {
		echo "数据添加成功";
		// 断连数据库
		mysqli_close($conn);
		// 跳转到列表界面
		echo "<script>alert('添加成功');location.href='../page/list.php?table={$tableName}';</script>";
	}else{
		echo "数据添加失败：".mysqli_error($conn);
		// 断连数据库
		mysqli_close($conn);
		// 刷新当前页
		echo "<script>alert('添加失败');history.go(-1);</script>";
	}
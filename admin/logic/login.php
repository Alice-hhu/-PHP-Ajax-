<?php
	// 校验数据是否是通过页面提交，如果不是，强制跳转到页面
	header("Content-type: text/html; charset=utf-8");
	if (!isset($_POST["submit"])) {
		header("Location:../page/login.html");
	}
	// 获取表单提交数据
	$username = $_POST["username"];
	$password = $_POST["password"];
	// 连接数据库
	include "../util/mysqlConn.php";
	$tableName = "user";
	// 查找数据
		// 用户名是否存在
	$sql1 = "select * from 
				{$tableName} 
			where username='{$username}'";
	$result1 = mysqli_query($conn,$sql1);
		// 密码是否正确
	$sql2 = "select * from 
				{$tableName} 
			where username='{$username}' and password='{$password}'";
	$result2 = mysqli_query($conn,$sql2);
	if ($result1->num_rows == 0) {
		echo "<script>alert('用户名不存在！');history.go(-1);</script>";
	}else{
		if ($result2->num_rows>0) {
			// 记录session
			session_start();
			$_SESSION["userNow"] = $username;

			// 断连数据库
			mysqli_close($conn);
			// 重定向到主页
			echo "<script>alert('登录成功');location.href='../page/adminIndex.php';</script>";
		}else{
			echo "<script>alert('用户名或密码错误！');history.go(-1);</script>";
		}
	}
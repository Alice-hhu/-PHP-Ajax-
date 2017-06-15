<?php
	// 校验数据是否是通过页面提交，如果不是，强制跳转到页面
	header("Content-type: text/html; charset=utf-8");
	if (!isset($_POST["submit"])) {
		header("Location:../page/register.html");
	}
	// 获取表单提交数据
	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	// 连接数据库
	include "../util/mysqlConn.php";
	$tableName = "user";
	// 用户名验重
	$sql1 = "select * from  
				{$tableName} 
			where 
				username = '{$username}'";
	$result1 = mysqli_query($conn,$sql1);
	if ($result1->num_rows>0) {// 如果数据库中已存在
		// 重定向到登录界面
		echo "<script>alert('{$username}已被注册,请重新输入用户名');history.go(-1);</script>";
	}else{
		// 插入数据
		$sql = "insert into 
					{$tableName} 
				values (
					null,'{$username}','{$password}','{$email}')";
		$flag = mysqli_query($conn,$sql);
		if ($flag) {
			echo "数据添加成功";
			// 断连数据库
			mysqli_close($conn);
			// 跳转到登录界面
			echo "<script>alert('注册成功');location.href='../page/login.php?username={$username}';</script>";
		}else{
			echo "数据添加失败：".mysqli_error($conn);
			// 断连数据库
			mysqli_close($conn);
			// 重定向到注册界面
			echo "<script>alert('注册失败');history.go(-1);</script>";		}
	}

<?php
	// 1.获取post提交的用户名
	$username = $_POST["username"];
	// 2.连接数据库
	include "../util/mysqlConn.php";
	$tableName = "user";
	// 3.用户名验重
	$sql = "select * from  
				{$tableName} 
			where 
				username = '{$username}'";
	$result = mysqli_query($conn,$sql);
	if ($result->num_rows>0) {
		echo $username;
	}
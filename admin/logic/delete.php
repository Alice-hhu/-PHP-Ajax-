<?php
	// 获取 id 以 a标签 提交的请求方式为 get
	$tableName = $_GET["table"];
	$id = $_GET["id"];
	
	include "../util/mysqlConn.php";

	if ($connFlag) {
		$sql = "delete from {$tableName} where id = {$id}";
		mysqli_query($conn,$sql);
	}

	// 重定向到主页
	echo "<script>alert('删除成功');location.href='../page/list.php?table={$tableName}';</script>";
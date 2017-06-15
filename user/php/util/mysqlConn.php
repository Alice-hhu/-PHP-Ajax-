<?php

// 作为一个公共的工具包脚本，被调用
	// 根据实际数据库连接用户和密码进行修改
	$url = "127.0.0.1";
	$mysqlUser = "root";
	$mysqlPwd = "19910704";
	$dbname = "street";

	$conn = mysqli_connect($url,$mysqlUser,$mysqlPwd,$dbname);

	// 定义 数据库连接状态 和 信息
	$connFlag = true;
	$connMsg = "";

	if ($conn) {
		// 工具包不可以做return 结束程序的事情，所以不能用die()
		// die("数据库连接失败：".mysqli_connect_error());
		$connFlag = true;
		$connMsg = "";

// 指定字符集
	// widows 指定为和PHP脚本一致的字符集
	// mac 指定为库的字符集
		$setCharNames = "set names latin1";
		mysqli_query($conn,$setCharNames);
	}else{

		// 如果是面向对象 会使用异常方式进行处理
		// 面向过程，只需要进行信息的存储，和状态的判断即可

		$connFlag = false;
		$connMsg = "数据库连接失败：".mysqli_connect_error();
	}

?>
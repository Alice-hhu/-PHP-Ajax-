<?php
	// 退出登录时，删除session
	session_start();
	unset($_SESSION["userNow"]);
	
	// 跳转到登录界面
	echo "<script>alert('退出成功');location.href='../page/login.php';</script>";
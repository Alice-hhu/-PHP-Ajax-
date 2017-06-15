<?php
	
// 连接数据库
	$conn = mysqli_connect("127.0.0.1","root","");
	if (!$conn) {
		die("数据库连接失败：".mysqli_connect_error());
	}
	echo "数据库连接成功<hr>";
// 建库
	$dbName = "street";
	$sql = "create database {$dbName}";
	$flag = mysqli_query($conn,$sql);
	if ($flag) {
		echo "{$dbName}库创建成功<hr>";
	}else{
		echo "{$dbName}库创建失败：".mysqli_connect_error();
	}

// 切库
	$conn1 = mysqli_connect("127.0.0.1","root","street");
	if (!$conn1) {
		die("{$dbName}库连接失败：".mysqli_connect_error());
	}
	echo "{$dbName}库连接成功<hr>";
// 建表
	$table1 = "user";
	$table2 = "news";
	$table3 = "company";
	$table4 = "activity";
	// 用户表
	$sql1 = "create table $table1 (
				id int primary key auto_increment,
				username varchar(20),
				password varchar(20),
				email varchar(100)
		)engine=innodb default charset=utf8";
	$flag1 = mysqli_query($conn1,$sql1);
	if ($flag1) {
		echo "{$table1}表创建成功<hr>";
	}else{
		echo "{$table1}表创建失败：".mysqli_connect_error();
	}
	// 新闻表
	$sql2 = "create table {$table2} (
				id int primary key auto_increment,
				title varchar(100),
				imgPath varchar(100),
				content varchar(2000),
				date varchar(20)
		)engine=innodb default charset=utf8";
	$flag2 = mysqli_query($conn1,$sql2);
	if ($flag2) {
		echo "{$table2}表创建成功<hr>";
	}else{
		echo "{$table2}表创建失败：".mysqli_connect_error();
	}
	// 入驻机构表
	$sql3 = "create table {$table3} (
				id int primary key auto_increment,
				title varchar(100),
				imgPath varchar(100),
				content varchar(2000),
				date varchar(20)
		)engine=innodb default charset=utf8";
	$flag3 = mysqli_query($conn1,$sql3);
	if ($flag3) {
		echo "{$table3}表创建成功<hr>";
	}else{
		echo "{$table3}表创建失败：".mysqli_connect_error();
	}
	// 街区活动表
	$sql4 = "create table {$table4} (
				id int primary key auto_increment,
				title varchar(100),
				content varchar(2000),
				date varchar(20)
		)engine=innodb default charset=utf8";
	$flag4 = mysqli_query($conn1,$sql4);
	if ($flag4) {
		echo "{$table3}表创建成功<hr>";
	}else{
		echo "{$table3}表创建失败：".mysqli_connect_error();
	}

// 断连数据库
	mysqli_close($conn1);
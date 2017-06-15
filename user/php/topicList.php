<?php
	include "util/mysqlConn.php";
	$tableName = $_POST["table"];
	$sql = "select * from {$tableName}";
	$result = mysqli_query($conn,$sql);

	$resultData = array();

	if ($result->num_rows>0) {
		$resultData["resultState"] = true;
		$resultData["resultMsg"] = "查询成功";
		$resultData["data"] = array();
		while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			array_push($resultData["data"],$row);
		}
	}else{
		$resultData["resultState"] = false;
		$resultData["resultMsg"] = "查无数据";
		$resultData["data"] = null;
	}

	echo json_encode($resultData);
?>
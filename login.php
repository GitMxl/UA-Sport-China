<?php
	header("content-type","text/html;charset=utf-8");
	
	//1接收数据
	$userId = $_POST["userId"];
	$userPass = $_POST["userPass"];
	
	//2、在数据库中查询
	   //1)、建立连接，并选择数据库
	   $con = mysql_connect("localhost","root","root");
	   mysql_select_db("UASport",$con);
	   //2)、执行SQL语句（查询）
	   $sqlStr="select * from UAmember where email='".$userId."' and pass='".$userPass."'";
	   
	   $result=mysql_query($sqlStr,$con);
	   
	   //3)、关闭连接
	   mysql_close($con);
	//3、响应结果
	//获得$result的行数
	$rowCount=mysql_num_rows($result);
		
	echo $rowCount;
//	
//	if($rows>0){//登录成功
//		echo "1";	
//	}else {//登录失败，返回0.
//		echo "0";
//	}	
?>
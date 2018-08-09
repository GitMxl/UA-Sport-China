<?php
	
	header("content-type","text/html;charset=utf-8");
	
	//一、接收前端传来的数据
	$email = $_POST["email"];
	$Pass = $_POST["pass"];
	$phone = $_POST["phone"];
	
	//二、保存数据
	//1、建立连接并选择数据库
	$con = mysql_connect("localhost","root","root");
	if(!$con){
		//die("连接失败".mysql_error());
		echo "0";	
	}	
	mysql_select_db("UASport",$con);
	
	//2、执行SQL语句
	$sqlStr = "insert into UAmember(email,pass,phone)
              values('".$email."','".$Pass."','".$phone."')";
	//echo $sqlStr;
	
	$result=mysql_query($sqlStr,$con);
	
	//3、关闭数据库
	mysql_close($con);
	
	//三、给前端响应
//	//	echo "1";
//	$rows = mysql_num_rows($result);
//		if($rows>1){
//			echo "1";		
//		}else{
//			echo "0";
//		}
	echo "1";

?>
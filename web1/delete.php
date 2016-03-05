<?php
	$localhost ="localhost";
	$name="root";
	$pass="";
	$dbname ="web";
	
	$con = mysql_connect($localhost, $name, $pass);
	mysql_select_db($dbname,$con);
	header("content-type:text/html;charset=utf-8");

	$uSTT=$_GET["uSTT"];
	
	
	
	$sql= "select * from lopmonhoc where id_lop='".$uSTT."'";
	$query=mysql_query($sql);
	$data=mysql_fetch_assoc($query);
	if(isset($uSTT)){
		$sql ="delete from lopmonhoc where id_lop='$uSTT'";
		mysql_query($sql);
		header("location: ad_main_html.php");
	}

?>
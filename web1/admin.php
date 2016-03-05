<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html ;charset=utf-8" />
	</head>
	<body>
		<form name="login" action="admin.php" method="post">
			<div class = "edit">
				<b>Tên truy cập</b>
				<input type="text" name="adname" size = "25" maxlength = "40" /><br>
				<b>Mật khẩu</b>
				<input type="password" name="adpass" size = "25" maxlength = "40" /><br>
				
				<br>
				<div align = "center">
					<input type="submit" name="submit" value="Đăng nhập" />
				</div>
			</div>
		</form>
		
	</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		
		if($_POST['adname'] == 'admin' && $_POST['adpass'] == 'admin'){
			echo '<meta http-equiv="refresh" content="2; url=ad_main_html.php">';
		}
		else {
			echo "<h3> Tên đăng nhập hoặc mật khẩu không chính xác. Hãy thử lại!</h3>";
			echo '<meta http-equiv="refresh" content="2; url=admin.php">';
		}
		
	}	
?>
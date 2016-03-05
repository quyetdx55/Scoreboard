<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html ;charset=utf-8" />
	</head>
	<body>
		 <a href ="main.html" > Thoát </a><br>
		 <a href ="add_info.php" > Thêm thông tin các môn học </a><br>
		 <a href ="pa_html.php" > Thêm điểm </a>
		<br/><br><br>
		 <?php
		 $conn=mysql_connect("localhost", "root", "") or die("failed");
				mysql_select_db("web",$conn);
				//$sql ="select * from year;
				//$query=mysql_query($sql);
				header("content-type:text/html;charset=utf-8");
			?>
		 <div align="center">
			 <form method="get" action="timkiem.php" >
					<input type="text" name="s_mlmh" value="Nhập mã môn học">
					<input type="submit" value="Tìm" name='tim' /><br/><br><br>
					Tìm kiếm nâng cao
					<input type ="checkbox" name="tknc" >
					<br>
					<table>
						<tr>
							<td>Năm học</td>
							<td>
								<?php
									$sql = "select * from year";
									$thucthi = mysql_query($sql);
								?>
									<select name = "s_namhoc">;
								<?php
									while($data = mysql_fetch_assoc($thucthi)){
										echo"<option >". $data['id_year']. "</option>";
									}					
									echo "<\select>"
								?>
							</td>
							<td>Kì học</td>
							<td>
								<select name="s_kihoc">
									<option >I</option>
									<option >II</option>
								</select>
							</td>
						</tr>
					</table>
					
					
					<br>
					
			</form>
		</div>
		 <form method="post" action="ad_main.php" >
		 <table>
						<tr>
							<td>Năm học</td>
							<td>
								<?php
									$sql = "select * from year";
									$thucthi = mysql_query($sql);
								?>
									<select name = "namhoc">;
								<?php
									while($data = mysql_fetch_assoc($thucthi)){
										echo"<option >". $data['id_year']. "</option>";
									}					
									echo "<\select>"
								?>
							</td>
							<td>Kì học</td>
							<td>
								<select name="kihoc">
									<option >I</option>
									<option >II</option>
								</select>
							</td>
							<td><input type="submit" value="Xem" name='Xem' /><br/></td>
						</tr>
					</table>
                
				
        </form>
	</body>
</html>
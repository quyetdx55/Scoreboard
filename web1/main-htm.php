<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html ;charset=utf-8" />
	</head>
	<body>
		 <a href ="admin.php" target="blank"> Admin </a>
		 <br/><br><br>
		 <div align="center">
			 <form method="get" action="timkiem.php" >
					<input type="text" name="s_mlmh" value="Nhập mã môn học">
					<input type="submit" value="Tìm" name='tim' /><br/><br><br>
					Tìm kiếm nâng cao
					<input type ="checkbox" name="tknc" >
					<br>
					Năm học: 
					<select name="s_namhoc">
						<option >2016-2017</option>
						<option >2015-2016</option>
						<option >2014-2015</option>
						<option >2013-2014</option>
					</select>
					Kì Học: 
					<select name="s_kihoc">
						<option >1</option>
						<option >2</option>
					</select>
					<br>
					
			</form>
		</div>
		 <form method="post" action="main.php" >
                Năm học: 
				<select name="namhoc">
					<option >2016-2017</option>
					<option >2015-2016</option>
					<option >2014-2015</option>
					<option >2013-2014</option>
				</select>
				Kì Học: 
				<select name="kihoc">
					<option >1</option>
					<option >2</option>
				</select>
				<input type="submit" value="Xem" name='Xem' /><br/>
        </form>
		
	</body>
</html>
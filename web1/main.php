<html>
	<head> 
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<title>
			Danh sách các lớp môn học
		</title>
	</head>
	<body>
	<?php
			include 'main_html.php';
		?>
	<?php
		$id_y =$_POST["namhoc"];
		$id_k = $_POST["kihoc"];
		$conn=mysql_connect("localhost", "root", "") or die("failed");
				mysql_select_db("web",$conn);
				$sql ="select id_lop, name_lop, year_lop, sem_lop from lopmonhoc where year_lop like '%$id_y%' and sem_lop = '$id_k' ";
				$query=mysql_query($sql);
				header("content-type:text/html;charset=utf-8");
				echo "<br><br><br>";
				echo"<div align='center'> danh sách các môn học  </div><br><br> ";
				echo"<table style = 'margin-left: 40%;' >";
						echo "<thead>";
								echo "<tr>";
								echo"<td>Mã lớp</td>";
								echo"<td>Tên Lớp</td>";
								echo"<td>Năm học</td>";
								echo"<td>Kì học</td>";
								echo"<td>Điểm</td>";
							echo "</tr>";
						echo"</thead>";
						echo"<tbody>";
							while($data=mysql_fetch_assoc($query)){
							echo "<tr>";
								echo"<td>".$data["id_lop"]."</td>";
								echo"<td>".$data["name_lop"]."</td>";
								echo"<td>".$data["year_lop"]."</td>";
								echo"<td>".$data["sem_lop"]."</td>";
								echo"<td><a href= '1/".$data["id_lop"]."-".$data["year_lop"].".pdf' target='blank'> Xem điểm</a></td>";
								
							echo "</tr>";
							}
							echo"</tbody>";
					echo"</table>";
		?>
	</body>
</html>
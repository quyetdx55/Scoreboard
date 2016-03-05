<html>
   <!-- the head -->
   <head>
      <meta http-equiv="Content-Type" content="text/html ;charset=utf-8" />
   </head>
  
  <?php
		$localhost ="localhost";
		$name="root";
		$pass="";
		$dbname ="lopmonhoc";
		
		$con = mysql_connect($localhost, $name, $pass);
		mysql_select_db($dbname,$con);
		header("content-type:text/html;charset=utf-8");

		$uSTT=$_GET["uSTT"];
	
	
		
	
	?>
   <body>
       <h1>Chỉnh sửa thông tin môn học</h1>
	   <?php
		 $conn=mysql_connect("localhost", "root", "") or die("failed");
				mysql_select_db("web",$conn);
				//$sql ="select * from year;
				//$query=mysql_query($sql);
				header("content-type:text/html;charset=utf-8");
		?>
	   
       <form method="post" action = "edit.php?uSTT=<?php echo $uSTT; ?> ">
                mã lớp môn học: <br/>
				<input type="text" name = "ed_mlmh" ><br/>
				Tên lớp: <br/>
				<input type="text" name = "ed_lmh" ><br/>
			
			
					<table>
						<tr>
							<td>Năm học</td>
							<td>
								<?php
									$sql = "select * from year";
									$thucthi = mysql_query($sql);
								?>
									<select name = "ed_nh">;
								<?php
									while($data = mysql_fetch_assoc($thucthi)){
										echo"<option >". $data['id_year']. "</option>";
									}					
									echo "<\select>"
								?>
							</td>
							<td>Kì học</td>
							<td>
								<select name="ed_kh">
									<option >I</option>
									<option >II</option>
								</select>
							</td>
						</tr>
					</table>
				<br/>
				Điểm: 
               
                <br/>
                <input type="submit" value="ok" name='ok' /><br/>
        </form>
		
		
    </body>
</html>
<?php
		$localhost ="localhost";
		$name="root";
		$pass="";
		$dbname ="web";
	
		$con = mysql_connect($localhost, $name, $pass);
		mysql_select_db($dbname,$con);
	
		$m=$t=$k=$n="";
		
		//echo $uSTT;
		$uSTT=$_GET["uSTT"];
		if(isset($_POST["ok"])){
			
			if($_POST["ed_mlmh"] == null){
				echo "<br><b>bạn chưa nhập mã lớp môn học!</b><br>";
					
					//echo '<meta http-equiv="refresh" content="2; url=pa.php">';
				}else{
					$m= $_POST["ed_mlmh"];
				}
				if($_POST["ed_lmh"] == null){
					echo "<br><b>bạn chưa nhập tên lớp môn học</b><br>";
					
				//	echo '<meta http-equiv="refresh" content="2; url=pa.php">';
				}else{
					$t= $_POST["ed_lmh"];
				}
				if($_POST["ed_kh"] == null){
					echo "<br><b>bạn chưa chọn kì học!</b><br>";
					
					//echo '<meta http-equiv="refresh" content="2; url=pa.php">';
				}else{
					$k= $_POST["ed_kh"];
				}
				if($_POST["ed_nh"] == null){
					echo "<br><b>bạn chưa nhập năm học!</b><br>";
					
					//echo '<meta http-equiv="refresh" content="2; url=pa.php">';
				}else{
					$n= $_POST["ed_nh"];
			}
			if($m && $t && $n && $k && $uSTT){
				$sql = "update lopmonhoc set id_lop = '$m', name_lop ='$t', year_lop='$n', sem_lop='$k' where id_lop ='$uSTT'";
				$query=mysql_query($sql);
				echo 'update thành công!';
				echo '<meta http-equiv="refresh" content="2; url=ad_main_html.php">';
			}else{
				echo 'update không thành công';
			}
		}
		

		?>
		
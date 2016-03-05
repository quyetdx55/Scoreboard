<html>
   <!-- the head -->
   <head>
      <meta http-equiv="Content-Type" content="text/html ;charset=utf-8" />
   </head>
   <body>
       <h1>Upload file</h1>
	   <?php
		 $conn=mysql_connect("localhost", "root", "") or die("failed");
				mysql_select_db("web",$conn);
				//$sql ="select * from year;
				//$query=mysql_query($sql);
				header("content-type:text/html;charset=utf-8");
		?>
	   
       <form method="post" action="pa.php" enctype="multipart/form-data">
                mã lớp môn học: <br/>
				<input type="text" name = "mlmh" ><br/>
				
			
			
					<table>
						<tr>
							<td>Năm học</td>
							<td>
								<?php
									$sql = "select * from year";
									$thucthi = mysql_query($sql);
								?>
									<select name = "nh">;
								<?php
									while($data = mysql_fetch_assoc($thucthi)){
										echo"<option >". $data['id_year']. "</option>";
									}					
									echo "<\select>"
								?>
							</td>
							
						</tr>
					</table>
				<br/>
				Điểm: 
               <input type="file"  id="file" name="file_diem">
                <br/>
                <input type="submit" value="ok" name='ok' /><br/>
        </form>
		
		
    </body>
</html>
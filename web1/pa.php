
<?php
	/*$localhost ="localhost";
	$name="root";
	$pass="";
	$dbname ="web";
	
	$con = mysql_connect($localhost, $name, $pass);
	mysql_select_db($dbname,$con);*/
	header("content-type:text/html;charset=utf-8");
	$m="";
	
	if($_POST["mlmh"] == null){
		echo "<br><b>bạn chưa nhập mã lớp môn học!</b><br>";
		
		//echo '<meta http-equiv="refresh" content="2; url=pa.php">';
	}	
	
	if($_POST["nh"] == null){
		echo "<br><b>bạn chưa nhập năm học!</b><br>";
		
		//echo '<meta http-equiv="refresh" content="2; url=pa.php">';
	}
	
		 if (isset($_POST['ok']))
    {
			// Nếu người dùng có chọn file để upload
        if (isset($_FILES['file_diem']))
        {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['file_diem']['error'] > 0)
            {
                echo 'File Upload Bị Lỗi';
            }
            else{
                // Upload file
				$id = $_POST["mlmh"];
				$year = $_POST["nh"];
				
				
				$folder ="1/$id-$year.pdf";
                move_uploaded_file($_FILES['file_diem']['tmp_name'], $folder);
				echo "<p/> upload file thành công ";
				echo '<meta http-equiv="refresh" content="2; url=ad_main_html.php">';
            }
        }
        
    }
?>
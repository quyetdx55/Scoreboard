<html>
	<head>
	</head>
	<body>
		<form enctype="multipart/form-data" method="post" role="form">
			<div class="form-group">
				<label for="exampleInputFile">File Upload</label>
				<input type="file" name="file" id="file" size="150">
				
			</div>
			<button type="submit" name="Import" value="Import">Upload</button>
		</form>
	</body>
</html>
<?php 
header("content-type:text/html;charset=utf-8");
if(isset($_POST["Import"]))
{
    //First we need to make a connection with the database
    $host='localhost'; // Host Name.
    $db_user= 'root'; //User Name
    $db_password= '';
    $db= 'web'; // Database Name.
    $conn=mysql_connect($host,$db_user,$db_password) or die (mysql_error());
    mysql_select_db($db) or die (mysql_error());
	
    $filename=$_FILES["file"]["tmp_name"];
    if($_FILES["file"]["size"] > 0)
    {
        $file = fopen($filename, "r");
        //$sql_data = "SELECT * FROM prod_list_1 ";
        while (!feof($file))
        {
            $str=fgets($file);
			$a=explode(",",$str);
            $sql = "INSERT into lopmonhoc(id_lop,name_lop,sem_lop,year_lop) value ('$a[0]','$a[1]','$a[2]','$a[3]')";
            mysql_query($sql);
        }
        fclose($file);
        echo 'UPLOAD thành công';
        header('Location: ad_main_html.php');
    }
    else
        echo 'Invalid File:Please Upload CSV File';
}
?>
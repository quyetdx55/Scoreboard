<?php

	if (isset($_POST['submit'])) { 
		# define variable to store form fields data
		$subject = $_POST['subject'];
		# get data
		if (preg_match(pattern, $subject)) {
			
		}
		
		# set search condition desciption
		$condSet = array('subject' => $_POST['subject']);
		if ($_POST['advanced'] == 'Yes') { # user has chosen advanced search
			
			if (isset($_POST['studentId'])) {
				
				// add student id cond to condSet
				condSet['student'] = $_POST['studentId'];

			}
			if (isset($_POST['semester'])) {
				condSet['semester'] = $_POST['semester'];
			}
		}
		
		# connect to database
		$db = mysql_connect ("servername",  "user", "password") or die ('I cannot connect to the database because: ' . mysql_error());
		# select database to use
		$mydb = mysql_select_db("yourDatabase");
		# build query statement
		$sql = "select ";
		# run the query
		$result = mysql_query($sql);
		# loop through result set
		while($row = mysql_fetch_array($result)) {
			# get row cell: $row['<field_name>']

			# search algorithm here
			$conform = true;
			foreach ($condSet as $key => $value) {
				if ($row[$key] != $value) {
					
					$conform = false;
					break;
				}
			}

			if ($conform) {
				# display result
				echo "<code>";
			}
			
		}
	} else {
	  echo "<p>Please enter a search query</p>"; 
	}
?>
<?php
$DEBUG = true;

// search.php perform searching from user summited form then return results
if (isset($_POST['submit'])) {
    # define variable to store form fields data
    $subject = $_POST['subject'];
    # get data
    if (preg_match(pattern, $subject)) {

    }

    # set search condition desciption
    $condSet = array('subject' => $_POST['subject']);
    if ($_POST['advanced'] == 'Yes') {
        # user has chosen advanced search

        if (isset($_POST['year'])) {

            // add year to condSet
            condSet['year'] = $_POST['year'];

        }
        if (isset($_POST['semester'])) {
            condSet['semester'] = $_POST['semester'];
        }
    }

    # connect to database
    $db = mysql_connect("localhost", "root", "") or die('I cannot connect to the database because: ' . mysql_error());
    # select database to use
    $mydb = mysql_select_db("web");
    # build query statement
    $sql = "select ";
    # run the query
    $result = mysql_query($sql);
    # loop through result set
    while ($row = mysql_fetch_array($result)) {
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
            $string = get_include_contents('index.html');

            function get_include_contents($filename)
            {
                if (is_file($filename)) {
                    ob_start();
                    include $filename;
                    return ob_get_clean();
                }
                return false;
            }
            
            echo "<code>";
        }

    }
} else {
	if ($DEBUG) {
		# code...
    echo "<p>Please enter a search query</p>";
	}
}

<html>
<head>
        <title>View Donor List</title>
		<link rel="stylesheet" type="text/css" href="css/table.css">
		
</head>
<body>
<?php

/* 
        VIEW.PHP
        Displays all data from 'donar' table
*/

        // connect to the database
       mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("bbms");

        // get results from database
        $result = mysql_query("SELECT * FROM request_for_blood ") 
                or die(mysql_error());  
                
        // display data in table
        echo "<p><b>Showing All Information</b> </p>";
        
        echo "<table border='1' cellpadding='10'>";
        echo "<tr> <th>Name</th> <th>Blood Group</th> <th>Amount</th> <th>Phone</th> <th>District</th>";

        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                
                
				
				// echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['blood_group'] . '</td>';
                echo '<td>' . $row['amount'] . '</td>';
                echo '<td>' . $row['contact'] . '</td>';
                echo '<td>' . $row['address'] . '</td>';
				
                
                
                
				//echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 

        // close table>
        echo "</table>";
?>


</body>
</html> 
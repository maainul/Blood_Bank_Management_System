<html>
<head>
        <title>Stock List</title>
			<link rel="stylesheet" type="text/css" href="css/table.css">
			
</head>
<body>
<div class="php">
<?php

				/* 
						VIEW.PHP
						Displays all data from 'stock' table
					*/
			
				// connect to the database
								mysql_connect ("localhost", "root","")  or die (mysql_error());
								mysql_select_db ("bbms");

								// get results from database
								$result = mysql_query("SELECT blood_group,unit,donate_date FROM  stock") 
										or die(mysql_error());  
										
								// display data in table
								echo "<p><b>Blood Stock List</b> </p>";
								echo "<br>";
								echo "<table border='1' cellpadding='10'>";
								echo "<tr> 
										
										
											<th>blood_group</th> 
											<th>unit</th>
											<th>donate_date</th>";

								// loop through results of database query, displaying them in the table
								while($row = mysql_fetch_array( $result )) {
										
										// echo out the contents of each row into a table
										echo "<tr>";
										
										echo '<td class="table">' . $row['blood_group'] . '</td>';
										echo '<td class="table">' . $row['unit'] . '</td>';
										echo '<td class="table">' . $row['donate_date'] . '</td>';
										
										
										//echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
										echo "</tr>"; 
								} 

								// close table>
								echo "</table>";
					?>
</body>
</html> 
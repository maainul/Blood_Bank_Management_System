<html>
<head>
        <title>Authority</title>
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
								$result = mysql_query("SELECT * FROM  authority") 
										or die(mysql_error());  
										
								// display data in table
								echo "<p><b>Contact Authority For Instant Donate </b> </p>";
								echo "<br>";
								echo "<table border='1' cellpadding='10'>";
								echo "<tr> 
											<th>Name</th>
										
											<th>Address</th>
											<th>Contact</th>
											<th>Mail</th>";

								// loop through results of database query, displaying them in the table
								while($row = mysql_fetch_array( $result )) {
										
										// echo out the contents of each row into a table
										echo "<tr>";
										echo '<td class="table">' . $row['name'] . '</td>';
										echo '<td class="table">' . $row['address'] . '</td>';
										echo '<td class="table">' . $row['contact'] . '</td>';
										echo '<td class="table">' . $row['mail'] . '</td>';
									
										
										//echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
										echo "</tr>"; 
								} 

								// close table>
								echo "</table>";
					?>
</body>
</html> 
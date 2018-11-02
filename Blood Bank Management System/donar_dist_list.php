<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Student Registration Form</title>
<link rel="stylesheet" type="text/css" href="css/table.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >

	
	<div id="form_container">
<?php
mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("bbms");

$term = $_POST['term'];


$sql = mysql_query("select * from donar where dis like '%$term%' ");

// display data in table
        echo "<p><b>Showing All Information</b> </p>";
        
        echo "<table border='1' cellpadding='10'>";
        echo "<tr>  
			<th>name</th> 
			<th>blood_group</th> 
			<th>sex</th> 			
			<th>weight</th>			
			<th>age</th> 
			<th>contact</th> 					
			<th>dis</th> 
			<th>mail</th>";
        // loop through results of database query, displaying them in the table

while ($row = mysql_fetch_array($sql))
        {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['blood_group'] . '</td>';
                echo '<td>' . $row['sex'] . '</td>';
                echo '<td>' . $row['weight'] . '</td>';
                echo '<td>' . $row['age'] . '</td>';  
				echo '<td>' . $row['contact'] . '</td>'; 
				echo '<td>' . $row['dis'] . '</td>'; 				
				echo '<td>' . $row['mail'] . '</td>';             				
				//echo '<td><a href="edit_stu_info.php?id=' . $row['id'] . '">Edit</a></td>';
                echo "</tr>"; 
        } 
        // close table>
        echo "</table>";	
	echo "<BR>";
echo "<a href='search_dist.html'>Search Another</a>";
echo "<BR>";
echo "<a href='BBMS.html'>Go Home</a>";


?>
<div id="footer">

		</div>
	</div>
	
	</body>

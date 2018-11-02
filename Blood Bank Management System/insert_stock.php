<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="bbms"; // Database name 
$tbl_name="stock"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$a=$_POST['id'];
$b=$_POST['d_name'];
$c=$_POST['blood_group'];
$d=$_POST['unit'];
$e=$_POST['donate_date'];
$f=$_POST['address'];
$g=$_POST['contact'];
$h=$_POST['mail'];


// Insert data into mysql 
$sql=mysql_query("INSERT INTO $tbl_name VALUES('$a', '$b', '$c', '$d', '$e', '$f','$g','$h')");
//$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".

if($sql){
echo "Successful";
//echo "<BR>";
//echo "<a href='stock_form.html'>Add Another</a>";
//echo "<BR>";
//echo "<a href='after_admin_log.html'>Index Page</a>";

}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
?>
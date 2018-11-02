<!DOCTYPE html>
<html>
<head>
<title>Delete Data Using PHP- Demo Preview</title>
<meta content="noindex, nofollow" name="robot">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Delete Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$connection = mysql_connect("localhost", "root", ""); // Eastablishing Connection With Server.
$db = mysql_select_db("bbms", $connection); // Selecting Database From Server.
if (isset($_GET['del'])) {
$del = $_GET['del'];
//SQL query for deletion.
$query1 = mysql_query("delete from donar where id=$del", $connection);
}
$query = mysql_query("select * from donar", $connection); // SQL query to fetch data to display in menu.
while ($row = mysql_fetch_array($query)) {
echo "<b><a href=\"deletephp.php?id={$row['id']}\">{$row['name']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
// SQL query to Display Details.
$query1 = mysql_query("select * from donar where id=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<form class="form">
<h2>---Details---</h2>
<span>id:</span> <?php echo $row1['id']."<br>"; ?>
<span>name:</span> <?php echo $row1['name']."<br>"; ?>
<span>Blood group:</span> <?php echo $row1['blood_group']."<br>"; ?>
<span>sex:</span> <?php echo $row1['sex']."<br>"; ?>
<span>sex:</span> <?php echo $row1['weight']."<br>"; ?>
<span>age:</span> <?php echo $row1['age']."<br>"; ?>
<span>contact:</span> <?php echo $row1['contact']."<br>"; ?>
<span>dis:</span> <?php echo $row1['dis']."<br>"; ?>
<span>mail:</span> <?php echo $row1['mail']."<br>"; ?>
<?php echo "<b><a href=\"deletephp.php?del={$row1['id']}\"><input type=\"button\" class=\"submit\" value=\"Delete\"/></a></b>"; ?>
</form><?php
}
}
// Closing Connection with Server.
mysql_close($connection);
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</body>
</html>
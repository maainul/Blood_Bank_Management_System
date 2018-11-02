<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Update Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("bbms", $connection);
if (isset($_GET['submit'])) {
$id = $_GET['id'];
$name = $_GET['name'];
$blood_group = $_GET['blood_group'];
$sex = $_GET['sex'];
$weight = $_GET['weight'];
$age = $_GET['age'];
$contact = $_GET['contact'];
$dis = $_GET['dis'];
$mail = $_GET['mail'];
$query = mysql_query
("update donar 
set
name='$name', blood_group='$blood_group', sex='$sex',
weight='$weight',age='$age',weight='$weight',contact='$contact',dis='$dis'mail='$mail'
where employee_id='$id'", $connection);
}
$query = mysql_query("select * from donar", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href='updatephp.php?update={$row['id']}'>{$row['name']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from donar where id=$update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='id' value='{$row1['id']}' />";
echo "<br />";
echo "<label>" . "Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='name' value='{$row1['name']}' />";
echo "<br />";
echo "<label>" . "blood_group:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='blood_group' value='{$row1['blood_group']}' />";
echo "<br />";
echo "<label>" . "sex:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='sex' value='{$row1['sex']}' />";
echo "<br />";
echo "<label>" . "weight:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='weight' value='{$row1['weight']}' />";
echo "<br />";
echo "<label>" . "weight:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='weight' value='{$row1['weight']}' />";
echo "<br />";
echo "<label>" . "contact:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='contact' value='{$row1['contact']}' />";
echo "<br />";

echo "<label>" . "dis:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dis' value='{$row1['dis']}' />";
echo "<br />";

echo "<label>" . "mail:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='mail' value='{$row1['mail']}' />";
echo "<br />";


echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysql_close($connection);
?>
</body>
</html>
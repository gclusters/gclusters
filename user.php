<html>
<head><title>GGCs database - user page</title></head>
<body background="backgr2.jpg">

<?php 

include 'inte2.php';
include 'conn.php';

$id= $_GET['ID'];
$id=trim($id);

$query="SELECT * from user where ID='$id'";
$result = mysql_query($query) or die("Query failed");

?>
<h3>User details</h3>

<table border=0>

<?php

$line = mysql_fetch_array($result);

echo '<tr><td><b>'.$line[3].' '.$line[4].'</b></td></tr>';
echo '<tr><td>'.$line[5].' ('.$line[7].') '.'</td></tr>';
if ($line[8]) echo "<tr><td>Web: <a href=\"$line[8]\">".$line[8].'</a></td></tr>';
if ($line[9]) echo "<tr><td>Facebook: <a href=\"$line[9]\">".$line[9].'</a></td></tr>';
if ($line[10]) echo "<tr><td>Twitter: <a href=\"$line[9]\">".$line[10].'</a></td></tr>';


?>

</table>


</body>
</html>


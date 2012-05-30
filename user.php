<html>
<head><title>GGCs database - user page</title></head>
<body background="backgr2.jpg">

<?php 

include 'inte2.php';
include 'conn.php';

$id= $_GET['ID'];
$id=trim($id);

// **** SQL QUERIES ****

$query="SELECT * from user where ID='$id'";
$result = mysql_query($query) or die("Query failed");

$qcl = "select tutors.cluster from tutors,user where tutors.person=user.ID and user.ID='$id'";
$rescl = mysql_query($qcl) or die("Query failed");
// $rrow = mysql_num_rows($qcl);

// *** END OF SQL QUERIES ***

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

<p>
<i>
<?php
echo $line[3];
echo ' is tutoring the following cluster(s):<br>';

while ($ltut = mysql_fetch_array($rescl)){
echo $ltut[0].'<br>';
 }

?>
</body>
</html>


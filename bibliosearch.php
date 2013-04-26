<html>

<head>
 <title>GGCs database: search page</title>
</head>

<body background="backgr2.jpg" text="#000000">

<?php 

include 'inte2.php';
include 'conn.php';

$myquery = "SELECT ID from biblioclusters order by ID DESC limit 1";
$numpa = mysql_query($myquery) or die("Huston, we have a problem...");
$maxyear = "SELECT MAX(annoarti) from biblioclusters";
$minyear = "SELECT MIN(annoarti) from biblioclusters";
$maxy = mysql_query($maxyear) or die("Huston, we have a problem...");
$miny = mysql_query($minyear) or die("Huston, we have a problem...");
$maxyy = mysql_fetch_row($maxy);
$minyy = mysql_fetch_row($miny);

?>

<center>
<p><i>a very very simple...</i><br>
<font size="+3">Biblio search</font>

</center>

<p>

<FORM METHOD=GET ACTION="findbiblio.php">
<FONT FACE="ARIAL, HELVETICA">
<center>

<i>Text to find</i>

<INPUT TYPE="text" NAME="mytext" SIZE="50">
<INPUT TYPE="submit" VALUE="Send">
<INPUT TYPE="reset" VALUE="Cancel">

<p>

<input type="radio" name="radios" value="ti" checked>Title
<input type="radio" name="radios" value="au">Authors
<input type="radio" name="radios" value="yr">Year

<?php

    echo "($minyy[0] - $maxyy[0])";

?>


<input type="radio" name="radios" value="id"><i>gc (1-

<?php

$numer = mysql_fetch_row($numpa);
echo $numer[0].')';

?>

</i>
<p>

</center>
</FORM>

<?php
include 'coda.html';
?>

</body>
</html>

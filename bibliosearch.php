<html>

<head>
 <title>GGCs database: search page</title>
</head>

<body background="backgr2.jpg" text="#000000">

<?php 
include 'inte2.php';
include 'conn.php';

// how many papers we have now in the DB?
$myquery="SELECT COUNT(*) from biblioclusters";
$numpa = mysql_query($myquery) or die("Huston, we have a problem...");

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

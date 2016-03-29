<html>
<head><title>GGCs database: bibliography</title></head>
<body background="static/images/backgr2.jpg" vlink="#3333CC">

<?php include 'inte2.php' ?>

<h1>Bibliography</h1>
<table border=0><tr><td><i>
Selected papers related to our Globular Clusters system
<br>
(<i>preprints</i> are listed in <i>italic</i>)
</i></td></tr></table>
<p>

<?php

include 'conn.php';

// Performing SQL query
$query = "SELECT authors,title,journal,annoarti,adslink FROM bibliomain 
ORDER BY annoarti DESC";

$result = mysql_query($query) or die("Query failed");

// Printing results in HTML

// headers

print "<table border=5>\n";

print "\t<tr align=center>\n";
print "\t\t<td><b>Author(s)</b></td>\n";
print "\t\t<td><b>Title</b></td>\n";
print "\t\t<td><b>Journal</b></td>\n";
print "\t\t<td><b>Year of publication</b></td>\n";
print "\t</tr>\n";

// print of the data

while ($line = mysql_fetch_array($result))
 {

print "\t<tr>\n";

echo "\t<td>\n";
echo $line[0];
echo  "</td>\n";

print "\t<td>\n";
print "<a href=\"".$line[4]."\">".$line[1]."</a>";
print "\t</td>\n";

print "\t<td>\n";
print $line[2];
print "\t</td>\n";
 
print "\t<td align=\"center\">\n";
print $line[3];
print "\t</td>\n";

}
print "</table>\n";

?>


<p>
<img src="static/images/wkonit1.gif">

<?

// Closing connection
mysql_close($link);

include 'html/coda.html';

?>

</body>
</html>

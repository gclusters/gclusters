<html>
<head><title>GGCs database - What's new</title></head>
<body background="static/images/backgr2.jpg">


<?php include 'inte2.php'?>

<h1>What's new...</h1>
<table border=1><tr><td><i>
List of the most recent upgrades and modifications in the
GGC database.</i></td></tr></table>
<p>
<a href="whatsnew2.php">Show <i>all</i> recorded upgrades</a>
<p>

<?php

include 'conn.php';

// Performing SQL query

$query = "SELECT * FROM whatsnewtab ORDER BY timemod DESC LIMIT 10";
$result = mysql_query($query) or die("Query failed");

// Printing results in HTML
// headers
print "<table border=1 width=\"90%\" align=\"center\">\n";
print "\t<tr align=center BGCOLOR=\"#CC9999\">\n";
print "\t\t<td><b>Date</b></td>\n";
print "\t\t<td><b>Topic</b></td>\n";
print "\t\t<td><b>Category</b></td>\n";
print "\t</tr>\n";

// print of data

while ($line = mysql_fetch_array($result)) {
     print "\t\t<td>$line[3]</td>\n";
     print "\t\t<td><font face=\"Comic Sans MS\">$line[1]</font></td>\n";
     print "\t\t<td>$line[4]</td>\n";
     print "\t</tr>\n";
 }
 print "</table>\n";
 print '</font>';
// Closing connection
mysql_close($link);

?>

</body>
</html>

<html>
<head><title>GGCs database: historical bibliography</title></head>
<body background="backgr2.jpg" vlink="#3333CC">

<?php include 'inte2.php' ?>

<h1>Bibliography</h1>
<table border=0><tr><td><i>
Selected papers related to our Globular Clusters system
<br>
</i></td></tr></table>
<p>

<?php

include 'conn.php';

// Performing SQL query

$query = "SELECT authors,title,journal,annoarti,biblioclusters.ID FROM biblioclusters
inner join bibliotags where biblioclusters.ID=bibliotags.paper and tag=\"history\" order by annoarti desc";

$result = mysql_query($query) or die("Query failed");

// Printing results in HTML

// headers

print "<table border=5>\n";

print "\t<tr align=center bgcolor=\"#CC9933\">\n";
print "\t\t<td><b>Author(s)</b></td>\n";
print "\t\t<td><b>Title</b></td>\n";
print "\t\t<td><b>Journal</b></td>\n";
print "\t\t<td><b>Year of publication</b></td>\n";
print "\t</tr>\n";

// print of the data

while ($line = mysql_fetch_array($result))
 {

print "\t<tr>\n";

// Authors
echo "\t<td>\n";
echo $line[0];
echo  "</td>\n";

// Title (with link)

print "\t\t<td>".'<a href="article.php?idart='.$line[4].'">'.$line[1]."</td>\n";

// Journal
print "\t<td>\n";
print $line[2];
print "\t</td>\n";

// Year
print "\t<td align=\"center\">\n";
print $line[3];
print "\t</td>\n";

}
print "</table>\n";

?>


<p>
<img src="wkonit1.gif">

<?

// Closing connection
mysql_close($link);

include 'coda.html';

?>

</body>
</html>
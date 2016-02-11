<doctype html>
<html lang="en">
<head><title>GGCs database: List of playing clusters</title></head>
<body background="backgr2.jpg" vlink="#3333CC">

<?php

// Database queries

include 'conn.php';
$query = "SELECT * from localfiles WHERE type=1";
$result = mysql_query($query) or die("Query failed");
include 'inte2.php'; 

?>

<h3><i>A (simple) list of playing clusters</i></h3>
<p>
Here we present a (hopefully growing) list of clusters for which a sound file is already available in 
this database. <br /> Sounds are generated as detailed in the 
<a href="soundclusters.php">companion page</a>, where we also explain the rationale of this experiment.
<p>	

<?php
	
// Printing results in HTML

// headers

print "<table cellpadding=3>\n";
print "\t<tr bgcolor=\"#CC9933\" align=center>\n";

// print "ID\n";
print "<td>cluster\n";
print "\t</td></tr>\n";

// print of data
     $i=1;
while ($line = mysql_fetch_array($result)) {
     $i++;
     $ii=$i/2;
     if (is_int($ii))
     {
       print "\t<tr bgcolor=\"#CCCCCC\">\n";
     }
     else
     {
     print "\t<tr bgcolor=\"#CCCC99\">\n";
     }
     print "\t\t<td>"."<a href=\"cluster_4.php?ggc=".urlencode($line[1])."\">".$line[1]."</a></td>\n";
     // print "<td>$line[1]</td>";
     print "\t</tr>\n";
 }
 print "</table>\n";
 print "</center>\n";

// Closing connection
 
mysql_close($link);

?>
	
	
<p>
<b>Ivan Ferraro</b>, original concept and realization<br>
<b>Marco Castellani</b>, collaboration, adaptation for Internet 
</p>

<?php include 'coda.html' ?>

</body>
</html>
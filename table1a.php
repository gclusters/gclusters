<html>
<head><title>GGCs database - Table 1</title></head>
<body background="backgr2.jpg">


<?php 
$sel="ID";
$sel= $_GET['sel'];
include 'inte2.php'


?>
<center>
<h1>Table 1 - <i>Positional Parameter</i></h1>
<table border=1><tr><td><i>
Click on a cluster ID to see the set of parameters, CM diagrams
and Digital Sky Survey images for the
cluster.</i></td></tr></table>
<p>

<?php

include 'conn.php';

if(!$sel)
     {
$sel="ID";
     }
echo "<i><b>Sorted by: ".$sel."<p></b></i>";

// Performing SQL query
$query = "SELECT ID,name,RA,Declination,Gal_long,Gal_lat,R_sun,R_gc,X,Y,Z FROM parameters ORDER by $sel";

// echo 'query=',$query;


$result = mysql_query($query) or die("Query failed");

// Printing results in HTML

// headers


print "<table cellpadding=3>\n";
print "\t<tr bgcolor=\"#CC9933\" align=center>\n";
// print "\t\t<td><b>ID</b></td>\n";
print "\t\t<td><b>"."<a href=\"table1a.php?sel=ID\">ID</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table1a.php?sel=name\">name</a></b></td>\n";
// print "\t\t<td><b>"."<a href=\"table1c.php?sel=RA\">RA</a></b></td>\n";
print "\t\t<td><b>RA</b></td>\n";
print "\t\t<td><b>Declination</b></td>\n";
print "\t\t<td><b>"."<a href=\"table1a.php?sel=Gal_long\">Gal. long.</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table1a.php?sel=Gal_lat\">Gal. lat.</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table1a.php?sel=R_sun\">R_sun</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table1a.php?sel=R_gc\">R_gc</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table1a.php?sel=X\">X</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table1a.php?sel=Y\">Y</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table1a.php?sel=Z\">Z</a></b></td>\n";
print "\t</tr>\n";

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
     print "\t\t<td>"."<a href=\"cluster_4.php?ggc=".urlencode($line[0])."\">".$line[0]."</a></td>\n";

     if (!$line[1])
      $line[1]=" -";

     print "\t\t<td>$line[1]</td>\n";
     print "\t\t<td>$line[2]</td>\n";
     print "\t\t<td>$line[3]</td>\n";
     print "\t\t<td>$line[4]</td>\n";
     print "\t\t<td>$line[5]</td>\n";
     print "\t\t<td>$line[6]</td>\n";
     print "\t\t<td>$line[7]</td>\n";
     print "\t\t<td>$line[8]</td>\n";
     print "\t\t<td>$line[9]</td>\n";
     print "\t\t<td>$line[10]</td>\n";



//     foreach ($line as $col_value) {
//	 print "\t\t<td>$col_value</td>\n";
//	      }
     print "\t</tr>\n";
 }
 print "</table>\n";
 print "</center>\n";

// Closing connection
 
mysql_close($link);

/* commento questo pezzo...

<?php $table="ez_logezboo"; include ("../WebStats/write_logs.php"); ?>

termine pezzo commentato ... */

?>



<?php include 'coda.html' ?>

</body>
</html>

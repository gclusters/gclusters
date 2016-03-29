<html>
<head><title>GGCs database - Table 2</title></head>
<body background="static/images/backgr2.jpg">


<?php 
include 'inte2.php';
$sel= $_GET['sel'];
?>
<center>
<h1>Table 2 - <i>Photometric Parameters</i></h1>
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

// Performing SQL query
$query = "SELECT ID,name,E_bv,V_hb,m_M,Vt,M_Vt,UB,BV,VR,VI,S_RR,HBR,HBT FROM parameters order by $sel";

// echo 'query=',$query;


$result = mysql_query($query) or die("Query failed");

// Printing results in HTML

// headers

echo "<i><b>Sorted by: ".$sel."<p></b></i>";
print "<table cellpadding=3>\n";
print "\t<tr bgcolor=\"#CC9933\" align=center>\n";
print "\t\t<td><b>"."<a href=\"table2a.php?sel=ID\">ID</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table2a.php?sel=name\">Name</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table2a.php?sel=E_bv\">E(B-V)</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table2a.php?sel=V_hb\">V_HB</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table2a.php?sel=m_M\">(m-M)V</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table2a.php?sel=Vt\">V_t</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table2a.php?sel=M_Vt\">M_Vt</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table2a.php?sel=UB\">U-B</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table2a.php?sel=BV\">B-V</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table2a.php?sel=VR\">V-R</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table2a.php?sel=VI\">V-I</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table2a.php?sel=S_RR\">S_RR</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table2a.php?sel=HBR\">HBR</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table2a.php?sel=HBT\">HBT</a></b></td>\n";


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
     print "\t\t<td>$line[11]</td>\n";
     print "\t\t<td>$line[12]</td>\n";
     print "\t\t<td>$line[13]</td>\n";




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

termine pezzo commentato ... */

?>

<?php include 'html/coda.html' ?>


</body>
</html>

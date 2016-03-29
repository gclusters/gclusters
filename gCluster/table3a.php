<html>
<head><title>GGCs database - Table 3</title></head>
<body background="static/images/backgr2.jpg">


<?php 
$sel= $_GET['sel'];
include 'inte2.php';
?>
<center>
<h1>Table 3 - <i>Metallicities, radial velocities, structural parameters
</i></h1>
<table border=1><tr><td><i>
Click on a cluster ID to see the whole set of available parameters for that
cluster.</i></td></tr></table>
<p>

<?php

include 'conn.php'; 

if(!$sel)
     {
$sel="ID";
     }

// Performing SQL query
$query = "SELECT ID,name,FE_H,SpT,v_r,v_r_ERR,V_LSR,C,R_C,R_H,R_T,LG_TC,LG_TH,MU_V,RHO_V FROM parameters ORDER by $sel";

// echo 'query=',$query;


$result = mysql_query($query) or die("Query failed");

// Printing results in HTML

// headers
// print "<center>\n";

echo "<i><b>Sorted by: ".$sel."<p></b></i>";

print "<table cellpadding=3>\n";
print "\t<tr bgcolor=\"#CC9933\" align=center>\n";
print "\t\t<td><b>"."<a href=\"table3a.php?sel=ID\">ID</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table3a.php?sel=name\">Name</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table3a.php?sel=FE_H\">[Fe/H]</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table3a.php?sel=SpT\">SpT</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table3a.php?sel=v_r\">v_r</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table3a.php?sel=v_r_ERR\">+/-</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table3a.php?sel=v_LSR\">V_LSR</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table3a.php?sel=C\">c</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table3a.php?sel=R_C\">r_c</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table3a.php?sel=R_H\">r_h</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table3a.php?sel=R_T\">r_t</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table3a.php?sel=LG_TC\">lg(tc)</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table3a.php?sel=LG_TH\">lg(th)</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table3a.php?sel=MU_V\">mu_V</a></b></td>\n";
print "\t\t<td><b>"."<a href=\"table3a.php?sel=RHO_V\">rho_0</a></b></td>\n";
print "\t</tr>\n";

// print of data
     $i=1;
while ($line = mysql_fetch_array($result)) {
     $i++;
     $ii = $i/2;
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

     if (!$line[3])
      $line[3]=" -";


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
     print "\t\t<td>$line[14]</td>\n";




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

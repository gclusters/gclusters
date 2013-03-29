<html>
<head><title>
        GGCs database :: Results of your query
</title></head>
<body background="backgr2.jpg">

<?php 

$pulldown= $_GET['pulldown'];
$pulldown2= $_GET['pulldown2'];
$pulldown3= $_GET['pulldown3'];
$pulldown4= $_GET['pulldown4'];
$value_1= $_GET['value_1'];
$value_2= $_GET['value_2'];
$radios= $_GET['radios'];

include 'conn.php';
include 'inte2.php'; 

?>

<h1>Results of your query:</h1>

<?php

// parameter definitions

$variab[1] = 'Gal_long';
$variab[2] = 'Gal_lat';
$variab[3] = 'R_sun';
$variab[4] = 'R_gc';
$variab[5] = 'X';
$variab[6] = 'Y';
$variab[7] = 'Z';
$variab[8] = 'E_bv';
$variab[9] = 'V_hb';
$variab[10] = 'm_M';
$variab[11] = 'FE_H';
$variab[12] = 'v_r';
$variab[13] = 'R_C';
$variab[14] = 'R_H';
$variab[15] = 'R_T';
$variab[16] = 'MU_V';
$variab[17] = 'RHO_V';
$variab[18] = 'C';


$rel="";

if ($pulldown2== 1) 
    $rel="<";
if ($pulldown2== 2) 
    $rel="=";
if ($pulldown2== 3) 
    $rel=">";

if ($pulldown4== 1) $rel4= "<";
if ($pulldown4== 2) $rel4= "=";
if ($pulldown4== 3) $rel4= ">";

$first_sel = $variab[$pulldown];
$second_sel = $variab[$pulldown3];

if ($radios== "radio1") $conn = 'and';
if ($radios== "radio2") $conn = 'or';

// Performing SQL query
$query = "SELECT ID,$first_sel,$second_sel FROM parameters
    where(($first_sel$rel$value_1) $conn $second_sel$rel4$value_2) order by $first_sel";
$result = mysql_query($query) or die("Query failed");

echo "<p>Query processed at ";
echo date("H:i, jS F");
echo " - ";

$res_1 = mysql_num_rows($result);
echo 'Number of clusters selected: ';
echo '<b>';
echo $res_1;
echo'</b><p>';

// Printing results in HTML
print "<table border=1>\n";

print '<tr bgcolor="#e6e6fa"><td><b>cluster</b></td>';
print "<td><b>$first_sel</b></td>";

if ($pulldown!=$pulldown3) // do not show second column if are identical
{
    print "\t\t<td><b>$second_sel</b></td>\n"; // second value
}

while ($line = mysql_fetch_array($result)) {

     print "\t<tr>\n";
     print "\t\t<td>"."<a href=\"cluster_4.php?ggc=".urlencode($line[0])."\">".$line[0]."</a></td>\n"; // cluster
     $col_value=$line[1];
     print "\t\t<td>$col_value</td>\n"; // first value
     $col_value=$line[2];
     if ($pulldown!=$pulldown3) // do not show second column if are identical
     {
 	 print "\t\t<td>$col_value</td>\n"; // second value
     }
     print "\t</tr>\n";

 }

 print "</table>\n";

mysql_close($link);
include 'coda.html'

?>

</body>
</html>

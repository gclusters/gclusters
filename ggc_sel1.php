<html>
<head><title>GGCs DB :: Search results</title></head>
<body background="backgr2.jpg">

<?php 

// ToDo cambiare layout della tabella
// ToDo presentare tutti i numeri con le stessa quantità di cifre dopo la virgola

include 'conn.php';
include 'inte2.php'; 

$pulldown= $_GET['pulldown'];
$pulldown2= $_GET['pulldown2'];
$pulldown4= $_GET['pulldown4'];
$value_1= $_GET['value_1'];

?>

<h1>Results of your query:</h1>

<?php

// def. delle variabili

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

// Performing SQL query
$query = "SELECT ID,$first_sel FROM parameters where ($first_sel$rel$value_1) order by $first_sel";

echo'<p>';

$result = mysql_query($query) or die("Query failed");
echo "<p>Query processed at ";
echo '<b>';
echo date("H:i, jS F");
echo'</b>';
echo " - ";

$res_1 = mysql_num_rows($result);
echo 'Number of clusters selected: ';
echo '<font size="+1"><b>';
echo $res_1;
echo'</b></font><p>';

// Printing results in HTML
print "<table border=1>\n";

print '<tr bgcolor="#e6e6fa"><td><b>cluster</b></td>';
print "<td><b>$first_sel</b></td>";


while ($line = mysql_fetch_array($result)) {

print "\t<tr>\n";
print "\t\t<td>"."<a href=\"cluster_4.php?ggc=".urlencode($line[0])."\">".$line[0]."</a></td>\n"; // cluster
$col_value=$line[1];
print "\t\t<td>$col_value</td>\n";  // value
print "\t</tr>\n";

 }

print "</table>\n";

mysql_close($link);
include 'coda.html';

?>

</body>
</html>
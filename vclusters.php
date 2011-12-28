<html>
<head><title>GGCs database: "Top 25"</title></head>
<body background="backgr2.jpg" vlink="#3333CC">


<?php include 'inte2.php'?>
<center>
<h2>The GGC-DB "Top 25":</h2>
<h3>our most popular pages (according to the total number of visit)</h3>
<p>

<?php

// connessione al database

include 'conn.php';

// leggo le statistiche

$querylink2 = "SELECT * FROM accesscount ORDER BY n_vis DESC LIMIT 25";
$res_visited = mysql_query($querylink2) or die("Query failed");

?>

<table border=6 width=50%><tr>
<td bgcolor="#FFCC99" align="center" width=100% colspan="3"><i><b>
Most visited pages</b>
</td></tr>

<?
$nvisited=1;
while ($l_visited = mysql_fetch_array($res_visited)){

echo '<tr><td align=center><i>';
echo $nvisited;
echo '</i></td>';

echo '<td width=70%><center>';
// scrivo il nome dell'ammasso

print "<a href=\"cluster_4.php?ggc=".urlencode($l_visited[0])."\">".$l_visited[0]."</a>";
// echo $l_visited[0];
// se c'e', scrivo l'altra denominazione
if ($l_visited[1])
   {
     echo '<i> (';
     echo $l_visited[1];
     echo ')</i> ';
   }
echo '<i><td align=center> ';
// il numero delle visite...
echo $l_visited[2];
print "</td></tr>\n";
//print "<tr><td>";
$nvisited++;
}
?>

</center>
</td></tr>

</table>

<p>
<i>Take a look also at the table of <a href="uclusters.php">recently updated clusters</a></i>
</center>
<p>

<?php include 'coda.html' ?>

</body>
</html>

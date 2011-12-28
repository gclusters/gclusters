<html>
<head><title>GGCs database: "Recently updated"</title></head>
<body background="backgr2.jpg" vlink="#3333CC">


<?php include 'inte2.php'?>
<center>
<h2>The GGC-DB "Recently updated clusters":</h2>
<p>

<?php

// connessione al database

include 'conn.php';

// leggo le statistiche

$querylink2 = "SELECT * FROM accesscount ORDER BY updated DESC LIMIT 25";
$res_visited = mysql_query($querylink2) or die("Query failed");

?>

<table border=6 width=50%><tr>
<td bgcolor="#FFCC99" align="center" width=100% colspan="3"><i><b>
Recently updated pages</b>
</td></tr>

<?
$nvisited=1;
while ($l_visited = mysql_fetch_array($res_visited)){

// First column: ranking
echo '<tr><td align=center><i>';
echo $nvisited;
echo '</i></td>';

// Second column: name
echo '<td width=70%><center>';

print "<a href=\"cluster_4.php?ggc=".urlencode($l_visited[0])."\">".$l_visited[0]."</a>";
// echo $l_visited[0];
// se c'e', scrivo l'altra denominazione
if ($l_visited[1])
   {
     echo '<i> (';
     echo $l_visited[1];
     echo ')</i> ';
   }
// Third column: updated on...
echo '<i><td align=center> ';
// il numero delle visite...
echo $l_visited[3];
print "</td></tr>\n";
//print "<tr><td>";
$nvisited++;
}
?>

</center>
</td></tr>

</table>
</center>
<p>

<?php include 'coda.html' ?>

</body>
</html>

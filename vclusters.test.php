<html>
<head><title>GGCs database: "Top 25"</title></head>
<body background="backgr2.jpg" vlink="#3333CC">


<? include 'inte2.php'?>
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

$querylink3 = "SELECT * FROM accesscount ORDER BY updated DESC LIMIT 10";
$res_ql3 = mysql_query($querylink3) or die("Query failed");

?>

<table border=6 width=50%><tr>
<td bgcolor="#FFCC99" align="center" width=100% colspan="3"><i><b>
Most visited pages</b>
</td></tr>

<?
$nvisited=1;
while ($l_visited = mysql_fetch_array($res_visited)){

// posizione in classifica
echo '<tr><td align=center><i>';
echo $nvisited;
echo '</i></td>';

echo '<td width=70%><center>';
// scrivo il nome dell'amma

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

<table border=6 width=50%><tr>
<td bgcolor="#FFCC99" align="center" width=100% colspan="3"><i><b>
Recently updated pages</b>
</td></tr>

<?
$nvisited=1;
while ($r_visited = mysql_fetch_array($res_ql3)){

// posizione in classifica
echo '<tr><td align=center><i>';
echo $nvisited;
echo '</i></td>';

echo '<td width=70%><center>';
// scrivo il nome dell'amma

print "<a href=\"cluster_4.php?ggc=".urlencode($r_visited[0])."\">".$r_visited[0]."</a>";
// echo $r_visited[0];
// se c'e', scrivo l'altra denominazione
if ($r_visited[1])
   {
     echo '<i> (';
     echo $r_visited[1];
     echo ')</i> ';
   }
echo '<i><td align=center> ';
// data di aggiornamento
echo $r_visited[3];
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

<? include 'coda.html' ?>

</body>
</html>

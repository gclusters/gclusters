<html>
<head><title>GGCs database: "adoption"</title></head>
<body background="backgr2.jpg" vlink="#3333CC">


<?php include 'inte2.php'?>
<center>
<h2>Adopt a cluster!</h2>
<h3>Help us to keep this database up-to-date, giving us a few minutes of your time 
monitoring the presence of new data 
</h3>
</center>
<br>
<p>
Here you can choose to "adopt" a cluster. The adoption mechanism run as follows:
<ul>
<li>
By adopting a cluster you accept to monitor (in your spare time, no hurry) a given
cluster for the arrival, in the scientific literature as well on the web, of new 
articles, parameters or data (or whenever you think is relevant for our compilation).
You don't need to be a professional astronomer to do this (though it may help).
<li>
When you find something relevant to "your" cluster, you are invited to notify 
to the maintainers
of this website for changes, in order to be included. To do it, 
simply drop down a line with the
info (a reference, a web page, etc....) at <i>gclusters@altervista.org</i>, 
and you're done.
<li>You can stop following your cluster anytime. Only, you're kindly requested to
send us an email (some address than previous point), in order to let us search
for another maintainer.
<li>You can follow up to three clusters.
<li>Any cluster can have up to three maintainer (but if you want to really help us, 
you're encouraged to choose  
clusters that still have no maintainer!)
<li>(If you don't mind) your name and institution (if applicable) will appear in the page of 
clusters you're monitoring.
<p><br><p>





<?php

// connessione al database

include 'conn.php';

// leggo le statistiche

$querylink2 = "SELECT * FROM accesscount ORDER BY n_vis DESC LIMIT 25";
$res_visited = mysql_query($querylink2) or die("Query failed");

?>

<table border=6 width=50%><tr>
<td bgcolor="#FFCC99" align="center" width=100% colspan="3"><i><b>
Clusters & Maintainers</b>
</td></tr>

<tr>
<td>
1
<td>
M 13
</td>
<td>
<a href="user/pippo.php">Pippo</a>, Pluto, Topolino
</td>
</tr>

<tr>
<td>
2
</td>
<td>
M 3
</td>
<td>
<i>free (<a href="form-adopt.php">click</a> to take this cluster)</i>
</td>
</tr>

<tr>
<td>
3</td>
<td>
...</td>
<td>
<i>....</i>
</td>
</tr>


</table>

<!--

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
-->

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

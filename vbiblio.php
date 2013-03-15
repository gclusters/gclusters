<html>
<head><title>GGCs database: "Top 25 papers"</title></head>
<body background="backgr2.jpg" vlink="#3333CC">

<?php include 'inte2.php'?>
<center>
<h3><i>Enjoy a view of our most popular papers<br> (according to the total number of visit)</i></h3>
<p>

<?php

// connessione al database

include 'conn.php';

// leggo le statistiche

$querylink2 = "SELECT * FROM biblioclusters ORDER BY numvis DESC LIMIT 25";
$res_visited = mysql_query($querylink2) or die("Query failed");

?>

<table border=6 width=70%><tr>
<td bgcolor="#FFCC99" align="center" width=100% colspan="4"><i><b>
Most visited papers</b>
</td></tr>

<?
$nvisited=1;
while ($l_visited = mysql_fetch_array($res_visited)){

// 1. Ranking 
echo '<tr><td width="8%" align=center><i>';
echo '#'.$nvisited;
echo '</i></td>';


// 2. Title of the paper
echo "<td><i>$l_visited[0]</i><br>";
print "<a href=\"article.php?idart=".$l_visited[4]."\">".$l_visited[1]."</a>
</td>";

// 3. Number of visits
echo '<i><td width="8%" align=center> ';
echo $l_visited[13];
print "</td></tr>\n";
$nvisited++;

}

?>
</td></tr>
</table>

<p>
<i>
Numbers of visits are counted from Mar 14, 2013<br>	
Take a look also at the table of <a href="uclusters.php">recently updated clusters</a></i>
</center>
<p>

<?php include 'coda.html' ?>

</body>
</html>
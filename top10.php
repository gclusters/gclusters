<html>
<head><title>GGCs database: "Top 25 papers"</title></head>
<body background="backgr2.jpg" vlink="#3333CC">

<?php include 'inte2.php'?>
<center>
<h3><i>
What's popular on gclusters, according to the total number of visit</i></h3>
</i></h3>
<p>


<?php

// connessione al database

include 'conn.php';

// leggo le statistiche

$querylink2 = "SELECT * FROM biblioclusters ORDER BY numvis DESC LIMIT 10";
$res_visited = mysql_query($querylink2) or die("Query failed");

?>

<table border=6 width=70%><tr>
<td bgcolor="#FFCC99" align="center" width=100% colspan="4"><i><b>
Top 10 papers</b>
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

// 3. Number of the paper
echo "<td width=\"8%\" align=\"center\"><i>gc$l_visited[4]</i></td>";


// 4. Number of visits

if($nvisited==1) $maxvis=$l_visited[13];
$popindex = $l_visited[13]/$maxvis;

echo '<i><td width="8%" align=center> ';
// echo $l_visited[13];
echo round($l_visited[13]/$maxvis*100,2);
print "</td></tr>\n";
$nvisited++;

}

?>
</td></tr>
</table>

<?php include 'coda.html' ?>

</body>
</html>
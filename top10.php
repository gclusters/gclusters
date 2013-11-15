<html>
<head><title>GGCs database: "gclusters :: Our Top Ten"</title></head>
<body background="backgr2.jpg" vlink="#3333CC">

<?php include 'inte2.php'?>
<center>
<h3><i>
What's popular on gclusters, according to the total number of visit</i></h3>
</i></h3>
<p>


<?php

include 'conn.php';

// SQL COMMANDS

$querylink2 = "SELECT * FROM accesscount ORDER BY n_vis DESC LIMIT 10";
$res_visited = mysql_query($querylink2) or die("Query failed");


$query_paper = "SELECT * FROM biblioclusters ORDER BY numvis DESC LIMIT 10";
$res_paper = mysql_query($query_paper) or die("Query failed");

$query_link = "SELECT * FROM linkspage ORDER BY numvis DESC LIMIT 10";
$res_link = mysql_query($query_link) or die("Query failed");


?>

    <!-- TOP CLUSTER -->

    <table border=6 width=70%><tr>
    <td bgcolor="#FFCC99" align="center" width=100% colspan="3"><i><b>
    Top 10 clusters</b>
    </td></tr>

        <?
        $nvisited=1;
        while ($l_visited = mysql_fetch_array($res_visited)){

            echo '<tr><td align=center><i>';
            echo '#'.$nvisited;
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
            if($nvisited==1) $maxvis=$l_visited[2];
            echo round($l_visited[2]/$maxvis*100,1);
            print "</td></tr>\n";
//print "<tr><td>";
            $nvisited++;
        }
        ?>

        </table>

<p>

    <!-- TOP PAPERS -->

<table border=6 width=70%><tr>
<td bgcolor="#FFCC99" align="center" width=100% colspan="4"><i><b>
Top 10 papers</b>
</td></tr>

<?
$nvisited=1;
while ($l_visited = mysql_fetch_array($res_paper)){

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

if($nvisited==1) $maxvis=$l_visited[13];   // setting the top of the scale ...
$popindex = $l_visited[13]/$maxvis;

echo '<i><td width="8%" align=center> ';
// echo $l_visited[13];
echo round($l_visited[13]/$maxvis*100,1);
print "</td></tr>\n";
$nvisited++;

}

?>
</td></tr>
</table>

    <p>

    <!-- TOP LINKS -->

    <table border=6 width=70%><tr>
    <td bgcolor="#FFCC99" align="center" width=100% colspan="4"><i><b>
    Top 10 links</b>
    </td></tr>

<?php

        $llvisited=1;
        while ($li_visited = mysql_fetch_array($res_link)){

        // 1. Ranking
        echo '<tr><td width="8%" align=center><i>';
        echo '#'.$llvisited;
        echo '</i></td>';


         // 2. Title of the link
        echo "<td><i>$li_visited[0]</i><br>";
        print "<a href=\"singlelink.php?idart=" . $li_visited[6]. "\">" . $li_visited[1] . "</a>
        </td>";

         // 3. ID of the link
         echo "<td width=\"8%\" align=\"center\"><i>lk$li_visited[6]</i></td>";


         // 4. Number of visits
         echo '<i><td width="8%" align=center> ';
         if($llvisited==1) $maxvis=$li_visited[8];
         echo round($li_visited[8]/$maxvis*100,1);

         print "</td></tr>\n";

         $llvisited++;
        }
?>

    </table>

<p>
The column on the righ shows our "popularity index", which is the total number of visits normalized to a max of 100.
</p>


<?php include 'coda.html' ?>

</body>
</html>
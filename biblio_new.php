<?php

include 'conn.php';
include 'inte2.php';
include 'columns.php';

//ToDo sistemare il display delle figure, va inserito il blocco "classico" per i vari tipi di files immagine

// define queries ...
$query_auth = "SELECT * FROM biblioclusters ORDER BY biblio_date DESC LIMIT 5";
$result = mysql_query($query_auth) or die("Query failed");
$numres = mysql_num_rows($result);

?>

<HTML>
<HEAD>
<TITLE>
Gclusters :: Selected bibliography
</TITLE>

<meta name="author" content="Marco Castellani">
<meta name="Keywords" content="astronomy, Milky Way, globular clusters">

</HEAD>

<body background="backgr2.jpg">

<center><br>
<b>Selected bibliography and CMDs</b>
<p>(A list of papers is also available via our <i>CiteULike</i> group
<a href="http://www.citeulike.org/groupfunc/6906/home">Stellar Clusters</a>)
<p>
<br>
</center><hr>

<h2><i>Latest five items added to the database</i><br>
(<a href="biblio_all.php?page=0">click here</a> to see all items)</h2>

<?php
$iiref=0;

while ($line = mysql_fetch_row($result)) {
$iiref++;

// cerco tutti i tag disponibili per il dato paper
$query_names = "SELECT tag FROM bibliotags WHERE paper = '$line[4]'";
$res_names = mysql_query($query_names) or die ("query_names failed");
$num_paper= mysql_num_rows($res_names);

$ggc_cmd="ima/".$line[7];

?>


<!-- stampo i risultati su tabella -->

<table width="90%" border=2>

<tr>
<td colspan=2 align=CENTER BGCOLOR="#99CCFF"><b>

<?php

$artnum=$line[4];
echo 'Reference n. '.$iiref." <i>(<a href=\"article.php?idart=$artnum\">gc".$artnum.'</a>)</i>';
echo '</td></tr>';

echo '<tr>';
echo '<td width="20%"> ';
echo 'Author';
echo '</td><td>';
echo $line[0];
echo "</td></tr>\n";

echo '<tr><td>';
echo 'Title';
echo '</td><td>';
echo '<a href=';
echo $line[3];
echo ">";
echo $line[1];
echo "</a>";
echo "</td></tr>\n";

echo "<tr><td>";
echo 'Journal';
echo '</td><td>';
echo $line[2];
echo "</td></tr>\n";

// Anno di pubblicazione
echo "<tr><td>\n";
echo 'Year';
echo '</td><td>';
echo $line[6];
echo "</td></tr>\n";

// JournalFire link (if available)
if ($line[11]!="")
    {
echo '<tr><td>';
echo 'Actions';
echo '</td><td>';
echo '<a href="'.$line[11].'">Comment this paper on JournalFire</a>';
echo "</td></tr>\n";
    }

// CM diagram (if available)
if ($line[7]!="")
    {
echo '<tr><td>';
echo 'CM diagram';
echo '</td><td>';
echo '<img src='.$ggc_cmd.'>';
echo "</td></tr>\n";
    }

// Alternative URL 
if ($line[10]!="")
    {
echo '<tr><td>';
echo 'Also available at:';
echo '</td><td>';
echo '<a href="'.$line[10].'">'.$line[10]."</a>";
echo "</td></tr>\n";
    }

// List of tags for the paper
echo '<tr><td>';
echo 'Tags';
echo "</td><td>\n";
for ($nnp=0; $nnp < $num_paper; $nnp++)
  {
    $ntag = mysql_fetch_row($res_names);
        echo "<b>"."<a href=\"cluster_4.php?ggc=".urlencode($ntag[0])."\">".$ntag[0]."</a>\n";

      if ($nnp < $num_paper-1)
       {
        echo ", ";	// inserting comma, whenever needed
       }
  }

echo "</td></tr>\n";

if ($line[8]!="")
    {
echo '<tr><td>';
echo '<i>Added on:</i>';
echo '</td><td><i>';
echo $line[8];
echo "</i></td></tr>\n";
    }

echo "</table><p>\n";

}
// Closing connection

mysql_close($link);

echo "<p>Query processed at ";
echo date("H:i, jS F");
echo "<br>";

include 'coda.html' 

?>

</body>
</html>
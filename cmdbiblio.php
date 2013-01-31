<?php

include 'conn.php';

$ggc= $_GET['ggc'];
$ggc=trim($ggc);

// Seleziono le righe (in biblioclusters) corrispondenti alla tag con il nome dell'ammasso (in bibliotags)

$query_auth = "select biblioclusters.* from biblioclusters,bibliotags 
where bibliotags.tag like '%$ggc%' and biblioclusters.ID=bibliotags.paper 
and bibliclusters.cmdiagrams=\"lavori.gif\" ORDER BY annoarti DESC, mdate DESC";

$result = mysql_query($query_auth) or die("Query failed");
$numres = mysql_num_rows($result);

?>


<HTML>
<HEAD>
<TITLE>

<?php

if (!$numres) {

echo 'GGCs database: no clusters selected';
echo "</TITLE>\n";

echo "<meta name=\"Author\" content=\"Marco Castellani\">\n";
echo "<meta name=\"Keywords\" content=\"astronomy, Milky Way, globular clusters\">\n";
echo "</HEAD>\n";
echo '<BODY background="http://www.mporzio.astro.it/cefalu2008/ima/back-012.gif" TEXT="#0000FF" LINK="#0000FF" VLINK="#A020F0" ALINK="#FF0000">';
// echo "<BODY BGCOLOR=\"#DCDCDC\" TEXT=\"#0000FF\" LINK=\"#0000FF\" VLINK=\"#A020F0\" ALINK=\"#FF0000\">\n";
include 'inte2.php';

echo '<h1>','<i>Your query: </i>',$ggc,'</h1>';
echo "\n";

echo "<h3>Sorry, no bibliography available for this cluster in the GGCs-DB !</h2>\n";
include 'coda.html';
echo '</body></html>';
echo "\n";
exit;
}


echo 'GGCs database: bibliography for globular cluster ',$ggc;
?>

</TITLE>

<meta name="Author" content="Marco Castellani">
<meta name="Keywords" content="astronomy, Milky Way, globular clusters">

</HEAD>

<BODY background="http://www.mporzio.astro.it/cefalu2008/ima/back-012.gif" TEXT="#0000FF" LINK="#0000FF" VLINK="#A020F0" ALINK="#FF0000">
<?php
include 'inte2.php';
?>

<?php
include 'columns.php';
?>
<center>
<b>
Selected bibliography</b>
</center><hr>
<?php
echo '<h1>','<i>Your query: </i>',$ggc,'</h1>';
echo "\n";

?>

<?php
$iiref=0;
// ciclo su tutta la bibliografia di un cluster

while ($line = mysql_fetch_row($result)) {
$iiref++;

// Inserisco qui la ricerca per gli altri tag (blocco A1)

// cerco tutti i tag disponibili per il dato paper
$query_names = "SELECT tag FROM bibliotags WHERE paper = '$line[4]'";
$res_names = mysql_query($query_names) or die ("query_names failed");
$num_paper= mysql_num_rows($res_names);
//  fine blocco tags

$ggc_cmd="ima/".$line[7]; // locazione del file del CMD nel filesystem
?>

<!-- stampo i risultati su tabella -->

<table width="90%" border=2>

<tr>
<td colspan=2 align=CENTER BGCOLOR="#99CCFF"><b>

<?php
echo 'Reference n. '.$iiref;
echo '</td></tr>';
echo '<tr>';
echo '<td width="20%"> ';
echo 'Author';
echo '</td><td>';
echo $line[0];
echo '</td></tr>';
echo "\n";
echo '<tr><td>';
echo 'Title';
echo '</td><td>';
echo '<a href=';
echo $line[3];
echo ">";
echo "\n";
echo $line[1];
echo "</a>";
echo "\n";
echo '</td></tr><tr><td>';
echo "\n";
echo 'Journal';
echo '</td><td>';
echo $line[2];
echo '</td></tr>';
echo "\n";
if ($line[7]!="")
    {

// Settore B1 ...
// Individuo il nome corretto per il file con il CMD...

$ggc_cmd_new="ima/".$line[7];
$ggc_cmd_png=$ggc_cmd_new.'.png';
$ggc_cmd_gif=$ggc_cmd_new.'.gif';
$ggc_cmd_jpg=$ggc_cmd_new.'.jpg';

// Provo ad aprire i files con le differenti estensioni possibili...

@ $fpp_new = fopen ($ggc_cmd_new, "r");
@ $fpp_png = fopen ($ggc_cmd_png, "r");
@ $fpp_gif = fopen ($ggc_cmd_gif, "r");
@ $fpp_jpg = fopen ($ggc_cmd_jpg, "r");

// Scelgo il file che "si apre"...

if($fpp_new) {
    $ggc_cmd=$ggc_cmd_new;	// perfetto così
} else if ($fpp_png) {
    $ggc_cmd=$ggc_cmd_png;	// va bene il PNG
} else if ($fpp_gif) {		// va bene il GIF
    $ggc_cmd=$ggc_cmd_gif;
} else if ($fpp_jpg) {
    $ggc_cmd=$ggc_cmd_jpg;	// va bene il JPG

} else {
$ggc_cmd=$line[9];  // uso il link a risorsa esterna
}


// concluso settore B1

echo '<tr><td>';
echo 'CM diagram';
echo '</td><td>';
echo '<img src='.$ggc_cmd.'>';
echo '</td></tr>';
echo "\n";
    }

if ($line[6]!="0")
   {
echo '<tr><td>';
echo 'Year of publication:';
echo '</td><td>';
echo $line[6];
echo '</td></tr>';
echo "\n";
   }

// Inserisco qui blocco per visualizzazione tags (A2)
// ************************* blocco A2 *****************
echo '<tr><td>';
echo 'Tags';
echo "</td><td>\n";
for ($nnp=0; $nnp < $num_paper; $nnp++)
  {
    $ntag = mysql_fetch_row($res_names);
      echo "<b>".$ntag[0]."</b>";
      if ($nnp < $num_paper-1)
       {
        echo ", ";
       }
  }

echo "</td></tr>\n";
// ****************************************************
// Fine blocco visualizzazione tags

echo '</table><p>';
echo "\n";
} // chiusura del while di riga 79

// Closing connection

mysql_close($link);

?>


<p>

<?
 echo "<p>Query processed at ";
 echo date("H:i, jS F");
 echo "<br>";
?>

<?php include 'coda.html' ?>

</body>
</html>

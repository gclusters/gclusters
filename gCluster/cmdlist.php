<?php

include 'conn.php';

// define queries ...

$ggc= $_GET['ggc'];
$ggc=trim($ggc);

/*

// ------------ ESTRAZIONE DATI DA VARIE TABELLE -----------------------

// INTERROGAZIONE TABELLA BLOG
$querylink_1 = "SELECT * FROM blog WHERE ID = '$row[0]'";
$blogres = mysql_query($querylink_1) or die("Query failed");
$b_row = mysql_fetch_row($blogres);


// INTERROGAZIONE TABELLA VARIABILI
$queryvar = "SELECT * FROM rrlyrae WHERE ID = '$row[0]'";
$varres = mysql_query($queryvar) or die("Query failed");
$rr_row = mysql_fetch_row($varres);

// INTERROGAZIONE TABELLA PARAMETRI ADDIZIONALI
// (1) Controllo solo se ci sono parametri per questo ammasso...
$qnewpar = "SELECT * FROM newpar WHERE cluster = '$row[0]'";
$mnewpar = mysql_query($qnewpar) or die ("Problems with queries in table newpar");
$rnewpar = mysql_num_rows($mnewpar);

*/

// TEST
//$ggc="NGC 6101";


// XXXXXXXXXXXXXXXXX
// ESTRAGGO gli articoli per il plot del CMD:
// i più recente articoli nel database che abbia il campo CMD non vuoto

$querycmdiagr="SELECT biblioclusters.*  FROM biblioclusters,bibliotags
WHERE
bibliotags.tag='$ggc'
and biblioclusters.ID=bibliotags.paper
and biblioclusters.cmdiagrams!=''
ORDER BY annoarti
DESC
LIMIT 5";


$querycmdiagr2 = mysql_query($querycmdiagr) or die("CMD query failed");
$rowcmd = mysql_fetch_row($querycmdiagr2);
$rownumb = mysql_num_rows($querycmdiagr2);

// echo $querycmdiagr;



// ----------------------------------------------------------------------

echo "<TITLE>\n";
echo 'GGCs database: globular cluster ',$ggc;
echo "</TITLE>\n";

?>

<meta name="Author" content="Marco Castellani">
<meta name="Keywords" content="astronomy, Milky Way, globular clusters">

</HEAD>


<BODY background="static/images/backgr2.jpg" TEXT="#0000FF" LINK="#0000FF" VLINK="#A020F0" ALINK="#FF0000">


<?php

include 'inte2.php';
include 'columns.php';

echo '<table border=0><tr><td>';
echo '<h2>','<i>Your query: </i>',$ggc,'</h2>';
echo '</td></tr><tr><td>';
echo '<h3>Available CMDs: ';
echo $rownumb;
echo '</h3></td></tr></table>';

?>



<!-- stampo i risultati su tabella -->


<table border=1 width=100%>
<tr><td width=60%>


<?php

// DETTAGLIO ARTICOLO CMD (BOX LEFT)

// stampo "author"...

echo '<tr>';
echo '<td><b>';
echo '<font face="Comic Sans MS">';
echo $col[36];
echo '</font>';
echo '</b></td>';


echo '<td>';
// autore...
echo '<font face="Comic Sans MS">';
echo  $rowcmd[0];
echo '</font>';
echo '</td>';
echo '</tr>';


echo '<font>';
echo '<tr>';
echo '<td><b>';
// stampo "titolo"...
echo '<font face="Comic Sans MS">';
echo $col[37];
echo '</font>';
echo '</b></td>';

// titolo
echo '<td>';
echo '<a href=';
// link ADS...
// echo $row[40];
echo $rowcmd[3];
echo ">";
echo '<font face="Comic Sans MS">';
// echo $row[37];
echo $rowcmd[1];
echo '</font>';
echo '</a>';

echo '</td>';
echo "</tr>\n";

echo '<tr>';
echo '<td><b>';
// stampo "journal"...
echo '<font face="Comic Sans MS">';
echo $col[38];
echo '</font>';
echo '</b></td>';
echo '<td>';
// rivista...
echo '<font face="Comic Sans MS">';
// echo $row[38];
echo $rowcmd[2];
echo '</font>';
echo '</td>';
echo "</tr>\n";

// echo '</table>';


// ***** CM diagram of the cluster *************

echo "<tr>\n";
echo '<td>';
echo '<font face="Comic Sans MS">';
echo '<b>CM diagram</b>';
echo '</font>';
echo '</td>';

// apro l'elemento di tabella che deve contenere l'immagine del CMD...

echo '<td>';

$ggc_temp=$rowcmd[7]; // campo "cmdiagrams" di "biblioclusters"

// provo ad aprire direttamente l'immagine come link...
$ggc_image=$rowcmd[9]; // campo "linkima" di "biblioclusters"
@ $fpweb = fopen ($ggc_image, "r");

// Se c'e', allora carico l'immagine dal link esterno...
if($fpweb){
   echo '<img src='.$ggc_image.' width=500>';
   } else {
// Se il link esterno non va, passo a cercare nel filesystem locale
$ggcpre="ima/";

// apro l'immagine così com'e' prima di tutto...

$ggc_new=$ggcpre.$ggc_temp;
$ggc_image=$ggcpre.$ggc_temp.".jpg";
$ggc_png=$ggcpre.$ggc_temp.".png";
$ggc_gif=$ggcpre.$ggc_temp.".gif";

@ $fp_new = fopen ($ggc_new, "r");
@ $fp = fopen ($ggc_image, "r");
@ $fp1 = fopen ($ggc_png, "r");
@ $fp_gif = fopen ($ggc_gif, "r");

// Provo con ima in formato PNG..
if($fp1) {
   echo '<img src='.$ggc_png.'>';
   } else {

// Provo con ima in formato GIF...
if($fp_gif) {
   echo '<img src='.$ggc_gif.'>';
   } else {

// estensione già inclusa...
if($fp_new) {
   echo '<img src='.$ggc_new.'>';
   } else {

// Provo con ima in formato JPG altrimenti lascio stare...
if ($fp) {
  echo '<img src='.$ggc_image.'>';
  } else {
  echo '<center><img src='.'static/images/wkonit1.gif'.'></center>';
  };

 };

};
};
};

// ******* Fine trattazione CMD dell'ammasso ***************


?>

</td></tr>
</table>
<p>

<?php
/*
 echo "<p>Query processed at ";
 echo date("H:i, jS F");
 echo "<br>";

// Contatore degli accessi

$query_n= "SELECT * from accesscount WHERE ID = '$row[0]'";
$lres_n = mysql_query($query_n) or die("Query failed");

// Controllo aggiornamento pagina

$n_cluster=mysql_fetch_row($lres_n);

$nn_cluster=$n_cluster[2];
$cluster_update=$n_cluster[3];


$n_cluster1 = $nn_cluster + 1;

$query_n2 = "UPDATE accesscount SET n_vis = '$n_cluster1' WHERE ID = '$row[0]' LIMIT 1";
$lltest=mysql_query($query_n2);
echo "This page has been visited ";
echo $n_cluster1;
echo " times, since Oct 25 2004<br>";
if ($cluster_update!=="0000-00-00")
{
echo "<p><i><img src=\"static/images/new_anim.gif\">";
echo "Page updated: ";
echo $cluster_update;
echo "</i>";
};

include 'coda.html';

*/

// echo '</tr></table>';
?>

</body>
</html>

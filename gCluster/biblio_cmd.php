<?php

include 'conn.php';

// define queries ...

$page= $_GET['page'];
$ggc=trim($ggc);

$pgn = $page * 25;

// SQL QUERY
// $query_auth = "SELECT * FROM biblioclusters ORDER BY biblio_date DESC LIMIT $pgn,25";
$query_auth = "SELECT * FROM biblioclusters ORDER BY biblio_date DESC";
$result = mysql_query($query_auth) or die("Sorry, not a valid query!");
$numres = mysql_num_rows($result);

?>

<HTML>
<HEAD>
<TITLE>
Gclusters :: Selected bibliography
</TITLE>

<meta name="Author" content="Marco Castellani">
<meta name="Keywords" content="astronomy, Milky Way, globular clusters">

</HEAD>

<BODY BGCOLOR="#DCDCDC" TEXT="#0000FF" LINK="#0000FF" VLINK="#A020F0" ALINK="#FF0000">

<?php

include 'inte2.php';
include 'columns.php';

?>

<center>
<table border=3>
<tr><td><b>
Selected bibliography and CMDs
</b></td></tr>
</table>
<p>
</center>


<?php


if (!$page) {
echo '<h2><i>Most recent 25 papers added to Gclusters</i><p>';
} else {
echo '<h3>...Browsing selected bibliography...</h3></i><p>';
}

$pagen=$page-1;
$pagep=$page+1;

echo "<table border=2><tr>";

if ($page!=0) {
echo "<td><a href=\"biblio_all.php?page=$pagen\">Previous page</a></td>";

echo "<td><b><a href=\"biblio_all.php?page=0\">Top</a></b></td>";

}

echo "<td><a href=\"biblio_all.php?page=$pagep\">Next page</a></td>";
echo "</tr></table><p>";

$iiref=0;

while ($line = mysql_fetch_row($result)) {
if ($line[7]!="") {
$iiref++;

// QUERY SQL
// cerco tutti i tag disponibili per il dato paper
$query_names = "SELECT tag FROM bibliotags WHERE paper = '$line[4]'";
$res_names = mysql_query($query_names) or die ("query_names failed");
$num_paper= mysql_num_rows($res_names);

// Provo intanto ad aprire il CMD come un link...

$ggc_cmd_web=$line[9];
@ $fpweb = fopen ($ggc_cmd_web, "r");
if ($fpweb) {
  $ggc_cmd=$ggc_cmd_web;
   }  else {

// Settore B1 ...
// Individuo il nome corretto per il file con il CMD...

$ggc_cmd_new="static/ima/".$line[7];
$ggc_cmd_png=$ggc_cmd_new.'.png';
$ggc_cmd_gif=$ggc_cmd_new.'.gif';
$ggc_cmd_jpg=$ggc_cmd_new.'.jpg';

// Provo ad aprire i files con le differenti estesioni possibili...

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
}
// concluso settore B1

}


?>

<table width="90%" border=2>



<tr>
<td colspan=2 align=CENTER BGCOLOR="#99CCFF"><b>

<?php

$iaref=$pgn+$iiref;
echo 'Paper n. '.$iaref;

?>

</td>
</tr>

<?php
echo '<tr>';
echo '<td width="20%"> ';
echo 'Author';
echo '</td><td>';
echo $line[0];
echo "</td></tr>\n";

echo "<tr><td>\n";
echo 'Title';
echo "</td><td>\n";
echo '<a href=';
echo $line[3];
echo ">";
echo $line[1];
echo "</a>";
echo "</td></tr><tr><td>\n";
echo 'Journal';
echo "</td><td>\n";
echo $line[2];
echo "</td></tr>\n";

if ($line[7]!="" or $line[9]!="")
    {
echo "<tr><td>\n";
echo 'CM diagram';
echo '</td><td>';
echo '<img src='.$ggc_cmd.'>';
echo "</td></tr>\n";
    }
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


echo "</table><p>\n";

  }
}

// Closing connection

mysql_close($link);

?>

<p>

<?
 echo "<p>Query processed at ";
 echo date("H:i, jS F");
 echo "<br>";
?>

<?php include 'html/coda.html' ?>

</body>
</html>

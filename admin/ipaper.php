<html>

<head>
<title>GGCs-DB :: Thanks for your input! ;)</title>
</head>

<body background="backgr2.jpg" text="#000000" vlink="#330099">
<h2>Inserimento articolo nel database...</h2>
<br><p>

<?php

$anno=date("Y");
$mese=date("m");
$giorno=date("d");

$datains=$anno."-".$mese."-".$giorno;

echo '<p>'.$datains;

$secretpass="totigi";

//if($secretpass==$_POST[pass])
if($secretpass)

{

include_once("conn.php");

// NOMI DELLE TABELLE SU CUI LAVORARE

$tb_name="biblioclusters";
$tb_tags="bibliotags";

// *******************************

// working on "biblioclusters"

$sql="INSERT INTO $tb_name
(authors,title,journal,adslink,annoarti,biblio_date)
VALUES
(
'$_POST[autore]',
'$_POST[titolo]',
'$_POST[journal]',
'$_POST[plink]',
'$_POST[annoart]',
'$datains')";

echo $sql;
echo "<p>";
/*
// INSERISCO IL RECORD CON L'ARTICOLO
$result = mysql_query($sql) or die("Problems with biblioclusters!");



// ************************************

// (2) leggo l'identificativo del NUOVO articolo

$sqltags="select ID from $tb_name ORDER BY ID desc LIMIT 1";
//echo $sqltags."<p>";

$sqlt2= mysql_query($sqltags);
$mrid = mysql_fetch_row($sqlt2);
$papid = $mrid[0];
echo "paperid = ".$papid;

// (3) opero sulla tabella bibliotags

$insertag1 = "insert INTO $tb_tags (paper, tag) VALUES
('$papid','$_POST[tag01]');";

$insertag2 = "insert INTO $tb_tags
(paper, tag)
VALUES
('$papid','$_POST[tag02]')";

// inserisco in 'bibliotags' gli id/tag appositi

echo $insertag1;
$itag1 = mysql_query($insertag1) or die("Problems in $itag1");

if ('$_POST[tag02]'!=="") // se c'e' anche il secondo tag
  {
   $itag2 = mysql_query($insertag2) or die("Problems in $itag2")
   echo $insertag2;
   }

*/

// ringraziamenti & chiusura...

echo '<p><i>Thank you for submitting data to the GGCs-DB!<p>';
  }
  else
  {
echo '<p>Sorry, but it seems that the password is wrong </p>';
  }

// include 'codadm.html';

?>

</body>
</html>

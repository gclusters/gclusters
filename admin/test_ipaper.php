<html>

<head>
<title>GGCs-DB :: Thanks for your input! ;)</title>
</head>

<body background="backgr2.jpg" text="#000000" vlink="#330099">
<h2>Adding a paper into the database...</h2>
<br>

<?php

$anno=date("Y");
$mese=date("m");
$giorno=date("d");

$datains=$anno."-".$mese."-".$giorno;

echo '<p>'.$datains.'<p>';

$secretpass="totigi";

if($secretpass==$_POST[pass])

{

include_once("../conn.php");

// NOMI DELLE TABELLE SU CUI LAVORARE

$tb_name="biblioclusters";
$tb_tags="bibliotags";

// *******************************

// (1) opero sulla tabella biblioclusters

$sql="INSERT INTO $tb_name
(authors,title,journal,adslink,annoarti,biblio_date)
VALUES
(
'$_POST[autore]',
'$_POST[titolo]',
'$_POST[journal]',
'$_POST[plink]',
'$_POST[annoart]',
'$datains');
";

echo $sql;
echo "<p>";



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
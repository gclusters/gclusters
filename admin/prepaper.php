<html>

<head>
<title>GGCs-DB :: Thanks for your input! ;)</title>
</head>

<body background="backgr2.jpg" text="#000000" vlink="#330099">
<h2>Adding a paper into the database...</h2>
<br>
<u>
Please double check the following data:
</u>
<p>
<?php

$anno=date("Y");
$mese=date("m");
$giorno=date("d");

$datains=$anno."-".$mese."-".$giorno;

echo 'Today is ';
echo $datains.'<p>';

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

echo 'SQL statement:<p>';
echo $sql;
echo "<p>";
echo 'Tag 1: ';
echo $_POST[tag01].'<br>';
echo 'Tag 2: ';
echo $_POST[tag02];


// ringraziamenti & chiusura...

echo '<p><i>Is all of this correct?</i><p>';
echo '<ul><li><a href="ipaper.php">YES! Please add my data!</a></li>';
echo '<li><a href="">NO! Take me back now!</a></li></ul>';
  }
  else
  {
echo '<p>Sorry, but it seems that the password is wrong </p>';
  }

// include 'codadm.html';

?>


</body>
</html>
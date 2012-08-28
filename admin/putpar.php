<html>

<head>
<title>GGCs-DB :: Thanks for your input! ;)</title>
</head>

<body background="backgr2.jpg" text="#000000" vlink="#330099">
<h2>Storing the value of the parameter...</h2>
<br>

<?php

/*
list of variables:
1. cluster
2. parcode
3. parvalue
4. autore
5. plink
6. annoart
7. parcom
8. pass
*/

// computing timestamp ...
$anno=date("Y");
$mese=date("m");
$giorno=date("d");

$datains=$anno."-".$mese."-".$giorno;

$secretpass="amarok";
// echo '<p>'.$_POST[pass];

if($secretpass==$_POST[pass])

{

include_once("conn.php");

// NOMI DELLE TABELLE SU CUI LAVORARE

$tb_name="newpar";

// *******************************

// (1) opero sulla tabella newpar

$sqlstat="INSERT INTO $tb_name
(ID,cluster,param,pvalue,biref,biyear,bilink,comments,mdate)
VALUES
(
'',
'$_POST[cluster]',
'$_POST[parcode]',
'$_POST[parvalue]',
'$_POST[autore]',
'$_POST[annoart]',
'$_POST[plink]',
'$_POST[parcom]',
'$datains');
";

echo "<p>";

// INSERISCO IL RECORD CON L'ARTICOLO
$result = mysql_query($sqlstat) or die("Problems in submitting your data!");

// ************************************


// ringraziamenti & chiusura...

echo '<p><i>Thank you for submitting data to the GGCs-DB!<p>';
  }
  else
  {
echo '<p>Huston, we have a problem... please check your password!</p>';
  }

// include 'codadm.html';

?>

</body>
</html>

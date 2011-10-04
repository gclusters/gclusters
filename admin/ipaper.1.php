<html>

<head>
<title>GGCs-DB :: Thanks for your input! ;)</title>
</head>

<body background="backgr2.jpg" text="#000000" vlink="#330099">

<h2>Inserimento articolo nel database...</h2>
<br>

<?php
//echo date("H:i, jS d Y");

$anno=date("Y");
// echo $anno;
$mese=date("m");
// echo $mese;
$giorno=date("d");
// echo $giorno;
$datains=$anno."-".$mese."-".$giorno;
// echo "datains:";
echo"<p>$datains";

$secretpass="gclusters";

if($secretpass==$_POST[pass]) 
{

include_once("conn.php");

$tb_name="biblioclusters";


 $sql="INSERT INTO $tb_name
(cluster,authors,title,journal,adslink,annoarti,variab,biblio_date)
VALUES
(
'$_POST[cluster]',
'$_POST[autore]',
'$_POST[titolo]',
'$_POST[journal]',
'$_POST[plink]',
'$_POST[annoart]',
'$_POST[variab]',
'$datains'
)";


$result = @mysql_query($sql);

echo "<p><i>Thank you for submitting data to the GGCs-DB!<p>";

}

else

{
echo "<p>I'm sorry, it seems that the password is wrong </p>";
}

?>

<? include 'codadm.html' ?>
</body>
</html>

<html>

<head>
<title>GGCs-DB :: Thanks for your input! ;)</title>
</head>

<body background="backgr2.jpg" text="#000000" vlink="#330099">
<h2>Storing your link...</h2>
<br>

<?php

// computing timestamp ...
$anno=date("Y");
$mese=date("m");
$giorno=date("d");

$datains=$anno."-".$mese."-".$giorno;
echo $datains;

$secretpass="amarok";

if($secretpass==$_POST[pass])

{

include_once("../conn.php");

// Name of the table to work upon...

$tb_name="linkspage";

// *******************************

// (1) opero sulla tabella newpar

$sqlstat="INSERT INTO $tb_name
(ID,linkname,ldescr,linkaddr,linkimage,linkdate)
VALUES
(
'$_POST[cluster]',
'$_POST[linktitle]',
'$_POST[linkdescr]',
'$_POST[linkaddress]',
'$_POST[imageurl]',
'$datains'
)";

echo "<p>";
echo $sqlstat;
echo "<p>";

// INSERISCO IL RECORD CON L'ARTICOLO
$result = mysql_query($sqlstat) or die("Problems in submitting your data!");

// ************************************


// ringraziamenti & chiusura...

echo '<p><i>Thank you for submitting data to the GGCs-DB!<p>';

// sending a message to the admin

$to = 'm.castellani@gmail.com';
$subject = 'gclusters: user activity';
$message = '
Hello! Just a few lines to let you know that
someone has just added a link on gclusters. Please check it at http://gclusters.altervista.org/link_lt.php
The whole list of link are available at http://gclusters.altervista.org/linksmain.php';
$message = wordwrap($message, 70);

mail($to, $subject, $message);

  }
  else
  {
echo '<p>Huston, we have a problem... please check your password!</p>';
  }
  

?>

</body>
</html>

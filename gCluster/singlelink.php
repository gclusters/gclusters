<?php

/*
ToDo implementare trattamento figure troppo grosse
ToDo sotto la figura, titolo + crediti immagine
*/

include 'conn.php';
include 'inte2.php';
include 'columns.php';

// define queries ...

$idart= $_GET['idart'];
$idart=trim($idart);

$query_auth = "SELECT * FROM linkspage where num='$idart'";

$result = mysql_query($query_auth) or die("Query failed...");
$numres = mysql_num_rows($result);

?>

<HTML>
<HEAD>
<TITLE>
<?php echo 'Gclusters :: Link Item "lk'.$idart.'"'; ?>
</TITLE>
<meta name="author" content="Marco Castellani">
<meta name="Keywords" content="astronomy, Milky Way, globular clusters">
</HEAD>

<body background="static/images/backgr2.jpg" text="#000000" vlink="#330099">

<center><br>
<b>

<?php
$iiref=0;
if($numres==0) 

	{
	echo '<font size="+2"><i>Sorry, no link to display!</i></font>';
	echo '<p>You may want to give a <i>like</i> to our Facebook page: just follow
	<a href="http://facebook.com/gclusters">this link</a>!';
	echo "<p>Query processed at ";
	echo date("H:i, jS F");
	echo "<br>";
	include 'html/coda.html'; 
	exit;
	}

while ($line = mysql_fetch_row($result)) {

?>


<!-- stampo i risultati su tabella -->

<table width="90%" border=0>

<tr>
<td colspan=2 align=CENTER BGCOLOR="#99CCFF"><b>
<?php echo 'Link ID: <i>lk'.$idart.'</i>'; ?>
</td>
</tr>

<?php

$codcol=0;

// CLUSTER

echo '<tr bgcolor="#CCCCCC">';
echo '<td width="20%"> ';
echo 'Cluster';
echo '</td><td>';
echo $line[0];
echo "</td></tr>\n";

// NAME
echo '<tr bgcolor="#CCCC99"><td>';
echo 'Name';
echo '</td><td>';
echo $line[1];
echo "</td></tr>";

// DESCRIPTION
echo "<tr bgcolor='#CCCCCC'><td>\n";
echo 'Description';
echo '</td><td><i>';
echo $line[2].'</i>';
echo '</td></tr>';


// URL
echo '<tr bgcolor="#CCCC99"><td>';
echo 'URL';
echo '</td><td>';
echo '<a href=';
echo $line[3];
echo ">";
echo $line[3];
echo '</a>';
if ($line[7])
{
  echo ' <a href="'.$line[7].'">'."[Cached version here]</a>";
}
echo "</td></tr></table>\n";

@ $fpweb = fopen ($line[4], "r");

if ($fpweb)
{
    echo '<p><table border=2><tr><td>';
    echo '<img src="'.$line[4].'">';
    echo '</table></p>';
}


// Page counter

$lr = $line[8];
$lrr = $lr + 1;

echo"<p><i>This page has been visited ";
echo "$lrr". ' times since May, 9 2013</i>';

$lins = "UPDATE linkspage SET numvis = '$lrr' WHERE num='$idart' LIMIT 1";
$llput=mysql_query($lins);

}

mysql_close($link);

 echo "<p>Query processed at ";
 echo date("H:i, jS F");
 echo "<br>";
 include 'html/coda.html';

?>

</body>
</html>

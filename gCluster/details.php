 <?php

include 'conn.php';
include 'columns.php';
include 'lpar.php';

// define queries ...



$ggc= $_GET['ggc'];
$param=$_GET['param'];

// Error if loaded without parameters

if (!$ggc) {
	echo'Error loading parameters for this page';
	exit;
}

$ggc=trim($ggc);

// asking for the list of values for the selected parameter

$query_auth = "SELECT * FROM newpar where cluster like '$ggc' and param like '$param'";
$query_par = "SELECT * FROM parameters where ID like '$ggc'";

// extracting values ...

$result = mysql_query($query_auth) or die("Failure. Please try again later");
$res_par = mysql_query($query_par) or die("Failure. Please try again later");

$numres = mysql_num_rows($result);
$numpar = mysql_num_rows($res_par);

if (!$numres)
{
// Non ho trovato nulla, allora allargo i criteri di ricerca...

$query_auth = "SELECT * FROM newpar where cluster like '%$ggc%' and param like '$param'";
$query_par = "SELECT * FROM parameters where ID like '%$ggc%'";

$result = mysql_query($query_auth) or die("Query failed");
$res_par = mysql_query($query_par) or die("Query failed");

$numres = mysql_num_rows($result);
}

?>


<HTML>
<HEAD>
<TITLE>

<?php

// **** Caso in cui non trovo alcuna corrispondenza (non dovrebbe verificarsi) ****

if (!$numpar) {

echo 'GGCs database: no data available';
echo "</TITLE>\n";

echo "<meta name=\"Author\" content=\"Marco Castellani\">\n";
echo "<meta name=\"Keywords\" content=\"astronomy, Milky Way, globular clusters\">\n";
echo "</HEAD>\n";
echo "<BODY background=\"http://www.mporzio.astro.it/cefalu2008/ima/back-012.gif\" TEXT=\"#0000FF\" LINK=\"#0000FF\" VLINK=\"#A020F0\" ALINK=\"#FF0000\">\n";
include 'inte2.php';

echo '<h1>','<i>Your query: </i>',$ggc,'</h1>';
echo "\n";

echo "<h2>Problems in the connection to the database: please try again later</h2>\n";
include 'html/coda.html';
echo '</body></html>';
exit;
}

// **** Caso in cui trovo una o piu' corrispondenze (NORMALE) ****

if ($numres > -1) {

echo 'Gclusters :: list of parameters';
echo "</TITLE>\n";
echo "<meta name=\"Author\" content=\"Marco Castellani\">\n";
echo "<meta name=\"Keywords\" content=\"astronomy, Milky Way, globular clusters\">\n";
echo "</HEAD>\n";
echo "<BODY background=\"static/images/back-012.gif\" TEXT=\"#0000FF\" LINK=\"#0000FF\" VLINK=\"#A020F0\" ALINK=\"#FF0000\">\n";

include 'inte2.php';

echo '<h1>','<i>Cluster selected: </i>',$ggc,'</h1>';
echo "\n";

   $numres++;
   if ($numres>0){
   print "<h3>The following values are in the database:</h3><p>\n";
   print "<table border=1 width=40%>\n";
   print "\t\t<tr bgcolor=\"yellow\"><td>Parameter</td><td>Value</td><td>Source</td><td>Year</td></tr><tr>";
   }

// Valori nel database...
  while ($line = mysql_fetch_row($result)) {

   print "\t<tr>\n";
   print "\t\t<td><i>".$col[$line[2]]."</i></td>\n";			// Parameter
   print "\t\t<td><i>".$line[3]."</i></td>\n";					// Value
	   print '<td><a href="'.$line[6].'">'.$line[4].'</a></td>';	// Source
   print "\t\t<td><i>".$line[5]."</i></td>\n";					// Year
   print "\t</tr>\n";

   $parid=$col[$line[2]]; // sporco! Da modificare: mi serve anche per solo Harris...

   }

// Valore dal catalogo di Harris....

$linepar = mysql_fetch_row($res_par);
$numpar = mysql_num_rows($res_par);

print "\t\t<td><i>".$col[$param]."</i></td>\n";
print "\t\t<td><i>".$linepar[$param]."</i></td>\n";
print '<td><i><a href="http://www.physics.mcmaster.ca/Globular.html">Harris Catalogue</a></i></td>';
print '<td><i>Revisions: 2003/2010 (<a href="http://goo.gl/aIxZA">details</a>)</i></td></tr>';
print "</table><p>";

print "<ul><li><b>".$col[$param]."</b><i> stands for </i>";
print "<b>".$lparam[$param]."</b></li></ul>";


echo '<p><i>TIP: use the <a href="feedbackform.php">feedback form</a> to submit another value for this parameter.</i>';

echo "<p>Query processed at ";
echo date("H:i, jS F");
echo "<br>";


include 'html/coda.html';
echo '</body></html>';
exit;

}

?>

</body>
</html>

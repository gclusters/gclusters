<?php

include 'conn.php';

$mytext= $_GET['mytext'];
$radios= $_GET['radios'];

$mytext=trim($mytext);

switch($radios)
{
case "au":
	$myquery = "SELECT * FROM biblioclusters where authors like '%$mytext%'";
	$frase=0;
	break;
case "id":
	$myquery = "SELECT * FROM biblioclusters where ID='$mytext'";
	$frase="1";
	break;
    case "yr":
    $myquery = "SELECT * FROM biblioclusters where annoarti='$mytext'";
    break;
default:
	$myquery = "SELECT * FROM biblioclusters where title like '%$mytext%'";
	$frase="0";
}

// extracting values .....
$selbib = mysql_query($myquery) or die("Query failed");
$numres = mysql_num_rows($selbib);

// **** Caso in cui non trovo alcuna corrispondenza ****

if (!$numres) {
echo '<HTML><HEAD><TITLE>';
echo 'GGCs database: no biblio selected';
echo "</TITLE>\n";

echo "<meta name=\"Author\" content=\"Marco Castellani\">\n";
echo "<meta name=\"Keywords\" content=\"astronomy, Milky Way, globular clusters\">\n";
echo "</HEAD>\n";
echo "<BODY background=\"backgr2.jpg\" TEXT=\"#0000FF\" LINK=\"#0000FF\" VLINK=\"#A020F0\" ALINK=\"#FF0000\">\n";
include 'inte2.php';

echo '<h1>','<i>Your query: </i>"',$mytext,'"</h1>';
echo "\n";

echo "<h2><i>Sorry, no matches available for your query</i></h2>\n";
echo '<h3>You may want to try <a href="http://adsabs.harvard.edu/abstract_service.html">
an ADS search</a> instead?</h3>';

echo '<p><a href="index.php">Go back to the main page</a></p>';
include 'coda.html';
echo '</body></html>';
exit;
}

// **** Caso in cui trovo una o più corrispondenze ****

if ($numres > 0) {

echo '<HTML><HEAD><TITLE>';
echo 'GGCs database: results of your query';
echo "</TITLE>\n";

echo "<meta name=\"Author\" content=\"Marco Castellani\">\n";
echo "<meta name=\"Keywords\" content=\"astronomy, Milky Way, globular clusters\">\n";
echo "</HEAD>\n";
echo "<BODY background=\"backgr2.jpg\" TEXT=\"#0000FF\" LINK=\"#0000FF\" VLINK=\"#A020F0\" ALINK=\"#FF0000\">\n";
include 'inte2.php';

echo '<h1>','<i>Your query: "',$mytext,'"</i></h1>';
echo "\n";

if (!$frase)
{
   print "<h2>The following $numres articles seems to match your query.</h2><p>\n";
}
   print "<table border=1>\n";

?>

<tr bgcolor="#CC9933">
<td>Authors</td>
<td>Title</td>
<td>Year</td>
<td>ID</td>
</tr>

<?php

    $icol=1;

  while ($line = mysql_fetch_row($selbib)) {

    $icol++;
      $icol2=$icol/2;
      if (is_int($icol2))
      {

              print "\t<tr bgcolor=\"#CCCCCC\">\n";
          }
      else
          {
              print "\t<tr bgcolor=\"#CCCC99\">\n";
          }


   print "\t\t<td><i>".$line[0]."</i></td>\n";
   print "\t\t<td>".'<a href="article.php?idart='.$line[4].'">'.$line[1]."</td>\n";
   print "\t\t<td><i>".$line[6]."</i></td>\n";
   print "\t\t<td><i>gc".$line[4]."</i></td>\n";

   print "\t</tr>\n";
    
	}
}

print "</table>\n";

echo '<p><i><a href="bibliosearch.php">Make another search</a>';
echo ' - <a href="http://adsabs.harvard.edu/abstract_service.html">Make a search on ADS</a></i>';

include 'coda.html';
echo '</body></html>';

?>

</body>
</html>
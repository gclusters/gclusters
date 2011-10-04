<?php
$link = mysql_connect("localhost", "root", "root"); 
//mysql_select_db("globularclusters");
include 'conn.php';
// header("location: http://www.eso.org");

 // define queries ...

$ggc= $_GET['ggc'];
$ggc=trim($ggc);
$query_auth = "SELECT * FROM parameters where ID like '$ggc' or name like '$ggc'";

// extracting values ...
$result = mysql_query($query_auth) or die("Query failed");
$numres = mysql_num_rows($result);

// nothing found!
if (!$numres)
{
// Non ho trovato nulla, allora allargo i criteri di ricerca...
$query_auth = "SELECT * FROM parameters where ID like '%$ggc%' or name like '%$ggc%'";
$result = mysql_query($query_auth) or die("Query failed");
$numres = mysql_num_rows($result);
}

$row = mysql_fetch_row($result);

// **** Caso in cui non trovo alcuna corrispondenza ****

if (!$numres) {
echo '<HTML><HEAD><TITLE>';
echo 'GGCs database: no clusters selected';
echo "</TITLE>\n";

echo "<meta name=\"Author\" content=\"Marco Castellani\">\n";
echo "<meta name=\"Keywords\" content=\"astronomy, Milky Way, globular clusters\">\n";
echo "</HEAD>\n";
echo "<BODY background=\"backgr2.jpg\" TEXT=\"#0000FF\" LINK=\"#0000FF\" VLINK=\"#A020F0\" ALINK=\"#FF0000\">\n";
include 'inte2.php';

echo '<h1>','<i>Your query: </i>',$ggc,'</h1>';
echo "\n";

echo "<h2>Sorry, no matches available for your query!</h2>\n";
echo '<p><a href="index.php">Go back to the main page</a></p>';

include 'coda.html';
echo '</body></html>';
exit;
}

// **** Caso in cui trovo piu' di una corrispondenza ****

if ($numres > 1) {

echo '<HTML><HEAD><TITLE>';
echo 'GGCs database: more than one cluster selected';
echo "</TITLE>\n";

echo "<meta name=\"Author\" content=\"Marco Castellani\">\n";
echo "<meta name=\"Keywords\" content=\"astronomy, Milky Way, globular clusters\">\n";
echo "</HEAD>\n";
echo "<BODY background=\"backgr2.jpg\" TEXT=\"#0000FF\" LINK=\"#0000FF\" VLINK=\"#A020F0\" ALINK=\"#FF0000\">\n";
include 'inte2.php';

echo '<h1>','<i>Your query: "',$ggc,'"</i></h1>';
echo "\n";

   print "<h2>The following $numres clusters match your query. Please select one.</h2><p>\n";
   print "<table border=1>\n";

   print "\t<tr>\n";
   print "\t\t<td>"."<a href=\"cluster_4.php?ggc=".urlencode($row[0])."\">".$row[0]."</a></td>\n";
   print "\t\t<td><i>".$row[1]."</i></td>\n";
   print "\t</tr>\n";

  while ($line = mysql_fetch_row($result)) {

   print "\t<tr>\n";
   print "\t\t<td>"."<a href=\"cluster_4.php?ggc=".urlencode($line[0])."\">".$line[0]."</a></td>\n";
   print "\t\t<td><i>".$line[1]."</i></td>\n";
   print "\t</tr>\n";

   }


print "</table>\n";

include 'coda.html';
echo '</body></html>';
exit;

}


// **************************************************************
// **** Caso in cui trovo esattamente una corrispondenza ********
// **************************************************************

// - Redirezione verso URL unica per il dato ammasso -
//    -- ANCORA DA IMPLEMENTARE --
$gsel=urlencode($row[0]);	
header("Location: cluster_4.php?ggc=$gsel"); 
// exit;
?>

<script src="http://gclusters.uservoice.com/pages/general/widgets/tab.js?alignment=right&amp;color=00BCBA" type="text/javascript"></script>

</body>
</html>
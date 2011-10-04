<?php

include 'conn.php';

// define queries ...

$ggc=trim($ggc);

$query_auth = "SELECT * FROM newpar ORDER BY mdate DESC LIMIT 20";
$result = mysql_query($query_auth) or die("Problem in the database; please try again later");
$numres = mysql_num_rows($result);

?>

<HTML>
<HEAD>
<TITLE>
Gclusters :: Recent added parameter values
</TITLE>

<meta name="Author" content="Marco Castellani">
<meta name="Keywords" content="astronomy, Milky Way, globular clusters">

</HEAD>

<body background="backgr2.jpg">
<!-- <BODY BGCOLOR="#DCDCDC" TEXT="#0000FF" LINK="#0000FF" VLINK="#A020F0" ALINK="#FF0000"> -->

<?php
include 'inte2.php';
?>

<?php
include 'columns.php';
?>
<center><br>
<b>
Recent added parameter values
</b>
<p>
<br>


<table border=1>

<tr>

<th>Cluster</th>

<th>Parameter</th>

<th>Value</th>

<th>Reference</th>

<th>Added on</th>

</tr>


<?php
$iiref=0;

while ($line = mysql_fetch_row($result)) {

     $npar = $line[2];
     $colva = $col[$npar];

     print "<tr>";
     print "\t\t<td>"."<a href=\"cluster_4.php?ggc=".urlencode($line[1])."\">".$line[1]."</a></td>\n";
//   print "\t\t<td>$line[1]</td>\n";
     print "\t\t<td align=\"center\">$colva</td>\n";
     print "\t\t<td>$line[3]</td>\n";			// valore
     print "\t\t<td>$line[4]".", ";			// autore articolo
     print "$line[5]</td>\n";				// data (anno)
     print "\t\t<td>$line[8]</td>\n";
     print "</tr>";
}
// Closing connection

mysql_close($link);

?>

</table>
<p><br>

<blockquote>
<img src="graph/redball.gif">
<i>NOTE: the availability of multiple values of certain parameters (besides the standard Harris' value)
for a given globular cluster
is indicated by the presence 
of a little red point near the parameter's name in the corresponding cluster page

<p>Use the <a href="feedbackform.php">feedback form</a> to submit values you may have found in some paper, for the inclusion in the database (thanks in advance!)</i>
</blockquote>


<p><br>


<?
 echo "<p>Query processed at ";
 echo date("H:i, jS F");
 echo "<br>";
?>
</center>
<?php include 'coda.html' ?>

</body>
</html>

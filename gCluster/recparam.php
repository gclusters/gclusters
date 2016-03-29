<?php

/*
ToDo DO NOT DISPLAY hour inside "added on": day is enough !
ToDo List gc number if available, with the link
*/

include 'conn.php';

// define queries ...

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

<body background="static/images/backgr2.jpg">

<?php
include 'inte2.php';
include 'columns.php';
?>

<center><br>
<b>
Recent added parameter values
</b>
<p>
<br>


<table border="0">

<tr bgcolor="#CC9933">
<th>Cluster</th>
<th>Parameter</th>
<th>Value</th>
<th>Reference</th>
<th>Added on</th>
</tr>

<?php
$movecol=1;
$iiref=0;

while ($line = mysql_fetch_row($result)) {
	 $movecol++;
	 $mcol = $movecol/2;
	 		
     $npar = $line[2];
     $colva = $col[$npar];

     if (is_int($mcol)) 
     {
       print "\t<tr bgcolor=\"#CCCCCC\">\n";
     }
     else
     {
     print "\t<tr bgcolor=\"#CCCC99\">\n";
     }     
    
     print "\t\t<td>"."<a href=\"cluster_4.php?ggc=".urlencode($line[1])."\">".$line[1]."</a></td>\n"; // cluster
     print "\t\t<td align=\"center\">$colva</td>\n";	// name of parameter
     print "\t\t<td>$line[3]</td>\n";	// value
     print "\t\t<td>$line[4]".", ";	// author(s) of the paper 
     print "$line[5]</td>\n";	// year of the paper
     print "\t\t<td>$line[8]</td>\n";  // added on...
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
for a given globular cluster is indicated by the presence 
of a little red point near the parameter's name in the corresponding cluster page
<p>Use the <a href="feedbackform.php">feedback form</a> to submit values you may have found in some paper, 
for the inclusion in the database (thanks in advance!)</i>
</blockquote>

<p><br>

<?
 echo "<p>Query processed at ";
 echo date("H:i, jS F");
 echo "<br></center>";
 include 'html/coda.html';
?>

</body>
</html>

<html>
<head><title>GGCs database - Comments</title></head>
<body background="static/images/backgr2.jpg">


<?php include 'inte2.php'?>

<h1>Most recent comments added to the database</h1>
<table border=1><tr><td><i>
NOTE: these info are added by user of the GGC-DB
</i></td></tr></table>
<p>
<?php

include 'conn.php';

// Performing SQL query
$query = "SELECT * FROM infousers ORDER BY datacomm DESC LIMIT 10";

// echo 'query=',$query;


$result = mysql_query($query) or die("Query failed");

$res_1 = mysql_num_rows($result);

echo 'Number of comments available so far: ';
echo '<font size="+1"><b>';
echo $res_1;
echo "<p>";

if ($res_1 > 0) {


// Printing results in HTML

// headers


// print of data

while ($line = mysql_fetch_array($result)) {

print "<table border=1 width=\"70%\">\n";
print "\t<tr align=left BGCOLOR=\"#CC9900\">\n";
print "\t\t<td width=\"40%\"><b>Date: $line[2]<br>\n";
print "<b>From: <i>$line[3]</i><br></td>\n";
print "<td><b>Cluster: $line[1]<br>\n";
print "Subject: <i>$line[5]</i></td>\n";
print "\t</tr>\n";

print "\t<tr>\n";
print "\t\t<td colspan=3 BGCOLOR=\"#CCCC99\">$line[4]</td>\n";
print "\t</tr>";
print "</table><p>\n";

 }
 
}

// Closing connection
 
mysql_close($link);



?>

<p>
<table><tr bgcolor="yellow"><td>
<a href="http://spreadsheets.google.com/viewform?key=p1N94_rn_Xm7WNbXV3QviSA">Submit a comment</a> for a cluster.
</tr></td></table>



</b>

<?php include 'html/coda.html' ?>
<?php include 'html/tour.html' ?>

</body>
</html>

<html>
<head><title>GGCs database - Links for cluster</title></head>
<body background="backgr2.jpg">

<?php include 'inte2.php'?>

<p>

<?php

include 'conn.php';

// retrieving the record for displaying it
$querylink = "SELECT * FROM linkspage ORDER BY linkdate DESC LIMIT 1";
$result = mysql_query($querylink) or die("Query failed");

// retrieving the record for the table header
$result1 = mysql_query($querylink) or die("Query failed");
$line1 = mysql_fetch_row($result1);

?>

<table border="3">

<tr bgcolor="#CC9999">
<td width="10%" align="center"><strong>Cluster</strong></td>
<td width="40%" align="center"><strong>Link name</strong></td>
<td width="40%" align="center"><strong>Link description</strong></td>
<?php
if ($line1[4]!="") {
	print '<td width="20%" align="center"><strong>Image</strong></td>';
                  }
?>
</tr>

<?php

while ($line = mysql_fetch_row($result)) {

print "\t<tr>\n";

// COL1: nome del cluster

         $col_value=$line[1];
         print "\t\t<td width=\"10%\" align=\"center\">";
         print "<a href=\"cluster_4.php?ggc=".urlencode($line[0])."\"><b>".$line[0]."</a></b></td>\n";

// COL2: nome del link
	print "\t\t<td width=\"40%\" align=\"center\">"."<a href=".$line[3].">".$col_value."</a></td>\n";

// COL3: descrizione del link

	 $col_value=$line[2];
	 print "\t\t<td width=\"40%\ aling=\"center\"><i>$col_value</i></td>\n";

// COL4: immagine (se presente)

        $col_value=$line[4];

	if  ($line[4]!="")
        {
       print "\t\t<td width=\"20%\">"."<a href=".$line[4].">"."<img src=\"".$col_value.'" width="100%" border="0"></a>'."</td>\n";
	}

	print "\t</tr>\n";
	}

print "</table>\n";

// Closing connection

mysql_close($link);

?>

<p>
<table><tr bgcolor="yellow"><td>
<a href="admin/addlink.php">Submit a link</a> for a cluster.
</tr></td></table>

<?php include 'coda.html' ?>
</body>
</html>

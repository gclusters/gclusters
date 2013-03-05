<html>
<head><title>GGCs database - Links for cluster</title></head>
<body background="backgr2.jpg">

<?php 

include 'inte2.php';
include 'conn.php';
 
$ggc= $_GET['ggc'];

$querylink = "SELECT * FROM linkspage WHERE ID like '%$ggc%' ORDER BY linkdate DESC";
$result = mysql_query($querylink) or die("Some problems in the database. Please try again later...");
$res_1 = mysql_num_rows($result);

echo 'Number of links available for this cluster: ';
echo '<font size="+1"><b>';
echo $res_1;
echo "<p>";

print "<table border=3>\n";
while ($line = mysql_fetch_row($result)) {

print "\t<tr>\n";


/*
 Table 'linkspage': 	
 0. ID	
 1. name
 2. description
 3. address
 4. image
 5. date
*/


// name of the link

     $col_value=$line[1];
	 print "\t\t<td width=\"40%\"><font face=\"Comic Sans MS\">"."<a href=".$line[3].">".
	 $col_value."</a></font></td>\n";

// description of the link

	 $col_value=$line[2];
         if  ($line[4]!="")
           {
           	 print "\t\t<td width=\"40%\"><font face=\"Comic Sans MS\">$col_value</font></td>\n";
           }
         else
          {
           	 print "\t\t<td colspan=2 width=\"40%\"><font face=\"Comic Sans MS\">$col_value</font></td>\n";
          }
          
// display image (if it is present)

        $col_value=$line[4];
		if  ($line[4]!="")
        {
         print "\t\t<td width=\"40%\">"."<a href=".$line[4].">".
         "<img src=\"".$col_value.'" width="100%" border="0"></a>'."</td>\n";
		}

// data di inserimento del link
	   $col_value=$line[5];
       print "\t\t<td width=\"40%\"><i>".$col_value."</i></td>\n";
       print "\t</tr>\n";

}
	   print "</table>\n";

// Closing connection

mysql_close($link);

?>

<p>
<table><tr bgcolor="yellow"><td>
<a href="admin/addlink.php">Submit a link</a> for this cluster.
</tr></td></table>

<?php include 'coda.html' ?>
</body>
</html>

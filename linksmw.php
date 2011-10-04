<html>
<head><title>GGCs database - Links for Milky Way</title></head>
<body background="http://www.mporzio.astro.it/images/backgr2.jpg">


<?php include 'inte2.php'?>



<h1>Links to resources related to the Milky Way</h1>
<table border=1><tr><td><i>
Links to be listed in this page can be submitted by any user of the GGC-DB
</i></td></tr></table>
<p>


<?php

include 'conn.php';

$querylink = "SELECT * FROM linkspage where ID like '%Milky%' ORDER BY linkdate DESC LIMIT 10";

$result = mysql_query($querylink) or die("Query failed");

$res_1 = mysql_num_rows($result);

echo 'Number of links available so far: ';
echo '<font size="+1"><b>';
echo $res_1;
echo "<p>";


// estraggo una singola linea dal risultato della query...
// $row = mysql_fetch_row($result);


// print "<font=\"+2\">Links for the cluster: ".$line[0]."</font><p>";


print "<table border=3>\n";

?>

<tr bgcolor="#CC9999">
<td width="30%">Link name</td>
<td width="40%">Link description</td>
<td width="30%">Image</td>
</tr>

<?php

while ($line = mysql_fetch_row($result)) {

print "\t<tr>\n";


// nome del link

         $col_value=$line[1];

/*

          if ($col_value="") {

	  print "no data available! ";

	  }

*/
       

//       print "\t\t<td width=\"10%\">$line[0]</td>\n";

	 print "\t\t<td width=\"30%\">"."<a href=".$line[3].">".$col_value."</a></td>\n";

// descrizione del link

	 $col_value=$line[2];
	 print "\t\t<td width=\"30%\">$col_value</td>\n";
//         print "\t</tr>\n";

// immagine (se presente)
        $col_value=$line[4];

	if  ($line[4]!="")
        {
//	print"<a href=".$line[4].">".$col_value."</a>;
//	print "\t\t<td width=\"40%\"><img src=\"".$col_value.'" width="100%">'."</td>\n";

       print "\t\t<td width=\"30%\">"."<a href=".$line[4].">"."<img src=\"".$col_value.'" width="100%" border="0"></a>'."</td>\n";
//        print "</a>";
	}

	print "\t</tr>\n";

}

print "</table>\n";

// Closing connection

mysql_close($link);

?>

<p>
<img src="wkonit1.gif">
<p>
<p>
<table><tr bgcolor="yellow"><td>
<a href="linkmsub.php">Submit a link</a>
</tr></td></table>


<?
$table="ez_logezboo"; include ("../WebStats/write_logs.php");
?>


<?php include 'coda.html' ?>
</body>
</html>

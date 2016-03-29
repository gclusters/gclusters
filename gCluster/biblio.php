<html>
<head><title>GGCs database: bibliography</title></head>
<body background="http://www.mporzio.astro.it/images/backgr2.jpg" vlink="#3333CC">


<? include 'inte2.php'?>

<h1>Bibliography</h1>
<table border=1><tr><td><i>
Click on a cluster ID to see the whole set of available parameters for that
cluster.</i></td></tr></table>
<p>

<?php

include 'conn.php';

// Performing SQL query
$query = "SELECT ID,name,author,title,journal,adslink FROM parameters";

// echo 'query=',$query;


$result = mysql_query($query) or die("Query failed");

// Printing results in HTML

// headers

print "<table border=5>\n";
print "\t<tr align=center>\n";
print "\t\t<td><b>ID</b></td>\n";
print "\t\t<td><b>Name</b></td>\n";
print "\t\t<td><b>Author</b></td>\n";
print "\t\t<td><b>Title</b></td>\n";
print "\t\t<td><b>Journal</b></td>\n";




print "\t</tr>\n";

// print of data




while ($line = mysql_fetch_array($result)) {
     print "\t<tr>\n";
     print "\t\t<td>"."<a href=\"cluster_4.php?ggc=".urlencode($line[0])."\">".$line[0]."</a></td>\n";
     if (!$line[1])
      $line[1]=" -";
    
     print "\t\t<td>$line[1]</td>\n";

     if (!$line[2])
      $line[2]=" -";


     print "\t\t<td>$line[2]</td>\n";
     
       if (!$line[3])
      $line[3]=" - ";
   
     if ($line[5]) {
     print "\t\t<td><a href=".$line[5].">";    
     print $line[3]."</a></td>\n";
     } else {
     print "\t\t<td>$line[3]</td>\n";
     }
     

   
  
        if (!$line[4])
      $line[4]=" - ";
    
     
     print "\t\t<td>$line[4]</td>\n";
//     print "\t\t<td>$line[5]</td>\n";


//     foreach ($line as $col_value) {
//	 print "\t\t<td>$col_value</td>\n";
//	      }
     print "\t</tr>\n";
 }
 print "</table>\n";


// Closing connection
 
mysql_close($link);

/* commento questo pezzo...

termine pezzo commentato ... */

?>


<? include 'html/coda.html' ?>

</body>
</html>

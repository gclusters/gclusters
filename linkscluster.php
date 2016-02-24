<html>
<head><title>GGCs database :: Links for cluster</title></head>
<body background="backgr2.jpg">

<?php 

// ToDo inserire link alla pagina singola (e numero d'ordine della risorsa) ...
// ToDo inserire box per commenti...

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


$vallink = 0;
print "<table border=3>\n";
while ($line = mysql_fetch_row($result)) {

// @ $fpweb = fopen ($line[3], "r");
    $fpweb=1;

/*
    if ($fpweb)
    {

     $vallink == $vallink++;
     print "\t<tr>\n";
*/

/*
 Table 'linkspage': 	
 0. ID	
 1. name
 2. description
 3. address
 4. image
 5. date
 6. num link
 7. cache link
 8. numvis
 9. credits
*/


        print "\t<tr bgcolor=\"#FFCC99\">\n";

// riga con il NOME del cluster

        $col_value=$line[1];
        print "\t\t<td colspan=3>";
        print "<i><a href=\"singlelink.php?idart=$line[6]\">glink$line[6]</a>";
        print " - Added on $line[5]</i></td>";
        print "</tr>\n";


// il TITOLO del link (a nuova riga)

        print "\t\t<tr><td width=\"40%\">"."<font face=\"Comic Sans MS\">
        <a href=".$line[3].">".$col_value."</a>
        </font></td>\n";

// DESCRIZIONE del link

        $col_value=$line[2];
        if  ($line[4]!="") // c'e' o non c'e' la figura....
        {
            print "\t\t<td width=\"50%\"><font face=\"Comic Sans MS\" size='-1'><i>$col_value</i></font></td>\n";
        } else  {
            print "\t\t<td colspan=2><font face=\"Comic Sans MS\" size='-1'><i>$col_value</i></font></td>\n";
        }

// IMMAGINE (se presente)
        $col_value=$line[4];

        if  ($line[4]!="")
        {
            print "\t\t<td width=\"10%\">"."<a href=".$line[4].">".
                "<img src=\"".$col_value.'" width="100%" border="0"></a>'.
                "</td>\n";
        }

        print "\t</tr>\n";

    }



	   print "</table>\n";


      // echo "<p><i>Valid links: $vallink</i>";
// Closing connection

mysql_close($link);

?>

<p>

<?php include 'coda.html'; ?>
</body>
</html>
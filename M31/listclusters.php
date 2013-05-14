<?php
/**
 * Created by JetBrains PhpStorm.
 * User: marco
 * Date: 14/05/13
 * Time: 17:35
 * To change this template use File | Settings | File Templates.
 */

include 'conn-m31.php';
$query="select * from object";

$result = mysql_query($query) or die("Query failed...");
$numres = mysql_num_rows($result);

echo '<i>We have no less then '.$numres.' clusters in our DB!</i><p>' ;

while ($line = mysql_fetch_array($result)) {
    echo $line[0].' '.$line[1].'<br>';
}


?>
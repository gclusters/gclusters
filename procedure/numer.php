<?php
/**
 * Created by JetBrains PhpStorm.
 * User: marco
 * Date: 03/05/13
 * Time: 12:21
 * To change this template use File | Settings | File Templates.
 */

try{
    $pdo = new PDO ('mysql:host=localhost;dbname=globularclusters','root','root');
}

catch (PDOException $e)

{
    $output = 'Unable to connect to the database server';
    include 'output.html.php';
    exit();
}

$sql = "select * from linkspage order by linkdate DESC";
$result = $pdo -> query($sql);

$numy = 0;

while ($row = $result ->fetch())
{
    $numy++;
    $linky=$row['linkname'];
    // echo '<br>'.$numy.' '.$linky;
    $sql2="update linkspage set num=$numy where linkname=$linky";
    //echo $sql2.'<br>';
    $res2 = $pdo->query($sql2);
}


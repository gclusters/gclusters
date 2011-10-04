<html>
<head>
<title>exper1</title>
</head>
<body>
TeSt!
<p>
<?php

$link = mysql_connect('localhost', 'root', 'root');
mysql_select_db("globularclusters");

/*
$query = "SELECT ID from parameters";

$result = mysql_query($query) or die("Mica funziona bene..!");
$numres = mysql_num_rows($result);

echo 'Numero ammassi: '.$numres;
echo'';

$query1 = "SELECT ID,name from parameters";
$result1 = mysql_query($query1) or die("Mica funziona bene..!");


while ($line = mysql_fetch_array($result1)) {
print $line[0]." ".$line[1]."<br>";
}

echo "<p>seconda tabella!</p>";

$query2 = "SELECT name from vogclusters.author";
$result2 = mysql_query($query2) or die("non va!");

while  ($line2 = mysql_fetch_array($result2)) {
print $line2[0]."<br>";
}

*/

echo "<p>ora si fa sul serio</p>";


// itero sugli ammassi e prendo il nome
// $query3 = "SELECT ID, Gal_long from parameters where ID like '%Terzan%' ";
$query3 = "SELECT ID, V_hb from parameters";
$result3 = mysql_query($query3) or die("no no");
while ($nome = mysql_fetch_row($result3)) {

$nomecls= $nome[0];
$nomecl = str_replace(' ','',$nomecls);
echo $nomecl;
echo "<p>";

// metto una insert di prova
$query4 = "insert into vogclusters.gcluster_has_attribute VALUES(0,'$nomecl',6,'HARRIS',(SELECT V_hb from parameters where ID='$nomecls'),1,CURDATE())"; 
echo $query4;

$result4 = mysql_query($query4) or die("niente insert!");

}

?>



</body>
</html>
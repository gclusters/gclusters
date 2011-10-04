<html>
<head>
<title>LevoSpaz</title>
</head>
<body>
Leggo e tolgo gli spazi da alcune colonne...
<p>
<?php

$link = mysql_connect('localhost', 'root', 'root');
mysql_select_db("vogclusters");

/*
// PROCEDURA PER LA TABELLA gcluster
$query = "SELECT objectID,name from gcluster";
$result = mysql_query($query) or die("Mica funziona bene..!");
$numres = mysql_num_rows($result);

echo 'Numero ammassi trovato: '.$numres;
echo'<p><hr><p>';

echo 'Lista dei nomi:';
echo '<p>';
$nn = 1;

while ($line = mysql_fetch_row($result)) {
// codice per levare gli spazi
$newvar = str_replace(' ','',$line[0]);
//print $nn." ".$line[0]." ".$line[1]." ".$newvar."<br>";
print $nn." ".$newvar."<br>";
insert
$nn ++;
}

*/



// PROCEDURA PER LA TABELLA vobject
$query = "SELECT id from vobject";
$result = mysql_query($query) or die("Non funziona!");
$numres = mysql_num_rows($result);

echo 'Numero ammassi trovato: '.$numres;
echo'<p><hr><p>';

while ($line = mysql_fetch_row($result)) {
$newvar = str_replace(' ','',$line[0]);
$levospazi="UPDATE vobject SET id =  '$newvar' WHERE id = '$line[0]'";
//print $levospazi;
$vai = mysql_query($levospazi) or die("spazi non tolti"); 
echo'<br>';
//print $nn." ".$newvar."<br>";
}

?>


</body>
</html>
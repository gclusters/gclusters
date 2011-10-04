<html>
<head>
<title>exper1</title>
</head>
<body>
Script popolamento tabella con i parametri di HARRIS
<p>
<?php

// Cambiare alle righe 19, 34, 43

$link = mysql_connect('localhost', 'root', 'root');
mysql_select_db("globularclusters");

echo "<p>Lista comandi immessi:</p>";

// itero sugli ammassi e prendo il nome

$query3 = "SELECT ID, RHO_V from parameters WHERE RHO_V > 0"; // QUI 2
$result3 = mysql_query($query3) or die("no no");

$righe = mysql_num_rows($result3);
echo "<p>RIGHE COINVOLTE: ".$righe."<p><hr><p>";

// tolgo gli spazi bianchi dal nome per corrispondere al nuovo DB

while ($nome = mysql_fetch_row($result3)) {
$ik++;
$nomecls= $nome[0];
$nomecl = str_replace(' ','',$nomecls);

// formulo la query per inserimento nuovi dati

$query4 = "insert into vogclusters.gcluster_has_attribute VALUES(0,'$nomecl',37,'HARRIS',(SELECT RHO_V from parameters where ID='$nomecls'),1,CURDATE())"; // QUI 2


// stampo la query a video
echo $ik." ".$query4;
echo '<br>';

// **** THE REAL WORK !! ****
// se scommentato, inserisco i dati nel nuovo DB
$result4 = mysql_query($query4) or die("*** niente da far! ****"); // QUI
	}


?>


</body>
</html>
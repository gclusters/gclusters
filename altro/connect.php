<html>
<head>
<title>prova</title>
</head>
<body>
TeSt!
<p>
<?php

$link = mysql_connect('localhost', 'root', 'root');
mysql_select_db("globularclusters");

$query = "SELECT ID from parameters";

$result = mysql_query($query) or die("Mica funziona bene..!");
$numres = mysql_num_rows($result);

echo 'Numero ammassi: '.$numres;
?>

</body>
</html>
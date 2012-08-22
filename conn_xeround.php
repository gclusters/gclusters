<html>

<head>
<title>test Xeround</title>
</head>

<body>


Test Connessione XEROUND

<?
$link = mysql_pconnect("int.instance5023.db.xeround.com:3569", "mcastel", "baciccio");
if (!$link)
	die('Could not connect: ' . mysql_error());
mysql_select_db("test");

$querylink = "SELECT * FROM linkspage ORDER BY linkdate DESC LIMIT 1";
$result = mysql_query($querylink) or die("Query failed");
$line = mysql_fetch_row($result);

echo '<p>';
echo $line[0];

?>


</body>
</html>
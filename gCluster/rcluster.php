<?php

$a=rand(0,152);

include 'conn.php';
$scelgo = "SELECT ID FROM parameters LIMIT $a,1";
$result = mysql_query($scelgo) or die ("Query failed");
$row = mysql_fetch_row($result);
?>



<html>

<head>
  <title></title>
  <meta name="GENERATOR" content="Quanta Plus">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<BODY BGCOLOR="#DCDCDC" TEXT="#0000FF" LINK="#0000FF" VLINK="#A020F0" ALINK="#FF0000">
<?php include 'inte2.php'; ?>

The cluster
<?php
// echo "<p>";
// echo $a;
// echo "<p>";
// echo $row[0];
print "<a href=\"cluster_4.php?ggc=".urlencode($row[0])."\">".$row[0]."</a>";
?>


has been selected for you! 
</body>
</html>


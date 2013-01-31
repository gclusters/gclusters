<html>
<head><title>GGCs database: "adoption"</title></head>
<body background="backgr2.jpg" vlink="#3333CC">


<?php 
include 'inte2.php'
?>

<center>
<h2>Adopt a cluster!</h2>
<h3>Help us to keep this database up-to-date, giving us a few minutes of your time 
monitoring the presence of new data 
</h3>
</center>
<br>
<p>
Here you can choose to "adopt" a cluster. The adoption mechanism run as follows:
<ul>
<li>
By <a href="form-adopt.php">adopting a cluster</a>
you express your intent to monitor (in your spare time, no hurry) a given
cluster for the arrival, in the scientific literature as well on the web, of new 
articles, parameters or data (or whenever you think is relevant for our compilation).
You don't need to be a professional astronomer to do this (though it may help).
<li>
When you find something relevant to "your" clusters, you are invited to notify 
to the maintainers
of this website for changes, in order to be included in our compilation. To do it, 
simply drop down a line with the
info (a reference, a web page, etc....) at <i>gclusters@altervista.org</i>, 
and you're done.
<li>You can stop following your cluster anytime. Only, you're kindly requested to
send us an email, in order to let us search
for another maintainer.
<li>You can follow more then one cluster, if you want. Please be sure you have
the time to proper monitoring them all.
<li>Any cluster can have up to <i>five</i> maintainers. Anyway, 
you're encouraged to choose  
clusters that still have no maintainer.
<li>(If you don't mind) your name and institution (if applicable) will appear in the page of 
clusters you're monitoring.
<li>For any question, you can go to <a href="adoption-faq.php">the adoption FAQ page</a>, or drop us an email :-)
<p><br><p>

<?php

// connessione al database

include 'conn.php';

// Performing SQL query
$query = "SELECT tutors.*,user.* FROM tutors,user  
WHERE
tutors.person=user.ID
ORDER by user.surname";

$res = mysql_query($query) or die("Query failed");
?>

<table border=6 width=50%><tr>
<td bgcolor="#FFCC99" align="center" width=100% colspan="3"><i><b>
Clusters & Maintainers</b>
</td></tr>

<?php

while ($line = mysql_fetch_row($res)) 
{
	// col 1
	echo '<tr>';
	//echo '<td>';
	//echo $line[0];
	//echo '</td>';
	
	// col 2
	echo '<td>';
	echo $line[1];
	echo '</td>';
	
	// col 3
	echo '<td>';
	//echo '<a href="http://www.eso.org">';
	echo "<a href=\"user.php?ID=$line[2]\">";
	echo $line[7].' '.$line[8];
	echo '</a>';
	echo '</td>';
	
	// col 4
	echo '<td><i>';
	echo $line[9];
	echo '</i></td>';
	
	
	echo '</tr>';
}

?>

</table>
<p>
As you can see, there are still many clusters in need of a "tutor"....
<a href="form-adopt.php">Adopt one of them!</a>

<p>

<?php include 'coda.html' ?>

</body>
</html>

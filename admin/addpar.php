<html>

<head>
<title>gclusters :: Parameter Submission</title>
</head>

<body background="../backgr2.jpg" text="#000000" vlink="#330099">

<center>
<img src="../globular_1.gif"><br>
<img src="../globular_2.gif">
<p>

</center>

<p>
<hr>
<p>

Use this form to submit a value of a parameter in the GGCs-DB
<br>Please note that to use this feature you need a password, that 
<a href="https://docs.google.com/spreadsheet/viewform?formkey=dDN6RmRncDFubXFvY1dHY3E4Yi10cXc6MQ#gid=0">
can be obtained here</a>

<p>

<form action="putpar.php" method="post">

<table>

<tr>

<td>
Name of the cluster:
</td>

<td>
<input type=text name="cluster">
</td>

</tr>

<tr>
<td>
Parameter code (<a href="parsim.php">see the list</a>):
</td>

<td>
<input type=text name="parcode">
</td>
</tr>

<tr>
<td>
Parameter value:
</td>

<td>
<input type=text name="parvalue">
</td>
</tr>

<tr>

<td>
Author(s) of the paper:
</td>

<td>
<input type=text name="autore">
</td>

</tr>

<tr>

<td>
Link ADS:
</td>

<td>
<input type=text name="parlink">
</td>

</tr>

<tr>

<td>
Publication Date:
</td>

<td>
<input type=text name="annoart">
</td>

</tr>

<tr>

<td>
Comments (optional):
</td>

<td>
<input type=text name="parcom">
</td>

</tr>




<tr>

<td>Password: </td>
<td><input type=password name="pass"></td>

</tr>

</table>

<p>
<INPUT TYPE=RESET VALUE="clear">
<INPUT TYPE=SUBMIT VALUE="submit">

</form>

<? include 'codadm.html' ?>

</body>
</html>
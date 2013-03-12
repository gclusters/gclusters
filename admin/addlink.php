<html>

<head>
<title>gclusters :: Link Submission</title>
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

Use this form to submit a link in the GGCs-DB
<br>Please note that to use this feature you need a password, that 
<a href="https://docs.google.com/spreadsheet/viewform?formkey=dDN6RmRncDFubXFvY1dHY3E4Yi10cXc6MQ#gid=0">
can be obtained here</a>

<p>

<form action="putlink.php" method="post">

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
Title of the link:
</td>
<td>
<input type=text name="linktitle">
</td>
</tr>
<tr>

<td>
Description of the link:
</td>
<td>
<input type=text name="linkdescr">
</td>
</tr>

<tr>
<td>
Address of the link:
</td>
<td>
<input type=text name="linkaddress">
</td>
</tr>

<tr>
<td>
Image URL (optional):
</td>
<td>
<input type=text name="imageurl">
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
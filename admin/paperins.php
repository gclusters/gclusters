<html>

<head>
<title>GGCs DB :: Paper Submission</title>
</head>

<body background="../backgr2.jpg" text="#000000" vlink="#330099">

<center>
<img src="../globular_1.gif"><br>
<img src="../globular_2.gif">
<p>

</center>

<p>

<strong>
Use this form to submit a paper in the GGCs-DB
</strong>
<p>

<form action="prepaper.php" method="post">

<table border="0" width="70%">

<tr>

<td width="40%">
Name of the cluster:
</td>

<td width="60%">
<input type=text size=30 name="cluster">
</td>

</tr>

<tr>

<td width="40%">
Author(s) of the paper:
</td>

<td width="60%">
<input type=text size=30 name="autore">
</td>

</tr>

<tr>

<td width="40%">
Title:
</td>

<td width="60%">
<textarea cols=22 name="titolo" rows=3></textarea>
</td>

</tr>

<tr>

<td width="40%">
Journal:
</td>

<td width="60%">
<input type=text size=30 name="journal">
</td>

</tr>

<tr>

<td width="40%">
Link:
</td>

<td width="60%">
<input type=text size=30 name="plink">
</td>

</tr>

<tr>

<td>
Publication Date:
</td>

<td>
<input type=text size=30 name="annoart">
</td>

</tr>

<tr>

<td>
Tag 1:
</td>

<td>
<input type=text size=30 name="tag01">
</td>

</tr>

<tr>

<td>
Tag 2:
</td>

<td>
<input type=text size=30 name="tag02">
</td>

</tr>

<tr>

<td>Password: </td>
<td><input type=password size=30 name="pass"></td>

</tr>

</table>

<p>
<INPUT TYPE=RESET VALUE="clear">
<INPUT TYPE=SUBMIT VALUE="submit">

</form>

<? include 'codadm.html' ?>

</body>
</html>
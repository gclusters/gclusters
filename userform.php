<HTML> 
<HEAD> 
<TITLE>GGCs database: Contact Form</TITLE> 
</HEAD> 
 
 <BODY background="backgr2.jpg"> 
 
 
<H1>Contact Form</H1>

<p>This form allow you to send an Email to the user...<p>


<form action="userform.php" method="post">

<table>

<tr><td>
Your name:
</td>
<td>
<input type="text" width="30" name="Name">
</td></tr>

<tr><td>Your Email address:</td><td>
<input type="text" name="Emailaddr"></td>
</tr>

<tr><td>Your message:</td><td>
<textarea rows="10" cols="60" name="Comments"></textarea></td>
</tr><tr><td>
<input type="reset" value="Clear form">
<input type="submit" name="submit" value="Send">
</td></tr></table>

<?

$user_addr="marco@snoopy.mporzio.astro.it";
$from_addr="marco@gruppolocale.net";

$msg  = "$Comments\n\n";
$msg .= "-------------------------------------------------- \n";
$msg .= "This mail was sent via the web interface of GGC-DB \n";
$msg .= "Please report any abuse to mkast@mporzio.astro.it  \n";
$msg .= "-------------------------------------------------- \n";

if (isset($submit)) {

mail($user_addr,"Message from GGC-DB user",$msg,
     "From: $from_addr");
echo "<b>Your E-mail has been sent</b><br>\n";
}

?>

</BODY>
</HTML>

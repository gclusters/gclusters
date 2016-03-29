<!DOCTYPE HTML PUBLIC "-//SoftQuad Software//DTD HoTMetaL PRO 6.0::19990601::extensions to HTML 4.0//EN" "hmpro6.dtd">
<HTML> 
 <HEAD> 
  <TITLE>GGCs database: Contact Form</TITLE> 
 </HEAD> 
 <BODY background="static/images/backgr2.jpg"> 
 
<?php include "inte2.php" ?>
 
 
 
  <H1>Link submission</H1> 


  <TABLE WIDTH="100%" BORDER="0" CELLPADDING="2" CELLSPACING="0"> 
	<TR> 
	 <TD WIDTH="10%">&nbsp;</TD> 
	 <TD><?
function check_len(&$check, $field, $max, &$err_field, $err="")
{
  if (strlen($field) > $max)
  {
     if ($err == "")
     {
       $err = $msg->err_maxlen($max);
     }
     $err_field = $err;
     if ($check==true) $check = false;
  }
}



function check_mail(&$check, $fld, &$error_field, $invalidchars="", $blanks="")

{



   global $msg;

   $expr = "^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z][a-z]+\$";

   //echo "expr=" . $expr . "<br>";

   if ((!$fld) || ($fld=="") || (!eregi($expr,$fld)))

   {

     if ($invalidchars > "")

     {

      $error_field = $invalidchars . "<br>\n";

     } else {

      $error_field = "invalid characters<br>\n";

     }

     if ($check==true) $check =false;

   }

   if (strrpos($fld,' ') > 0)

   {

     if ($blanks > "")

     {

      $error_field = $blanks . "<br>\n";

     } else {

      $error_field = "blanks in e-mail<br>\n";

     }

     if ($check==true) $check =false;

   }

}

if (empty($Name)) $Name="Name";
if (empty($err_Name)) $err_Name="&nbsp;";
if (empty($Emailaddr)) $Emailaddr="Your Email address";
if (empty($err_Emailaddr)) $err_Emailaddr="&nbsp;";
// if (empty($Comments)) $Comments="Your comments here..";
if (empty($err_Comments)) $err_Comments="&nbsp;";

$checked = true;
if (isset($submit))
{
  check_len($checked, $Name,60,$err_Name,"Field too long! Maximum:60");
  check_len($checked, $Emailaddr,40,$err_Emailaddr,"Field too long! Maximum:40");
 check_mail($checked, $Emailaddr, $err_Emailaddr,"The e-mail contains invalid characters or is incomplete.", "The e-mail contains blanks.");
//  check_len($checked, $Comments,80,$err_Comments,"Field too long! Maximum:80");
}
if ( empty($submit) or (!$checked) )
{
?>
<form action="linksub.php" method="get"><table cellpadding="4" border="0">
<tr><td valign="top">Your Name</td><td>
<input type="text" name="Name" value="<?php echo $Name ?>">
</td><td>
<?php echo $err_Name ?>
</td></tr>
<tr><td valign="top">E-mail </td><td>
<input type="text" name="Emailaddr" value="<?php echo $Emailaddr ?>">
</td><td>
<?php echo $err_Emailaddr ?>
</td></tr>

<tr><td valign="top">Link (URL)</td><td>
<input type="text" size=50 name="Link"></td>

<tr><td valign="top">Description</td><td>
<textarea name="Comments" rows="10" cols="60"><?php echo $Comments?></textarea>
</td><td>
<?php echo $err_Comments ?>
</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Send"></td></tr>
<tr><td colspan="2">
<!-- Please leave the copyright notice and the link in place -->
</td></tr>
<tr><td colspan="2">
<font size="-2">Copyright (2001) M. Heddesheimer <a

href="http://www.rent-a-tutor.com/tools/">Generate your own contact form</a></font>
</td></tr>
</table></form>
<?php
  }
if (isset($submit) and ($checked) ) {
//  $msg = "You have mail ;-)\n";
  $msg  ="\n"; 
  $msg .= "Name=$Name\n";
  $msg .= "Emailaddr=$Emailaddr\n";
  $msg .= "Link=$Link\n";
  $msg .= "Description=$Comments\n";
  mail("mkast@mporzio.astro.it","Message from your Formmailer",

$msg);
  echo "<b>E-mail has been sent</b> to Marco Castellani<br>\n";
  echo nl2br($msg) . "<br>\n";
  echo "<p>Thank you for your contribution to the database links!";
  echo "<br>Link you submitted will be reviewed as soon as soon as possible<b>";

}
?>
</TD> 
	 <TD WIDTH="10%">&nbsp;</TD> 
	</TR> 
  </TABLE> 

<p>
<?php include "html/coda.html" ?>  
  
  
  </BODY>
</HTML>

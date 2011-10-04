<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
<title>GGCs database: home</title>
</head>

<body background="backgr2.jpg" text="#000000" vlink="#330099" -->
<center>
<img src="globular_1.gif"><br>
<img src="globular_2.gif"><p>
<!-- img src="new_anim.gif" -->
<b> "Paola" release</b>

<br><i><a href="http://snipurl.com/gclusters">http://snipurl.com/gclusters</a></i>
<?php

include 'conn.php';

$querylink = "SELECT * FROM linkspage ORDER BY linkdate DESC LIMIT 1";
$result = mysql_query($querylink) or die("Query failed");
$line = mysql_fetch_row($result);

$query_biblio = "SELECT * FROM biblioclusters ORDER BY mdate DESC LIMIT 1";
$res_biblio = mysql_query($query_biblio) or die("Query failed");
$l_biblio = mysql_fetch_row($res_biblio);

// aggiunte piÃ¹ recenti ai parametri

$query_npar = "SELECT cluster FROM newpar ORDER BY mdate DESC limit 20";
$res_npar = mysql_query($query_npar) or die("Query failed");
// $l_par = mysql_fetch_row($res_npar);

// leggo le statistiche

$querylink2 = "SELECT * FROM accesscount ORDER BY n_vis DESC LIMIT 7";
$res_visited = mysql_query($querylink2) or die("Query failed");

// random cluster

$a=rand(0,152);
$scelgo = "SELECT ID FROM parameters LIMIT $a,1";
$resultr = mysql_query($scelgo) or die ("Query failed");
$randglob = mysql_fetch_row($resultr);

?>


<p>
<br>

<!-- Version: 0.8 -->

</center>
<p>
<center>
<p>

<hr></center>

<p>


<table width="90%">

<tr>

<td>
<h3><i>
Based
upon the<br>
<font face="Arial,Helvetica">
<a href="http://www.physics.mcmaster.ca/Globular.html">
Catalog of parameters for Milky Way globular clusters</a>
</font>
<br>
by
<a href="http://www.physics.mcmaster.ca/~harris/WEHarris.html">
William E. Harris.
</a>
</i>
</h3>
<p>
<h4>
Ref.:
<a href="http://cdsads.u-strasbg.fr/cgi-bin/nph-bib_query?bibcode=1996AJ....112.1487H">
Harris, W.E. 1996, AJ, 112, 1487</a></h4>
</i>
</p>
</td>

<td>
<a href="http://globularclusters.wordpress.com">
<img src="http://feeds.feedburner.com/gclusters.gif" style="border:0" alt="GGC-DB Blog" align="right"/></a>
</td>


</tr>

</table>

<p>
<hr>
</b>
<p>
</font>
<!-- TABELLA GENERALE -->

<table border=0 width=100%>

<tr>

<!-- TABELLA DI PROVA PIU' A SINISTRA -->
<td valign="top">

<table border=6 width=100%>
<tr><td bgcolor="#EED1C1" align="center"><i>
<b>
GGCs system:
</b> <a href="linksmw.php">news</a> | <a href="bibliomain.php">bibliography</a>
<!--
 | <a href="adsbibliogc.html">ADS search</a>
-->
</td></tr>
</table>
<p>
<table>
<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2Fgclusters%2F123871424321591&amp;width=270&amp;colorscheme=light&amp;show_faces=true&amp;stream=true&amp;header=false&amp;height=556" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:270px; height:556px;" allowTransparency="true"></iframe>
</table>
<p>
<table border=6>
<tr><td>
<font face="Comic Sans MS" size="-1">
<p>Database compilation by
<a href="http://mcastel.net63.net">
Marco Castellani</a>
<p>
<a href="http://www.oa-roma.inaf.it">
INAF - Astronomical Observatory of Rome</a><p>
<!-- img src="http://www.mporzio.astro.it/images/oarmp6.jpg" -->
</font>

</td>

</tr></table>


</td>

<!-- START TABELLE PARTE SINISTRA -->
<td width=40% valign="top">

<!--           Search objects          -->

<table border=6 width=100%>
<tr><td bgcolor="#EED1C1" align="center"><i>
Search objects <b>by name</b> or <b>by parameters</b></i>
</td></tr>
<tr><td>

<ul>

<li>
<font size="+1" color="#330099">Name search</font> - Please select the cluster:

<FORM METHOD=GET ACTION="cluster_4.php">
<FONT FACE="ARIAL, HELVETICA">


<font size="-1">
(Leaving a space before the number, for example, <strong>'NGC 6101'</strong>)
</font>
<p>
Name
<INPUT TYPE="text" NAME="ggc" SIZE="15">
<INPUT TYPE="submit" VALUE="Send">
<INPUT TYPE="reset" VALUE="Cancel">
</FORM>
<p>
</li>


<li>
<font size="+1" color="#330099">Parameter search</font>
- go to a (simple) <font size="+1"><a href="form4_ggc.php">search page</a></font>
</li>


<li>
<font size="+1" color="#330099">Random cluster:
</font>
go to the page of
<?php
print "<a href=\"cluster_4.php?ggc=".urlencode($randglob[0])."\">".$randglob[0]."</a>";
?>

</li>

</ul>
</table>

<p>

<!-- Tabella BROWSE TABLES -->

<table border=6 width=100%>
<tr><td bgcolor="#EED1C1" align="center"><i><b>
Browse Tables</b></i></td></tr>
<tr><td align="center">
<font size="+1">
<a href="table1a.php">Table 1</a></font> - Positional Parameters

<tr><td align="center">

<font size="+1">
<a href="table2a.php">Table 2</a></font> - Photometric Parameters

<tr><td align="center">

<font size="+1">
<a href="table3a.php">Table 3</a></font> - Structural Parameters

<tr><td align="center">


<a href="param.php">
A brief description of parameters listed in Tables 1,2,3</a>


<!--
<tr><td align="center">

<font size="+1">
<a href="biblio.php">Table 4</a></font> - Bibliographics items

</tr></td>

-->
</table>

<!--  Tabella Preprints  -->
<table border=6 width=100%><tr>
<td bgcolor="#FFCC99" align="center" width=100%><i><b>
<a href="http://www.citeulike.org/group/6906">Recent preprints</a></b>
</td></tr>
<tr><td>
<font size="-1">
<script src="http://feeds.feedburner.com/gpreprints?format=sigpro" type="text/javascript" ></script><noscript>
<p>Subscribe to RSS headline updates from:
<a href="http://feeds.feedburner.com/gpreprints"></a><br/>Powered by FeedBurner</p> </noscript>

</font></td></tr>

</table>



<!-- Tabella what is new -->

<table border=6 width=100%>
<tr><td bgcolor="#EED1C1" align="center"><i><b>
<a href="http://globularnews.tumblr.com/">
What is new</a></b></i></td></tr>

</font>
<tr><td>
<font size="-1">
<script src="http://feeds.feedburner.com/globularnews?format=sigpro" type="text/javascript" >
</script>
<noscript>
<p>Subscribe to RSS headline updates from: 
<a href="http://feeds.feedburner.com/globularnews"></a><br/>
Powered by FeedBurner</p> </noscript>
</font>

</td></tr>
<tr><td align="center">

Most recent <font size="+1"><a href="linksmain.php">links</a></font> and
<font size="+1"><a href="lcomments.php">comments</a></font>
added by users


<tr><td align="center">
<a href="biblio_new.php">Selected bibliography</a> - Latest references added
</td>
<!--
<tr><td align="center">
<a href="adsbibliogc.html">ADS search results for "globular clusters"
</a>
(<a href="http://feeds.feedburner.com/globularclusters">RSS feed</a>)

</td>

</tr>
-->
<tr><td align="center">
Related <a href="papers">papers and contributions</a>

</td>
</tr>

</table>

<!-- Fine Tabella WHATSNEW -->




<!-- Fine tabella preprints  -->



<!-- Tabella FEEDBACK -->

<table border=6 width=100%>
<tr><td bgcolor="#EED1C1" align="center"><i><b>
Users feedback</b></i>
<!--
<tr><td align="center"><i><font color="blue">
Please send us any suggestion and comment<br>
you may have concerning the GGC-DB...!</font>
</i>
</td></tr>
-->
<tr><td align="center">
<a href="getinvolved.php">Get involved!</a>
:: <a href="http://mcastel.indefero.net/p/gclusters/">Developer area</a> 
(<a href="http://mcastel.indefero.net/p/gclusters/timeline/">recent updates</a>)


</td></tr>

<tr><td align="center">

A <font size="+1"><a href="feedbackform.php">feedback form</a>
:: <a href="http://gclusters.uservoice.com/">Discussion board</a>
</font>
</td></tr>

<tr><td align="center">
<a href="http://scr.im/mcastel">Mail contact</a>
</td></tr>

</table>

</td>

<!-- START TABELLE PARTE DESTRA -->
<td valign="top" witdh=80%>



<! -- Tabella ammassi piu' visti -->


<table border=6 width=100%><tr>
<td bgcolor="#FFCC99" align="center" width=100%><i><b>
<a href="vclusters.php">
Most visited pages</a></b>
</td></tr>
<?

while ($l_visited = mysql_fetch_array($res_visited)){


// echo 'Most visited page:';

echo '<tr><td><center>';
// scrivo il nome dell'ammasso
print "<a href=\"cluster_4.php?ggc=".urlencode($l_visited[0])."\">".$l_visited[0]."</a>";
// echo $l_visited[0];
// se c'e', scrivo l'altra denominazione
if ($l_visited[1])
   {
     echo ' (';
     echo $l_visited[1];
     echo ') ';
   }
echo ',<i> ';
// il numero delle visite...
echo $l_visited[2];
echo ' times</i>';
echo '<tr><td>';
}
?>
</center>
</td></tr>

</table>
<p>



<!-- Tabella aggiunte pi recenti -->

<table border=6 width=100%><tr>
<td bgcolor="#FFCC99" align="center" width=100%><i><b>
Latest database entries</b>
</td></tr>

<tr><td><center><b><i>
<a href="linksmain.php">
Links</a></i></b></center></td></tr>

<tr>
<td>

<?
echo "<b>".$line[0]."</b> - ";
echo "<a href=\"link_lt.php\">";
echo $line[1];
echo "</a><br><i><font size=\"-1\">(added: ".$line[5].")</font></i>";
?>

<tr><td><center><b><i>
<a href="biblio_new.php">
Bibliography
</a>
</i></b></center></td></tr>
<tr><td>
<?
echo "<b>".$l_biblio[0]."</b> - ";
echo "<a href=\"biblio_lt.php\">";
echo $l_biblio[1];
echo "</a> - <i>";
echo $l_biblio[2];
echo "<font size=\"-1\"> (".$l_biblio[6].")</font>";
echo "<br><font size=\"-1\">(added: ".$l_biblio[8].")</font></i>";
?>

<tr><td align="center"><b><i><a href="recparam.php">Parameters</a></i></b>
</td></tr>

<tr><td align="center">
<b><i>New data for </i></b>
<?php 

// **WM1** conteggio ammassi *diversi* con parametri aggiunti

while($ncont<3) {
	
  $l_par = mysql_fetch_row($res_npar);
  $clpar[$ncont]=$l_par[0]; 

  if($clpar[$ncont]!=$clpar[$ncont-1])
         {
	 echo $clpar[$ncont].", ";
         $ncont ++; // incremento l'indice SOLO in caso di ammassi diversi
         }
}



?>
....
</td></tr>

</table>
<p>


<!-- Tabella Links  -->

<table border=6 width=100%><tr>
<td bgcolor="#FFCC99" align="center" width=100%><i><b>
Links to other websites</b>
</td></tr>

<tr><td align=center>
<a href="http://www.seds.org/~spider/spider/MWGC/mwgc.html">
Milky Way Globular Cluster</a> at
<a href="http://www.seds.org">Seds.org</a></li>
</td></tr>

<tr><td align=center>
<a href="http://www.univie.ac.at/webda/">
WEBDA, A site Devoted to Stellar Clusters in the Galaxy and the Magellanic Clouds</a>
</td></tr>


<tr><td align=center>
<a href="http://www.astro.utoronto.ca/~cclement/read.html">
Catalogue of Variable Stars in Globular Clusters</a><br>
by
<a href="http://www.astro.utoronto.ca/~cclement/">Christine M. Clement</a>
</td></tr>


<tr><td align=center>
<a href="http://dipastro.pd.astro.it/globulars/">
Globular Cluster Group</a><br>
of the <a href="http://dipastro.pd.astro.it/">
Padova Astronomy Department</a>
</td></tr>


<tr><td align=center>
<a href="http://dmoz.org/Science/Astronomy/Star_Clusters/Globular_Clusters/">
Globular Clusters section</a>
<br> in the <a href="http://dmoz.org">Open Directory
Project</a><br>
<img src="lizard2b.gif">
</td></tr>

<!-- SOCIAL NETWORKS -->
<tr><td align="center">Find us on
<a href="http://www.facebook.com/pages/gclusters/123871424321591">Facebook</a>,
<a href="http://friendfeed.com/rooms/gclusters">Friendfeed</a>,
<a href="http://groups.diigo.com/group/gclusters">Diigo</a>,
<a href="http://groups.yahoo.com/group/gclusters/">Yahoo!</a>
<a href="http://feeds.feedburner.com/gclustersgroup" title="RSS feed" rel="alternate" type="application/rss+xml">
<img src="http://www.feedburner.com/fb/images/pub/feed-icon16x16.png" alt="" style="border:0"/>



<tr><td align="center">
<i>CiteULike</i> groups for <a href="http://www.citeulike.org/groupfunc/6906/home">preprints</a> and <a href="http://www.citeulike.org/groupfunc/13615/home">published papers</a>
</td></tr>

<tr><td align="center">
<a href="http://globularclusters.wordpress.com">
The Globular Clusters Blog
</a>
<a href="http://feeds.feedburner.com/gclusters" title="RSS Feed" rel="alternate" type="application/rss+xml">
<img src="http://www.feedburner.com/fb/images/pub/feed-icon16x16.png" alt="" style="border:0"/>
</a>


</td></tr>


<tr><td align=center>
<i>
Submit a link
using the <a href="feedbackform.php">feedback form</a>
</i>
</td></tr>


</table>


</tr>
</table>

<hr>
<p>
<i>
<center>
This website is dedicated to the memory of Prof. Vittorio Castellani (1937-2006)
</center>
</i>
<p>
<hr>

<?php include "codamain.html" ?>

<!-- credits -->

<p>
<center>

<table>
<tr>
<td>
<a href="credits.php">Credits</a>
</td>

<td>
<a href="http://feeds.feedburner.com/gclusters">
<img src="http://feeds.feedburner.com/~fc/gclusters?bg=99CCFF&amp;fg=444444&amp;anim=1" height="26" width="88" style="border:0" alt="" /></a>
</td>

</tr>
</table>

<p>

</center>

<script type="text/javascript">
lloogg_clientid = "289102115b2cb6a2";
</script>
<script type="text/javascript" src="http://lloogg.com/l.js?c=289102115b2cb6a2">
</script>

<script src="http://gclusters.uservoice.com/pages/general/widgets/tab.js?alignment=right&amp;color=00BCBA" type="text/javascript"></script>

</body>
</html>

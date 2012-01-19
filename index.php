<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
<title>GGCs database: home</title>
</head>

<body background="backgr2.jpg" text="#000000" vlink="#330099" -->
<center>
<img src="globular_1.gif"><br>
<img src="globular_2.gif"><p>

<i>Release 11.12 
"<a href="http://en.wikipedia.org/wiki/Hergest_Ridge_(album)">
Hergest Ridge</a>"</i>

<?php

// including parameters needed for DB connection
include 'conn.php';

// extracting most recent link
$querylink = "SELECT * FROM linkspage ORDER BY linkdate DESC LIMIT 1";
$result = mysql_query($querylink) or die("Query A failed");
$line = mysql_fetch_row($result);

// extracting most recent bibliographic item
$query_biblio = "SELECT * FROM biblioclusters ORDER BY mdate DESC LIMIT 1";
$res_biblio = mysql_query($query_biblio) or die("Query B failed");
$l_biblio = mysql_fetch_row($res_biblio);

// extracting most recent values for parameters
$query_npar = "SELECT cluster FROM newpar ORDER BY mdate DESC limit 20";
$res_npar = mysql_query($query_npar) or die("Query C failed");
// $l_par = mysql_fetch_row($res_npar);

// reading stats
$querylink2 = "SELECT * FROM accesscount ORDER BY n_vis DESC LIMIT 7";
$res_visited = mysql_query($querylink2) or die("Query D failed");

// selecting a random cluster
$a=rand(0,154);
$scelgo = "SELECT ID FROM parameters LIMIT $a,1";
$resultr = mysql_query($scelgo) or die ("Query E failed");
$randglob = mysql_fetch_row($resultr);

// selecting the "cluster of the day"
$numax=154;
$cldate=date('z')-70;
//$cldate2=($cldate % $numax); 
$cldate2=abs($cldate % $numax); // patch for the year 2012...
$cday = "SELECT ID FROM parameters order by R_gc LIMIT $cldate2,1";
$rday = mysql_query($cday) or die ("Query F failed");
$clday = mysql_fetch_row($rday);

?>

<p>

<!-- Version: 11.12 "Hergest Ridge" -->

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
Refs:
<a href="http://cdsads.u-strasbg.fr/cgi-bin/nph-bib_query?bibcode=1996AJ....112.1487H">
Harris, W.E. 1996, AJ, 112, 1487</a>, 
<a href="http://xxx.lanl.gov/abs/1012.3224">arXiv:1012.3224</a>
</h4>
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

<!-- GENERAL TABLE -->

<table border=0 width=100%>

<tr>

<!-- NESTED LEFT TABLE -->
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

<tr><td bgcolor="#EED1C1" align="center">
<img src="new_anim.gif">
<i>
<a href="http://dame.dsf.unina.it/vogclusters.html">VOGCLUSTERS alpha release</a>
</i>
</td></tr>

</table>
<p>
<table>
<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2Fgclusters%2F123871424321591&amp;width=270&amp;colorscheme=light&amp;show_faces=true&amp;stream=true&amp;header=false&amp;height=556" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:270px; height:556px;" allowTransparency="true">
</iframe>
</table>
<br>
<table><tr><td>
<script type="text/javascript" src="http://groups.diigo.com/user_mana/link_roll_data?group_name=gclusters&icon=true&width=250&count=5&title=Links&tags=&token=" >
</script><noscript><a href="http://groups.diigo.com/group/gclusters" >Links</a></noscript>
</td></tr>

<table>
<tr>
<td align="center">
<i>
<a href="javascript:scroll(0,0)">
Top of the page
</a></i>
</td>
</tr>
</table>

</td>

<!-- BEGINNING LEFT TABLES -->
<td width=40% valign="top">

<!-- Search objects -->

<table border=6 width=100%>
<tr><td bgcolor="#EED1C1" align="center"><i>
Search objects <b>by name</b> or <b>by parameters</b></i>
</td></tr>
<tr><td>

<ul>

<li>
<font size="+1" color="#330099">Name search</font> - Please select the cluster:

<FORM METHOD=GET ACTION="findcl.php">
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

<?php
print "<a href=\"cluster_4.php?ggc=".urlencode($randglob[0])."\">".$randglob[0]."</a>";
?>

</li>

<li>
<font size="+1" color="#330099">Cluster of the day:
</font>

<?php
print "<a href=\"cluster_4.php?ggc=".urlencode($clday[0])."\">".$clday[0]."</a>";
?> 

</li>

</ul>
</table>

<p>

<!-- Table BROWSE TABLES -->

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

<!--  Table PREPRINTS  -->
<table border=6 width=100%><tr>
<td bgcolor="#FFCC99" align="center" width=100%><i><b>
<a href="http://www.citeulike.org/group/6906">Stellar Clusters group</a></b>
</td></tr>
<tr><td>
<font size="-1">
<script src="http://feeds.feedburner.com/stellarclusters?format=sigpro" type="text/javascript" >
</script><noscript>
<p>Subscribe to RSS headline updates from:
<a href="http://feeds.feedburner.com/gpreprints"></a><br/>Powered by FeedBurner</p> </noscript>
</font>
</td></tr>

</table>


<!-- Table WHAT IS NEW -->

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

<tr><td align="center">
Related <a href="papers">papers and contributions</a>

</td>
</tr>

</table>

<!-- Table FEEDBACK -->

<table border=6 width=100%>
<tr><td bgcolor="#EED1C1" align="center"><i><b>
Users feedback</b></i>

<tr><td align="center">
<a href="getinvolved.php">Get involved!</a>
:: <a href="http://mcastel.indefero.net/p/gclusters/">Developer area</a> 
(<a href="http://mcastel.indefero.net/p/gclusters/timeline/all">recent updates</a>)

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

<!-- START RIGHT SECTION -->
<td valign="top" witdh=80%>

<!-- Table MOST VISITED PAGES -->

<table border=6 width=100%><tr>
<td bgcolor="#FFCC99" align="center" width=100%><i><b>
<a href="vclusters.php">
Most visited pages</a></b>
</td></tr>

<?
while ($l_visited = mysql_fetch_array($res_visited)){

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
<a href="http://groups.diigo.com/group/gclusters">Diigo</a>,
<a href="http://groups.yahoo.com/group/gclusters/">Yahoo!</a>
<a href="http://feeds.feedburner.com/gclustersgroup" title="RSS feed" rel="alternate" type="application/rss+xml">
<img src="http://www.feedburner.com/fb/images/pub/feed-icon16x16.png" alt="" style="border:0"/>

<tr><td align="center">
<i>CiteULike</i>  <a href="http://www.citeulike.org/groupfunc/6906/home">Stellar Clusters</a> group.
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
Submit a link using the <a href="feedbackform.php">feedback form</a>
</i>
</td></tr>

</table>

</tr>
</table>

<hr>
<p>
<i>
<center>
<font face="Comic Sans MS" size="-1">
<p>Database compilation by
<a href="http://mcastel.weebly.com">
Marco Castellani</a>(<a href="http://www.oa-roma.inaf.it">
INAF - Astronomical Observatory of Rome</a>)<p>
</font>
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
<img src="http://feeds.feedburner.com/~fc/gclusters?bg=99CCFF&amp;fg=444444&amp;anim=1" height="26" width="88" style="border:0" alt="" />
</a>
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

<script src="http://gclusters.uservoice.com/pages/general/widgets/tab.js?alignment=right&amp;color=00BCBA" type="text/javascript">
</script>

</body>
</html>

<?php

include 'conn.php';
 
// define queries ...

$ggc= $_GET['ggc'];

$ggc=trim($ggc);

$query_auth = "SELECT * FROM parameters where ID like '$ggc' or name like '$ggc'";

// extracting values ...

$result = mysql_query($query_auth) or die("Query failed");
$numres = mysql_num_rows($result);

if (!$numres)
{
// Non ho trovato nulla, allora allargo i criteri di ricerca...
$query_auth = "SELECT * FROM parameters where ID like '%$ggc%' or name like '%$ggc%'";
$result = mysql_query($query_auth) or die("Query failed");
$numres = mysql_num_rows($result);
}

$row = mysql_fetch_row($result);

?>

<HTML>
<HEAD>
<TITLE>

<?php

// **** Caso in cui non trovo alcuna corrispondenza ****

if (!$numres) {

echo 'GGCs database: no clusters selected';
echo "</TITLE>\n";

echo "<meta name=\"Author\" content=\"Marco Castellani\">\n";
echo "<meta name=\"Keywords\" content=\"astronomy, Milky Way, globular clusters\">\n";
echo "</HEAD>\n";
echo "<BODY background=\"backgr2.jpg\" TEXT=\"#0000FF\" LINK=\"#0000FF\" VLINK=\"#A020F0\" ALINK=\"#FF0000\">\n";
include 'inte2.php';

echo '<h1>','<i>Your query: </i>',$ggc,'</h1>';
echo "\n";

echo "<h2>Sorry, no matches available for your query!</h2>\n";
echo '<p><a href="index.php">Go back to the main page</a></p>';

include 'coda.html';
echo '</body></html>';
exit;
}

// **** Caso in cui trovo piu' di una corrispondenza ****

if ($numres > 1) {

echo 'GGCs database: more than one cluster selected';
echo "</TITLE>\n";

echo "<meta name=\"Author\" content=\"Marco Castellani\">\n";
echo "<meta name=\"Keywords\" content=\"astronomy, Milky Way, globular clusters\">\n";
echo "</HEAD>\n";
echo "<BODY background=\"backgr2.jpg\" TEXT=\"#0000FF\" LINK=\"#0000FF\" VLINK=\"#A020F0\" ALINK=\"#FF0000\">\n";
include 'inte2.php';

echo '<h1>','<i>Your query: "',$ggc,'"</i></h1>';
echo "\n";

   print "<h2>The following $numres clusters match your query. Please select one.</h2><p>\n";
   print "<table border=1>\n";

   print "\t<tr>\n";
   print "\t\t<td>"."<a href=\"cluster_4.php?ggc=".urlencode($row[0])."\">".$row[0]."</a></td>\n";
   print "\t\t<td><i>".$row[1]."</i></td>\n";
   print "\t</tr>\n";

  while ($line = mysql_fetch_row($result)) {

   print "\t<tr>\n";
   print "\t\t<td>"."<a href=\"cluster_4.php?ggc=".urlencode($line[0])."\">".$line[0]."</a></td>\n";
   print "\t\t<td><i>".$line[1]."</i></td>\n";
   print "\t</tr>\n";

   }


print "</table>\n";

include 'coda.html';
echo '</body></html>';
exit;

}

// **************************************************************
// **** Caso in cui trovo esattamente una corrispondenza ********
// **************************************************************

// ------------ ESTRAZIONE DATI DA VARIE TABELLE -----------------------


// the name of the cluster
$mycluster=$row[0];

// INTERROGAZIONE TABELLA BLOG
$querylink_1 = "SELECT * FROM blog WHERE ID = '$row[0]'";
$blogres = mysql_query($querylink_1) or die("Query failed");
$b_row = mysql_fetch_row($blogres);


// INTERROGAZIONE TABELLA VARIABILI
$queryvar = "SELECT * FROM rrlyrae WHERE ID = '$row[0]'";
$varres = mysql_query($queryvar) or die("Query failed");
$rr_row = mysql_fetch_row($varres);

// INTERROGAZIONE TABELLA PARAMETRI ADDIZIONALI
// (1) Controllo solo se ci sono parametri per questo ammasso...
$qnewpar = "SELECT * FROM newpar WHERE cluster = '$row[0]'";
$mnewpar = mysql_query($qnewpar) or die ("Problems with queries in table newpar");
$rnewpar = mysql_num_rows($mnewpar);

// INTERROGAZIONE TABELLA LOCALFILES
$queryloc = "SELECT * FROM localfiles WHERE cluster='$row[0]'";
$cercaloc = mysql_query($queryloc) or die ("Problems with queries in table localfiles");
$rowloc = mysql_fetch_row($cercaloc);
$numerloc = mysql_num_rows($cercaloc);

// ESTRAGGO l'articolo per il plot del CMD:
// il piu' recente articolo nel database che abbia il campo CMD non vuoto

$querycmdiagr="SELECT biblioclusters.*  FROM biblioclusters,bibliotags
WHERE
bibliotags.tag='$row[0]'
and biblioclusters.ID=bibliotags.paper
and biblioclusters.cmdiagrams!=''
ORDER BY annoarti
DESC
LIMIT 1";


$querycmdiagr2 = mysql_query($querycmdiagr) or die("CMD query failed");
$rowcmd = mysql_fetch_row($querycmdiagr2);
// $rownumb = mysql_num_rows($querycmdiagr2);


// INFO ABOUT TUTORS FOR A GIVEN CLUSTER

$adopt = "SELECT user.name,user.surname,user.ID from user,tutors where user.ID=tutors.person
and cluster = '$row[0]'";
$q_adopt= mysql_query($adopt) or die ("Problems with queries in user,tutors");
$n_adopt = mysql_num_rows($q_adopt);

// ----------------------------------------------------------------------


echo 'GGCs database: globular cluster ',$mycluster;
echo "</TITLE>\n";

// echo '<link rel="alternate" type="application/rss+xml" title="'.$row[0].' tag feed" href="http://wordpress.com/tag/'.$b_row[2].'/feed/">';

?>

<meta name="Author" content="Marco Castellani">
<meta name="Keywords" content="astronomy, Milky Way, globular clusters">

<style type="text/css">		
	.testoverde {
		font-family:"Book Antiqua";
		font-style: italic;
		color:green;
		text-align:justify;
		}
</style>

</HEAD>

<BODY background="backgr2.jpg" TEXT="#0000FF" LINK="#0000FF" VLINK="#A020F0" ALINK="#FF0000">

<!-- Facebook Javascript SDK -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({appId: 'your app id', status: true, cookie: true,
             xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script>
<!-- Closing FB Javascript SDK -->


<?php
include 'inte2.php';
include 'columns.php';

echo '<table width="100%" border=0><tr><td width="55%">';
echo '<h2><i>Selected: ',$ggc,'</h2>';
echo '</td><td>';
?>

<td align="center" width="45%">
<FORM METHOD=GET ACTION="findcl.php">
<FONT FACE="Comic Sans MS" size="+1">
<b><i>New Search:</i></b>
<INPUT TYPE="text" NAME="ggc" SIZE="12">
<INPUT TYPE="submit" VALUE="Send">
<INPUT TYPE="reset" VALUE="Cancel">
</FORM>
</td>
</table>


<!-- stampo i risultati su tabella -->

<table border=1 width=100%>
<tr><td width=60%>

<!-- inizio tabella sinistra -->
<table border width=100%>

<tr>
<td colspan=2 align=CENTER BGCOLOR="#99CCFF"><b>
Parameters
</td>
</tr>

<td colspan=2 align=CENTER BGCOLOR="#66FFCC"><i>
<a href="param1.php">Positional Parameters</a></i>
</td>

<?php

$i = 0;

while($i <= 35) {

// stampo intestazioni generali in punti opportuni
if ($i==11)
  {
echo '<tr>';
echo '<td colspan=2 align=CENTER BGCOLOR="#66FFCC"><i>';
echo '<a href="param2.php">Photometric Parameters</a> </i>';
echo '</td></tr>';
  }

if ($i==23)
  {
echo '<tr>';
echo '<td colspan=2 align=CENTER BGCOLOR="#66FFCC"><i>';
echo '<a href="param3.php">Structural Parameters </i>';
echo '</td></tr>';
  }

if ($row[$i]!="")
  {
echo '<tr>';

// stampo nome parametro
echo '<td><b>';
if ($i<2){
echo $col[$i];
} else {
echo '<a href="details.php?ggc='.$row[0].'&param='.$i.'">'.$col[$i].'</a>';
}
echo '</b>';

// NOTIFICA VISIVA DELLA PRESENZA DI ALTRI VALORI DEL PARAMETRO

if ($rnewpar) {

$npsel = "SELECT ID FROM newpar WHERE cluster like '$row[0]' and param = $i";
$q_npsel = mysql_query($npsel) or die ("Still problems with queries in table newpar");
$r_npsel = mysql_num_rows($q_npsel);

if  ($r_npsel)
  {
   echo "<img src=\"graph/redball.gif\">";
  }

}
// fine NOTIFICA VISIVA

echo '</td>';

// stampo valore parametro
echo '<td>';
echo $row[$i];
echo '</td>';

echo "</tr>\n";
  }

$i++;

  }

// ****************************************************
// Interrogazioni DB per rimandi a bibliografia estesa
// ****************************************************

// Definisco una query tale da individuare tutte le righe dentro "biblioclusters"
// per le quali il campo "ID" corrisponda al valore di "paper" dentro "bibliotags"
// dove il campo "bibliotags.tag" è il nome dell'ammasso...
// = trovo tutti gli articoli di un dato ammasso

$querybiblio = "select biblioclusters.* from biblioclusters,bibliotags 
where bibliotags.tag='$mycluster' 
and biblioclusters.ID=bibliotags.paper ORDER BY annoarti DESC, mdate DESC";

$lresb = mysql_query($querybiblio) or die("Query \"querybiblio\" failed, please try again later");
$lresb2 = mysql_query($querybiblio) or die("Query \"querybiblio\" failed, please try again later");
$lresb_1 = mysql_num_rows($lresb);  // number of paper related to $mycluster


// bibliography (if available)

if  ($lresb_1) // if there are papers to be displayed
  {
echo '<tr>';
echo '<td colspan=2 align=CENTER BGCOLOR="#66FFCC">';
echo '<i>Color-magnitude diagrams</i>';
echo '</td>';
echo "</tr>\n";


// ****************************************************

// DETTAGLIO ARTICOLO CMD (BOX LEFT)

// stampo "author"...
echo '<tr>';
echo '<td><b>';
echo '<font face="Comic Sans MS">';
echo $col[36];
echo '</font>';
echo '</b></td>';

echo '<td>';
// autore...
echo '<font face="Comic Sans MS">';
echo  $rowcmd[0];
echo '</font>';
echo '</td>';
echo '</tr>';

echo '<font>';
echo '<tr>';
echo '<td><b>';
// stampo "titolo"...
echo '<font face="Comic Sans MS">';
echo $col[37];
echo '</font>';
echo '</b></td>';

// titolo
echo '<td>';
echo '<a href=';
// link ADS...
echo $rowcmd[3];
echo ">";
echo '<font face="Comic Sans MS">';
echo $rowcmd[1];
echo '</font>';
echo '</a>';

echo '</td>';
echo "</tr>\n";

echo '<tr>';
echo '<td><b>';
// stampo "journal"...
echo '<font face="Comic Sans MS">';
echo $col[38];
echo '</font>';
echo '</b></td>';
echo '<td>';
// rivista...
echo '<font face="Comic Sans MS">';
echo $rowcmd[2];
echo '</font>';
echo '</td>';
echo "</tr>\n";
  }

// ***** CM diagram of the cluster *************

echo "<tr>\n";
echo '<td>';
echo '<font face="Comic Sans MS">';
echo '<a href="http://en.wikipedia.org/wiki/HR_diagram">';
echo 'CM diagram';
echo '</a></font>';
echo '</td>';

// apro l'elemento di tabella che deve contenere l'immagine del CMD...

echo '<td>';
$ggc_temp=$rowcmd[7]; // campo "cmdiagrams" di "biblioclusters"

// provo prima ad aprire direttamente l'immagine come link...

$ggc_image=$row[38];		// campo "linkimage" di "parameters"
// $ggc_image=$rowcmd[9]; // campo "linkima" di "biblioclusters"
@ $fpweb = fopen ($ggc_image, "r");

// Loading ima from external link (if possible) ...
if($fpweb){
   echo '<img src='.$ggc_image.' width=500>';
   	} else {
   $ggcpre="ima/"; // cartella immagini in locale

$ggc_new=$ggcpre.$ggc_temp;				// nothing to add
$ggc_image=$ggcpre.$ggc_temp.".jpg";	// adding jpg
$ggc_png=$ggcpre.$ggc_temp.".png";		// adding png
$ggc_gif=$ggcpre.$ggc_temp.".gif";		// adding gif

@ $fp_new = fopen ($ggc_new, "r");		// simple
@ $fp = fopen ($ggc_image, "r");		// jpg
@ $fp1 = fopen ($ggc_png, "r");			// png
@ $fp_gif = fopen ($ggc_gif, "r");		// gif

// ...in lavorazione...

if($fp1) 
   {								
   echo '<img src='.$ggc_png.'>';
   } 
   elseif ($fp_gif)
   {
    echo '<img src='.$ggc_gif.' width=500>'; 
   }  
   elseif ($fp_new)
   {
   echo '<img src='.$ggc_new.'>';
   }
   elseif ($fp)
   {
   echo '<img src='.$ggc_image.' width=500>';
   }
   else
   {
   echo '<center><img src='.'wkonit1.gif'.'></center>';
   }   	 

}

// ******* Fine trattazione CMD dell'ammasso ***************

echo '</td>';
echo "</tr>\n";

// ***** DSS image of the cluster *************************

// se presenti, uso le immagini sulla macchina in locale...

$ggc_dss="ima/dss_".$ggc_temp.".gif";
$ggc_dss_jpg="ima/dss_".$ggc_temp.".jpg";
$ggc_dss_simple="ima/dss_".$ggc_temp;

// definisco i parametri per scaricare direttamente da DSS...

$dss_pref='http://archive.stsci.edu/cgi-bin/dss_search?';
$dss_post='&e=J2000&h=8&w=8&f=GIF';
$dss_large='&e=J2000&h=15&w=15&f=GIF';

$ggc_dss_link="\"".$dss_pref.$row[39].$dss_post."\"";
$ggc_dss_link2="\"".$dss_pref.$row[39].$dss_large."\"";

// ****** CREDITS *****************************************

if ($row[37]!="")
{
echo '<tr><td>';
echo '<font face="Comic Sans MS">';
echo '<i>Credits</i>';
echo '</font>';
echo '</td>';
echo '<td><i>';

echo $row[37];
echo "</i></td></tr>\n";
};

?>

</table>

</td>

<!-- #################################### -->
<!--       INIZIO SEZIONE DI DESTRA       -->
<!-- #################################### -->

<td valign="top">
<table border=1 width=100%>

<?php

if($b_row[4]){

echo '<tr><td align=CENTER BGCOLOR="#99CCFF">';
echo '<b>Description of '; 
echo $b_row[0];	// name of the cluster				
echo "</td></tr>\n";
echo '<tr><td class="testoverde"><i>';
// echo '<p class="testoverde"><div align="justify"><font size="3">'.$b_row[4]."</font></div>\n";
echo '<p>'.$b_row[4]."</p>\n";

echo '</i><p>';
echo '<i>Source: <a href="'.$b_row[6].'">'.$b_row[5].'</a>';
echo ' | <a href="feedbackform.php">Notify inaccuracies</a></i>';
echo "</td></tr>\n";
   }


// ************ open DSS **************************************

echo "<!-- DSS IMAGE -->\n";
echo '<tr>';

echo '<td align="center" BGCOLOR="#99CCFF">';
echo '<font face="Comic Sans MS"><b>';
echo 'Image';
echo "</font></b></td></tr>\n";
echo '<tr><td align="center">';

@ $fp = fopen ($ggc_dss, "r");
@ $fp_jpg = fopen ($ggc_dss_jpg, "r");
@ $fp_simple = fopen ($ggc_dss_simple, "r");

// se esiste l'immagine in jpg, uso questa...

if ($fp_jpg) 
	{
	 echo  '<img src='.$ggc_dss_jpg.'>';
	}
	elseif ($fp_simple)
	{
	echo '<img src='.$ggc_dss_simple.'>';
	}
	elseif ($fp)
	{
	echo  '<img src='.$ggc_dss.'>';
	}
	elseif ($row[39]!="")
	{
	echo '<a href='.$ggc_dss_link2.'><img src='.$ggc_dss_link.' border=0></a>';
	}
	else
	{
	echo '<center><img src='.'wkonit1.gif'.'></center>';
    }

/*
if ($fp_jpg) {
   echo  '<img src='.$ggc_dss_jpg.'>';
  } else {

if ($fp_simple) {
   echo '<img src='.$ggc_dss_simple.'>';
  } else {

// provo con l'immagine in GIF senno' rinuncio...

if ($fp) {
     echo  '<img src='.$ggc_dss.'>';
    } elseif ($row[44]!="") {
    echo '<a href='.$ggc_dss_link2.'>';
    echo '<img src='.$ggc_dss_link.' border=0></a>';
    } else {
    echo '<center><img src='.'wkonit1.gif'.'></center>';
  };
 };
};
*/


echo "\n";
echo '<p><i>Image of the cluster from the <a href="http://en.wikipedia.org/wiki/Digitized_Sky_Survey">Digital Sky Survey</a></i>';
echo '</td>';
echo "</tr>\n";

// ********** close DSS ************************************

?>

<tr>
<td align=CENTER BGCOLOR="#99CCFF"><b>
Other Resources
<br> for
<?php echo $b_row[0]; ?>
</td></tr>

<td align="center">

<?php

// [1] GLOBULAR CLUSTER BLOG

if ($b_row[2])
{
echo  "<a href=\"http://globularclusters.wordpress.com/tag/".$b_row[2]."\">";
echo "<i>Globular Clusters Blog</i></a>";
echo "</td>";
echo "</tr>";
} ;

?>

<tr><td align="center">
<?php

// [2] ADS OBJECT SEARCH
// composizione della URL per la ricerca...
$adspre='http://cdsads.u-strasbg.fr/cgi-bin/nph-abs_connect?';
$adspre.='db_key=AST&qform=AST&sim_query=YES&ned_query=YES&aut_logic=OR&obj_logic=OR&author=';
$adspre.='&nr_to_return=20';
$adspre.='&object=';
echo "<a href=".$adspre.urlencode($b_row[0]).">";
echo "ADS \"Object Search\" </a>";

?>


<!-- [3] catalogo variabili C. Clement -->
<?php
if ($rr_row[5])
{
echo '<tr><td align=center>';
echo "<a href=\"http://www.astro.utoronto.ca/~cclement/cat/".$rr_row[5]."\">";
echo "<i>C. Clement variables data</i></a>";
echo "</td></tr>";
} ;

// [4] link a SEDS data

echo '<tr><td align=center>';
echo $row[36];
echo "</td></tr>";

// [5] link a Google Sky
if  ($b_row[3])
{
echo '<tr><td align=center>';
echo "<img src=\"new_anim.gif\">";
echo "<a href=\"http://www.google.com/sky/#".$b_row[3]."\">";
echo "<i>Google Sky</i></a>";
echo "</td></tr>";
} ;

//<tr>
//<td align=center>
//echo $row[41];
//echo '</td></tr>';

echo "<tr bgcolor=\"#CCFFFF\"><td colspan=2 align=\"center\">";
echo "<a href=\"linkscluster.php?ggc=".urlencode($row[0])."\">Web Links for this cluster</a>";

$querylink = "SELECT * FROM linkspage WHERE ID = '$row[0]'";
$lres = mysql_query($querylink) or die("Query failed");

$querylink2 = "SELECT * FROM infousers WHERE ID ='$row[0]'";
$lres2 = mysql_query($querylink2) or die("Query failed");

$lres_1 = mysql_num_rows($lres);
$lres_2 = mysql_num_rows($lres2);

echo '<br>';
echo " (";

echo $lres_1;
if ($lres_1==1) {
    echo ' link in the database at the moment)';
} else {
    echo ' links in the database at the moment)';
}     ;

echo "</td></tr>";

echo "<tr bgcolor=\"#CCFFFF\"><td colspan=2 align=\"center\">";
echo "<a href=\"comments.php?ggc=".urlencode($row[0])."\">Users comments for this cluster</a>";


echo '<br>';
echo " (";

echo $lres_2;
if ($lres_2==1) {
    echo ' comment in the database at the moment)';
} else {
    echo ' comments in the database at the moment)';
}     ;


// Articoli piu' recenti in bibliografia...

echo "</td></tr>";
echo "<tr><td align=center BGCOLOR=\"#99CCFF\"><b><font size=\"+1\">Selected biblio </font></b>";
echo '<img src="ima/other/stack_of_books.png" align=ABSMIDDLE width=60>'."</td></tr>";

$iiref=0;

// estraggo le linee pertinenti di bibliografia, una alla volta...
while ($lineb1 = mysql_fetch_row($lresb2)) {
       $paperid = $lineb1[4];

// DA SISTEMARE QUI -- DA SISTEMARE QUI --
// Parte dove si cercano gli altri TAGS degli articoli selezionati per il dato ammasso...
//        while ($lineb = mysql_fetch_row($lresb))
//        {
//          $paperid = $lineb[4];
	 $querytags = "select tag from bibliotags where paper='$paperid'";
         $lqtags = mysql_query($querytags) or die ("Query \"querytags\" failed");
 	 $lqtagsn = mysql_num_rows($lqtags);
//        }
// FINE PARTE DA SISTEMARE -- FINE PARTE DA SISTEMARE --



if ($iiref < 3) // solo i primi tre articoli in questa pagina...!
{
$iiref++;

echo '<tr bgcolor=\"#CCFFFF\"><td align=center><i>';
echo 'Paper n. '.$iiref;
echo "</i></td></tr>";

echo "<tr><td><i>\n";
echo $lineb1[0]; // autori
echo '</i><br><a href=';
echo $lineb1[3]; // URL del titolo...
echo "><b>";

echo $lineb1[1]; // titolo del paper...

echo "</a></b><br>";
if ($lineb1[6] != 0) {
   echo '<b>'.$lineb1[6]."</b>, "; // anno (se presente)
   }
echo $lineb1[2]; // rivista
// echo '</td></tr>';

//  DISPLAY TAGS! /////////////////////////////////
// echo '<tr>';
// echo '<td><b>Addictional info ';

echo '<br><i><font size="-1">(';
// Stampo la lista dei tags per questo articolo...
while ($altrotag = mysql_fetch_row($lqtags))
  {
  echo $altrotag[0]." ";
  }
echo ')</font></i>';
//   echo $lqtagsn;
//   echo '</b></td></tr>';
///////////////////////////////////////////////////
echo '</td></tr>';

}
}
//}
echo "<tr>";
echo '<td colspan=2 align=CENTER BGCOLOR="#99CCFF"><b>';

if ($lresb_1==0) {
print "</b>No paper in the GGC-DB yet!";
print "<br>You can try on ";
echo "<a href=".$adspre.urlencode($b_row[0]).">";
echo "ADS </a>";

} else {
print "<i><a href=\"biblio_2.php?ggc=$row[0]\">See all items</a>\n";
echo '(';
echo $lresb_1;
if ($lresb_1==1) {
    echo ' paper)';
} else {
    echo ' papers)';
}
}     ;
echo ' :: <a href="https://docs.google.com/spreadsheet/viewform?formkey=dDgtNDRwX0N3OWd2a1F5aGRLSkFaS2c6MQ#gid=0">Submit a paper</a>' ;

echo "</td><tr>";

// SOUNDCLUSTERS 

echo '<p>';

if ($numerloc==2) {	// video

echo '<center>';
echo '<iframe width="420" height="315" src="https://www.youtube.com/embed/QM-JbYAUy4g" frameborder="0" allowfullscreen>';
echo '</iframe>';
echo '</center>';

} else if ($numerloc==1) {	// audio

echo '<tr><td><img src="new_anim.gif">Listen to <i>the sound</i> of this cluster (<a href="soundclusters.php">info</a>)<br>';
$sourcesound="SoundClusters"."/$rowloc[3]";
//echo "$rowloc[3]"."<br>";
// echo "$sourcesound";
echo '<audio controls>';
//echo '<source src="SoundClusters/NGC0104.wav" type="audio/wav">';
echo "<source src=\"$sourcesound\" type=\"audio/wav\">";
echo 'Your browser does not support the audio element.';
echo '</audio>';

}

?>

</p>

<!-- DISPLAYING TUTORS -->
<tr><td><b>Tutor(s)</b> for this cluster:
<?php
if(!$n_adopt) 
  {
    echo '<i>Still nobody, <a href="adoption.php">you could be the first!</a></i>';
  } 
    else
  {
while ($r_adopt = mysql_fetch_row($q_adopt))
{
echo'<br>';
//echo $r_adopt[0].' '.$r_adopt[1];
echo '<a href="user.php?ID='.$r_adopt[2].'">'.$r_adopt[0].' '.$r_adopt[1].'</a>';
}
echo'<p>(See <a href="adoption.php">how to adopt</a> a cluster</a>)';

}
?>
</td></tr>
</table>

</td></tr>
</table>
<p>

<div class="testoverde">

<?php
 echo "<p>Query processed at ";
 echo date("H:i, jS F");
 echo "<br>";

// Contatore degli accessi

$query_n= "SELECT * from accesscount WHERE ID = '$row[0]'";
$lres_n = mysql_query($query_n) or die("Query failed");

// Controllo aggiornamento pagina

$n_cluster=mysql_fetch_row($lres_n);

$nn_cluster=$n_cluster[2];
$cluster_update=$n_cluster[3];


$n_cluster1 = $nn_cluster + 1;

$query_n2 = "UPDATE accesscount SET n_vis = '$n_cluster1' WHERE ID = '$row[0]' LIMIT 1";
$lltest=mysql_query($query_n2);
echo "This page has been visited ";
echo $n_cluster1;
echo " times, since Oct 25 2004<br>";
if ($cluster_update!=="0000-00-00")
{
echo "<p><i><img src=\"new_anim.gif\">";
echo "Page updated: ";
echo $cluster_update;
echo "</i>";
};
?>
</div>
<br>
<fb:like></fb:like>

<g:plusone annotation="inline"></g:plusone>

<?php
include 'plus.html';
include 'coda.html';
?>

<script src="http://gclusters.uservoice.com/pages/general/widgets/tab.js?alignment=right&amp;color=00BCBA" type="text/javascript"></script>

</body>
</html>
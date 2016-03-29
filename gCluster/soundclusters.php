<doctype html>
<html lang="en">
<head><title>GGCs database: The Sound of Clusters</title></head>
<body background="static/images/backgr2.jpg" vlink="#3333CC">

<?php include 'inte2.php'?>
<h3><i>The Sound of Clusters</i> (v. 0.1)</h3>
<i>i.e., how to realize great (?) contemporary music with a little help from good old globular clusters...</i>
<p>
In this experiment, we tried to find a way to obtain a sort of <i>sound</i> for each globular cluster. 
For the generation of sound files  we used the 
<a href="https://en.wikipedia.org/wiki/Interactive_Data_Language">IDL package</a>, 
that it is able to create <a href="https://en.wikipedia.org/wiki/WAV">WAV files</a> with given values.
</p><p>
To obtain a sort of STEREO effect, we worked separately on two channels (left and right).
</p><p>
The procedure adopted run as following. We crossed each cluster along the X coordinate,
 which also interesecate the center of the cluster. This X cordinate is put in relation with time, since  
 the cluster is crossed at a constant rate. 
</p><p>
Note that, in the presented realization, only the most luminous 3000 stars are taken into account.
</p>
<img src="graph/audio.jpg"	>
<p>

In crossing a given cluster, each star generates a sound (detailed as follow), different for each channel. 
Sound belonging to each stars is then summed to compose a complex pattern, 
which is the one you can hear clicking on the button.
</p>

<p>Here is <i>the sound</i> of NGC 104<i> 
(You can access other file sounds, when available, from the pages of individual clusters 
or <a href="soundcatalogue.php">via this page</a>)</i></p>
<audio controls>
  <source src="SoundClusters/NGC0104.wav" type="audio/wav">
Your browser does not support the audio element.
</audio>

<p>
Here is <i>a video animation</i> for what concerns NGC 6934</p>
<p>
<iframe width="420" height="315" src="https://www.youtube.com/embed/WU3T1zwVJHA" frameborder="0" allowfullscreen></iframe>
</p>


<pre>
<b>VIDEO</b>

- Each sphere rapresents a cluster star, where...
- POSITION is computed according to the catalogues (see below)
- DIMENSION is proportional to absolute magnitude (largest stars are the most luminous)
- COLOUR is related to the effective temperature (via a specific <i>colour table</i>)

<b>AUDIO - FIRST CHANNEL (LEFT)</b>

- TIMBRE is given by a series of overlapped cosines  
- FREQUENCY is a parameter who depends from (V-I)_vega
- INTENSITY is a combination of V MAGNITUDE and Y COORDINATE 
- DURATION is a function of MAGNITUDE

<b>AUDIO - SECOND CHANNEL (RIGHT)</b>

- TIMBRE is a simpe cosine 
- FREQUENCY is a parameter depending on (V-I)_ground. (Note that it is almost equal to the frequency of first channel, but not completely equal - in order to allow beats)
- INTENSITY is a function of I MAGNITUDE and Y COORDINATE (<i>distance</i>)
- DURATION is a function of MAGNITUDE

</pre>
To generate these sounds we have used the data included in the serie of works by Sarajedini et al, 
<a href="http://adsabs.harvard.edu/abs/2007AJ....133.1658S">The ACS Survey of Galactic Globular Clusters.</a>

</p><p>
In passing, one may be interested by the simple evidence that this automatic 
procedure seems to generate sound patterns which are (broadly speaking) 
<i>not too distant</i> from real contemporary music... 
<p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/-iVYu5lyX5M" frameborder="0" allowfullscreen>
</iframe>
<p>
<b>Ivan Ferraro</b>, original concept and realization<br>
<b>Marco Castellani</b>, collaboration, adaptation for Internet 
</p>

<?php include 'html/coda.html' ?>

</body>
</html>

<html>

<head>
 <title>GGCs database: search page</title>
</head>

<body background="http://www.mporzio.astro.it/images/backgr2.jpg" text="#000000">


<?php 
include 'inte2.php';
?>





<h2>Perform a simple search....</h2>

<p>

<FORM METHOD=GET ACTION="ggc_sel.php">

<table>
  <tr>
    <td> 
    


<select name="pulldown">
  <option value="1">Gal. longitude</option>
  <option value="2">Gal. latitude</option>
  <option value="3">R_sun</option>
  <option value="4">R_gc</option>
  <option value="5">X</option>
  <option value="6">Y</option>
  <option value="7">Z</option>
  <option value="8">Reddening</option>
  <option value="9">HB V mag</option>
  <option value="10">Visual distance modulus</option>
  <option value="11">[Fe/H]</option>
  <option value="12">Eliocentric vel.</option>
  <option value="13">Core radius</option>
  <option value="14">Half-mass radius</option>
  <option value="15">Tidal radius</option>
  <option value="16">Central surface brightness</option>
  <option value="17">Central lum. density</option>
</select>
     
    
</td>
    
<td>  
    
<select name="pulldown2">
  <option value="1">less than</option>
  <option value="2">equal to</option>
  <option value="3">greater than</option>
</select>
    
    
 </td>
<td>
    
    
<INPUT TYPE="text" NAME="value_1" SIZE="8">    
    
    
</td>
</tr>

</table>

<p>
<input type="radio" name="radios" value="radio1" checked>and</b>
<input type="radio" name="radios" value="radio2" checked>or</b><br>
<p>


<!-- seconda tabella -->

<table>

  <tr>

    <td> 
    

<select name="pulldown3">
  <option value="1">Gal. longitude</option>
  <option value="2">Gal. latitude</option>
  <option value="3">R_sun</option>
  <option value="4">R_gc</option>
  <option value="5">X</option>
  <option value="6">Y</option>
  <option value="7">Z</option>
  <option value="8">Reddening</option>
  <option value="9">HB V mag</option>
  <option value="10">Visual distance modulus</option>
  <option value="11">[Fe/H]</option>
  <option value="12">Eliocentric vel.</option>
  <option value="13">Core radius</option>
  <option value="14">Half-mass radius</option>
  <option value="15">Tidal radius</option>
  <option value="16">Centra surface brightness</option>
  <option value="17">Central lum. density</option>
</select>

<!-- input type="Submit" value="Take a Look" align="meddle"-->


    
     </td>
    
    <td>  
    

<select name="pulldown4">
  <option value="1">less than</option>
  <option value="2">equal to</option>
  <option value="3">greater than</option>
</select>

    
    
    
    
    
    
    </td>
    
    <td>
    
    
    
    
    
<INPUT TYPE="text" NAME="value_2" SIZE="8">    
    
    
    
      </td>


  </tr>
</table>

<p>
<INPUT TYPE="submit" VALUE="Send"> 
<INPUT TYPE="reset" VALUE="Cancel">
<p>

</form>
<hr>

<?php include 'html/coda.html' ?>

</body>
</html>

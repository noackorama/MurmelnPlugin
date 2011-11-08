<?php
class MurmelnPlugin extends AbstractStudIPStandardPlugin {
	
	/**
	 * 
	 */
	function MurmelnPlugin(){
		AbstractStudIPStandardPlugin::AbstractStudIPStandardPlugin();
		$this->setPluginiconname('images/icon.gif');
		$this->setshowninoverview(false);
		$tab = new PluginNavigation();
		$tab->setDisplayname('Murmeln');
		$this->setNavigation($tab); 
	}
	
	
	

	function show($args){
		$pluginrelativepath = $this->getPluginUrl() ;
		echo '</td></tr></table></td></tr></table>';
		include 'sajax_functions.php';
		echo '<script language="Javascript">';
		sajax_show_javascript();
		include 'script.js.php';
		echo '</script>';
		echo<<<endHTML
<style type="text/css">
<!--
a.link {font-family:Arial;font-size:8pt;color:#FF0000;}
a:hover {color:#000000;}
td.text {font-family:Arial;font-size:8pt;}
select {font-size:8pt;}
span.logo {font-size:38pt;font-family:monospace;color:#FFFFFF;font-size:bold}
#info {position:absolute;left:185px;top:200px;visibility:hidden}
#pinfo {position:absolute;left:128px;top:220px;visibility:hidden}
#halloffame {position:absolute;left:185px;top:200px;visibility:hidden}
-->
</style>
<form name="hilfeform">
<table border="0" cellpadding="0" cellspacing="1">
<tr>
<td width="75" bgcolor="#D0D0D0" align="center" class="text">Version 1.1</td>
<td width="100" bgcolor="#A0A0A0">&nbsp;</td>
<td width="400" bgcolor="#D0D0D0">

 <table cellpadding="3"><tr><td class="text" id="anzeige">Zum Spielstart auf Neustart klicken</td></tr></table>

</td>
<td width="150" bgcolor="#A0A0A0">&nbsp;</td>
</tr>

<tr>
<td rowspan="2" align="center" valign="top"><span class="logo" id="logo0">M</span><br><span class="logo" id="logo1">U</span><br><span class="logo" id="logo2">R</span><br><span class="logo" id="logo3">M</span><br><span class="logo" id="logo4">E</span><br><span class="logo" id="logo5">L</span><br><span class="logo" id="logo6">N</span></td>
<td valign="top">

 <table width="100" cellpadding="0" cellspacing="0">
 <tr>
 <td bgcolor="#D0D0D0" class="text">&nbsp;<br>
 <table cellpadding="5" cellspacing="0">
 <tr>
 <td class="text"><a href="javascript:neustart()" class="link" id="link0">Neustart</a><br><br><a href="javascript:show_info()" class="link" id="link1">Info</a><br><br>
 <a href="javascript:show_halloffame()" class="link" id="link2">Hall of Fame</a>
 </td>
 </tr>
 </table>
 &nbsp;</td>
 </tr>
 </table>

</td>
<td align="center" bgcolor="#A0A0A0">
 <img src="$pluginrelativepath/images/trans.gif" width="10" height="5" border="0" alt="">
 <br>
 <table border="0" cellpadding="0" cellspacing="1" bgcolor="#A0A0A0">
 <tr bgcolor="#000000">
 <td id="zz0"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_0_0" onclick="klick(0,0)"></td>
 <td id="zz1"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_0_1" onclick="klick(0,1)"></td>
 <td id="zz2"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_0_2" onclick="klick(0,2)"></td>
 <td id="zz3"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_0_3" onclick="klick(0,3)"></td>
 <td id="zz4"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_0_4" onclick="klick(0,4)"></td>
 <td id="zz5"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_0_5" onclick="klick(0,5)"></td>
 <td id="zz6"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_0_6" onclick="klick(0,6)"></td>
 </tr>

 <tr bgcolor="#000000">
 <td id="zz7"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_1_0" onclick="klick(1,0)"></td>
 <td id="zz8"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_1_1" onclick="klick(1,1)"></td>
 <td id="zz9"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_1_2" onclick="klick(1,2)"></td>
 <td id="zz10"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_1_3" onclick="klick(1,3)"></td>
 <td id="zz11"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_1_4" onclick="klick(1,4)"></td>
 <td id="zz12"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_1_5" onclick="klick(1,5)"></td>
 <td id="zz13"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_1_6" onclick="klick(1,6)"></td>
 </tr>

 <tr bgcolor="#000000">
 <td id="zz14"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_2_0" onclick="klick(2,0)"></td>
 <td id="zz15"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_2_1" onclick="klick(2,1)"></td>
 <td id="zz16"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_2_2" onclick="klick(2,2)"></td>
 <td id="zz17"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_2_3" onclick="klick(2,3)"></td>
 <td id="zz18"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_2_4" onclick="klick(2,4)"></td>
 <td id="zz19"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_2_5" onclick="klick(2,5)"></td>
 <td id="zz20"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_2_6" onclick="klick(2,6)"></td>
 </tr>

 <tr bgcolor="#000000">
 <td id="zz21"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_3_0" onclick="klick(3,0)"></td>
 <td id="zz22"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_3_1" onclick="klick(3,1)"></td>
 <td id="zz23"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_3_2" onclick="klick(3,2)"></td>
 <td id="zz24"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_3_3" onclick="klick(3,3)"></td>
 <td id="zz25"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_3_4" onclick="klick(3,4)"></td>
 <td id="zz26"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_3_5" onclick="klick(3,5)"></td>
 <td id="zz27"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_3_6" onclick="klick(3,6)"></td>
 </tr>

 <tr bgcolor="#000000">
 <td id="zz28"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_4_0" onclick="klick(4,0)"></td>
 <td id="zz29"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_4_1" onclick="klick(4,1)"></td>
 <td id="zz30"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_4_2" onclick="klick(4,2)"></td>
 <td id="zz31"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_4_3" onclick="klick(4,3)"></td>
 <td id="zz32"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_4_4" onclick="klick(4,4)"></td>
 <td id="zz33"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_4_5" onclick="klick(4,5)"></td>
 <td id="zz34"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_4_6" onclick="klick(4,6)"></td>
 </tr>

 <tr bgcolor="#000000">
 <td id="zz35"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_5_0" onclick="klick(5,0)"></td>
 <td id="zz36"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_5_1" onclick="klick(5,1)"></td>
 <td id="zz37"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_5_2" onclick="klick(5,2)"></td>
 <td id="zz38"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_5_3" onclick="klick(5,3)"></td>
 <td id="zz39"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_5_4" onclick="klick(5,4)"></td>
 <td id="zz40"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_5_5" onclick="klick(5,5)"></td>
 <td id="zz41"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_5_6" onclick="klick(5,6)"></td>
 </tr>

 <tr bgcolor="#000000">
 <td id="zz42"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_6_0" onclick="klick(6,0)"></td>
 <td id="zz43"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_6_1" onclick="klick(6,1)"></td>
 <td id="zz44"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_6_2" onclick="klick(6,2)"></td>
 <td id="zz45"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_6_3" onclick="klick(6,3)"></td>
 <td id="zz46"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_6_4" onclick="klick(6,4)"></td>
 <td id="zz47"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_6_5" onclick="klick(6,5)"></td>
 <td id="zz48"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="feld_6_6" onclick="klick(6,6)"></td>
 </tr>
 </table>
 <img src="$pluginrelativepath/images/trans.gif" width="10" height="5" border="0" alt="">
</td>
<td valign="top">

 <table width="150" cellpadding="0" cellspacing="0">
 <tr>
 <td bgcolor="#D0D0D0" class="text">&nbsp;<br>
 <table width="100%" cellpadding="4" cellspacing="0">
 <tr>
 <td width="100%" class="text"><table width="100%" cellpadding="0" cellspacing="0"><tr><td width="40%" class="text">Highscore:</td><td width="60%"class="text" align="right"><span id="high">0</span>&nbsp;&nbsp;</td></tr></table></td>
 </tr>

 <tr>
 <td width="100%" class="text"><br>Punkte:</td>
 </tr>

 <tr>
 <td class="text" align="right"><span id="punkte" style="font-size:16pt;font-family:monospace">0</span>&nbsp;&nbsp;</td>
 </tr>

 <tr>
 <td class="text"><br>Auff&uuml;llen aus Richtung:</td>
 </tr>

 <tr>
 <td align="center"><img src="$pluginrelativepath/images/vonoben2.gif" width="25" height="25" border="0" alt="" name="dir_0" onclick="dir_change(0)"><img src="$pluginrelativepath/images/trans.gif" width="10" height="10" border="0" alt=""><img src="$pluginrelativepath/images/vonunten.gif" width="25" height="25" border="0" alt="" name="dir_1" onclick="dir_change(1)"><img src="$pluginrelativepath/images/trans.gif" width="10" height="10" border="0" alt=""><img src="$pluginrelativepath/images/vonlinks.gif" width="25" height="25" border="0" alt="" name="dir_2" onclick="dir_change(2)"><img src="$pluginrelativepath/images/trans.gif" width="10" height="10" border="0" alt=""><img src="$pluginrelativepath/images/vonrechts.gif" width="25" height="25" border="0" alt="" name="dir_3" onclick="dir_change(3)"><br><input type="Hidden" name="dir" value="0" size="" maxlength=""></td>
 </tr>

 <tr>
 <td width="100%" class="text"><br>Optional: Tauschen (<span id="tausch">0</span>)</td>
 </tr>

 <tr>
 <td class="text" align="center"><div id="tauschlink">&nbsp;</div></td>
 </tr>
 </table>

 <table width="100%" cellpadding="0" cellspacing="5">
 <tr>
 <td width="100%" class="text"><br>N&auml;chste Murmel:</td>
 </tr>

 <tr>
 <td align="center" bgcolor="#000000"><img src="$pluginrelativepath/images/trans.gif" width="50" height="50" border="0" alt="" name="nextbildname"></td>
 </tr>
 </table>
 </td>
 </tr>
 </table>
 <br>

</td>
</tr>

</table><br>


<div id="pinfo">
<table width="500" cellpadding="0" cellspacing="0">
<tr>
<td><img src="$pluginrelativepath/images/trans.gif" width="5" height="350" border="0" alt=""></td>
<td align="center"><span style="color:#FFFFFF;font-weight:bold;font-size:20pt;font-family:monospace;" id="pinfoanz">0</span></td>
<td><img src="$pluginrelativepath/images/trans.gif" width="5" height="10" border="0" alt=""></td>
</tr>
</table>
</div>

<div id="info">
<table cellpadding="4" cellspacing="0" bgcolor="#A0A0A0">
<tr>
<td width="10"><img src="$pluginrelativepath/images/trans.gif" width="10" height="55" border="0" alt=""></td>
<td width="362" valign="top">

  <table cellpading="0" cellspacing="0">
  <tr>
  <td width="170" class="text" valign="top"><br><b>Murmeln - Info</b></td>
  <td width="170" class="text" align="right"><br><a class="link" href="javascript:close_info()">Info schlie&szlig;en</a></td>
  </tr>

  <tr>
  <td class="text" colspan="2">&nbsp;</td>
  </tr>

  <tr>
  <td class="text" colspan="2"><b>Steuerung:</b></td>
  </tr>

  <tr>
  <td class="text" colspan="2">
  <ul>
  <li>Klick auf ein Element l&ouml;scht dieses.</li>
  <li>Zum Schlie&szlig;en der entstandenen L&uuml;cke wird ein neues Element aus der Richtung eingef&uuml;gt, die (rechts vom Spielfeld) ausgew&auml;hlt wurde.     </li>
  <li>Alle Elemente in der Reihe(Spalte) werden vom neuen Element verschoben, bis die L&uuml;cke geschlossen ist.</li>
  </ul>
  </td>
  </tr>

  <tr>
  <td class="text" colspan="2"><b>Punkte:</b></td>
  </tr>

  <tr>
  <td class="text" colspan="2">
  <ul>
  <li>Punkte gibt es f&uuml;r rechtwinklig aneinander liegende gleiche Elemente, die einen Block aus mindestens 3 Elementen bilden.</li>
  <li>Pro Element eines Blocks gibt es 10 Punkte multipliziert mit der Elementzahl des Blocks. Gro&szlig;e Bl&ouml;cke = mehr Punkte!</li>
  <li>Gewertete Bl&ouml;cke werden gel&ouml;scht. Das Feld wird dann mit zuf&auml;llig ausgew&auml;hlten Elementen aufgef&uuml;llt.</li>
  <li>Alle 1000 Punkte erh&auml;lt man eine optionale Tauschoption.</li>
  <li>Werden in einer Runde keine Punkte erzielt, ist das Spiel aus.</li>
  </ul>
  </td>
  </tr>
  <tr>
  <td class="text" colspan="2" align="center">
  <a href="http://www.magierlehrling.de"><img border="0" align="left" src="$pluginrelativepath/images/logo.jpg"></a>
  Angepasst für Stud.IP mit freundlicher Genehmigung:
  <br>
  <a href="http://www.magierlehrling.de">www.magierlehrling.de</a>
  <br>
  <br>
  Anregungen, Danksagungen bitte an:
  <br>
  <a href="mailto:spielleitung@magierlehrling.de">spielleitung@magierlehrling.de</a>
  
  </td>
  </tr>
  </table>

</td>
<td width="5">&nbsp;</td>
</tr>

<tr>
<td class="text">&nbsp;</td>
<td class="text" align="right">&copy; 2004 by Thomas Kluge</td>
<td class="text">&nbsp;</td>
</tr>
</table>
</div>

<div id="halloffame">
<table cellpadding="4" cellspacing="0" bgcolor="#A0A0A0">
<tr>
<td width="5"><img src="$pluginrelativepath/images/trans.gif" width="5" height="55" border="0" alt=""></td>
<td width="362" valign="top">
 <table cellpading="0" cellspacing="0">
  <tr>
  <td width="170" class="text" valign="top"><br><b>Murmeln - Hall of Fame</b></td>
  <td width="170" class="text" align="right"><br><a class="link" href="javascript:close_halloffame()">schlie&szlig;en</a></td>
  </tr>
  <tr>
  <td class="text" colspan="2">
  <div id="highscore_list">
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   </td>
  </tr>
  </table>
</td>
<td width="5">&nbsp;</td>
</tr>
</table>
</div>

<!--<font color="yellow" id="ausgabe2">A</font>//-->

</form>
<script type="text/javascript">
x_get_highscore(set_highscore_cb);
x_get_highscore_list(set_highscore_list_cb);
</script>
endHTML;
	}
}
?>
<?php
echo<<<endHTML
sperre = true;
dir = 0;
high = 0;

ele_0 = new Image();
ele_0.src = "$pluginrelativepath/images/ele_0.gif";//gelb
ele_1 = new Image();
ele_1.src = "$pluginrelativepath/images/ele_1.gif";//rot
ele_2 = new Image();
ele_2.src = "$pluginrelativepath/images/ele_2.gif";//blau
ele_3 = new Image();
ele_3.src = "$pluginrelativepath/images/ele_3.gif";//weiss
ele_4 = new Image();
ele_4.src = "$pluginrelativepath/images/ele_4.gif";//grün
ele_5 = new Image();
ele_5.src = "$pluginrelativepath/images/ele_5.gif";//bleu
ele_6 = new Image();
ele_6.src = "$pluginrelativepath/images/ele_6.gif";//pink
ele_7 = new Image();
ele_7.src = "$pluginrelativepath/images/ele_7.gif";
ele_8 = new Image();
ele_8.src = "$pluginrelativepath/images/ele_8.gif";
ele_9 = new Image();
ele_9.src = "$pluginrelativepath/images/ele_9.gif";
ele_10 = new Image();
ele_10.src = "$pluginrelativepath/images/ele_10.gif";
ele_11 = new Image();
ele_11.src = "$pluginrelativepath/images/ele_11.gif";
ele_12 = new Image();
ele_12.src = "$pluginrelativepath/images/ele_12.gif";
ele_13 = new Image();
ele_13.src = "$pluginrelativepath/images/ele_13.gif";
ele_14 = new Image();
ele_14.src = "$pluginrelativepath/images/ele_14.gif";
ele_15 = new Image();
ele_15.src = "$pluginrelativepath/images/ele_15.gif";
ele_16 = new Image();
ele_16.src = "$pluginrelativepath/images/ele_16.gif";
ele_17 = new Image();
ele_17.src = "$pluginrelativepath/images/ele_17.gif";
ele_18 = new Image();
ele_18.src = "$pluginrelativepath/images/ele_18.gif";
ele_19 = new Image();
ele_19.src = "$pluginrelativepath/images/ele_19.gif";
ele_20 = new Image();
ele_20.src = "$pluginrelativepath/images/ele_20.gif";
ele_21 = new Image();
ele_21.src = "$pluginrelativepath/images/ele_21.gif";
ele_22 = new Image();
ele_22.src = "$pluginrelativepath/images/ele_22.gif";
ele_23 = new Image();
ele_23.src = "$pluginrelativepath/images/ele_23.gif";
ele_24 = new Image();
ele_24.src = "$pluginrelativepath/images/ele_24.gif";
ele_25 = new Image();
ele_25.src = "$pluginrelativepath/images/ele_25.gif";
ele_26 = new Image();
ele_26.src = "$pluginrelativepath/images/ele_26.gif";
ele_27 = new Image();
ele_27.src = "$pluginrelativepath/images/ele_27.gif";



dir0 = new Image();
dir0.src = "$pluginrelativepath/images/vonoben.gif";
dir0_2 = new Image();
dir0_2.src = "$pluginrelativepath/images/vonoben2.gif";
dir1 = new Image();
dir1.src = "$pluginrelativepath/images/vonunten.gif";
dir1_2 = new Image();
dir1_2.src = "$pluginrelativepath/images/vonunten2.gif";
dir2 = new Image();
dir2.src = "$pluginrelativepath/images/vonlinks.gif";
dir2_2 = new Image();
dir2_2.src = "$pluginrelativepath/images/vonlinks2.gif";
dir3 = new Image();
dir3.src = "$pluginrelativepath/images/vonrechts.gif";
dir3_2 = new Image();
dir3_2.src = "$pluginrelativepath/images/vonrechts2.gif";
trans = new Image();
trans.src = "$pluginrelativepath/images/trans.gif";

function set_highscore_cb(result){ 
	high=result;
	document.getElementById('high').innerHTML = high;
}

function set_highscore_list_cb(result){ 
	document.getElementById('highscore_list').innerHTML = result;
}

function insert_highscore_cb(result){ 
}

function farbe()
{
co = new Array();
co[0] = "#FFFF00";
co[1] = "#FF0000";
co[2] = "#0000FF";
co[3] = "#FFFFFF";
co[4] = "#FF00FF";
co[5] = "#00FF00";
co[6] = "#00FFFF";
cz = Math.floor(Math.random()*co.length);
if(cz >= co.length){cz = 0;}
ctype = Math.floor(Math.random()*7);
if(ctype >= 7){ctype = 0;}
chtype = "logo"+ctype;
document.getElementById(chtype).style.color = co[cz];
x_get_highscore(set_highscore_cb);
}

function bildwechsel(bildname,aktivbild)
{
document.images[bildname].src = eval(aktivbild+".src");
}

function show_info()
{
close_halloffame();
document.getElementById('info').style.visibility = 'visible';
}

function close_info()
{
	document.getElementById('info').style.visibility = 'hidden';
}

function show_halloffame()
{
	x_get_highscore_list(set_highscore_list_cb);
	close_info();
	document.getElementById('halloffame').style.visibility = 'visible';
}

function close_halloffame()
{
	document.getElementById('halloffame').style.visibility = 'hidden';
}

function dir_change(zahl)
{
if(sperre == false && tauscher == 0)
{
dirbild = "dir_"+dir;
dirgrafik = "dir"+dir;
bildwechsel(dirbild,dirgrafik);
dir = zahl;
dirbild = "dir_"+zahl;
dirgrafik = "dir"+zahl+"_2";
bildwechsel(dirbild,dirgrafik);
}
}

function vertausch()
{
if(sperre == false)
{
tauschen--;
document.getElementById('tausch').innerHTML = tauschen;
tauscher = 1;
document.getElementById('tauschlink').innerHTML = 'Murmel auswählen';
}
}

function neustart()
{
x_get_highscore(set_highscore_cb);
document.getElementById('pinfoanz').style.fontSize = "20pt";
document.getElementById('pinfo').style.visibility = "hidden";
//------------
elezahl = 7;
//------------
p = 0;
palt = 0;
r = 1;
l = 1;
tau = 1;
tauscher = 0;
tauschen = 0;
document.getElementById('anzeige').innerHTML = "Level: "+l+", Runde: "+r;
document.getElementById('punkte').innerHTML = p;
feld = new Array();
for(i=0;i<7;i++)
{
feld[i] = new Array();
 for(ii=0;ii<7;ii++)
 {
 z = Math.floor(Math.random()*elezahl);
 if(z >= elezahl){z = 0;}
 //----------
 //if(z==0){z=1;}
 //if(z==5){z=1;}
 //------------
 feld[i][ii] = z;
 bildname = "feld_"+i+"_"+ii;
 bild = "ele_" + z;
 bildwechsel(bildname,bild);
 }
}

//-------------------------------------------------------

/*Michas Bug
feld[2][2] = 0;feld[2][3] = 0;
feld[3][3] = 0;feld[3][4] = 0;
feld[4][2] = 0;feld[4][3] = 0;
feld[5][2] = 0;
feld[6][2] = 0;

feld[4][1] = 5;
feld[5][0] = 5;feld[5][1] = 5;
*/

/*Toms Bug
feld[0][5] = 0;feld[0][6] = 0;
feld[1][5] = 0;
feld[2][5] = 0;
feld[3][3] = 0;feld[3][4] = 0;feld[3][5] = 0;
*/
/*
for(i=0;i<7;i++)
{
 for(ii=0;ii<7;ii++)
 {
 bildname = "feld_"+i+"_"+ii;
 bild = "ele_" + feld[i][ii];
 bildwechsel(bildname,bild);
 }
}
*/
//-------------------------------------------------------

next = Math.floor(Math.random()*elezahl);
if(next >= elezahl){next = 0;}
nextbild = 'ele_'+next;
bildwechsel('nextbildname',nextbild);
sperre = false;
}

function klick(x,y)//---Reihe,Spalte
{
farbe();
a = x;
b = y;
if(sperre == false)
{
if(tauscher == 1)
{
tmurmel = new Array();
tmurmel[0] = a;
tmurmel[1] = b;
//bg farbig
bildname = "feld_"+a+"_"+b;
bildwechsel(bildname,"trans");
tauscher = 2;
document.getElementById('tauschlink').innerHTML = '2. Murmel auswählen';
}
else if(tauscher == 2)
{
murmel2 = feld[a][b];
feld[a][b] = feld[tmurmel[0]][tmurmel[1]];//1.murmel in neues feld
feld[tmurmel[0]][tmurmel[1]] = murmel2;
bildname = "feld_"+a+"_"+b;
bild = "ele_" + feld[a][b];
bildwechsel(bildname,bild);
bildname = "feld_"+tmurmel[0]+"_"+tmurmel[1];
bild = "ele_" + feld[tmurmel[0]][tmurmel[1]];
bildwechsel(bildname,bild);
document.getElementById('tauschlink').innerHTML = '&nbsp;';
tauscher = 0;
}
else
{
sperre = true;
tauscher = 0;
document.getElementById('tauschlink').innerHTML = '&nbsp;';
bildname = "feld_"+a+"_"+b;
bildwechsel(bildname,"trans");

hilfe = new Array();

 if(dir == 0)//---Neues Element oben einfügen
 {
 hilfe[0] = next;
 ix = 1;
 for(i=0;i<7;i++)
 {
  if(i != a)
  {
  hilfe[ix] = feld[i][b];
  ix++;
  }
 }
 }
 else if(dir == 1)//---Neues Element unten einfügen
 {
 hilfe[6] = next;
 ix = 5;
 for(i=6;i>-1;i--)
 {
  if(i != a)
  {
  hilfe[ix] = feld[i][b];
  ix--;
  }
 }
 }
 if(dir == 2)//---Neues Element links einfügen
 {
 hilfe[0] = next;
 ix = 1;
 for(i=0;i<7;i++)
 {
  if(i != b)
  {
  hilfe[ix] = feld[a][i];
  ix++;
  }
 }
 }
 else if(dir == 3)//---Neues Element rechts einfügen
 {
 hilfe[6] = next;
 ix = 5;
 for(i=6;i>-1;i--)
 {
  if(i != b)
  {
  hilfe[ix] = feld[a][i];
  ix--;
  }
 }
 }

if(dir == 0 || dir == 1)
{
for(i=0;i<7;i++)
{
feld[i][b] = hilfe[i];
}
}
else
{
for(i=0;i<7;i++)
{
feld[a][i] = hilfe[i];
}
}
window.setTimeout("action(a,b)",500);
}
}
}


function action(a,b)
{
if(dir == 0)
{
ci = a;
mover = window.setInterval("move_0()",300);
}
else if(dir == 1)
{
ci = a;
mover = window.setInterval("move_1()",300);
}
else if(dir == 2)
{
ci = b;
mover = window.setInterval("move_2()",300);
}
else if(dir == 3)
{
ci = b;
mover = window.setInterval("move_3()",300);
}
}

function move_0()
{
if(ci > 0)
{
cii = ci - 1;
bildname = "feld_"+cii+"_"+b;
bildwechsel(bildname,'trans');
}

bildname = "feld_"+ci+"_"+b;
bild = "ele_" + feld[ci][b];
bildwechsel(bildname,bild);
if(ci == 0){move_ende();}
ci--;
}

function move_1()
{
if(ci < 6)
{
cii = ci + 1;
bildname = "feld_"+cii+"_"+b;
bildwechsel(bildname,'trans');
}

bildname = "feld_"+ci+"_"+b;
bild = "ele_" + feld[ci][b];
bildwechsel(bildname,bild);
if(ci == 6){move_ende();}
ci++;
}

function move_2()
{
if(ci > 0)
{
cii = ci - 1;
bildname = "feld_"+a+"_"+cii;
bildwechsel(bildname,'trans');
}

bildname = "feld_"+a+"_"+ci;
bild = "ele_" + feld[a][ci];
bildwechsel(bildname,bild);
if(ci == 0){move_ende();}
ci--;
}

function move_3()
{
if(ci < 6)
{
cii = ci + 1;
bildname = "feld_"+a+"_"+cii;
bildwechsel(bildname,'trans');
}

bildname = "feld_"+a+"_"+ci;
bild = "ele_" + feld[a][ci];
bildwechsel(bildname,bild);
if(ci == 6){move_ende();}
ci++;
}

function move_ende()
{
window.clearInterval(mover);
bildwechsel('nextbildname','trans');
check_feld();
}



function check_feld()
{
bz = 0;
all_blocks_z = new Array();
all_blocks_s = new Array();
text = 'Welche Dreier-Blöcke überlappen sich? - Verbinden';
for(i=0;i<7;i++)
{
for(j=0;j<7;j++)
{
inh = feld[i][j];

  if(i-1 > -1 && i+1 < 7 && inh == feld[i-1][j] && inh == feld[i+1][j])//Dreier verti
  {block_save(i,j,(i-1),j,(i+1),j);}
  if(j-1 > -1 && j+1 < 7 && inh == feld[i][j-1] && inh == feld[i][j+1])//Dreier hori
  {block_save(i,j,i,(j-1),i,(j+1));}

  if(j-1 > -1 && i+1 < 7 && inh == feld[i][j-1] && inh == feld[i+1][j-1])//links - unten
  {block_save(i,j,i,(j-1),(i+1),(j-1));}
  if(j-1 > -1 && i-1 > -1 && inh == feld[i][j-1] && inh == feld[i-1][j-1])//links - oben
  {block_save(i,j,i,(j-1),(i-1),(j-1));}

  if(j+1 < 7 && i+1 < 7 && inh == feld[i][j+1] && inh == feld[i+1][j+1])//rechts - unten
  {block_save(i,j,i,j+1,i+1,j+1);}
  if(j+1 < 7 && i-1 > -1 && inh == feld[i][j+1] && inh == feld[i-1][j+1])//rechts - oben
  {block_save(i,j,i,j+1,i-1,j+1);}

  if(i-1 > -1 && j-1 > -1 && inh == feld[i-1][j] && inh == feld[i-1][j-1])//oben - links
  {block_save(i,j,i-1,j,i-1,j-1);}
  if(i-1 > -1 && j+1 < 7 && inh == feld[i-1][j] && inh == feld[i-1][j+1])//oben - rechts
  {block_save(i,j,i-1,j,i-1,j+1);}

  if(i+1 < 7 && j-1 > -1 && inh == feld[i+1][j] && inh == feld[i+1][j-1])//unten - links
  {block_save(i,j,i+1,j,i+1,j-1);}
  if(i+1 < 7 && j+1 < 7 && inh == feld[i+1][j] && inh == feld[i+1][j+1])//unten - rechts
  {block_save(i,j,i+1,j,i+1,j+1);}
}
}

//document.getElementById('ausgabe1').innerHTML = text;

text = '';
pu = 0;
pk = new Array();
for(i=0;i<all_blocks_z.length;i++)
{
text = text + "<br>Block "+(i+1)+" mit "+all_blocks_z[i].length+" Elementen: ";
pk[i] = all_blocks_z[i].length * 10 * all_blocks_z[i].length;
pu = pu + pk[i];
  for(j=0;j<all_blocks_z[i].length;j++)
  {
  zelle = 'z'+all_blocks_z[i][j]+'_'+all_blocks_s[i][j];
  //document.getElementById(zelle).innerHTML = i+1;
  text = text + all_blocks_z[i][j]+"/"+all_blocks_s[i][j]+", ";
  }
}

//document.getElementById('ausgabe2').innerHTML = text;
window.setTimeout("panzeige()",500);
}



function block_save(z1,s1,z2,s2,z3,s3)
{
if(bz == 0)
{
all_blocks_z[bz] = new Array(z1,z2,z3);
all_blocks_s[bz] = new Array(s1,s2,s3);
bz++;
}
else
{
lapp = false;
blang = all_blocks_z.length;
text = text + '<br><br><b>aktueller Dreierblock: '+z1+'/'+s1+', '+z2+'/'+s2+', '+z3+'/'+s3+'</b>';
   for(ii=0;ii<blang;ii++)
   {
   elemente = all_blocks_z[ii].length;
   text = text + '<br>Block '+ii+' mit '+elemente+' Elementen: ';
     for(jj=0;jj<elemente;jj++)
     {
     text = text + all_blocks_z[ii][jj]+'/'+all_blocks_s[ii][jj]+', ';
       if((z1 == all_blocks_z[ii][jj] && s1 == all_blocks_s[ii][jj]) || (z2 == all_blocks_z[ii][jj] && s2 == all_blocks_s[ii][jj]) || (z3 == all_blocks_z[ii][jj] && s3 == all_blocks_s[ii][jj]))
       {text = text + " - <b>Überlappung</b>";lapp = true;break;}
     }
   if (lapp == true){break;}
   }

if(lapp == true)
{
text = text +  '<br>Blöcke in Block '+ii+' zusammenlegen';
ele = all_blocks_z[ii].length;
dopp1 = false;
dopp2 = false;
dopp3 = false;

for(e=0;e<ele;e++)
{
text = text + '<br>vergleiche '+z1+'/'+s1+' mit '+all_blocks_z[ii][e]+'/'+all_blocks_s[ii][e];
  if(z1 == all_blocks_z[ii][e] && s1 == all_blocks_s[ii][e])
  {dopp1 = true;break;}
}
for(e=0;e<ele;e++)
{
  if(z2 == all_blocks_z[ii][e] && s2 == all_blocks_s[ii][e])
  {dopp2 = true;break;}
}
for(e=0;e<ele;e++)
{
  if(z3 == all_blocks_z[ii][e] && s3 == all_blocks_s[ii][e])
  {dopp3 = true;break;}
}

if(dopp1 == false)
{
text = text + '<br>z1/s1 speichern';
ele = all_blocks_z[ii].length;
all_blocks_z[ii][ele] = z1;
all_blocks_s[ii][ele] = s1;
}
else{text = text + '<br>'+z1+'/'+s1+' ist doppelt';}
if(dopp2 == false)
{
text = text + '<br>z2/s2 speichern';
ele = all_blocks_z[ii].length;
all_blocks_z[ii][ele] = z2;
all_blocks_s[ii][ele] = s2;
}
else{text = text + '<br>'+z2+'/'+s2+' ist doppelt';}
if(dopp3 == false)
{
text = text + '<br>z3/s3 speichern';
ele = all_blocks_z[ii].length;
all_blocks_z[ii][ele] = z3;
all_blocks_s[ii][ele] = s3;
}
else{text = text + '<br>'+z3+'/'+s3+' ist doppelt';}
}
else
{
text = text +  '<br>Neuer Block '+bz;
all_blocks_z[bz] = new Array(z1,z2,z3);
all_blocks_s[bz] = new Array(s1,s2,s3);
bz++;
}

}//ende bz>0

/*
zelle1 = "z"+z1+"_"+s1;
document.getElementById(zelle1).innerHTML = "x";
zelle2 = "z"+z2+"_"+s2;
document.getElementById(zelle2).innerHTML = "x";
zelle3 = "z"+z3+"_"+s3;
document.getElementById(zelle3).innerHTML = "x";
//alert(zelle1+"\n"+zelle2+"\n"+zelle3);
*/
}



function panzeige()
{
if(pu > 0)
{
//pro Komplex Elemente ausblenden und Punkte anzeigen
pzahl = 0;
anz = 0;
bigger = window.setInterval("bigandout()",100);
}
else
{
runde_ende();
}
}

function bigandout()
{
if(anz == 0)
{
document.getElementById('pinfoanz').innerHTML = pk[pzahl];
document.getElementById('pinfo').style.visibility = "visible";
bz=20;
}
anz++;

bz = bz + 5;
document.getElementById('pinfoanz').style.fontSize = bz+"pt";

if(bz == 60)
{
for(t=0;t<all_blocks_z[pzahl].length;t++)
{
y = all_blocks_z[pzahl][t];
x = all_blocks_s[pzahl][t];
feld[y][x] = -1;
bildname = "feld_"+y+"_"+x;
bildwechsel(bildname,'trans');
}
}

if(pzahl == pk.length)
{
document.getElementById('pinfo').style.visibility = "hidden";
document.getElementById('pinfoanz').style.fontSize = "20pt";
window.clearInterval(bigger);
fillfeld();
}

if(bz == 110)
{
document.getElementById('pinfo').style.visibility = "hidden";
document.getElementById('pinfoanz').style.fontSize = "10pt";
anz = 0;
p = p + pk[pzahl];
document.getElementById('punkte').innerHTML = p;
pzahl++;
}
}


function fillfeld()
{
free_i = new Array();
free_j = new Array();
free_z = 0;
for(i=0;i<7;i++)
{
 for(j=0;j<7;j++)
 {
   if(feld[i][j] == -1)
   {
   free_i[free_z] = i;
   free_j[free_z] = j;
   free_z++;
   }
 }
}
fz = 0;
filler = window.setInterval("fill()",300);
}

function fill()
{
next = Math.floor(Math.random()*elezahl);
if(next >= elezahl){next = 0;}
feld[free_i[fz]][free_j[fz]] = next;
nextbild = 'ele_'+next;
nextbildname = "feld_"+free_i[fz]+"_"+free_j[fz];
bildwechsel(nextbildname,nextbild);

fz++;
if(fz == free_z)
{
window.clearInterval(filler);
runde_ende();
}
}



function runde_ende()
{
if(pu == 0)
{
ende();
}
else
{
r++;
if((palt+pu) >= (1000*tau))
{
tauschen++;
document.getElementById('tausch').innerHTML = tauschen;
tau++;
}

if(r == 5 || r == 10 || r == 15 || r == 20 || r == 25 || r == 30 || r == 35 || r == 40 || r == 45 || r == 50 || r == 55 || r == 60 || r == 65 || r == 70 || r == 75 || r == 80 || r == 85 || r == 90 || r == 95 || r == 100 || r == 105)
{
l++;
elezahl++;
document.getElementById('pinfoanz').style.fontSize = "20pt";
document.getElementById('pinfoanz').innerHTML = "Level "+l;
document.getElementById('pinfo').style.visibility = "visible";
lb = 20;
levelbigger = window.setInterval("levelbig()",100);
}

if(tauschen > 0)
{document.getElementById('tauschlink').innerHTML = '<a class="link" href="javascript:vertausch()">2 Murmeln vertauschen</a>';}

document.getElementById('anzeige').innerHTML = "Level: "+l+", Runde: "+r;
next = Math.floor(Math.random()*elezahl);
if(next >= elezahl){next = 0;}
nextbild = 'ele_'+next;
bildwechsel('nextbildname',nextbild);
palt = p;
sperre = false;
}
}

function levelbig()
{
document.getElementById('pinfoanz').style.fontSize = lb+"pt";
lb = lb + 5;
if(lb == 80)
{
window.clearInterval(levelbigger);
document.getElementById('pinfo').style.visibility = "hidden";
}
}

function ende()
{
x_set_highscore(p,insert_highscore_cb);
if(p > high)
{
document.getElementById('pinfoanz').style.fontSize = "30pt";
document.getElementById('high').innerHTML = p;
high = p;
document.getElementById('pinfoanz').innerHTML = "Game Over<br><br>Highscore";
document.getElementById('pinfo').style.visibility = "visible";
}
else
{
document.getElementById('pinfoanz').style.fontSize = "30pt";
document.getElementById('pinfoanz').innerHTML = "Game Over";
document.getElementById('pinfo').style.visibility = "visible";
}
document.getElementById('anzeige').innerHTML = "Zum Spielstart auf Neustart klicken";
}
endHTML;
?>
<HTML>
<HEAD>
<TITLE>Modifica fornitore</TITLE>
</HEAD>

<BODY>

<BR><FONT SIZE=3 COLOR=purple>

<?php
include  "database.inc";
echo("<br>");
$select= "SELECT * FROM Fornitore WHERE id_f='$_POST[id_f]';";
$ris=mysql_query($select);
echo("<br>");

if(!$ris)
{
  echo("Errore: ".mysql_error());
  exit();
}
$riga=mysql_fetch_array($ris);
if(!$riga)
 {
   echo("Fornitore non presente nel database.");
   exit();
 }

echo("<form action=mod2_for.php method=post>");
echo("Id fornitore <input type=text name=id_f value=$riga[id_f]><br>");
echo("Denominazione <input type=text name=denominazione value=$riga[denominazione]><br>");
echo("Titolare <input type=text name=titolare value=$riga[titolare]><br>");
echo("Indirizzo:<br>");
echo("Via <INPUT TYPE=text NAME=via value=$riga[via]><br>");
echo("Civico <INPUT TYPE=text NAME=civico value=$riga[civico]><br>");
echo("Città <INPUT TYPE=text NAME=citta value=$riga[citta]><br>");
echo("Stato <INPUT TYPE=text NAME=stato value=$riga[stato]><br>");
echo("Telefono <input type=text name=telefono value=$riga[telefono]><br>");
echo("Partita Iva <input type=text name=p_iva value=$riga[p_iva]><br>");

echo("<br><input type=submit value=Conferma><br>");

mysql_free_result($ris);
mysql_close($con);

?>
<br>

</BODY>
</HTML>
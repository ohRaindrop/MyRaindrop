<HTML>
<HEAD>
<TITLE>Prodotti dati dal fornitore</TITLE>
</HEAD>

<BODY>
<FONT SIZE=3 COLOR="purple">

<?php
include   "database.inc";

$select= "SELECT id_p,nome FROM (Prodotti NATURAL JOIN Fornitore) WHERE denominazione='$_POST[denominazione]';";
$ris=mysql_query($select);

if(!$ris)
{
  echo("<br>Errore: ".mysql_error());
  exit();
}

$riga=mysql_fetch_array($ris);

if(!$riga)
{  echo("<FONT COLOR='purple'>");
  echo("Nessun prodotto trovato. <br><br> Errore: ".mysql_error());
  exit();
}
echo("<FONT COLOR='purple'>");
echo("<center><h1>Lista dei prodotti:</h1></center>");
echo("<table>");
echo("<tr><td width=20%> Id </td><td> Nome </td></tr>");
while($riga)
{
  echo("\n<tr>");
  echo("\n<td>$riga[id_p]</td>");
  echo("\n<td>$riga[nome]</td>");
  echo("</tr>");
  $riga=mysql_fetch_array($ris, MYSQL_ASSOC);
}
echo("</table>");
mysql_free_result($ris);
mysql_close($con);
?>
<br>

</BODY>
</HTML>
<HTML>
<HEAD>
<TITLE>Mostra Fornitori</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<FONT SIZE=3 COLOR=green>

<?php
include   "database.inc";

$select= "SELECT * FROM Fornitore;";
$ris=mysql_query($select);

if(!$ris)
{
  echo("<br>Errore: ".mysql_error());
  exit();
}

$riga=mysql_fetch_array($ris);

if(!$riga)
{
  echo("Nessun fornitore trovato. <br><br> Errore: ".mysql_error());
  exit();
}
echo("<FONT COLOR='purple'>");
echo("<center><h1>Lista dei fornitori:</h1></center>");
echo("<table>");

 echo("<tr><td width=5%> Id </td><td width=10%> Denominazione </td><td width=10%> Titolare </td><td width=10%> Via </td><td width=10%> Civico </td><td width=10%> Citta </td><td width=10%> Stato </td><td width=10%> Telefono </td><td width=10%> Partita Iva</td></tr>");
while($riga)
{
  echo("\n<tr>");
  echo("\n<td>$riga[id_f]</td>");
  echo("\n<td>$riga[denominazione]</td>");
  echo("\n<td>$riga[titolare]</td>");
  echo("\n<td>$riga[via]</td>");
  echo("\n<td>$riga[civico]</td>");
  echo("\n<td>$riga[citta]</td>");
  echo("\n<td>$riga[stato]</td>");
  echo("\n<td>$riga[telefono]</td>");
  echo("\n<td>$riga[p_iva]</td>");
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

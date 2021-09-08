<HTML>
<HEAD>
<TITLE>Mostra Clienti</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<FONT SIZE=3 COLOR=green>

<?php
include   "database.inc";

$select= "SELECT * FROM Cliente;";
$ris=mysql_query($select);

if(!$ris)
{
  echo("<br>Errore: ".mysql_error());
  exit();
}

$riga=mysql_fetch_array($ris);

if(!$riga)
{
  echo("Nessun cliente trovato. <br><br> Errore: ".mysql_error());
  exit();
}
echo("<FONT COLOR='purple'>");
echo("<center><h1>Lista dei clienti:</h1></center>");
echo("<table>");

 echo("<tr><td width=10%> Id </td><td width=10%> Nome </td><td width=10%> Cognome </td><td width=10%> Via </td><td width=10%> Civico </td><td width=10%> Citta </td><td width=10%> Stato </td><td width=10%> Telefono </td><td width=10%> Mail </td><td width=10%> Password </td></tr>");
while($riga)
{
  echo("\n<tr>");
  echo("\n<td>$riga[id_c]</td>");
  echo("\n<td>$riga[nome]</td>");
  echo("\n<td>$riga[cognome]</td>");
  echo("\n<td>$riga[via]</td>");
  echo("\n<td>$riga[civico]</td>");
  echo("\n<td>$riga[citta]</td>");
  echo("\n<td>$riga[stato]</td>");
  echo("\n<td>$riga[telefono]</td>");
  echo("\n<td>$riga[mail]</td>");
  echo("\n<td>$riga[password]</td>");
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
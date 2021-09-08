<HTML>
<HEAD>
<TITLE>Mostra Prodotti</TITLE>
</HEAD>

<BODY>

<FONT SIZE=3 COLOR=purple>
<?php
include   "database.inc";

$select= "SELECT * FROM Prodotti;";
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
echo("<tr><td width=5%> Id </td><td width=15%> Foto </td><td width=15%> Nome </td><td width=10%> Prezzo </td><td width=10%> Quantità </td><td width=10%> Descrizione </td><td width=5%> Id Fornitore </td><td width=5%> Id Categoria </td></tr>");
while($riga)
{
  echo("\n<tr>");
  echo("\n<td>$riga[id_p]</td>");
  echo("\n<td><img src='$riga[foto]' width=100px height=100px></td>");
  echo("\n<td>$riga[nome]</td>");
  echo("\n<td>$riga[prezzo] €</td>");
  echo("\n<td>$riga[quantita]</td>");
  echo("\n<td>$riga[descrizione]</td>");
  echo("\n<td>$riga[id_f]</td>");
  echo("\n<td>$riga[id_cat]</td>");
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
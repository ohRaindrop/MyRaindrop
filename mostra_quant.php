<HTML>
<HEAD>
<TITLE>Prodotti e relativa quantità</TITLE>
</HEAD>

<BODY>

<?php
include   "database.inc";

$select= "SELECT id_p,nome,quantita FROM Prodotti ORDER BY quantita;";
$ris=mysql_query($select);

if(!$ris)
{
  echo("Errore: ".mysql_error());
  exit();
}

$riga=mysql_fetch_array($ris);

if(!$riga)
{
  echo("Nessun prodotto trovato. <br><br> Errore: ".mysql_error());
  exit();
}
echo("<center><h1>Quantità in magazzino dei prodotti:</h1></center>");
echo("<table>");
 echo("<tr><th> Id Prodotto </th><th> Nome </th><th> Quantità </th></tr>");
while($riga)
{
  echo("\n\t<tr>");
  echo("\n\t<th>$riga[id_p] </th>");
  echo("\n\t<th>$riga[nome] </th>");
  echo("\n\t<th>$riga[quantita] </th>");
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
<HTML>
<HEAD>
<TITLE>Prodotti e relativi prezzi</TITLE>
</HEAD>

<BODY>
<FONT COLOR=purple>
<?php
include   "database.inc";

$select= "SELECT nome,prezzo FROM Prodotti ORDER BY prezzo;";
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
echo("<center><h1>Prezzi dei prodotti:</h1></center>");
echo("<table>");
 echo("<tr><th> Nome prodotto </th><th> Prezzo </th></tr>");
while($riga)
{
  echo("\n\t<tr>");
  echo("\n\t<th>$riga[nome] </th>");
  echo("\n\t<th>$riga[prezzo] </th>");
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
<HTML>
<HEAD>
<TITLE>Prodotti e relativi fornitori</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">
<FONT COLOR=purple>
<?php
include   "database.inc";

$select= "SELECT id_p,nome,id_f,denominazione FROM (Prodotti NATURAL JOIN Fornitore);";
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
echo("<tr><th> Id </th><th> Nome Prodotto </th><th> Id Fornitore </th><th> Denominazione </th></tr>");
while($riga)
{
  echo("\n\t<tr>");
  echo("\n\t<th>$riga[id_p]</th>");
  echo("\n\t<th>$riga[nome]</th>");
  echo("\n\t<th>$riga[id_f]</th>");
  echo("\n\t<th>$riga[denominazione]</th>");
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
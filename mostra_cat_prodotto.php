<HTML>
<HEAD>
<TITLE>Visualizzazione prodotti e categorie</TITLE>
</HEAD>
<BODY>

<BR><FONT SIZE=3 COLOR=purple>

<?php
include   "database.inc";


$select= "SELECT nome, nominata FROM (Prodotti NATURAL JOIN Categoria) ORDER BY id_p;";
$ris=mysql_query($select);

if(!$ris)
{
  echo("<br>Errore: ".mysql_error());
  exit();
}

$riga=mysql_fetch_array($ris);

if(!$riga)
{ echo("Nessun prodotto trovato. <br><br> Errore: ".mysql_error());
  exit();
}

echo("<center><h1>Lista dei prodotti e delle categorie in ordine di prodotto:</h1></center>");
echo("<table>");
echo("<tr><td> Nome del prodotto</td><td> Nome della Categoria </td></tr>");
while($riga)
{
  echo("\n<tr>");
  echo("\n<td>$riga[nome]</td>");
  echo("\n<td>$riga[nominata]</td>");
  echo("</tr>");
  $riga=mysql_fetch_array($ris, MYSQL_ASSOC);
}
echo("</table>");
mysql_free_result($ris);



$select= "SELECT nome, nominata FROM (Prodotti NATURAL JOIN Categoria) ORDER BY categoria.id_cat;";
$ris=mysql_query($select);

if(!$ris)
{
  echo("<br>Errore: ".mysql_error());
  exit();
}

$riga=mysql_fetch_array($ris);

if(!$riga)
{ echo("Nessun prodotto trovato. <br><br> Errore: ".mysql_error());
  exit();
}

echo("<center><h1>Lista dei prodotti e delle categorie in ordine di categoria:</h1></center>");
echo("<table>");
echo("<tr><td> Nome della Prodotto</td><td> Nome della Categoria </td></tr>");
while($riga)
{
  echo("\n<tr>");
  echo("\n<td>$riga[nome]</td>");
  echo("\n<td>$riga[nominata]</td>");
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

</table>
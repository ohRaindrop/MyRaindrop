<HTML>
<HEAD>
<TITLE>Prodotti di una certa categoria</TITLE>
</HEAD>

<BODY>

<FONT COLOR="purple">

<?php
include   "database.inc";

$select= "SELECT prodotti.nome,id_p FROM (Prodotti NATURAL JOIN Categoria) WHERE nominata='$_POST[nominata]';";
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
echo("<center><h1>Lista dei prodotti e delle categorie:</h1></center>");
echo("<table>");
echo("<tr><td width=60%> Nome del Prodotto </td><td> Id del prodotto </td></tr>");
while($riga)
{
  echo("\n<tr>");
  echo("\n<td>$riga[nome]</td>");
  echo("\n<td>$riga[id_p]</td>");
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
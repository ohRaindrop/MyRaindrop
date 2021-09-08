<HTML>
<HEAD>
<TITLE>Mostra Categoria</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<FONT SIZE=3 COLOR=purple>
<?php
include   "database.inc";

$select= "SELECT * FROM Categoria;";
$ris=mysql_query($select);

if(!$ris)
{
  echo("<br>Errore: ".mysql_error());
  exit();
}

$riga=mysql_fetch_array($ris);

if(!$riga)
{  echo("<FONT COLOR='purple'>");
  echo("Nessuna categoria trovata. <br><br> Errore: ".mysql_error());
  exit();
}

echo("<FONT COLOR='purple'>");
echo("<center><h1>Lista delle categorie:</h1></center>");
echo("<table>");
echo("<tr><td width=50%> Id </td><td width=50%> Nome </td></tr>");
while($riga)
{
  echo("\n<tr>");
  echo("\n<td>$riga[id_cat]</td>");
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
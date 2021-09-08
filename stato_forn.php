<HTML>
<HEAD>
<TITLE>Stato dei fornitori</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<FONT SIZE=3 COLOR=green>

<?php
include   "database.inc";

$select= "SELECT * FROM Fornitore WHERE stato='$_POST[stato]';";
$ris=mysql_query($select);

if(!$ris)
{
  echo("Errore: ".mysql_error());
  exit();
}

$riga=mysql_fetch_array($ris);

if(!$riga)
{
  echo("Nessun fornitore trovato. <br><br> Errore: ".mysql_error());
  exit();
}
echo("<FONT COLOR='green'>");
echo("<center><h1>Lista dei Fornitori provenienti dallo Stato: </h1></center>");
echo("<table>");
 echo("<tr><th> Id </th><th> Denominazione </th><th> Stato </th></tr>");
while($riga)
{
  echo("\n\t<tr>");
  echo("\n\t<th>$riga[id_f]</th>");
  echo("\n\t<th>$riga[denominazione]</th>");
  echo("\n\t<th>$riga[stato] </th>");
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
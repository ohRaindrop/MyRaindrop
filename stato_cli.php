<HTML>
<HEAD>
<TITLE>Stato dei clienti</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<FONT SIZE=3 COLOR=green>

<?php
include   "database.inc";

$select= "SELECT * FROM Cliente WHERE stato='$_POST[stato]';";
$ris=mysql_query($select);

if(!$ris)
{
  echo("Errore: ".mysql_error());
  exit();
}

$riga=mysql_fetch_array($ris);

if(!$riga)
{
  echo("Nessun cliente trovato. <br><br> Errore: ".mysql_error());
  exit();
}
echo("<FONT COLOR='green'>");
echo("<center><h1>Lista dei Clienti: </h1></center>");
echo("<table>");
 echo("<tr><th> Nome </th><th> Cognome </th><th> Stato </th></tr>");
while($riga)
{
  echo("\n\t<tr>");
  echo("\n\t<th>$riga[nome]</th>");
  echo("\n\t<th>$riga[cognome]</th>");
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
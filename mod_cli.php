<HTML>
<HEAD>
<TITLE>Modifica cliente</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<BR><FONT SIZE=3 COLOR=green>
<?php
include  "database.inc";
echo("<br>");
$select= "SELECT * FROM Cliente WHERE id_c='$_POST[id_c]';";
$ris=mysql_query($select);
echo("<br>");

if(!$ris)
{
  echo("Errore: ".mysql_error());
  exit();
}
$riga=mysql_fetch_array($ris);
if(!$riga)
 {
   echo("Cliente non presente nel database.");
   exit();
 }

echo("<form action=mod2_cli.php method=post>");
echo("Id Cliente <INPUT TYPE=text NAME=id_c value=$riga[id_c]><br>");
echo("Nome <INPUT TYPE=text NAME=nome value=$riga[nome]><br>");
echo("Cognome <INPUT TYPE=text NAME=cognome value=$riga[cognome]><br>");
echo("Indirizzo:<br>");
echo("Via <INPUT TYPE=text NAME=via value=$riga[via]><br>");
echo("Civico <INPUT TYPE=text NAME=civico value=$riga[civico]><br>");
echo("Città <INPUT TYPE=text NAME=citta value=$riga[citta]><br>");
echo("Stato <INPUT TYPE=text NAME=stato value=$riga[stato]><br>");
echo("Telefono <INPUT TYPE=text NAME=telefono value=$riga[telefono]><br>");
echo("<br><br>");
echo("Mail <INPUT TYPE=text NAME=mail value=$riga[mail]><br>");
echo("Password <INPUT TYPE=text NAME=password value=$riga[password]><br>");
echo("<br><input type=submit value=Conferma><br>");

mysql_free_result($ris);
mysql_close($con);

?>
<br>

</BODY>
</HTML>
<HTML>
<HEAD>
<TITLE>Modifica cliente</TITLE>
</HEAD>

<BODY>

<BR><FONT SIZE=3 COLOR=purple>
<?php
include   "database.inc";

$update="UPDATE Cliente SET nome='$_POST[nome]', cognome='$_POST[cognome]', via='$_POST[via]', civico='$_POST[civico]',  citta='$_POST[citta]',  stato='$_POST[stato]', telefono='$_POST[telefono]', mail='$_POST[mail]', password='$_POST[password]' WHERE id_c='$_POST[id_c]';";
$ris=mysql_query($update);
if(!$ris)
{
  echo("<br>");
  echo("Errore nel comando UPDATE: " .mysql_error());
  exit();
}
echo("<br>");
echo("Modifica effettuata correttamente");
mysql_close($con);

?>
<br>
</BODY>
</HTML>
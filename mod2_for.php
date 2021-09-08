<HTML>
<HEAD>
<TITLE>Modifica fornitore</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<BR><FONT SIZE=3 COLOR=purple>

<?php
include   "database.inc";

$update="UPDATE Fornitore SET denominazione='$_POST[denominazione]', id_f='$_POST[id_f]', titolare='$_POST[titolare]', via='$_POST[via]', civico='$_POST[civico]',  citta='$_POST[citta]',  stato='$_POST[stato]', telefono='$_POST[telefono]', p_iva='$_POST[p_iva]' WHERE id_f='$_POST[id_f]';";
$ris=mysql_query($update);
if(!$ris)
{
  echo("<br>");
  echo("Errore nel comando UPDATE: " .mysql_error());
  exit();
}
echo("<br>");
echo("Modifica del fornitore effettuata correttamente");
mysql_close($con);

?>
<br>
</BODY>
</HTML>
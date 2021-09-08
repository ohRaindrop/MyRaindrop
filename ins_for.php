<HTML>
<HEAD>
<TITLE>Inserimento fornitore</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<BR><FONT SIZE=3 COLOR=purple>
<?php
include   "database.inc";

if(!mysql_select_db($database,$con))
   echo("Impossibile connettersi al database: ". mysql_error());

$insert= "INSERT INTO Fornitore (denominazione, titolare, via, civico, citta, stato, telefono, p_iva) VALUES ('$_POST[denominazione]','$_POST[titolare]','$_POST[via]','$_POST[civico]','$_POST[citta]','$_POST[stato]','$_POST[telefono]','$_POST[p_iva]');";
echo("<br>");
if(!mysql_query($insert))
{
  echo("Errore: ".mysql_error());
  exit();
}
else
 echo ("Inserimento avvenuto correttamente.");
echo("<br>");
mysql_close($con);
?>
</BODY>
</HTML>
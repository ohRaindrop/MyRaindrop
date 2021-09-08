<HTML>
<HEAD>
<TITLE>Inserimento Cliente</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<BR><FONT SIZE=3 COLOR=purple>

<?php
include   "database.inc";

if(!mysql_select_db($database,$con))
   echo("Impossibile connettersi al database: ". mysql_error());


$insert= "INSERT INTO Cliente (nome, cognome, via, civico, citta, stato, telefono, mail, password) VALUES ('$_POST[nome]','$_POST[cognome]','$_POST[via]','$_POST[civico]','$_POST[citta]','$_POST[stato]','$_POST[telefono]','$_POST[mail]','$_POST[password]');";
echo("<br>");
if(!mysql_query($insert))
{
  echo("Errore: ".mysql_error());
  exit();
}
else
 echo ("Registrazione effettuata correttamente.");
echo("<br>");
mysql_close($con);
?>
</BODY>
</HTML>
<HTML>
<HEAD>
<TITLE>Inserimento Categoria</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<BR><FONT SIZE=3 COLOR=purple>
<?php
include   "database.inc";

if(!mysql_select_db($database,$con))
   echo("Impossibile connettersi al database: ". mysql_error());

$insert= "INSERT INTO Categoria (nominata) VALUES ('$_POST[nominata]');";
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
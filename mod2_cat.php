<HTML>
<HEAD>
<TITLE>Modifica Categoria</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<BR><FONT SIZE=3 COLOR=purple>
 
<?php
include   "database.inc";

$update="UPDATE Categoria SET nominata='$_POST[nominata]' WHERE id_cat='$_POST[id_cat]';";
$ris=mysql_query($update);
if(!$ris)
{
  echo("<br>");
  echo("Errore nel comando UPDATE: " .mysql_error());
  exit();
}
echo("<br>");
echo("Modifica della categoria effettuata correttamente");
mysql_close($con);

?>
<br>
</BODY>
</HTML>
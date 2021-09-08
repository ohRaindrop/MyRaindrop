<HTML>
<HEAD>
<TITLE>Cancella Categoria</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<FONT SIZE=3 COLOR=purple>

<?php
include   "database.inc";
echo("<br>");
$delete= "DELETE FROM Categoria WHERE id_cat='$_POST[id_cat]';";
echo("<br>");
if(!mysql_query($delete))
{
  echo("Errore: ".mysql_error());
  exit();
}
else
 echo ("Categoria cancellata correttamente.");
echo("<br>");
mysql_close($con);
?>
<br>
</BODY>
</HTML>
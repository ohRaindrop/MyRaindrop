<HTML>
<HEAD>
<TITLE>Modifica Categoria</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<BR><FONT SIZE=3 COLOR=purple>
<?php
include  "database.inc";
echo("<br>");
$select= "SELECT * FROM Categoria WHERE id_cat='$_POST[id_cat]';";
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
   echo("Categoria non presente nel database.");
   exit();
 }
echo("<form action=mod2_cat.php method=post>");
echo("Id Categoria= <input type=text name=id_cat value=$riga[id_cat]><br>");
echo("Nome= <input type=text name=nominata value=$riga[nominata]><br>");
echo("<br><input type=submit value=Conferma><br>");

mysql_free_result($ris);
mysql_close($con);

?>
<br>

</BODY>
</HTML>
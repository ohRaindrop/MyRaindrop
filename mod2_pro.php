<HTML>
<HEAD>
<TITLE>Modifica prodotto</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<BR><FONT SIZE=3 COLOR=purple>

<?php
include   "database.inc";

$update="UPDATE Prodotti SET nome='$_POST[nome]',  prezzo='$_POST[prezzo]', quantita='$_POST[quantita]',descrizione='$_POST[descrizione]', id_f='$_POST[id_f]', id_cat='$_POST[id_cat]' WHERE id_p='$_POST[id_p]';";
$ris=mysql_query($update);
if(!$ris)
{
  echo("<br>");
  echo("Errore nel comando UPDATE: " .mysql_error());
  exit();
}
echo("<br>");
echo("Modifica del prodotto effettuata correttamente");
mysql_close($con);

?>
<br>
</BODY>
</HTML>
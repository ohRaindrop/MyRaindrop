<HTML>
<HEAD>
<TITLE>Modifica prodotto</TITLE>
</HEAD>

<BODY>
<FONT SIZE=3 COLOR=purple>

<?php
include  "database.inc";
echo("<br>");
$select= "SELECT * FROM Prodotti WHERE id_p='$_POST[id_p]';";
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
   echo("Prodotto non presente nel database.");
   exit();
 }

echo("<form action=mod2_pro.php method=post>");
echo("Id Prodotto= <input type=text name=id_p value=$riga[id_p]><br>");
echo("Nome= <input type=text name=nome value=$riga[nome]><br>");
echo("Prezzo= <input type=text name=prezzo value=$riga[prezzo]><br>");
echo("Quantità= <input type=text name=quantita value=$riga[quantita]><br>");
echo("Descrizione= <input type=text name=descrizione value=$riga[descrizione]><br>");
echo("Id Fornitore= <input type=text name=id_f value=$riga[id_f]><br>");
echo("Id Categoria= <input type=text name=id_cat value=$riga[id_cat]><br>");
echo("<br><input type=submit value=Conferma><br>");

mysql_free_result($ris);
mysql_close($con);

?>
<br>

</BODY>
</HTML>
<HTML>
<HEAD>
<TITLE>Creazione tabella Categoria</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<BR>
<FONT SIZE=3 COLOR=purple>

<?php
include "database.inc";


$create = "CREATE TABLE Categoria
          (
          id_cat INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
          nominata VARCHAR(20)
          )";

if (!mysql_query($create))
    echo ("<BR><BR>Errore nella creazione della tabella: ". mysql_error());
else
    echo ("<BR><BR>Tabella creata correttamente");

mysql_close($con);
?>
</BODY>
</HTML>
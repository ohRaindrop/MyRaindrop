<HTML>
<HEAD>
<TITLE>Creazione Tabella Cliente</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<BR><FONT SIZE=3 COLOR=purple>
<?php
include "database.inc";


$create = "CREATE TABLE Cliente
          (
          id_c INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
          nome VARCHAR(20),
          cognome    VARCHAR(20),
          via VARCHAR(50),
          civico VARCHAR(5),
          citta VARCHAR(20),
          stato VARCHAR(20),
          telefono VARCHAR(10),
          mail VARCHAR(20),
          password VARCHAR(50)
          )";

if (!mysql_query($create))
    echo ("<BR><BR>Errore nella creazione della tabella: ". mysql_error());
else
    echo ("<BR><BR>Tabella creata correttamente.");

mysql_close($con);
?>
</BODY>
</HTML>
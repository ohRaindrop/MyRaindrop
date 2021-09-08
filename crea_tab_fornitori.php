<HTML>
<HEAD>
<TITLE>Creazioene Tabella Fornitori</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<BR><FONT SIZE=3 COLOR=purple>

<?php
include "database.inc";


$create = "CREATE TABLE Fornitore
          (
          id_f INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
          denominazione VARCHAR(255),
          titolare    VARCHAR(20),
          via VARCHAR(50),
          civico VARCHAR(5),
          citta VARCHAR(20),
          stato VARCHAR(20),
          telefono VARCHAR(10),
          p_iva VARCHAR(11)
          )";

if (!mysql_query($create))
    echo ("<BR><BR>Errore nella creazione della tabella: ". mysql_error());
else
    echo ("<BR><BR>Tabella creata correttamente");
mysql_close($con);
?>
</BODY>
</HTML>
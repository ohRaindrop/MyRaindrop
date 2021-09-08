<HTML>
<HEAD>
<TITLE>Indice funzionalità</TITLE>
</HEAD>

<BODY BACKGROUND="verde.png">

<BR><FONT SIZE=3 COLOR=purple>

<?php
include "database.inc";

$create = "CREATE TABLE Prodotti
          (
          id_p INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
          foto 	VARCHAR(255),
          nome VARCHAR(20),
          prezzo DOUBLE,
          quantita INT(3),
          descrizione 	VARCHAR(255),
          id_f INT NOT NULL,
          id_cat INT NOT NULL,
          foreign key (id_f) references Fornitore(id_f),
          foreign key (id_cat) references Categoria(id_cat),
          check (prezzo>0),
          check (quantita>0)
          );";

if (!mysql_query($create))
    echo ("<BR><BR>Errore nella creazione della tabella: ". mysql_error());
else
    echo ("<BR><BR>Tabella creata correttamente");
mysql_close($con);
?>
</BODY>
</HTML>
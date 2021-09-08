<html>
<BODY BACKGROUND="verde.png">
<FONT SIZE=3 COLOR=purple>

<?php
include "database.inc";

echo("<FONT COLOR='purple'");


$create= "CREATE TABLE ordina
         (
         id_ordine int not null primary key,
         id_c int not null,
         id_p int not null,
         data date,
         foreign key (id_p) references prodotti(id_p),
         foreign key (id_c) references cliente(id_c)
         );";

$query=mysql_query($create);

if(!$query)
  echo("Errore nella creazione: " .mysql_error() );
else
  echo("Tabella creata correttamente.");

mysql_close($con);

?>
</body>
</html>
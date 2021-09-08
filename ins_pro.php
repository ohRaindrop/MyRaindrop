<HTML>
<HEAD>
<TITLE>Inserimento prodotto</TITLE>
</HEAD>

<BODY>
<FONT SIZE=3 COLOR=purple>

<?php
include   "database.inc";

if(!mysql_select_db($database,$con))
   echo("Impossibile connettersi al database: ". mysql_error());


if (isset($_POST['action']) and $_POST['action'] == 'upload')
{
  if (isset($_FILES['nome_file']))
     {
      $file=$_FILES['nome_file'];    // Definisce un nuovo array che preleva i dati da $_FILES
      if($file['error'] == UPLOAD_ERR_OK and is_uploaded_file($file['tmp_name']))
      {
        move_uploaded_file($file['tmp_name'], "./foto/".$file['name']);
        echo("Il file è stato caricato correttamente. <br>");
      }
     }
}
// Serve per caricare il file

$insert= "INSERT INTO Prodotti (foto, nome, prezzo, quantita, descrizione, id_f, id_cat) VALUES ('foto/$file[name]','$_POST[nome]','$_POST[prezzo]','$_POST[quantita]','$_POST[descrizione]','$_POST[id_f]','$_POST[id_cat]');";
echo("<br>");
if(!mysql_query($insert))
{
  echo("Errore: ".mysql_error());
  exit();
}
else
 echo ("Inserimento avvenuto correttamente.");
echo("<br>");

mysql_close($con);
?>
</BODY>
</HTML>
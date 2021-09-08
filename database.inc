<HTML>
<HEAD></HEAD>
<BODY>
<?php
$host="localhost";
$user="root"; 
$password="studente";        
$database="green";

$con=mysql_connect($host,$user,$password);
If(!$con)
{
  echo("Impossibile connettersi al server.");
  exit();
}

If(!mysql_select_db($database,$con))
  echo("Impossibile selezionare il database: " .mysql_error() ."<br><br>");
?>
</BODY>
</HTML>
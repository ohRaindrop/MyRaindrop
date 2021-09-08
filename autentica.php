<html>
<head>
<title>Gestione database</title>
<style>
div.transbox {
             margin: 150px 450px 50px 450px;
             background-color: #ffe6ff;
             border: 1px solid black;
             opacity: 0.75;
             filter: alpha(opacity=75);
}

div.transbox p {
    margin: 5%;
    font-weight: bold;
    color: #ff66ff;
}
</style>

</head>


<BODY BACKGROUND="fiori.jpg">

<div class="transbox">
<center>
<?php
if($_POST["pwd"] == "megumi")
   {
     echo("<br><br>La password è corretta<br>");
     echo("<br><br><a href='http://localhost/PROGETTO_ECOLOGIA - NUOVO LAYOUT/Amministratore/index_2.htm'> Accedi all'area amministrativa </a>");
     echo("<br><br>");
   }
else
   {
     echo("<br><br>La password è errata.");
       echo("<br><br>");
     echo("<br><a href='http://localhost/PROGETTO_ECOLOGIA - NUOVO LAYOUT/amministratore/index.htm'> Riprova </a>");
   }
?>
</center>
</div>

<BODY>
</html>
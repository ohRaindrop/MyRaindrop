<html>
<head>
<style>
       .tot {
             height:100%;
             width:100%;
            }

        .intestazione {
                       height:15%;
                       width:80%;
                       position:absolute;
                       left:15%;
                       background-image:url("fiori.jpg");
                      }
        .logo {
               height:100%;
               width:25%;
               left:35%;
               position:absolute;
               background-image:url("lightbrown.jpg");
              }

        .barra {
                height:8%;
                width:80%;
                position:absolute;
                left:15%;
                background-image:url("brown.jpg");
               }

        .space {
                height:20%;
                width:80%;
                background-image:url("panna.png");
               }

        .centro {
                 width:80%;
                 text-align:center;
                 position:absolute;
                 z-index: -1;
                 left:15%;
                 background-image:url("lightbrown.jpg");
                }



ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-image:url("brown.jpg");
}

li {
    float: left;
    height:100%;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 10px 16px;
    text-decoration: none;
    font-size: 18;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #734d26;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-image:url("brown.jpg");
    min-width: 150px;
}

.dropdown-content a {
    color: white;
    text-decoration: none;
    display: block;
    text-align: center;
}

.dropdown-content a:hover {
    background-color: #734d26;
}

.dropdown:hover .dropdown-content {
    display: block;
}

a:link {
    text-decoration: none;
    }

</style>
</head>
<body background="panna.png">
<div class="tot">

<div class="intestazione">

<div class="logo">
</div>

<A HREF="http://localhost/PROGETTO_ECOLOGIA%20-%20NUOVO%20LAYOUT/amministratore/" TARGET="_blank">
<img src="fiori.jpg" position="fixed" left="0px" top="0px" width="10px" height="10px" z-index="-1">
</a>

</div>

<div class="space">
</div>

<div class="barra">
<ul>
  <li><a class="active" href="index.htm">Home</a></li>
<li class="dropdown">
  <a class="dropbtn" href="prodotti.htm">Prodotti</a>
  <div class="dropdown-content">
    <a href="animali.php">Animali</a>
    <a href="argille_saponi.php">Argille e Saponi</a>
    <a href="burri_oli.php">Burri e Oli</a>
    <a href="erbe.php">Erbe ed Henna</a>
    <a href="capelli.php">Shampoo e Balsami</a>
    <a href="creme_gel.php">Creme e Gel</a>
    <a href="m_prime.php">Materie prime</a>
    <a href="makeup.php">Make up</a>
    <a href="accessori.php">Accessori</a>
    <a href="diffusori_oe.php">Diffusori e oli essenziali</a>
    <a href="tinte.php">Tinte</a>
  </div>
</li>
<li class="dropdown">
  <a class="dropbtn" href="fornitori.php">Marche</a>
  <div class="dropdown-content">
    <a href="pierpaoli.php">Pierpaoli</a>
    <a href="janas.php">Erbe di Janas</a>
    <a href="arianna.php">Giardino di Arianna</a>
    <a href="cuccioli.php">Cuccioli di uomo</a>
    <a href="eccoverde.php">Eccoverde</a>
    <a href="aurea.php">Sezione Aurea</a>
    <a href="spices.php">Spices of India</a>
  </div>
</li>
<li class="dropdown">
  <a class="dropbtn" href="login.htm">Acquisti</a>
  <div class="dropdown-content">
    <a href="login.htm">Log in</a>
    <a href="registrati.htm">Registrati</a>
  </div>
</li>
<li class="dropdown">
  <a class="dropbtn" href="contatti.htm">Contatti</a>
  <div class="dropdown-content">
    <a href="chi_siamo.htm">Chi siamo</a>
    <a href="dove.htm">Dove siamo</a>
    <a href="mission.htm">Mission aziendale</a>
  </div>
</li>
</ul>
</div>


<div class="space">
  </div>


<div class="centro">
<?php
include   "database.inc";

$select= "SELECT foto,nome,prezzo,descrizione FROM Prodotti;";
$ris=mysql_query($select);

if(!$ris)
{
  echo("<br>Errore: ".mysql_error());
  exit();
}

$riga=mysql_fetch_array($ris);

if(!$riga)
{
  echo("Nessun prodotto trovato. <br><br> Errore: ".mysql_error());
  exit();
}

echo("<center><h1><b>Lista di tutti i prodotti:</b></h1></center>");
while($riga)
{
  echo("<img src='$riga[foto]' width=200px height=200px>");
  echo("  $riga[nome] ");
  echo(" al prezzo di: $riga[prezzo] € <br>");
  echo("  $riga[descrizione] ");
  echo("<br>");
  $riga=mysql_fetch_array($ris, MYSQL_ASSOC);
}

mysql_free_result($ris);
mysql_close($con);
?>


</div>

</div>

</body>
</html>
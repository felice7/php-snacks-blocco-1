<!-- Passare come parametri GET “name”, “mail” e “age” e verificare (cercando i
metodi che non conosciamo nella documentazione) che:
● “name” sia più lungo di 3 caratteri;
● “mail” contenga un punto e una chiocciola;
● “age” sia un numero.
Se tutto è ok, stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

$lunghezza_nome = strlen($name);
$controllo_punto = strpos($mail, '.');
$controllo_chiocciola = strpos($mail, '@');
$controllo_eta = is_numeric($age);

  if($lunghezza_nome > 3 && $controllo_punto !==false && $controllo_chiocciola !==false && $controllo_eta > 1) {

    echo "Accesso riuscito";
  }else {
    echo "Accesso negato";
  };


 ?>

<!-- Creare una funzione che restituisce un array con 15 numeri casuali, tenendo
conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php

  $numeri = numeri_random(1, 100, 15);

  foreach ($numeri as $value) {
    echo $value . '';
  };

  function numeri_random($min, $max, $num) {

    $numeri_contenitore = [];

    while (count($numeri_contenitore) < $num) {
      $numero = rand($min, $max);

      if (!in_array($numero, $numeri_contenitore)){

        $numeri_contenitore[] = $numero;
      }

    }
      return $numeri_contenitore;
  }

 ?>
